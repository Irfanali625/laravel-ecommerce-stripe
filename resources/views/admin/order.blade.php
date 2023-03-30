<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
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
                                        <h4 class="card-title">Orders</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <td>Address</td>
                                                    <th>Phone</th>
                                                    <th>Product Title</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Payment Status</th>
                                                    <th>Delivery Status</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                    <th>Print PDF</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $key => $order)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ $order->name }}</td>
                                                        <td>{{ $order->email }}</td>
                                                        <td>{{ $order->address }}</td>
                                                        <td>{{ $order->phone }}</td>
                                                        <td>{{ $order->product_title }}</td>
                                                        <td>{{ $order->quantity }}</td>
                                                        <td>{{ $order->price }}</td>
                                                        <td>{{ $order->payment_status }}</td>
                                                        <td>{{ $order->delivery_status }}</td>
                                                        <td><img width="250px" height="250px"
                                                                src="images/products/{{ $order->image }}">
                                                        </td>
                                                        <td>
                                                            @if ($order->delivery_status !== 'Delivered')
                                                                <a class="btn btn-primary"
                                                                    onclick="return confirm('Are you want to deliver this order')"
                                                                    href="{{ url('deliver', $order->id) }}">Deliver</a>
                                                            @else
                                                                <div style="color: green">
                                                                    Delivered
                                                                </div>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('print_pdf', $order->id) }}"
                                                                class="btn btn-secondary">Print PDF</a>
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
