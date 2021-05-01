@extends('adminPage.index')
@section('scriptHeader')
    <link rel="stylesheet" href="admin/css/feather.css">
    <link rel="stylesheet" href="admin/css/dataTables.bootstrap4.css">
@endsection
@section('title', 'List Order')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- Striped rows -->
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">Detail Transaction</h2>
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr role="row group" class="bg-light">
                                                <th colspan="2">Transaction</th>
                                                <th colspan="6">Order</th>
                                                <th colspan="1">Action</th>
                                            </tr>
                                            <tr role="row">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Name Product</th>
                                                <th>Quantity</th>
                                                <th>Sale</th>
                                                <th>Color</th>
                                                <th>Memory</th>
                                                <th>Price</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>4574</td>
                                                <td>LongVT8</td>
                                                <td>Iphone X</td>
                                                <td>1 cái</td>
                                                <td> 0 %</td>
                                                <td>
                                                    <span class="badge badge-warning">Gold</span>
                                                    <span class="badge badge-primary">Blue</span>
                                                    <span class="badge badge-dark">Dark</span>
                                                    <span class="badge badge-secondary">White</span>
                                                    <span class="badge badge-light">Violet</span>
                                                    <span class="badge badge-danger">Red</span>
                                                    <span class="badge badge-success">Green</span>
                                                </td>
                                                <td>256GB</td>
                                                <td>14,033,556</td>
                                                <td>
                                                    <button class="btn mb-1 btn-info fe fe-eye"></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <nav aria-label="Table Paging" class="mb-0 text-muted">
                                        <ul class="pagination justify-content-end mb-0">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
@endsection
@section('script')
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/moment.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/simplebar.min.js"></script>
    <script src='admin/js/daterangepicker.js'></script>
    <script src='admin/js/jquery.stickOnScroll.js'></script>
    <script src="admin/js/tinycolor-min.js"></script>
    <script src="admin/js/config.js"></script>
    <script src='admin/js/jquery.dataTables.min.js'></script>
    <script src='admin/js/dataTables.bootstrap4.min.js'></script>
    <script>
        $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });

    </script>
    <script src="admin/js/apps.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');

    </script>
@endsection
