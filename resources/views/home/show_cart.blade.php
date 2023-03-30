<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px
        }

        body {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            font-weight: 400;
            background: #E0E0E0;
            color: #000000
        }

        ul {
            list-style: none;
            margin-bottom: 0px
        }

        .button {
            display: inline-block;
            background: #0e8ce4;
            border-radius: 5px;
            height: 48px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        .button a {
            display: block;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: #FFFFFF;
            padding-left: 35px;
            padding-right: 35px
        }

        .button:hover {
            opacity: 0.8
        }

        .cart_section {
            width: 100%;
            padding-top: 93px;
            padding-bottom: 111px
        }

        .cart_title {
            font-size: 30px;
            font-weight: 500
        }

        .cart_items {
            margin-top: 8px
        }

        .cart_list {
            border: solid 1px #e8e8e8;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff
        }

        .cart_item {
            width: 100%;
            padding: 15px;
            padding-right: 46px
        }

        .cart_item_image {
            width: 133px;
            height: 133px;
            float: left
        }

        .cart_item_image img {
            max-width: 100%;
            height: 100%;

        }

        .cart_item_info {
            width: calc(100% - 133px);
            float: left;
            padding-top: 18px
        }

        .cart_item_name {
            margin-left: 7.53%
        }

        .cart_item_title {
            font-size: 14px;
            font-weight: 400;
            color: rgba(0, 0, 0, 0.5)
        }

        .cart_item_text {
            font-size: 18px;
            margin-top: 35px
        }

        .cart_item_text span {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 11px;
            -webkit-transform: translateY(4px);
            -moz-transform: translateY(4px);
            -ms-transform: translateY(4px);
            -o-transform: translateY(4px);
            transform: translateY(4px)
        }

        .cart_item_price {
            text-align: right
        }

        .cart_item_total {
            text-align: right
        }

        .order_total {
            width: 100%;
            height: 60px;
            margin-top: 30px;
            border: solid 1px #e8e8e8;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            padding-right: 46px;
            padding-left: 15px;
            background-color: #fff
        }

        .order_total_title {
            display: inline-block;
            font-size: 14px;
            color: rgba(0, 0, 0, 0.5);
            line-height: 60px
        }

        .order_total_amount {
            display: inline-block;
            font-size: 18px;
            font-weight: 500;
            margin-left: 26px;
            line-height: 60px
        }

        .cart_buttons {
            margin-top: 60px;
            text-align: right
        }

        .cart_button_clear {
            display: inline-block;
            border: none;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: white;
            background-color: #0e8ce4 !important;
            border: solid 1px #b2b2b2;
            padding-left: 35px;
            padding-right: 35px;
            outline: none;
            cursor: pointer;
            margin-right: 26px
        }

        .cart_button_clear:hover {
            border-color: #0e8ce4;
            background-color: white;
        }

        .cart_button_checkout {
            display: inline-block;
            border: none;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: #FFFFFF;
            background-color: red !important;
            padding-left: 35px;
            padding-right: 35px;
            outline: none;
            cursor: pointer;
            vertical-align: top
        }
    </style>
</head>

<body>
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <div class="hero_area">
        <div class="cart_section">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="cart_container">
                            <div class="cart_title">Shopping Cart<small> ({{ $cart->count() }} item in your cart)
                                </small></div>
                            <div class="cart_items">
                                <?php $totalprice = 0; ?>
                                @foreach ($cart as $item)
                                    <ul class="cart_list">
                                        <li class="cart_item clearfix">
                                            <div class="cart_item_image"><img
                                                    src="{{ asset('images/products') }}/{{ $item->image }}"
                                                    alt=""></div>
                                            <div
                                                class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                <div class="cart_item_name cart_info_col w-7">
                                                    <div class="cart_item_title">Name</div>
                                                    <div class="cart_item_text">{{ $item->product_title }}</div>
                                                </div>
                                                <div class="cart_item_color cart_info_col">
                                                    <div class="cart_item_title">Quantity</div>
                                                    <div class="cart_item_text">{{ $item->quantity }}</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col">
                                                    <div class="cart_item_title">Price</div>
                                                    <div class="cart_item_text">${{ $item->price }}</div>
                                                </div>
                                                <div class="cart_item_total cart_info_col">
                                                    <div class="cart_item_title">Action</div>
                                                    <div class="cart_item_text"><a
                                                            href="{{ url('remove_cart', $item->id) }}"
                                                            onclick="return confirm('Are You Want to Delete From Cart')"
                                                            class="btn btn-danger">Remove</a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <?php $totalprice = $totalprice + $item->price; ?>
                                @endforeach
                                <div class="order_total">
                                    <div class="order_total_content text-md-right">
                                        <div class="order_total_title">Order Total:</div>
                                        <div class="order_total_amount">${{ $totalprice }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart_buttons"> <a href="{{ url('cash_order') }}" type="button"
                                    class="button cart_button_clear">Cash On
                                    Delivery</a> <a href="{{ url('stripe', $totalprice) }}" type="button"
                                    class="button cart_button_checkout">Pay
                                    Using Card</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>
