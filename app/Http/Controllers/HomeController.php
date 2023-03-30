<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

use Session;
use stripe;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class HomeController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        return view('home.userPage', compact('products'));
    }

    public function redirect()
    {
        $usertype = Auth()->user()->user_type;
        // dd($usertype);
        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $products = Product::paginate(10);
            return view('home.userPage', compact('products'));
        }
    }

    public function product_details($id)
    {
        $product = Product::find($id);
        return view('home.product_details', compact('product'));
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            // dd($user);

            $product = Product::find($id);
            // dd($product);

            $cart = new Cart;
            $cart->user_id = $user->id;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;

            if ($product->discount_price != null) {
                $cart->price = $product->discount_price * $request->quantity;
            } else {
                $cart->price = $product->price * $request->quantity;
            }
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if (Auth::id()) {
            $id = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('home.show_cart', compact('cart'));
        } else {
            return redirect('login');
        }
    }

    public function remove_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back();
    }

    public function cash_order()
    {
        $user = Auth::user();
        $user_id = $user->id;
        // dd($user_id);

        $data = Cart::where('user_id', '=', $user_id)->get();
        // dd($data);

        foreach ($data as $data) {
            $order = new Order;

            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;

            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;

            $order->payment_status = 'Cash on Delivery';
            $order->delivery_status = 'Processing';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }

        $mailData = [
            'title' => 'Mail From Famms',
            'body' => 'Your order for ( ' . $order->product_title . ' ) has been Recieved Successfully, Please Wait for Confirmation',
        ];
        Mail::to($order->email)->send(new SendMail($mailData));

        return redirect()->back()->with('message', 'We have Recieved your order, and will be back to you soon');
    }

    public function my_order()
    {
        if (Auth::id()) {
            $id = auth()->user()->id;
            $order = Order::where('user_id', '=', $id)->get();
            return view('home.my_order', compact('order'));
        } else {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect()->back();
    }

    public function stripe($totalprice)
    {
        return view('home.stripe', compact('totalprice'));
    }

    public function stripePost(Request $request, $totalprice)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        \Stripe\Charge::create([
            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Pyment Success"
        ]);

        $user = Auth::user();
        $user_id = $user->id;
        // dd($user_id);

        $data = Cart::where('user_id', '=', $user_id)->get();
        // dd($data);

        foreach ($data as $data) {
            $order = new Order;

            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;

            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;

            $order->payment_status = 'Paid';
            $order->delivery_status = 'Processing';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
