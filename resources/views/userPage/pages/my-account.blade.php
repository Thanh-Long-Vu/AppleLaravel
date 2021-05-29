@extends('userPage.index')
@section('title')
    My Account
@endsection
@section('script_header')
    <link rel="stylesheet" href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    <main id="content" role="main" class="checkout-page">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">My
                                Account</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="container-fluid mb-10">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    @if (Session::has('failed'))
                        <div class="alert alert-danger">
                            {{ Session::get('failed') }}
                            @php
                                Session::forget('failed');
                            @endphp
                        </div>
                    @endif
                    <h2 class="h3 mb-4 page-title text-center">My
                        Account</h2>
                    <div class="my-4">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="myAccount-tab" data-toggle="tab" href="#myAccount" role="tab"
                                    aria-controls="myAccount" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="transaction-tab" data-toggle="tab" href="#transaction" role="tab"
                                    aria-controls="transaction" aria-selected="false">Transaction</a>
                            </li>
                        </ul>
                    </div> <!-- /.card-body -->
                    <div class="my-4 tab-content" id="pills-tabContent">
                        <div class="tab-pane fade pt-2 show active" id="myAccount" role="tabpanel"
                            aria-labelledby="myAccount-tab" data-target-group="groups">
                            @if (!empty($user))
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('updateMyAccount', ['id' => $user->id_user]) }}">
                                    {{ csrf_field() }}
                                    <div class="row mt-5 align-items-center">
                                        <div class="col-md-3 text-center mb-5">
                                            <div class="avatar avatar-xl">
                                                <img src="../{{ $user->avatar }}" class="w-60" style="border-radius: 50%;
                                            border: 1px solid #fed700;" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <h4 class="mb-1">Name : {{ $user->name }}</h4>
                                                    <p class="mb-3">
                                                        @if ($user->role_id == 1)
                                                            <span class="badge badge-dark">
                                                                Admin
                                                            </span>
                                                        @elseif($user->role_id == 2)
                                                            <span class="badge badge-dark">
                                                                Co-Admin
                                                            </span>
                                                        @elseif($user->role_id == 3)
                                                            <span class="badge badge-success">
                                                                User
                                                            </span>
                                                        @else
                                                            <span class="badge badge-infog">
                                                                Guest
                                                            </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-7">
                                                    <p>Address : {{ $user->address }}</p>
                                                </div>
                                                <div class="col">
                                                    <b>
                                                        <p class="small mb-0 ">Email : {{ $user->email }}</p>
                                                        <p class="small mb-0 ">Phone : {{ $user->phone }}</p>
                                                        <p class="small mb-0 ">Total pay of you :
                                                            {{ number_format($user->total_pay) }}.VND</p>
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name">Firstname</label>
                                            <input type="text" id="name" name="name" value="{{ $user->name }}"
                                                class="form-control" placeholder="Brown">
                                        </div>
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">
                                                <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                            id="inputEmail4" placeholder="brown@asher.me">
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="inputAddress5">Address</label>
                                        <input type="text" name="address" value="{{ $user->address }}" class="form-control"
                                            id="inputAddress5" placeholder="P.O. Box 464, 5975 Eget Avenue">
                                    </div>
                                    @if ($errors->has('address'))
                                        <div class="alert alert-danger">
                                            <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                            {{ $errors->first('address') }}
                                        </div>
                                    @endif
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input type="tel" name="phone" value="{{ $user->phone }}" class="form-control"
                                                id="phone">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="avatar">Choose Avatar to change</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="avatar" name="avatar">
                                                <label class="custom-file-label" for="avatar">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('phone'))
                                        <div class="alert alert-danger">
                                            <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('avatar'))
                                        <div class="alert alert-danger">
                                            <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                            {{ $errors->first('avatar') }}
                                        </div>
                                    @endif
                                    <input type="submit" class="btn btn-primary" value="Save Change">
                                </form>
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('updatePassword', ['id' => $user->id_user]) }}">
                                    {{ csrf_field() }}
                                    <hr class="my-4">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputPassword4">Old Password</label>
                                                <input type="password" name="pass_old" class="form-control"
                                                    id="inputPassword5">
                                            </div>
                                            @if ($errors->has('pass_old'))
                                                <div class="alert alert-danger">
                                                    <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                                    {{ $errors->first('pass_old') }}
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label for="inputPassword5">New Password</label>
                                                <input type="password" name="pass_new" class="form-control"
                                                    id="inputPassword5">
                                            </div>
                                            @if ($errors->has('pass_new'))
                                                <div class="alert alert-danger">
                                                    <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                                    {{ $errors->first('pass_new') }}
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <label for="inputPassword6">Confirm Password</label>
                                                <input type="password" name="confirm_pass_new" class="form-control"
                                                    id="inputPassword6">
                                            </div>
                                            @if ($errors->has('confirm_pass_new'))
                                                <div class="alert alert-danger">
                                                    <span class="fe fe-minus-circle fe-16 mr-2"></span>
                                                    {{ $errors->first('confirm_pass_new') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-2">Password requirements</p>
                                            <p class="small text-muted mb-2"> To create a new password, you have to meet all
                                                of
                                                the following requirements: </p>
                                            <ul class="small text-muted pl-4 mb-0">
                                                <li> Minimum 8 character </li>
                                                <li>At least one special character</li>
                                                <li>At least one number</li>
                                                <li>Can’t be the same as a previous password </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Change Password">
                                </form>
                            @endif
                        </div>
                        <div class="tab-pane fade pt-2 " id="transaction" role="tabpanel" aria-labelledby="transaction-tab"
                            data-target-group="groups">
                            @if(!empty($transaction))
                            <h6 class="mb-3 text-center">Last payment</h6>
                            <table class="table table-borderless table-striped">
                                <thead class="thead-dark">
                                    <tr role="row">
                                        <th>ID</th>
                                        <th>Note</th>
                                        <th>Total Price</th>
                                        <th>Method Receive</th>
                                        <th>Payment</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $item)
                                    <tr>
                                        <th scope="col">{{$item->id_transaction}}</th>
                                        <td>{{$item->note}}</td>
                                        <td>{{number_format($item->total_price)}}.VND</td>
                                        <td>
                                            @if ($item->method_receive == 0)
                                                Giao hàng tại nhà
                                            @elseif($item->method_receive == 1)
                                                Nhận hàng tại cửa hàng
                                            @endif
                                        </td>
                                        <td>{{$item->payment_method->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>
                                            @if ($item->status == 3)
                                                <span class="dot dot-lg dot-yellow  mr-2"></span>Ordered</td>
                                            @elseif($item->status == 0)
                                            <span class="dot dot-lg dot-other mr-2"></span>In-Processing</td>
                                            @elseif($item->status == 1)
                                            <span class="dot dot-lg dot-patific mr-2"></span>Successful delivery</td>
                                            @elseif($item->status == 2)
                                            <span class="dot dot-lg dot-red mr-2"></span>Delivery failed</td>
                                            @endif
                                        <td><a href="{{route('orderDetail',['id'=>$id, 'transaction_id'=>$item])}}" class="btn mb-1 fas fa-eye"></a></td>
                                        <td><a href="{{route('cancelOrder',['id'=>$id, 'id_transaction'=>$item])}}" class="btn mb-1 fas fa-window-close"></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                No found data......
                            @endif
                        </div>
                    </div>
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>
@endsection
@section('script_footer')
    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
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
