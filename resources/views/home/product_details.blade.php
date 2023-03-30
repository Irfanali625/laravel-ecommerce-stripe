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
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="">
    <title>Famms - Fashion</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        <div class="container d-flex justify-content-center" style="margin-top: 50px">
            <div class="col-lg-8 border p-3 main-section bg-white">
                <div class="row m-0">
                    <div class="col-lg-4 left-side-product-box pb-3">
                        <img src="{{ asset('images/products') }}/{{ $product->image }}" width="220px" height="250px"
                            class="border p-3">
                    </div>
                    <div class="col-lg-8">
                        <div class="right-side-pro-detail border p-3 m-0">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <strong style="font-size: x-large">
                                        {{ $product->title }}
                                    </strong>
                                </div>
                                @if ($product->discount_price != null)
                                    <h6 style="color: red; margin-left:10px">
                                        Discount
                                        <br>
                                        ${{ $product->discount_price }}
                                    </h6>
                                    <h6 style="text-decoration: line-through; color:blue; margin-left:10px">
                                        Price
                                        <br>
                                        ${{ $product->price }}
                                    </h6>
                                @else
                                    <h6 style="color: blue; margin-left:10px">
                                        Price
                                        <br>
                                        ${{ $product->price }}
                                    </h6>
                                @endif
                                <div class="col-lg-12 pt-2">
                                    <strong>Product Category:</strong><span>{{ $product->category }}</span><br>
                                    <strong>Product Detail: </strong><span>{{ $product->description }}</span><br>
                                    <strong>Product Quantity: </strong><span>{{ $product->quantity }}</span>
                                    <hr class="m-0 pt-2 mt-2">
                                </div>
                                <div class="col-lg-12 mt-3 d-flex justify-content-center">
                                    <form action="{{ url('add_cart', $product->id) }}" method="post">
                                        @csrf
                                        <div class="d-flex">
                                            <div>
                                                <input type="number" name="quantity" id="quantity" min="1"
                                                    style="width: 100px; height: 50px;" required>
                                            </div>
                                            <div>
                                                <input type="submit" name="" id="" value="Add to Cart"
                                                    class="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer start -->
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
