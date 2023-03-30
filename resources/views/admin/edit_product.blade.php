<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products</title>
    {{-- <base href="/public"> --}}
    <!-- plugins:css -->
    @include('admin.css')

    <style>
        .form_edit {
            padding: 50px;
        }

        .form-input {
            width: 100%;
            color: black;
        }

        h1 {
            text-align: center;
            font-size: x-large !important;
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
                                    <h1 style="">Add Product</h1>
                                    <form action="{{ url('/update_product', $product->id) }}" method="POST"
                                        enctype="multipart/form-data" class="form_edit">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Product Title: </label>
                                            <input type="text" class="form-input" id="title" name="title"
                                                value="{{ $product->title }}" aria-describedby="titleHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="desc" class="form-label">Product Description: </label>
                                            <input type="text" class="form-input" id="description" name="description"
                                                value="{{ $product->description }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Product Price: </label>
                                            <input type="number" class="form-input" id="price" name="price"
                                                value="{{ $product->price }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="discprice" class="form-label">Discount Price: </label>
                                            <input type="number" class="form-input" id="discount_price"
                                                name="discount_price" value="{{ $product->discount_price }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Product Quantity: </label>
                                            <input type="number" class="form-input" id="quantity" name="quantity"
                                                value="{{ $product->quantity }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="discprice" class="form-label">Select Category: </label>
                                            <select name="category" id="category" style="color:black" required>
                                                <option value="">Selec Category</option>
                                                <option value="{{ $product->category }} " selected>
                                                    {{ $product->category }}</option>
                                                @foreach ($category as $data)
                                                    <option value="{{ $data->category_name }}">
                                                        {{ $data->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label>Current Product Image: </label>
                                            <img src="{{ asset('images/products') }}/{{ $product->image }}"
                                                height="200px" width="200px" alt="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file" class="form-label">Choose Product: </label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Product</button>
                                    </form>

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
