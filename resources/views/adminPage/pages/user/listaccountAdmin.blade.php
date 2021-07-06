@extends('adminPage.index')
@section('scriptHeader')
    <link rel="stylesheet" href="admin/css/feather.css">
    <link rel="stylesheet" href="admin/css/dataTables.bootstrap4.css">
@endsection
@section('title', 'List Account')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    @if (!empty($listaccountAdmin) && isset($listaccountAdmin))
                        <h2 class="mb-2 page-title">Data table List Account</h2>
                    @endif
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                            @endif
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($listaccountAdmin) && isset($listaccountAdmin))
                                                @foreach ($listaccountAdmin as $item)
                                                    <tr>
                                                        <td>{{ $item->id_user ?? '' }}</td>
                                                        <td>{{ $item->name ?? '' }}</td>
                                                        </td>
                                                        <td>{{ $item->email ?? '' }}</td>
                                                        <td>
                                                            <form action="{{route('updatePermission')}}" method="post">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="id_user" value="{{$item->id_user ?? ''}}">
                                                                <div class="form-group" >
                                                                    <select class="custom-select" id="custom-select" name="role_id">
                                                                        @foreach ($role as $itemRole)
                                                                            <option  value="{{ $itemRole->id_role ?? '' }}"  @if ($item->role_id == $itemRole->id_role) selected  @endif>
                                                                                {{ $itemRole->name_role ?? '' }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <input type="submit" value="Change" class="btn btn-primary float-right">
                                                            </form>
                                                        </td>
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
@endsection
