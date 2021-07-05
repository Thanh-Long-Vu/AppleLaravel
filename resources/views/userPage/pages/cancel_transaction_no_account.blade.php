@extends('userPage.index')
@section('title')
    Cancel Transaction
@endsection
@section('script_header')
    <link rel="stylesheet" href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <script src="../admin/js/jquery-ajax.min.js"></script>
    <link rel="stylesheet" href="../admin/css/toastr.min.css">
    <script src="../admin/js/toastr.min.js"></script>
@endsection
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @else
                        <div class="alert alert-waring">
                            {{ Session::get('failed') }}
                            @php
                                Session::forget('failed');
                            @endphp
                        </div>
                        @endif
                    <div class="row align-items-center mb-4">
                        <div class="col">
                            <h1 class="h5 page-title text-center"><small class="text-center text-uppercase"><b>Cancel
                                        Invoice</b></small><br />#{{ $transaction->id_transaction }}
                            </h1>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="h5 page-title text-center"><small class="text-right text-uppercase"><b>Please check
                                        the information before canceling</b></small>
                            </h4>
                        </div>
                        <form method="post" action="{{ route('cancelTransactionDone') }}">
                            <div class="col-md-6 text-right">
                                {{ csrf_field() }}
                                <input type="hidden" name="token" value="{{ $token }}">
                                <input type="submit" class="btn btn-danger " value="Cancel Transaction"><br />
                            </div>
                        </form>
                    </div>
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <div class="row mb-5">
                                <div class="col-12 text-center mb-4">
                                    <h2 class="mb-0 text-uppercase">Invoice</h2>
                                </div>
                                <div class="col-md-7">
                                    <p class="small text-muted text-uppercase mb-2">Invoice from</p>
                                    <p class="mb-4">
                                        <strong>Apple FPT Shop</strong><br />
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <p class="small text-muted text-uppercase mb-2">Invoice to</p>
                                    <p class="mb-4">
                                        <strong><b>Name:</b> {{ $transaction->addtional_data[0]['value'] }}</strong><br />
                                        <br /> <b>Phone:</b> {{ $transaction->addtional_data[2]['value'] }}
                                        <br /> <b>Email :</b> {{ $transaction->addtional_data[1]['value'] }}<br />
                                        <b>Address: </b> {{ $transaction->addtional_data[3]['value'] }}
                                    </p>
                                    <p>
                                        <small class="small text-muted text-uppercase">Due date</small><br />
                                        <strong>{{ $transaction->created_at }}</strong>
                                    </p>
                                </div>
                            </div> <!-- /.row -->
                            <table class="table table-borderless table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="text-center">Image</th>
                                        <th scope="col" class="text-center">Color / Memory</th>
                                        <th scope="col" class="text-center">Product</th>
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-center">Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction->order as $order)
                                        <tr>
                                            <td class="text-center w-40"><img class="w-25"
                                                    src="../{{ $order->product->thumbnail }}" alt=""></td>
                                            <td class="text-right"> <b>
                                                    {{ $order->color }}
                                                </b> - <b>
                                                    @if ($order->product->warehouse->memory == 0)
                                                        16GB
                                                    @elseif($order->product->warehouse->memory
                                                        == 1)
                                                        32GB
                                                    @elseif($order->product->warehouse->memory
                                                        == 2)
                                                        64GB
                                                    @elseif($order->product->warehouse->memory
                                                        == 3)
                                                        128GB
                                                    @elseif($order->product->warehouse->memory
                                                        == 4)
                                                        256GB
                                                    @elseif($order->product->warehouse->memory
                                                        == 5)
                                                        512Gb
                                                    @endif
                                                </b>
                                            </td>
                                            @if ($order->product)
                                                <td class="text-center"><a
                                                        href="{{ route('products.show', ['product' => $order->product->id_product]) }}}}">{{ $order->product->productType->name }}</a>
                                                </td>
                                            @endif
                                            <td class="text-right">
                                                ${{ number_format($order->price) }}</td>
                                            <td class="text-right">{{ $order->quantity }}</td>
                                            <td class="text-right">{{ $order->sale }} %</td>
                                        <tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <p class="small">
                                        <strong>Note :</strong>{{ $order->transaction->note }}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-right mr-2">
                                        <p class="mb-2 h6">
                                            <span class="text-muted">Total Price: </span>
                                            <span>${{ number_format($order->transaction->total_price) }}</span>
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
@section('script_footer')
    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/jquery.countdown.min.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
    <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- JS Electro -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.countdown.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/components/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.unfold.js"></script>
    <script src="assets/js/components/hs.focus-state.js"></script>
    <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="assets/js/components/hs.validation.js"></script>
    <script src="assets/js/components/hs.fancybox.js"></script>
    <script src="assets/js/components/hs.onscroll-animation.js"></script>
    <script src="assets/js/components/hs.slick-carousel.js"></script>
    <script src="assets/js/components/hs.quantity-counter.js"></script>
    <script src="assets/js/components/hs.range-slider.js"></script>
    <script src="assets/js/components/hs.show-animation.js"></script>
    <script src="assets/js/components/hs.svg-injector.js"></script>
    <script src="assets/js/components/hs.scroll-nav.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.selectpicker.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                direction: 'horizontal',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });
        });
        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));
            // initialization of animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });
            // initialization of HSScrollNav component
            $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                duration: 700
            });
            // initialization of quantity counter
            $.HSCore.components.HSQantityCounter.init('.js-quantity');
            // initialization of popups
            $.HSCore.components.HSFancyBox.init('.js-fancybox');
            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                monthsElSelector: '.js-cd-months',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });
            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));
            // initialization of forms
            $.HSCore.components.HSFocusState.init();
            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });
            // initialization of forms
            $.HSCore.components.HSRangeSlider.init('.js-range-slider');
            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');
            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');
            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');
            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
            // initialization of hamburgers
            $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');
            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                beforeClose: function() {
                    $('#hamburgerTrigger').removeClass('is-active');
                },
                afterClose: function() {
                    $('#headerSidebarList .collapse.show').collapse('hide');
                }
            });
            $('#headerSidebarList [data-toggle="collapse"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                if ($(this).attr('aria-expanded') === "true") {
                    $(target).collapse('hide');
                } else {
                    $(target).collapse('show');
                }
            });
            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));
            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });
    </script>
@endsection
