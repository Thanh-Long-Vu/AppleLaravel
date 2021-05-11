@extends('adminPage.index')
@section('scriptHeader')
    <link rel="stylesheet" href="admin/css/feather.css">
@endsection
@section('title', 'Detail Transaction')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row align-items-center mb-4">
                        <div class="col">
                            <h2 class="h5 page-title"><small class="text-muted text-uppercase">ID Transaction</small><br />#{{$transaction->id_transaction}}
                            </h2>
                        </div>
                        <div class="col-auto">
                            {{-- <button type="button" class="btn btn-secondary">Print</button> --}}
                            <button type="button" class="btn btn-primary">Processed</button>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <div class="row mb-5">
                                <div class="col-12 text-center mb-4">
                                    <img src="admin/assets/images/logo.svg" class="navbar-brand-img brand-sm mx-auto mb-4"
                                        alt="...">
                                    <h2 class="mb-0 text-uppercase">Invoice</h2>
                                    <p class="text-muted">{{$transaction->user->name}} <br /> Address {{$transaction->user->address}} </p>
                                </div>
                                <div class="col-md-7">
                                    <p class="small text-muted text-uppercase mb-2">Invoice from</p>
                                    <p class="mb-4">
                                        <strong>Name Sell</strong><br />  FPT Shop<br />
                                    </p>
                                    <p>
                                        <span class="small text-muted text-uppercase">Invoice #</span><br />
                                        <strong>{{$transaction->id_transaction}}</strong>
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <p class="small text-muted text-uppercase mb-2">Invoice to</p>
                                    <p class="mb-4">
                                        <strong>Name Receive</strong><br />{{$transaction->user->name}} <br /> <strong>Phone</strong>  {{$transaction->user->phone}}<br /> <strong>Address</strong> {{$transaction->user->address}} <br />
                                    </p>
                                    <p>
                                        <small class="small text-muted text-uppercase">Due date</small><br />
                                        <strong>{{$transaction->created_at}}</strong>
                                    </p>
                                </div>
                            </div> <!-- /.row -->
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Order ID</th>
                                        <th scope="col" class="text-right">Product</th>
                                        <th scope="col" class="text-right">Price VNĐ</th>
                                        <th scope="col" class="text-right">Quantity</th>
                                        <th scope="col" class="text-right">Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $item)
                                        <tr>
                                            <td class="text-center">{{$item->transaction_id}}</td>
                                            <td class="text-right">{{$item->product->productType->name}}</td>
                                            <td class="text-right">{{$item->price}}</td>
                                            <td class="text-right">{{$item->quantity}}</td>
                                            <td class="text-right">{{$item->sale}} %</td>
                                        <tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-2 text-center">
                                    <img src="./admin/assets/images/qrcode.svg" class="navbar-brand-img brand-sm mx-auto my-4"
                                        alt="...">
                                </div>
                                <div class="col-md-5">
                                    <p class="text-muted small">
                                        <strong>Note :</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                        hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar
                                        aliquam.
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-right mr-2">
                                        <p class="mb-2 h6">
                                            <span class="text-muted">Subtotal : </span>
                                            <strong>{{number_format($totalprice)}}.VNĐ</strong>
                                        </p>
                                        <p class="mb-2 h6">
                                            <span class="text-muted">Total Sale :</span>
                                            <strong>{{$sale}}%</strong>
                                        </p>
                                        <p class="mb-2 h6">
                                            <span class="text-muted">Total : </span>
                                            <span>{{number_format($transaction->total_price)}}.VNĐ</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-box fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Package has uploaded successfull</strong></small>
                                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-download fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Widgets are updated successfull</strong></small>
                                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-inbox fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Notifications have been sent</strong></small>
                                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-link fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Link was attached to menu</strong></small>
                                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
