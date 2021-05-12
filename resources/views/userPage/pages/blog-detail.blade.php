@extends('userPage.index')
@section('title')
    Blog Detail
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
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="../blog/blog-v1.html">Design</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Robot Wars
                                – Now Closed</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-wd">
                    <div class="min-width-1100-wd">
                        <article class="card mb-8 border-0">
                            <img class="img-fluid" src="assets/img/1500X730/img6.jpg" alt="Image Description">
                            <div class="card-body pt-5 pb-0 px-0">
                                <div class="d-block d-md-flex flex-center-between mb-4 mb-md-0">
                                    <h4 class="mb-md-3 mb-1">Robot Wars – Now Closed</h4>
                                    <a href="#" class="font-size-12 text-gray-5 ml-md-4"><i class="far fa-comment"></i>
                                        Leave a comment</a>
                                </div>
                                <div class="mb-3 pb-3 border-bottom">
                                    <div
                                        class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                        <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">Design,</a>
                                        <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                            Technology,</a>
                                        <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> News,</a>
                                        <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5"> Image</a>
                                        <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                class="fas fa-circle"></i></span>
                                        <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March 4,
                                            2016</a>
                                    </div>
                                </div>
                                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                        malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                        Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat
                                        velit, cursus molestie lectus mollis et.</strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada
                                    aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales
                                    libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie
                                    lectus.</p>
                                <p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum. Aliquam non
                                    tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat.
                                    Praesent varius ultrices massa at faucibus. Aenean dignissim, orci sed faucibus
                                    pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue.
                                    Pellentesque vitae eros eget enim mollis placerat.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.</p>
                                        <p>Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin
                                            sed ultrices erat. Praesent varius ultrices massa at faucibus. Aenean dignissim,
                                            orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi
                                            ligula sit amet augue. Pellentesque vitae eros eget enim mollis placerat.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <blockquote>
                                            <p>Pellentesque sodales augue eget ultricies ultricies. Cum sociis natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur
                                                sagittis ultrices condimentum.</p>
                                            <p>Pellentesque ullamcorper libero in enim pellentesque lobortis. Praesent ut
                                                dui ac metus iaculis scelerisque at eget metus.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="bg-gray-1 px-3 py-5 mb-10">
                            <!-- Review -->
                            <div class="d-block d-md-flex media">
                                <div class="u-xl-avatar mb-4 mb-md-0 mr-md-4">
                                    <img class="img-fluid" src="assets/img/100X100/img17.jpg" alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h3 class="font-size-18 mb-3"><a href="../blog/single-blog-post.html">Jane Smith</a>
                                    </h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam
                                        erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec
                                        ultricies, lorem sed ultrices interdum, leo metus luctus sem, vel vulputate diam
                                        ipsum sed lorem.</p>
                                </div>
                            </div>
                            <!-- End Review -->
                        </div>
                        <ul class="nav justify-content-between mb-11">
                            <li class="nav-item m-0">
                                <a class="nav-link text-gray-27 px-0" href="../blog/single-blog-post.html"><span
                                        class="mr-1">←</span> SpaceX Falcon explodes after Landing</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link text-gray-27 px-0" href="../blog/single-blog-post.html">Announcement –
                                    Post without Image <span class="ml-1">→</span></a>
                            </li>
                        </ul>
                        <div class="mb-10">
                            <div class="border-bottom border-color-1 mb-10">
                                <h4 class="section-title mb-0 pb-3 font-size-25">3 Comments</h4>
                            </div>
                            <ol class="nav">
                                <li class="w-100 border-bottom pb-6 mb-6 border-color-1">
                                    <!-- Review -->
                                    <div class="d-block d-md-flex media">
                                        <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                            <img class="img-fluid rounded-circle" src="assets/img/100X100/img19.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim
                                                eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel
                                                est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                            <div class="d-flex">
                                                <h4 class="font-size-14 font-weight-bold mr-2"><a
                                                        href="../blog/single-blog-post.html" class="">John Doe</a></h4>
                                                <span><a href="../blog/single-blog-post.html" class="text-gray-23">March 16,
                                                        2016</a></span>
                                                <a href="#" class="text-blue ml-auto">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Review -->
                                </li>
                                <li class="w-100 border-bottom pb-6 mb-6 border-color-1">
                                    <!-- Review -->
                                    <div class="d-block d-md-flex media">
                                        <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                            <img class="img-fluid rounded-circle" src="assets/img/100X100/img18.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu
                                                tincidunt faucibus.</p>
                                            <div class="d-flex">
                                                <h4 class="font-size-14 font-weight-bold mr-2"><a
                                                        href="../blog/single-blog-post.html" class="">Anna Kowalsky</a></h4>
                                                <span><a href="../blog/single-blog-post.html" class="text-gray-23">March 16,
                                                        2016</a></span>
                                                <a href="#" class="text-blue ml-auto">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Review -->
                                </li>
                                <li class="w-100">
                                    <!-- Review -->
                                    <div class="d-block d-md-flex media">
                                        <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                            <img class="img-fluid rounded-circle" src="assets/img/100X100/img20.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <p>Sed id tincidunt sapien. Pellentesque cursus accumsan tellus, nec ultricies
                                                nulla sollicitudin eget. Donec feugiat orci vestibulum porttitor sagittis.
                                            </p>
                                            <div class="d-flex">
                                                <h4 class="font-size-14 font-weight-bold mr-2"><a
                                                        href="../blog/single-blog-post.html" class="">Peter Wargner</a></h4>
                                                <span><a href="../blog/single-blog-post.html" class="text-gray-23">March 16,
                                                        2016</a></span>
                                                <a href="#" class="text-blue ml-auto">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Review -->
                                </li>
                            </ol>
                        </div>
                        <div class="mb-10">
                            <div class="border-bottom border-color-1 mb-6">
                                <h4 class="section-title mb-0 pb-3 font-size-25">Leave a Reply</h4>
                            </div>
                            <p class="text-gray-90">Your email address will not be published. Required fields are marked
                                <span class="text-dark">*</span></p>
                            <form class="js-validate" novalidate="novalidate">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Comment
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Name" placeholder="" aria-label=""
                                                required="" data-msg="Please enter your name."
                                                data-error-class="u-has-error" data-success-class="u-has-success"
                                                autocomplete="off">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Email address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" name="emailAddress" placeholder=""
                                                aria-label="" required="" data-msg="Please enter a valid email address."
                                                data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Website
                                            </label>
                                            <input type="text" class="form-control" name="website" placeholder=""
                                                aria-label="" data-msg="Please enter website name."
                                                data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary-dark-w px-5">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-wd">
                    <aside class="mb-7">
                        <form class="">
                            <div class="d-flex align-items-center">
                                <label class="sr-only" for="signupSrEmail">Search Electro blog</label>
                                <div class="input-group">
                                    <input type="text" class="form-control px-4" name="search" id="signupSrEmail"
                                        placeholder="Search..." aria-label="Search Electro blog">
                                </div>
                                <button type="submit" class="btn btn-primary text-nowrap ml-3 d-none">
                                    <span class="fas fa-search font-size-1 mr-2"></span> Search
                                </button>
                            </div>
                        </form>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">About Blog</h3>
                        </div>
                        <p class="text-gray-90 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt,
                            erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque
                            id sodales libero.</p>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Categories</h3>
                        </div>
                        <div class="list-group">
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0"><i
                                    class="mr-2 fas fa-angle-right"></i> Design</a>
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i
                                    class="mr-2 fas fa-angle-right"></i> Events</a>
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i
                                    class="mr-2 fas fa-angle-right"></i> Links &amp; Quotes</a>
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i
                                    class="mr-2 fas fa-angle-right"></i> News</a>
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i
                                    class="mr-2 fas fa-angle-right"></i> Social</a>
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i
                                    class="mr-2 fas fa-angle-right"></i> Technology</a>
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i
                                    class="mr-2 fas fa-angle-right"></i> Audios</a>
                            <a href="../blog/single-blog-post.html"
                                class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i
                                    class="mr-2 fas fa-angle-right"></i> Videos</a>
                        </div>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Recent Posts</h3>
                        </div>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="assets/img/1500X730/img1.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Post with Gallery</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="assets/img/1500X730/img4.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Now Closed – Post with Audio</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="assets/img/1500X730/img5.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Now Closed – Post with Video</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3 position-relative">
                                    <img class="img-fluid object-fit-cover" src="https://placehold.it/150x150/DDD/DDD/"
                                        alt="Image Description">
                                    <i class="fa fa-paragraph position-absolute-center text-white"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html"
                                            class="text-gray-39">Announcement – Post without Image</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="assets/img/1500X730/img6.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="../blog/single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Now Closed</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Tags Clouds</h3>
                        </div>
                        <div class="d-flex flex-wrap mx-n1">
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">amazon like</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">Awesome</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">bootstrap</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">buy it</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">clean design</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">electronics</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">theme</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">video post format</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">Ecommerce</a>
                            <a href="../blog/single-blog-post.html"
                                class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">wordpress</a>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- Brand Carousel -->
            <div class="mb-6">
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
