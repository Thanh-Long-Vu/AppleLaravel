@extends('adminPage.index')
@section('scriptHeader')
    <link rel="stylesheet" href="admin/css/feather.css">
    <link rel="stylesheet" href="admin/css/dataTables.bootstrap4.css">
@endsection
@section('title', 'User List')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Data table User List</h2>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Total_pay</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($listUser))
                                                @foreach ($listUser as $item)
                                                <tr>
                                                    <td>{{$item->id_user}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->role->name_role}}
                                                    </td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->address}}</td>
                                                    <td>{{$item->total_pay}}</td>    
                                                </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div>
            </div> <!-- .row -->
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Data table Guest List</h2>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    @if (!empty($listGuest))
                                        <table class="table datatables" id="dataTable-1">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Total_pay</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($listGuest as $item)
                                                    <tr>
                                                        <td>{{$item->id_user}}</td>
                                                        <td>{{$item->name}}
                                                        </td>
                                                        <td>{{$item->email}}</td>
                                                        <td>{{$item->phone}}</td>
                                                        <td>{{$item->address}}</td>
                                                        <td>{{$item->total_pay}}</td>    
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        Not found data.....
                                    @endif
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div>
            </div> <!-- .row -->
        </div>
    </main>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');

    </script>
@endsection
