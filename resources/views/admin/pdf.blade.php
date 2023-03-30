<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order PDF</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">Order Details</h1>


        <div>
            Customer Name:
            <strong>{{ $order->name }}</strong><br><br>
        </div>
        <div> Customer Email:
            <strong>{{ $order->email }}</strong><br><br>
        </div>
        <div> Customer Address:
            <strong>{{ $order->address }}</strong><br><br>
        </div>
        <div> Customer Phone:
            <strong>{{ $order->phone }}</strong><br><br>
        </div>
        <div> Customer ID:
            <strong>{{ $order->user_id }}</strong><br><br>
        </div>

        <div> Product Name:
            <strong>{{ $order->product_title }}</strong><br><br>
        </div>
        <div> Product Price:
            <strong>{{ $order->price }}</strong><br><br>
        </div>
        <div> Product Quantity:
            <strong>{{ $order->quantity }}</strong><br><br>
        </div>
        <div> Product Payment Status:
            <strong>{{ $order->payment_status }}</strong><br><br>
        </div>
        <div> Product ID:
            <strong>{{ $order->product_id }}</strong><br><br>
        </div>

    </div>
    <div>
        <h2>Product Image</h2>
        <img width="250px" height="250px" src="images/products/{{ $order->image }}">
    </div>
</body>

</html>
