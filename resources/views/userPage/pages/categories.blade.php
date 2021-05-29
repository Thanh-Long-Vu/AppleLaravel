@extends('userPage.index')
@section('title')
    Product Type
@endsection
@section('script_header')
<link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
<link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
<link rel="stylesheet" href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
<link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

@endsection
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Product Type</li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>

        <div class="container">
        </div>
        <div class="container">
            
            <!-- Categories Carousel -->
            <div class="mb-5">
                <div class="position-relative">
                    <div class="js-slick-carousel u-slick u-slick--gutters-0 position-static overflow-hidden u-slick-overflow-visble pb-5 pt-2 px-1"
                        data-arrows-classes="d-none d-xl-block u-slick__arrow-normal u-slick__arrow-centered--y rounded-circle text-black font-size-30 z-index-2"
                        data-arrow-left-classes="fa fa-angle-left u-slick__arrow-inner--left left-n16"
                        data-arrow-right-classes="fa fa-angle-right u-slick__arrow-inner--right right-n20"
                        data-pagi-classes="d-xl-none text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 pt-1"
                        data-slides-show="10" data-slides-scroll="1" data-responsive='[{
                              "breakpoint": 1400,
                              "settings": {
                                "slidesToShow": 8
                              }
                            }, {
                                "breakpoint": 1200,
                                "settings": {
                                  "slidesToShow": 6
                                }
                            }, {
                              "breakpoint": 992,
                              "settings": {
                                "slidesToShow": 5
                              }
                            }, {
                              "breakpoint": 768,
                              "settings": {
                                "slidesToShow": 3
                              }
                            }, {
                              "breakpoint": 554,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }]'>
                        @if(!$productTypes->isEmpty())
                        @foreach ($productTypes as $productType)
                        <div class="js-slide">
                            <a href="{{ route('productype.show', ['productType' => $productType->id_product_type ]) }}"
                                class="d-block text-center bg-on-hover width-122 mx-auto">
                                <div class="bg pt-4 rounded-circle-top width-122 height-75">
                                    {{-- <i class="font-size-40"></i> --}}
                                    <img class="img-fluid"
                                        src="../{{$productType->thumbnail}}" alt="Image Description">
                                </div>
                                <div class="bg-white px-2 pt-2 width-122">
                                    <h6 class="font-weight-semi-bold font-size-14 text-gray-90 mb-0 text-lh-1dot2">
                                        {{ $productType->name }}</h6>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- End Categories Carousel -->
            <div class="row mb-8">
                <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                    <div class="mb-6">
                        <form action="{{route('filterProduct')}}" >
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                            </div>
                            <div class="border-bottom pb-4 mb-4">
                                <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
    
                                <!-- Checkboxes -->
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name = "price[]" id="1milli" value = "0">
                                        <label class="custom-control-label" for="1milli">
                                            Under 1 million VND
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name = "price[]" id="110milli" value = "1">
                                        <label class="custom-control-label" for="110milli">1 million - 10 million VND
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name = "price[]" id="1020milli" value = "2">
                                        <label class="custom-control-label" for="1020milli">10 million - 20 million VND
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name = "price[]" id="2030milli" value = "3">
                                        <label class="custom-control-label" for="2030milli">20 million - 30 million VND
                                        </label>
                                    </div>
                                </div>
                                <!-- End Checkboxes -->
                                <!-- View More - Collapse -->
                                <div class="collapse" id="collapsePrice">
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name = "price[]" id="over30milli" value = "4">
                                        <label class="custom-control-label" for="over30milli">Over 30 million VND
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End View More - Collapse -->
    
                                <!-- Link -->
                                <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapsePrice" role="button" aria-expanded="false" aria-controls="collapsePrice">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                                    <span class="link-collapse__default">Show more</span>
                                    <span class="link-collapse__active">Show less</span>
                                </a>
                                <!-- End Link -->
                            </div>
                            <div class="border-bottom pb-4 mb-4">
                                <h4 class="font-size-14 mb-3 font-weight-bold">Color</h4>
    
                                <!-- Checkboxes -->
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="red" name="color[]" value = "0" >
                                        <label class="custom-control-label" for="red">Red 
                                        <span class="dot dot-lg dot-red"></span></label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="yellow" name="color[]" value = "1" >
                                        <label class="custom-control-label" for="yellow"> Yellow
                                        <span class="dot dot-lg dot-yellow"></span></label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="violet" name="color[]" value = "2" >
                                        <label class="custom-control-label" for="violet"> Violet
                                        <span class="dot dot-lg dot-violet"></span></label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="green" name="color[]" value = "3" >
                                        <label class="custom-control-label" for="green"> Green
                                        <span class="dot dot-lg dot-green"></span></label>
                                    </div>
                                </div>
                                <!-- End Checkboxes -->
    
                                <!-- View More - Collapse -->
                                <div class="collapse" id="collapseColor">
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="black" name="color[]" value = "4" >
                                            <label class="custom-control-label" for="black"> Black
                                            <span class="dot dot-lg dot-black"></span></label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="white" name="color[]" value = "5" >
                                            <label class="custom-control-label" for="white"> White
                                            <span class="dot dot-lg dot-white"></span></label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="other" name="color[]" value = "6" >
                                            <label class="custom-control-label" for="other"> Other
                                            <span class="dot dot-lg dot-other"></span></label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="patific" name="color[]" value = "7" >
                                            <label class="custom-control-label" for="patific"> Patific
                                            <span class="dot dot-lg dot-patific"></span></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End View More - Collapse -->
    
                                <!-- Link -->
                                <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseColor" role="button" aria-expanded="false" aria-controls="collapseColor">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                                    <span class="link-collapse__default">Show more</span>
                                    <span class="link-collapse__active">Show less</span>
                                </a>
                                <!-- End Link -->
                            </div>
                            <div class="border-bottom pb-4 mb-4">
                                <h4 class="font-size-14 mb-3 font-weight-bold">Memory</h4>
    
                                <!-- Checkboxes -->
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="16GB" name ="memory[]" value="0">
                                        <label class="custom-control-label" for="16GB"> 16GB
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="32GB" name ="memory[]" value="1">
                                        <label class="custom-control-label" for="32GB"> 32GB
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="64GB" name ="memory[]" value="2">
                                        <label class="custom-control-label" for="64GB"> 64GB
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="128GB" name ="memory[]" value="3">
                                        <label class="custom-control-label" for="128GB"> 128GB
                                    </div>
                                </div>
                                <!-- End Checkboxes -->
    
                                <!-- View More - Collapse -->
                                <div class="collapse" id="collapseMemory">
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="256gb" name ="memory[]" value="4">
                                            <label class="custom-control-label" for="256gb"> 256GB
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="512gb" name ="memory[]" value="5">
                                            <label class="custom-control-label" for="512gb"> 512GB
                                        </div>
                                    </div>
                                </div>
                                <!-- End View More - Collapse -->
                                <!-- Link -->
                                <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseMemory" role="button" aria-expanded="false" aria-controls="collapseMemory">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                                    <span class="link-collapse__default">Show more</span>
                                    <span class="link-collapse__active">Show less</span>
                                </a>
                                <!-- End Link -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-9 col-wd-9gdot5">
                    <!-- Shop-control-bar Title -->
                    <div class="d-block d-md-flex flex-center-between mb-3">
                        <h3 class="font-size-25 mb-2 mb-md-0">Product</h3>
                        <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
                    </div>
                    <!-- End shop-control-bar Title -->
                    <!-- Shop-control-bar -->
                    <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                        <div class="d-xl-none">
                            <!-- Account Sidebar Toggle Button -->
                            <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
                                aria-controls="sidebarContent1"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                            </a>
                            <!-- End Account Sidebar Toggle Button -->
                        </div>
                        <div class="d-flex">
                            <form method="get">
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                    <option value="one" selected>Default sorting</option>
                                    <option value="two">Sort by popularity</option>
                                    <option value="three">Sort by average rating</option>
                                    <option value="four">Sort by latest</option>
                                    <option value="five">Sort by price: low to high</option>
                                    <option value="six">Sort by price: high to low</option>
                                </select>
                                <!-- End Select -->
                            </form>
                            <form method="POST" class="ml-2 d-none d-xl-block">
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select max-width-120"
                                    data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                                    <option value="one" selected>Show 20</option>
                                    <option value="two">Show 40</option>
                                    <option value="three">Show All</option>
                                </select>
                                <!-- End Select -->
                            </form>
                        </div>
                        <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                            <form method="post" class="min-width-50 mr-1">
                                <input size="2" min="1" max="3" step="1" type="number" class="form-control text-center px-2 height-35" value="1">
                            </form> of 3
                            <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                        </nav>
                    </div>
                    <!-- End Shop-control-bar -->
                    <!-- Shop Body -->
                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade pt-2 show active" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                            <ul class="row list-unstyled products-group no-gutters">
                                <?php $products = $products ??  $productTypes->first()->products ?? []; ?>
                                @if(!empty($products))
                                @foreach ( $products as $product)
                                <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{ route('products.show', ['product' => $product->id_product ]) }}" class="font-size-12 text-gray-5">Category : {{ $product->productType->category->name }}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{ route('products.show', ['product' => $product->id_product ]) }}" class="text-blue font-weight-bold">
                                                    {{ $product->productType->name }}</b> - 
                                                    @if ($product->warehouse->color == 0)
                                                        <b style="color : red"><i>Red</i></b> memory
                                                    @elseif($product->warehouse->color == 1)
                                                        <b style="color : gold"><i>Yellow</i></b> 
                                                    @elseif($product->warehouse->color == 2)
                                                        <b style="color : Violet"><i>Violet</i></b> 
                                                    @elseif($product->warehouse->color == 3)
                                                        <b style="color : Green"><i>Green</i></b> 
                                                    @elseif($product->warehouse->color == 4)
                                                        <b style="color : Black"><i>Black</i></b> 
                                                    @elseif($product->warehouse->color == 5)
                                                        <b style="color : Gray"><i>White</i></b> 
                                                    @elseif($product->warehouse->color == 6)
                                                        <b style="color : Other"><i>Other</i></b>   
                                                    @elseif($product->warehouse->color == 7)
                                                        <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                    @endif -
                                                    @if ($product->warehouse->memory== 0)
                                                        <b style="color : #336699"><i>16GB</i></b> 
                                                    @elseif($product->warehouse->memory== 1)
                                                        <b style="color : gold"><i>32GB</i></b> 
                                                    @elseif($product->warehouse->memory== 2)
                                                        <b style="color : Violet"><i>64GB</i></b> 
                                                    @elseif($product->warehouse->memory== 3)
                                                        <b style="color : Green"><i>128GB</i></b> 
                                                    @elseif($product->warehouse->memory== 4)
                                                        <b style="color : Black"><i>256GB</i></b> 
                                                    @elseif($product->warehouse->memory== 5)
                                                        <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                    @endif 
                                                </a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('products.show', ['product' => $product->id_product ]) }}" class="d-block text-center"><img class="img-fluid" src="../{{ $product->thumbnail }}" alt="Image Description"></a>
                                                </div>
                                                <div class="mb-3">
                                                    <a class="d-inline-flex align-items-center small font-size-14" href="#">
                                                        <div class="text-warning mr-2">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star text-muted"></small>
                                                        </div>
                                                        <span class="text-secondary">(40)</span>
                                                    </a>
                                                </div>
                                                <ul class="font-size-12 p-0 text-gray-110 mb-4">
                                                    <li class="line-clamp-1 mb-1 list-bullet">{{ $product->productType->description }}</li>
                                                    <li class="line-clamp-1 mb-1 list-bullet">Quality : <b style="color : red;">New Full Box </b></li>
                                                    <li class="line-clamp-1 mb-1 list-bullet">Warranty : <b style="color : red;">{{$product->warehouse->warranty}}.Month</b></li>
                                                </ul>
                                                <div class="text-gray-20 mb-2 font-size-12">SKU: FW511948218</div>
                                                <div class="flex-center-between mb-1">
                                                    @if ($product->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($product->price - ($product->price*($product->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($product->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($product->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                    <!-- End Shop Body -->
                    <!-- Shop Pagination -->
                    <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                        <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>
                        <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                            <li class="page-item"><a class="page-link current" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                    <!-- End Shop Pagination -->
                </div>
            </div>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
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
         $(window).on('load', function () {
             // initialization of HSMegaMenu component
             $('.js-mega-menu').HSMegaMenu({
                 event: 'hover',
                 direction: 'horizontal',
                 pageContainer: $('.container'),
                 breakpoint: 767.98,
                 hideTimeOut: 0
             });
         });
 
         $(document).on('ready', function () {
             // initialization of header
             $.HSCore.components.HSHeader.init($('#header'));
 
             // initialization of animation
             $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
 
             // initialization of unfold component
             $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                 afterOpen: function () {
                     $(this).find('input[type="search"]').focus();
                 }
             });
 
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
                 beforeClose: function () {
                     $('#hamburgerTrigger').removeClass('is-active');
                 },
                 afterClose: function () {
                     $('#headerSidebarList .collapse.show').collapse('hide');
                 }
             });
 
             $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
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
     <script>
        $(document).ready(function () {

        
        const changefuction = e => {
            let prices = [];
            let colors = [];
            let memories = [];
            e.preventDefault();
            prices = []; // reset 

            $('input[name="price[]"]:checked').each(function()
            {
                prices.push($(this).val());
            });
            $('input[name="color[]"]:checked').each(function()
            {
                colors.push($(this).val());
            });

            $('input[name="memory[]"]:checked').each(function()
            {
                memories.push($(this).val());
            });
            $.get("{{route('filterProduct')}}", {prices: prices,colors: colors,memories: memories}, function(markup)
            {
                $('#search-results').html(markup);
            });     
        }
        // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
        $('input[name="price[]"]').on('change', changefuction);
        $('input[name="color[]"]').on('change', changefuction);
        $('input[name="memory[]"]').on('change',changefuction);
    });
    </script>
@endsection
