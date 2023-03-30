<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    @include('admin.css')

    <style>
        .div_center {
            text-align: center;
            padding-top: 30px;
        }

        .h2_front {
            font-size: 30px;
            padding-bottom: 30px;
        }

        .input_color {
            color: black;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            color: white;
        }

        table,
        td {
            border: 2px solid green;
            s border-collapse: collapse;
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
                                <div class="div_center">
                                    <h2 class="h2_front">Add category</h2>

                                    <form action="{{ url('/add_category') }}" method="POST">
                                        @csrf
                                        <input type="text" class="input_color" name="category" id="category_name"
                                            placeholder="Choose category">
                                        <input type="submit" class="btn btn-primary py-2" value="Add category">
                                    </form>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Catagory Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $item->category_name }}</td>
                                                        <td><a onclick="return confirm('Are you want to delete')"
                                                                class="btn btn-danger"
                                                                href="{{ url('category_delete', $item->id) }}">Delete</a>
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
