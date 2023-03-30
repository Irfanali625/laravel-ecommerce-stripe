<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products</title>
    <!-- plugins:css -->
    @include('admin.css')

    <style>
        .h2_front {
            text-align: center;
            font-size: x-large !important;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            color: white;
        }

        table,
        th,
        td {
            border: 2px solid green;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-between my-2">
                                        <h4 class="card-title">All Products</h4>
                                        <a href="{{ url('view_product') }}" class="btn btn-primary mt-1">Add
                                            Product</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <td>Category</td>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Discount Price</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $key => $product)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ $product->title }}</td>
                                                        <td>{{ $product->description }}</td>
                                                        <td>{{ $product->category }}</td>
                                                        <td>{{ $product->quantity }}</td>
                                                        <td>{{ $product->price }}</td>
                                                        <td>{{ $product->discount_price }}</td>
                                                        <td><img width="250px" height="250px"
                                                                src="images/products/{{ $product->image }}"
                                                                alt=""></td>
                                                        <td>
                                                            <a class="btn btn-success"
                                                                href="{{ url('edit_product', $product->id) }}">Edit</a>
                                                            <a onclick="return confirm('Are you want to delete')"
                                                                class="btn btn-danger"
                                                                href="{{ url('delete_product', $product->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
</body>

</html>
