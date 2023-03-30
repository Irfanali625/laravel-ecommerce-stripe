<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        // dd($request->all());
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        return redirect()->back()->with('message', 'Category Added Successful');
    }

    public function category_delete($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successful');
    }

    public function view_product()
    {
        $category = Category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        // dd($request->all());
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;

        if (!empty($request->image)) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/products'), $filename);
            $product['image'] = $filename;
        }

        $product->save();

        return redirect()->back()->with('message', 'Product Successfully Added');
    }

    public function show_product()
    {
        $products = Product::all();
        return view('admin.show_product', compact('products'));
    }

    // Edit Product
    public function edit_product($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.edit_product', compact('product', 'category'));
    }


    public function update_product(Request $request, $id)
    {
        // dd('yes');
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;

        if (!empty($request->image)) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images/products'), $filename);
            $product['image'] = $filename;
        }

        $product->save();
        return redirect()->back()->with('message', 'Product Successfully Updated');
    }
    // Delete Product
    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Successfully Deleted');
    }

    public function product_details($id)
    {
        $product = Product::find($id);
        return view('home.product_details', compact('product'));
    }

    public function order()
    {
        $orders = Order::all();
        return view('admin.order', compact('orders'));
    }

    public function deliver($id)
    {
        $order = Order::find($id);
        $order->delivery_status = 'Delivered';
        $order->save();

        $mailData = [
            'title' => 'Mail From Famms',
            'body' => 'Your order for ( ' . $order->product_title . ' ) has been Delivered Successfully',
        ];

        Mail::to($order->email)->send(new SendMail($mailData));

        return redirect()->back();
    }

    public function print_pdf($id)
    {
        // dd('yes');
        $order = Order::find($id);
        $pdf = PDF::loadView('admin.pdf', compact('order'));
        return $pdf->download('order-details.pdf');
    }
}
