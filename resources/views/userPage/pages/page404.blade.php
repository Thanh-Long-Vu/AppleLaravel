@extends('userPage.index')
@section('title')
    404 Not Found
@endsection
@section('script_header')
    <link rel="stylesheet" href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Error 404
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="mb-5 text-center pb-3 border-bottom border-color-1">
                <h1 class="font-size-sl-72 font-weight-light mb-3">404!</h1>
                <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Nothing was found at this location. Try
                    searching, or check out the links below.</p>
            </div>
            <div class="d-flex mb-6">
                <!-- Search Jobs Form -->
                <form class="d-block d-md-flex flex-horizontal-center w-100 w-lg-80 w-xl-50 mx-md-auto">
                    <div class="mb-3 mb-md-0 col px-md-2 px-0">
                        <!-- Input -->
                        <div class="js-focus-state">
                            <input type="text" class="form-control" placeholder="Search products…"
                                aria-label="Search products…" aria-describedby="keywordInputAddon">
                        </div>
                        <!-- End Input -->
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-block btn-primary-dark-w px-5">Search</button>
                    </div>
                    <!-- End Checkbox -->
                </form>
                <!-- End Search Jobs Form -->
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class=" d-flex border-bottom border-color-1 mr-md-2 mb-4">
                        <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Featured Products</h3>
                    </div>
                    <ul class="row list-unstyled products-group no-gutters">
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                                class="text-blue font-weight-bold">Wireless Audio System Multiroom 360
                                                degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                                    class="img-fluid" src="assets/img/212X200/img1.jpg"
                                                    alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                                class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a>
                                        </h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                                    class="img-fluid" src="assets/img/212X200/img2.jpg"
                                                    alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2
                                                    299,00</del>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item remove-divider-md-lg remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                                class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                                    class="img-fluid" src="assets/img/212X200/img3.jpg"
                                                    alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                                class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                                    class="img-fluid" src="assets/img/212X200/img4.jpg"
                                                    alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block remove-divider-md-lg remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                                class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                                    class="img-fluid" src="assets/img/212X200/img5.jpg"
                                                    alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                        class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                    class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class=" d-flex border-bottom border-color-1 mr-md-2 mb-4">
                        <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Product Categories</h3>
                    </div>
                    <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                        <!-- List -->
                        <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                            <li>
                                <div class="dropdown-title">Browse Categories</div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse"
                                    data-target="#sidebarNav1Collapse">
                                    Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </a>

                                <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Accessories<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Cameras &amp; Photography<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Computer Components<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Gadgets<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Home Entertainment<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Laptops &amp; Computers<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Printers &amp; Ink<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Smart Phones &amp; Tablets<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">TV &amp; Audio<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Video Games &amp; Consoles<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav2Collapse"
                                    data-target="#sidebarNav2Collapse">
                                    Cameras &amp; Photography<span class="text-gray-25 font-size-12 font-weight-normal">
                                        (56)</span>
                                </a>

                                <div id="sidebarNav2Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav2" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Cameras<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav3Collapse"
                                    data-target="#sidebarNav3Collapse">
                                    Computer Components<span class="text-gray-25 font-size-12 font-weight-normal">
                                        (56)</span>
                                </a>

                                <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Computer Cases<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav4Collapse"
                                    data-target="#sidebarNav4Collapse">
                                    Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                </a>

                                <div id="sidebarNav4Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav4" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Smartwatches<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Wearables<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav5Collapse"
                                    data-target="#sidebarNav5Collapse">
                                    Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal">
                                        (56)</span>
                                </a>

                                <div id="sidebarNav5Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav5" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Tvs<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav6Collapse"
                                    data-target="#sidebarNav6Collapse">
                                    Laptops &amp; Computers<span class="text-gray-25 font-size-12 font-weight-normal">
                                        (56)</span>
                                </a>

                                <div id="sidebarNav6Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav6" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Accessories<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Cameras &amp; Photography<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Computer Components<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Gadgets<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Home Entertainment<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Laptops &amp; Computers<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Printers &amp; Ink<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Smart Phones &amp; Tablets<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">TV &amp; Audio<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Video Games &amp; Consoles<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav7Collapse"
                                    data-target="#sidebarNav7Collapse">
                                    Printers &amp; Ink<span class="text-gray-25 font-size-12 font-weight-normal">
                                        (56)</span>
                                </a>

                                <div id="sidebarNav7Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav7" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Printers<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
                                    data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav8Collapse"
                                    data-target="#sidebarNav8Collapse">
                                    Smart Phones &amp; Tablets<span class="text-gray-25 font-size-12 font-weight-normal">
                                        (56)</span>
                                </a>

                                <div id="sidebarNav8Collapse" class="collapse" data-parent="#sidebarNav">
                                    <ul id="sidebarNav8" class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        <li><a class="dropdown-item" href="#">Smartphones<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Tablets<span
                                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a>
                                        </li>
                                        <!-- End Menu List -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
            </div>
            <div class=" d-flex border-bottom border-color-1 mr-md-2 mb-4">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Popular Products</h3>
            </div>
            <ul class="row list-unstyled products-group no-gutters mb-8">
                <li class="col-6 col-md-4 col-xl product-item">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                        class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full
                                        base audio</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                            class="img-fluid" src="assets/img/212X200/img1.jpg"
                                            alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-4 col-xl product-item">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                        class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                            class="img-fluid" src="assets/img/212X200/img2.jpg"
                                            alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                        <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-4 col-xl product-item remove-divider-md-lg">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                        class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                            class="img-fluid" src="assets/img/212X200/img3.jpg"
                                            alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-4 col-xl product-item remove-divider-xl">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                        class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                            class="img-fluid" src="assets/img/212X200/img4.jpg"
                                            alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                        class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                            class="img-fluid" src="assets/img/212X200/img5.jpg"
                                            alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block remove-divider-wd remove-divider-md-lg">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                                        class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html"
                                        class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                                            class="img-fluid" src="assets/img/212X200/img2.jpg"
                                            alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                        <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html"
                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Brand Carousel -->
            <div class="mb-8">
                <div class="py-2 border-top border-bottom">
                    <div class="js-slick-carousel u-slick my-1 slick-initialized slick-slider" data-slides-show="5"
                        data-slides-scroll="1"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                        data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                        data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right" data-responsive="[{
                            &quot;breakpoint&quot;: 992,
                            &quot;settings&quot;: {
                                &quot;slidesToShow&quot;: 2
                            }
                        }, {
                            &quot;breakpoint&quot;: 768,
                            &quot;settings&quot;: {
                                &quot;slidesToShow&quot;: 1
                            }
                        }, {
                            &quot;breakpoint&quot;: 554,
                            &quot;settings&quot;: {
                                &quot;slidesToShow&quot;: 1
                            }
                        }]">
                        <div class="js-prev d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9 slick-arrow slick-disabled"
                            aria-disabled="true" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 1680px; transform: translate3d(0px, 0px, 0px);">
                                <div class="js-slide slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img1.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img2.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img3.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img4.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img5.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide" data-slick-index="5" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <a href="#" class="link-hover__brand" tabindex="-1">
                                        <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img6.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                            </div>
                        </div>





                        <div class="js-next d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y fa fa-angle-right u-slick__arrow-classic-inner--right slick-arrow"
                            style="" aria-disabled="false"></div>
                    </div>
                </div>
            </div>
            <!-- End Brand Carousel -->
        </div>
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
