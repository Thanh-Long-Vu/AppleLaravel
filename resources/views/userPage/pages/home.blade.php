@extends('userPage.index')
@section('title')
    Home
@endsection
@section('script_header')
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    <!-- Slider Section -->
    <div class="mb-4">
        <div class="bg-img-hero" style="background-image: url(assets/img/background-home.jpg);">
            <div class="container overflow-hidden">
                <div class="js-slick-carousel u-slick"
                    data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-center mb-3 mb-md-4">
                    @if (!empty($slider))
                        @foreach ($slider as $item)
                        <div class="js-slide">
                            <div class="row pt-7 py-md-0">
                                <div class="d-none d-wd-block offset-1"></div>
                                <div class="col-xl col col-md-6 mt-md-8 mt-lg-10">
                                    <div class="ml-xl-4">
                                        <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                            data-scs-animation-in="fadeInUp">
                                            SHOP TO GET WHAT YOU LOVE
                                        </h6>
                                        <h1 class="font-size-46 text-lh-50 font-weight-light mb-8"
                                            data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                            TIMEPIECES THAT MAKE A STATEMENT UP TO <stong class="font-weight-bold">40% OFF
                                            </stong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-6 d-flex align-items-end ml-auto ml-md-0"
                                    data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                                    <img class="img-fluid ml-auto mr-10 mr-wd-auto" width="468" height="417" src="../{{$item->image_url}}"
                                        alt="Image Description">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Section -->
    <div class="container">
        <!-- Feature List -->
        <div class="mb-6 row border rounded-lg mx-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-transport font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Free Delivery</span>
                    <div class=" text-secondary">from $50</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-customers font-size-56"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">99 % Customer</span>
                    <div class=" text-secondary">Feedbacks</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-returning font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">365 Days</span>
                    <div class=" text-secondary">for free return</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-payment font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Payment</span>
                    <div class=" text-secondary">Secure System</div>
                </div>
            </div>
            <!-- End Feature List -->

            <!-- Feature List -->
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-tag font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Only Best</span>
                    <div class=" text-secondary">Brands</div>
                </div>
            </div>
            <!-- End Feature List -->
        </div>
        <!-- End Feature List -->
        <!-- Tab Prodcut Section -->
        <div class="mb-6">
            <!-- Nav Classic -->
            <div class="position-relative bg-white text-center z-index-2">
                <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active js-animation-link" id="pills-one-example1-tab" data-toggle="pill"
                            href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true"
                            data-target="#pills-one-example1" data-link-group="groups" data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                Featured
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-animation-link" id="pills-two-example1-tab" data-toggle="pill"
                            href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false"
                            data-target="#pills-two-example1" data-link-group="groups" data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                On Sale
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-animation-link" id="pills-three-example1-tab" data-toggle="pill"
                            href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                            aria-selected="false" data-target="#pills-three-example1" data-link-group="groups"
                            data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                Top Rated
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Nav Classic -->
            <!-- Tab Content -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                    aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @if(!empty($productHot))
                            @foreach ($productHot as $item)
                            <li class="col-6 col-md-4 col-xl product-item">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="{{ route('categories.show', ['category'=> $item->productType->category->id_category]) }}"
                                                    class="font-size-12 text-gray-5">Category : {{ $item->productType->category->name }}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="{{ route('categories.show', ['category'=> $item->productType->category->id_category]) }}"
                                                    class="text-blue font-weight-bold">{{ $item->productType->name }}</b> - 
                                                    @if ($item->warehouse->color == 0)
                                                        <b style="color : red"><i>Red</i></b> memory
                                                    @elseif($item->warehouse->color == 1)
                                                        <b style="color : gold"><i>Yellow</i></b> 
                                                    @elseif($item->warehouse->color == 2)
                                                        <b style="color : Violet"><i>Violet</i></b> 
                                                    @elseif($item->warehouse->color == 3)
                                                        <b style="color : Green"><i>Green</i></b> 
                                                    @elseif($item->warehouse->color == 4)
                                                        <b style="color : Black"><i>Black</i></b> 
                                                    @elseif($item->warehouse->color == 5)
                                                        <b style="color : Gray"><i>White</i></b> 
                                                    @elseif($item->warehouse->color == 6)
                                                        <b style="color : Other"><i>Other</i></b>   
                                                    @elseif($item->warehouse->color == 7)
                                                        <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                    @endif -
                                                    @if ($item->warehouse->memory== 0)
                                                        <b style="color : #336699"><i>16GB</i></b> 
                                                    @elseif($item->warehouse->memory== 1)
                                                        <b style="color : gold"><i>32GB</i></b> 
                                                    @elseif($item->warehouse->memory== 2)
                                                        <b style="color : Violet"><i>64GB</i></b> 
                                                    @elseif($item->warehouse->memory== 3)
                                                        <b style="color : Green"><i>128GB</i></b> 
                                                    @elseif($item->warehouse->memory== 4)
                                                        <b style="color : Black"><i>256GB</i></b> 
                                                    @elseif($item->warehouse->memory== 5)
                                                        <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                    @endif </a></h5>
                                            <div class="mb-2">
                                                <a href="{{ route('products.show', ['product'=> $item->id_product]) }}" class="d-block text-center"><img
                                                        class="img-fluid" src="../{{$item->thumbnail}}"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                @if ($item->discount > 0)
                                                <div class="prodcut-price d-flex align-items-center position-relative">
                                                    <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($item->price - ($item->price*($item->discount/100)))}}.VNĐ</b></ins>
                                                    <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($item->price)}}.VNĐ</del>
                                                </div>
                                                @else
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100"><b>{{number_format($item->price)}}.VNĐ</b></div>
                                                </div>
                                                @endif
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
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
                <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel"
                    aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @if (!empty($productSale))
                            @foreach ($productSale as $item)
                            <li class="col-6 col-md-4 col-xl product-item">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="{{ route('categories.show', ['category'=> $item->productType->category->id_category]) }}"
                                                    class="font-size-12 text-gray-5">Category : {{ $item->productType->category->name }}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="{{ route('categories.show', ['category'=> $item->productType->category->id_category]) }}"
                                                    class="text-blue font-weight-bold">{{ $item->productType->name }}</b> - 
                                                    @if ($item->warehouse->color == 0)
                                                        <b style="color : red"><i>Red</i></b> memory
                                                    @elseif($item->warehouse->color == 1)
                                                        <b style="color : gold"><i>Yellow</i></b> 
                                                    @elseif($item->warehouse->color == 2)
                                                        <b style="color : Violet"><i>Violet</i></b> 
                                                    @elseif($item->warehouse->color == 3)
                                                        <b style="color : Green"><i>Green</i></b> 
                                                    @elseif($item->warehouse->color == 4)
                                                        <b style="color : Black"><i>Black</i></b> 
                                                    @elseif($item->warehouse->color == 5)
                                                        <b style="color : Gray"><i>White</i></b> 
                                                    @elseif($item->warehouse->color == 6)
                                                        <b style="color : Other"><i>Other</i></b>   
                                                    @elseif($item->warehouse->color == 7)
                                                        <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                    @endif -
                                                    @if ($item->warehouse->memory== 0)
                                                        <b style="color : #336699"><i>16GB</i></b> 
                                                    @elseif($item->warehouse->memory== 1)
                                                        <b style="color : gold"><i>32GB</i></b> 
                                                    @elseif($item->warehouse->memory== 2)
                                                        <b style="color : Violet"><i>64GB</i></b> 
                                                    @elseif($item->warehouse->memory== 3)
                                                        <b style="color : Green"><i>128GB</i></b> 
                                                    @elseif($item->warehouse->memory== 4)
                                                        <b style="color : Black"><i>256GB</i></b> 
                                                    @elseif($item->warehouse->memory== 5)
                                                        <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                    @endif </a></h5>
                                            <div class="mb-2">
                                                <a href="{{ route('products.show', ['product'=> $item->id_product]) }}" class="d-block text-center"><img
                                                        class="img-fluid" src="../{{$item->thumbnail}}"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                @if ($item->discount > 0)
                                                <div class="prodcut-price d-flex align-items-center position-relative">
                                                    <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($item->price - ($item->price*($item->discount/100)))}}.VNĐ</b></ins>
                                                    <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($item->price)}}.VNĐ</del>
                                                </div>
                                                @else
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100"><b>{{number_format($item->price)}}.VNĐ</b></div>
                                                </div>
                                                @endif
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
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
                <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
                    aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @if (!empty($productTypeRate))
                            @foreach ($productTypeRate as $item) 
                                <li class="col-6 col-md-4 col-xl product-item">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{ route('categories.show', ['category'=> $item->category->id_category]) }}" class="font-size-12 text-gray-5">Category : {{ $item->category->name }}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{ route('categories.show', ['category'=> $item->category->id_category]) }}"
                                                        class="text-blue font-weight-bold">{{ $item->name }}</b> - 
                                                        @if ($item->products->first()->warehouse->color == 0)
                                                            <b style="color : red"><i>Red</i></b> memory
                                                        @elseif($item->products->first()->warehouse->color == 1)
                                                            <b style="color : gold"><i>Yellow</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 2)
                                                            <b style="color : Violet"><i>Violet</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 3)
                                                            <b style="color : Green"><i>Green</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 4)
                                                            <b style="color : Black"><i>Black</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 5)
                                                            <b style="color : Gray"><i>White</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 6)
                                                            <b style="color : Other"><i>Other</i></b>   
                                                        @elseif($item->products->first()->warehouse->color == 7)
                                                            <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                        @endif -
                                                        @if ($item->products->first()->warehouse->memory== 0)
                                                            <b style="color : #336699"><i>16GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 1)
                                                            <b style="color : gold"><i>32GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 2)
                                                            <b style="color : Violet"><i>64GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 3)
                                                            <b style="color : Green"><i>128GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 4)
                                                            <b style="color : Black"><i>256GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 5)
                                                            <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                        @endif </a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}" class="d-block text-center"><img
                                                            class="img-fluid" src="../{{$item->products->first()->thumbnail}}"
                                                            alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    @if ($item->products->first()->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($item->products->first()->price - ($item->products->first()->price*($item->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($item->products->first()->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($item->products->first()->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
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
        </div>
        <!-- End Tab Prodcut Section -->
    </div>
    <!-- Products-8-1 -->
    <div class="products-group-8-1 space-1 bg-gray-7 mb-6">
        <h2 class="sr-only">Products Grid</h2>
        <div class="container">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2 mb-3">
                <div
                    class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>

                    <ul class="nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 mb-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0"
                        id="pills-tab-1" role="tablist">
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="Tpills-one-example1-tab" data-toggle="pill"
                                href="#Tpills-one-example1" role="tab" aria-controls="Tpills-one-example1"
                                aria-selected="true">Mac</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-two-example1-tab" data-toggle="pill"
                                href="#Tpills-two-example1" role="tab" aria-controls="Tpills-two-example1"
                                aria-selected="false">Iphone</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-three-example1-tab" data-toggle="pill"
                                href="#Tpills-three-example1" role="tab" aria-controls="Tpills-three-example1"
                                aria-selected="false">Ipad</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-four-example1-tab" data-toggle="pill"
                                href="#Tpills-four-example1" role="tab" aria-controls="Tpills-four-example1"
                                aria-selected="false">Watch</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->

            <!-- Tab Content -->
            <div class="tab-content" id="Tpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Tpills-one-example1" role="tabpanel"
                    aria-labelledby="Tpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                @if (!empty($productTypeMac) && (count($productTypeMac) == 8) )
                                @foreach ($productTypeMac as $item)
                                @if(!empty($item->products->first()->warehouse))
                                    <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                        <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                            <div class="product-item__inner bg-white p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="{{ route('categories.show', ['category'=> $item->category->id_category]) }}"
                                                            class="font-size-12 text-gray-5">Category : {{$item->category->name}}</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="{{ route('categories.show', ['category'=> $item->category->id_category]) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{$item->name}}- 
                                                            @if ($item->products->first()->warehouse->color == 0)
                                                                <b style="color : red"><i>Red</i></b> memory
                                                            @elseif($item->products->first()->warehouse->color == 1)
                                                                <b style="color : gold"><i>Yellow</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 2)
                                                                <b style="color : Violet"><i>Violet</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 3)
                                                                <b style="color : Green"><i>Green</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 4)
                                                                <b style="color : Black"><i>Black</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 5)
                                                                <b style="color : Gray"><i>White</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 6)
                                                                <b style="color : Other"><i>Other</i></b>   
                                                            @elseif($item->products->first()->warehouse->color == 7)
                                                                <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                            @endif -
                                                            @if ($item->products->first()->warehouse->memory== 0)
                                                                <b style="color : #336699"><i>16GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 1)
                                                                <b style="color : gold"><i>32GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 2)
                                                                <b style="color : Violet"><i>64GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 3)
                                                                <b style="color : Green"><i>128GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 4)
                                                                <b style="color : Black"><i>256GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 5)
                                                                <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                            @endif </a></h5>
                                                    <div class="mb-2">
                                                        <a href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../{{$item->products->first()->thumbnail}}" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        @if ($item->products->first()->discount > 0)
                                                        <div class="prodcut-price d-flex align-items-center position-relative">
                                                            <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($item->products->first()->price - ($item->products->first()->price*($item->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($item->products->first()->price)}}.VNĐ</del>
                                                        </div>
                                                        @else
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100"><b>{{number_format($item->products->first()->price)}}.VNĐ</b></div>
                                                        </div>
                                                        @endif
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a
                                                            href="{{ route('categories.show', ['category'=> $item->category->id_category]) }}"
                                                            class="font-size-12 text-gray-5">Category : {{$productTypeMacTotalRating->category->name}}</a></div>
                                                    <h5 class="mb-0 product-item__title"><a
                                                            href="{{ route('categories.show', ['category'=> $item->category->id_category]) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{$productTypeMacTotalRating->name}} -
                                                            @if ($productTypeMacTotalRating->products->first()->warehouse->color == 0)
                                                                <b style="color : red"><i>Red</i></b> memory
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->color == 1)
                                                                <b style="color : gold"><i>Yellow</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->color == 2)
                                                                <b style="color : Violet"><i>Violet</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->color == 3)
                                                                <b style="color : Green"><i>Green</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->color == 4)
                                                                <b style="color : Black"><i>Black</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->color == 5)
                                                                <b style="color : Gray"><i>White</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->color == 6)
                                                                <b style="color : Other"><i>Other</i></b>   
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->color == 7)
                                                                <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                            @endif -
                                                            @if ($productTypeMacTotalRating->products->first()->warehouse->memory== 0)
                                                                <b style="color : #336699"><i>16GB</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->memory== 1)
                                                                <b style="color : gold"><i>32GB</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->memory== 2)
                                                                <b style="color : Violet"><i>64GB</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->memory== 3)
                                                                <b style="color : Green"><i>128GB</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->memory== 4)
                                                                <b style="color : Black"><i>256GB</i></b> 
                                                            @elseif($productTypeMacTotalRating->products->first()->warehouse->memory== 5)
                                                                <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                            @endif</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="{{ route('products.show', ['product'=> $productTypeMacTotalRating->products->first()->id_product]) }}"
                                                        class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img
                                                            class="img-fluid" src="../{{$productTypeMacTotalRating->products->first()->thumbnail}}"
                                                            alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        @if (!empty($productTypeMacTotalRating))
                                                        @foreach ($productTypeMacTotalRating->imageProductType()->limit(4)->get() as $item)
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer"
                                                                href="javascript:;" data-src="../{{$item->img_url}}"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700" data-is-infinite="true">
                                                                <img class="img-fluid border"
                                                                    src="../{{$item->img_url}}"
                                                                    alt="Image Description">
                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span
                                                                            class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    @if ($productTypeMacTotalRating->products->first()->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($productTypeMacTotalRating->products->first()->price - ($productTypeMacTotalRating->products->first()->price*($productTypeMacTotalRating->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-two-example1" role="tabpanel"
                    aria-labelledby="Tpills-two-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                @if(!empty($productTypeIphone) && (count($productTypeIphone) == 8))
                                @foreach ($productTypeIphone as $item)
                                @if(!empty($item->products->first()->warehouse))
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                        class="font-size-12 text-gray-5">Category : {{$item->category->name}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                        class="text-blue font-weight-bold">
                                                        {{$item->name}}- 
                                                        @if ($item->products->first()->warehouse->color == 0)
                                                            <b style="color : red"><i>Red</i></b> memory
                                                        @elseif($item->products->first()->warehouse->color == 1)
                                                            <b style="color : gold"><i>Yellow</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 2)
                                                            <b style="color : Violet"><i>Violet</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 3)
                                                            <b style="color : Green"><i>Green</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 4)
                                                            <b style="color : Black"><i>Black</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 5)
                                                            <b style="color : Gray"><i>White</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 6)
                                                            <b style="color : Other"><i>Other</i></b>   
                                                        @elseif($item->products->first()->warehouse->color == 7)
                                                            <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                        @endif -
                                                        @if ($item->products->first()->warehouse->memory== 0)
                                                            <b style="color : #336699"><i>16GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 1)
                                                            <b style="color : gold"><i>32GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 2)
                                                            <b style="color : Violet"><i>64GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 3)
                                                            <b style="color : Green"><i>128GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 4)
                                                            <b style="color : Black"><i>256GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 5)
                                                            <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                        @endif </a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            src="../{{$item->products->first()->thumbnail}}" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    @if ($item->products->first()->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($item->products->first()->price - ($item->products->first()->price*($item->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($item->products->first()->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($item->products->first()->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a
                                                            href="{{ route('products.show', ['product'=> $productTypeIphoneTotalRating->products->first()->id_product]) }}"
                                                            class="font-size-12 text-gray-5">Category : {{$productTypeIphoneTotalRating->category->name}}</a></div>
                                                    <h5 class="mb-0 product-item__title"><a
                                                            href="{{ route('products.show', ['product'=> $productTypeIphoneTotalRating->products->first()->id_product]) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{$productTypeIphoneTotalRating->name}} -
                                                            @if ($productTypeIphoneTotalRating->products->first()->warehouse->color == 0)
                                                                <b style="color : red"><i>Red</i></b> memory
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->color == 1)
                                                                <b style="color : gold"><i>Yellow</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->color == 2)
                                                                <b style="color : Violet"><i>Violet</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->color == 3)
                                                                <b style="color : Green"><i>Green</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->color == 4)
                                                                <b style="color : Black"><i>Black</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->color == 5)
                                                                <b style="color : Gray"><i>White</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->color == 6)
                                                                <b style="color : Other"><i>Other</i></b>   
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->color == 7)
                                                                <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                            @endif -
                                                            @if ($productTypeIphoneTotalRating->products->first()->warehouse->memory== 0)
                                                                <b style="color : #336699"><i>16GB</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->memory== 1)
                                                                <b style="color : gold"><i>32GB</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->memory== 2)
                                                                <b style="color : Violet"><i>64GB</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->memory== 3)
                                                                <b style="color : Green"><i>128GB</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->memory== 4)
                                                                <b style="color : Black"><i>256GB</i></b> 
                                                            @elseif($productTypeIphoneTotalRating->products->first()->warehouse->memory== 5)
                                                                <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                            @endif</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="{{ route('products.show', ['product'=> $productTypeIphoneTotalRating->products->first()->id_product]) }}"
                                                        class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img
                                                            class="img-fluid" src="../{{$productTypeIphoneTotalRating->products->first()->thumbnail}}"
                                                            alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        @if (!empty($productTypeIphoneTotalRating))
                                                        @foreach ($productTypeIphoneTotalRating->imageProductType()->limit(4)->get() as $item)
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer"
                                                                href="javascript:;" data-src="../{{$item->img_url}}"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700" data-is-infinite="true">
                                                                <img class="img-fluid border"
                                                                    src="../{{$item->img_url}}"
                                                                    alt="Image Description">
                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span
                                                                            class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    @if ($productTypeMacTotalRating->products->first()->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($productTypeMacTotalRating->products->first()->price - ($productTypeMacTotalRating->products->first()->price*($productTypeMacTotalRating->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-three-example1" role="tabpanel"
                    aria-labelledby="Tpills-three-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                @if(!empty($productTypeIpad) &&( count($productTypeIpad) == 8))
                                @foreach ($productTypeIpad as $item)
                                @if(!empty($item->products->first()->warehouse))
                                    <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                        <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                            <div class="product-item__inner bg-white p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                            class="font-size-12 text-gray-5">Category : {{$item->category->name}}</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{$item->name}}- 
                                                            @if ($item->products->first()->warehouse->color == 0)
                                                                <b style="color : red"><i>Red</i></b> memory
                                                            @elseif($item->products->first()->warehouse->color == 1)
                                                                <b style="color : gold"><i>Yellow</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 2)
                                                                <b style="color : Violet"><i>Violet</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 3)
                                                                <b style="color : Green"><i>Green</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 4)
                                                                <b style="color : Black"><i>Black</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 5)
                                                                <b style="color : Gray"><i>White</i></b> 
                                                            @elseif($item->products->first()->warehouse->color == 6)
                                                                <b style="color : Other"><i>Other</i></b>   
                                                            @elseif($item->products->first()->warehouse->color == 7)
                                                                <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                            @endif -
                                                            @if ($item->products->first()->warehouse->memory== 0)
                                                                <b style="color : #336699"><i>16GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 1)
                                                                <b style="color : gold"><i>32GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 2)
                                                                <b style="color : Violet"><i>64GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 3)
                                                                <b style="color : Green"><i>128GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 4)
                                                                <b style="color : Black"><i>256GB</i></b> 
                                                            @elseif($item->products->first()->warehouse->memory== 5)
                                                                <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                            @endif </a></h5>
                                                    <div class="mb-2">
                                                        <a href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../{{$item->products->first()->thumbnail}}" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        @if ($item->products->first()->discount > 0)
                                                        <div class="prodcut-price d-flex align-items-center position-relative">
                                                            <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($item->products->first()->price - ($item->products->first()->price*($item->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($item->products->first()->price)}}.VNĐ</del>
                                                        </div>
                                                        @else
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100"><b>{{number_format($item->products->first()->price)}}.VNĐ</b></div>
                                                        </div>
                                                        @endif
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a
                                                            href="{{ route('products.show', ['product'=> $productTypeIpadTotalRating->products->first()->id_product]) }}"
                                                            class="font-size-12 text-gray-5">Category : {{$productTypeIpadTotalRating->category->name}}</a></div>
                                                    <h5 class="mb-0 product-item__title"><a
                                                            href="{{ route('products.show', ['product'=> $productTypeIpadTotalRating->products->first()->id_product]) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{$productTypeIpadTotalRating->name}} -
                                                            @if ($productTypeIpadTotalRating->products->first()->warehouse->color == 0)
                                                                <b style="color : red"><i>Red</i></b> memory
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->color == 1)
                                                                <b style="color : gold"><i>Yellow</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->color == 2)
                                                                <b style="color : Violet"><i>Violet</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->color == 3)
                                                                <b style="color : Green"><i>Green</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->color == 4)
                                                                <b style="color : Black"><i>Black</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->color == 5)
                                                                <b style="color : Gray"><i>White</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->color == 6)
                                                                <b style="color : Other"><i>Other</i></b>   
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->color == 7)
                                                                <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                            @endif -
                                                            @if ($productTypeIpadTotalRating->products->first()->warehouse->memory== 0)
                                                                <b style="color : #336699"><i>16GB</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->memory== 1)
                                                                <b style="color : gold"><i>32GB</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->memory== 2)
                                                                <b style="color : Violet"><i>64GB</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->memory== 3)
                                                                <b style="color : Green"><i>128GB</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->memory== 4)
                                                                <b style="color : Black"><i>256GB</i></b> 
                                                            @elseif($productTypeIpadTotalRating->products->first()->warehouse->memory== 5)
                                                                <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                            @endif</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="{{ route('products.show', ['product'=> $productTypeIpadTotalRating->products->first()->id_product]) }}"
                                                        class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img
                                                            class="img-fluid" src="../{{$productTypeIpadTotalRating->products->first()->thumbnail}}"
                                                            alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        @if (!empty($productTypeIpadTotalRating))
                                                        @foreach ($productTypeIpadTotalRating->imageProductType()->limit(4)->get() as $item)
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer"
                                                                href="javascript:;" data-src="../{{$item->img_url}}"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700" data-is-infinite="true">
                                                                <img class="img-fluid border"
                                                                    src="../{{$item->img_url}}"
                                                                    alt="Image Description">
                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span
                                                                            class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    @if ($productTypeMacTotalRating->products->first()->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($productTypeMacTotalRating->products->first()->price - ($productTypeMacTotalRating->products->first()->price*($productTypeMacTotalRating->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-four-example1" role="tabpanel"
                    aria-labelledby="Tpills-four-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                @if(!empty($productTypeWatch) &&( count($productTypeWatch) == 8))
                                @foreach ($productTypeWatch as $item)
                                @if(!empty($item->products->first()->warehouse))
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                        class="font-size-12 text-gray-5">Category : {{$item->category->name}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                        class="text-blue font-weight-bold">
                                                        {{$item->name}}- 
                                                        @if ($item->products->first()->warehouse->color == 0)
                                                            <b style="color : red"><i>Red</i></b> memory
                                                        @elseif($item->products->first()->warehouse->color == 1)
                                                            <b style="color : gold"><i>Yellow</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 2)
                                                            <b style="color : Violet"><i>Violet</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 3)
                                                            <b style="color : Green"><i>Green</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 4)
                                                            <b style="color : Black"><i>Black</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 5)
                                                            <b style="color : Gray"><i>White</i></b> 
                                                        @elseif($item->products->first()->warehouse->color == 6)
                                                            <b style="color : Other"><i>Other</i></b>   
                                                        @elseif($item->products->first()->warehouse->color == 7)
                                                            <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                        @endif -
                                                        @if ($item->products->first()->warehouse->memory== 0)
                                                            <b style="color : #336699"><i>16GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 1)
                                                            <b style="color : gold"><i>32GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 2)
                                                            <b style="color : Violet"><i>64GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 3)
                                                            <b style="color : Green"><i>128GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 4)
                                                            <b style="color : Black"><i>256GB</i></b> 
                                                        @elseif($item->products->first()->warehouse->memory== 5)
                                                            <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                        @endif </a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('products.show', ['product'=> $item->products->first()->id_product]) }}"
                                                        class="d-block text-center"><img class="img-fluid"
                                                            src="../{{$item->products->first()->thumbnail}}" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    @if ($item->products->first()->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($item->products->first()->price - ($item->products->first()->price*($item->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($item->products->first()->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($item->products->first()->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a
                                                            href="{{ route('products.show', ['product'=> $productTypeWatchTotalRating->products->first()->id_product]) }}"
                                                            class="font-size-12 text-gray-5">Category : {{$productTypeWatchTotalRating->category->name}}</a></div>
                                                    <h5 class="mb-0 product-item__title"><a
                                                            href="{{ route('products.show', ['product'=> $productTypeWatchTotalRating->products->first()->id_product]) }}"
                                                            class="text-blue font-weight-bold">
                                                            {{$productTypeWatchTotalRating->name}} -
                                                            @if ($productTypeWatchTotalRating->products->first()->warehouse->color == 0)
                                                                <b style="color : red"><i>Red</i></b> memory
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->color == 1)
                                                                <b style="color : gold"><i>Yellow</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->color == 2)
                                                                <b style="color : Violet"><i>Violet</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->color == 3)
                                                                <b style="color : Green"><i>Green</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->color == 4)
                                                                <b style="color : Black"><i>Black</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->color == 5)
                                                                <b style="color : Gray"><i>White</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->color == 6)
                                                                <b style="color : Other"><i>Other</i></b>   
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->color == 7)
                                                                <b style="color : #336699"><i>Patific</i></b>                                                                  
                                                            @endif -
                                                            @if ($productTypeWatchTotalRating->products->first()->warehouse->memory== 0)
                                                                <b style="color : #336699"><i>16GB</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->memory== 1)
                                                                <b style="color : gold"><i>32GB</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->memory== 2)
                                                                <b style="color : Violet"><i>64GB</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->memory== 3)
                                                                <b style="color : Green"><i>128GB</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->memory== 4)
                                                                <b style="color : Black"><i>256GB</i></b> 
                                                            @elseif($productTypeWatchTotalRating->products->first()->warehouse->memory== 5)
                                                                <b style="color : Gray"><i>512GB</i></b>                                                                 
                                                            @endif</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="{{ route('products.show', ['product'=> $productTypeWatchTotalRating->products->first()->id_product]) }}"
                                                        class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img
                                                            class="img-fluid" src="../{{$productTypeWatchTotalRating->products->first()->thumbnail}}"
                                                            alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        @if (!empty($productTypeWatchTotalRating))
                                                        @foreach ($productTypeWatchTotalRating->imageProductType()->limit(4)->get() as $item)
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer"
                                                                href="javascript:;" data-src="../{{$item->img_url}}"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700" data-is-infinite="true">
                                                                <img class="img-fluid border"
                                                                    src="../{{$item->img_url}}"
                                                                    alt="Image Description">
                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span
                                                                            class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    @if ($productTypeMacTotalRating->products->first()->discount > 0)
                                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                                        <ins class="font-size-20 text-red text-decoration-none"><b>{{number_format($productTypeMacTotalRating->products->first()->price - ($productTypeMacTotalRating->products->first()->price*($productTypeMacTotalRating->products->first()->discount/100)))}}.VNĐ</b></ins>
                                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</del>
                                                    </div>
                                                    @else
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><b>{{number_format($productTypeMacTotalRating->products->first()->price)}}.VNĐ</b></div>
                                                    </div>
                                                    @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>

        <!-- Content Placeholder -->
        <div class="container space-2 d-none">
            <!-- Nav Pills -->
            <div class="position-relative text-center z-index-2 mb-3">
                <div
                    class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>

                    <ul class="nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 mb-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0"
                        id="pills-tab-2" role="tablist">
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="Gpills-one-example1-tab" data-toggle="pill"
                                href="#Gpills-one-example1" role="tab" aria-controls="Gpills-one-example1"
                                aria-selected="true">Top 20</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-two-example1-tab" data-toggle="pill"
                                href="#Gpills-two-example1" role="tab" aria-controls="Gpills-two-example1"
                                aria-selected="false">Smart Phones & Tablets</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-three-example1-tab" data-toggle="pill"
                                href="#Gpills-three-example1" role="tab" aria-controls="Gpills-three-example1"
                                aria-selected="false">Laptops &amp; Computers</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-four-example1-tab" data-toggle="pill"
                                href="#Gpills-four-example1" role="tab" aria-controls="Gpills-four-example1"
                                aria-selected="false">Video Cameras</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->

            <!-- Tab Content -->
            <div class="tab-content" id="Gpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Gpills-one-example1" role="tabpanel"
                    aria-labelledby="Gpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90">
                                                        </div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-two-example1" role="tabpanel"
                    aria-labelledby="Gpills-two-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90">
                                                        </div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-three-example1" role="tabpanel"
                    aria-labelledby="Gpills-three-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90">
                                                        </div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-four-example1" role="tabpanel"
                    aria-labelledby="Gpills-four-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90">
                                                        </div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Content Placeholder -->
    </div>
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
<script src="assets/vendor/typed.js/lib/typed.min.js"></script>
<script src="assets/vendor/slick-carousel/slick/slick.js"></script>
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
<script src="assets/js/components/hs.show-animation.js"></script>
<script src="assets/js/components/hs.svg-injector.js"></script>
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
            afterClose: function() {
                $('#headerSidebarList .collapse.show').collapse('hide');
            }
        });

        $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
            e.preventDefault();

            var target = $(this).data('target');

            if($(this).attr('aria-expanded') === "true") {
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
