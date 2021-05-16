@extends('userPage.index')
@section('title')
    Blog
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
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Blog</li>
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
                    <div class="max-width-1100-wd">
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <div class="js-slick-carousel u-slick overflow-hidden slick-initialized slick-slider slick-dotted"
                                        data-pagi-classes="js-pagination u-slick__pagination u-slick__pagination--long u-slick__pagination--hover mb-0">
                                        <div class="slick-list draggable">
                                            <div class="slick-track"
                                                style="opacity: 1; width: 2675px; transform: translate3d(0px, 0px, 0px);">
                                                <div class="js-slide slick-slide slick-current slick-active"
                                                    data-slick-index="0" aria-hidden="false"
                                                    style="width: 535px; height: auto;" tabindex="0" role="tabpanel"
                                                    id="slick-slide00" aria-describedby="slick-slide-control00">
                                                    <a href="../blog/single-blog-post.html" class="d-block"
                                                        tabindex="0"><img class="img-fluid"
                                                            src="assets/img/1500X730/img1.jpg"
                                                            alt="Image Description"></a>
                                                </div>
                                                <div class="js-slide slick-slide" data-slick-index="1" aria-hidden="true"
                                                    style="width: 535px; height: auto;" tabindex="-1" role="tabpanel"
                                                    id="slick-slide01" aria-describedby="slick-slide-control01">
                                                    <a href="../blog/single-blog-post.html" class="d-block"
                                                        tabindex="-1"><img class="img-fluid"
                                                            src="assets/img/1500X730/img2.jpg"
                                                            alt="Image Description"></a>
                                                </div>
                                                <div class="js-slide slick-slide" data-slick-index="2" aria-hidden="true"
                                                    style="width: 535px; height: auto;" tabindex="-1" role="tabpanel"
                                                    id="slick-slide02" aria-describedby="slick-slide-control02">
                                                    <a href="../blog/single-blog-post.html" class="d-block"
                                                        tabindex="-1"><img class="img-fluid"
                                                            src="assets/img/1500X730/img3.jpg"
                                                            alt="Image Description"></a>
                                                </div>
                                                <div class="js-slide slick-slide" data-slick-index="3" aria-hidden="true"
                                                    style="width: 535px; height: auto;" tabindex="-1" role="tabpanel"
                                                    id="slick-slide03" aria-describedby="slick-slide-control03">
                                                    <a href="../blog/single-blog-post.html" class="d-block"
                                                        tabindex="-1"><img class="img-fluid"
                                                            src="assets/img/1500X730/img4.jpg"
                                                            alt="Image Description"></a>
                                                </div>
                                                <div class="js-slide slick-slide" data-slick-index="4" aria-hidden="true"
                                                    style="width: 535px; height: auto;" tabindex="-1" role="tabpanel"
                                                    id="slick-slide04" aria-describedby="slick-slide-control04">
                                                    <a href="../blog/single-blog-post.html" class="d-block"
                                                        tabindex="-1"><img class="img-fluid"
                                                            src="assets/img/1500X730/img5.jpg"
                                                            alt="Image Description"></a>
                                                </div>
                                            </div>
                                        </div>




                                        <ul class="js-pagination u-slick__pagination u-slick__pagination--long u-slick__pagination--hover mb-0"
                                            style="" role="tablist">
                                            <li class="slick-active slick-current" role="presentation"><span></span></li>
                                            <li role="presentation"><span></span></li>
                                            <li role="presentation"><span></span></li>
                                            <li role="presentation"><span></span></li>
                                            <li role="presentation"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Post with
                                                Gallery</a></h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Videos</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> 3</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay"
                                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229791977&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Now Closed –
                                                Post with Audio</a></h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Audio</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> Leave a comment</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid"
                                            src="assets/img/1500X730/img9.jpg" alt="Image Description"></a>
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Now Closed –
                                                Post with Video</a></h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Video</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> Leave a comment</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">Announcement – Post without
                                                Image</a></h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Image</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> Leave a comment</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid"
                                            src="assets/img/1500X730/img6.jpg" alt="Image Description"></a>
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">Robot Wars – Now Closed</a>
                                        </h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Image</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> Leave a comment</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid"
                                            src="assets/img/1500X730/img7.jpg" alt="Image Description"></a>
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">SpaceX Falcon explodes
                                                after Landing</a></h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Image</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> Leave a comment</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid"
                                            src="assets/img/1500X730/img4.jpg" alt="Image Description"></a>
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">The first flowers in
                                                space</a></h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Image</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> Leave a comment</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <a href="../blog/single-blog-post.html" class="d-block"><img class="img-fluid"
                                            src="assets/img/1500X730/img8.jpg" alt="Image Description"></a>
                                    <div class="card-body pt-5 pb-0 px-0">
                                        <h4 class="mb-3"><a href="../blog/single-blog-post.html">HoloLens technical details
                                                emerge</a></h4>
                                        <div class="mb-3 pb-3 border-bottom">
                                            <div
                                                class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                <a href="../blog/single-blog-post.html"
                                                    class="mx-0dot5 text-gray-5">Design,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Technology,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    News,</a>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">
                                                    Image</a>
                                                <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                        class="fas fa-circle"></i></span>
                                                <a href="../blog/single-blog-post.html" class="mx-0dot5 text-gray-5">March
                                                    4, 2016</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in
                                            malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
                                            Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia
                                            feugiat velit, cursus molestie lectus.</p>
                                        <div class="flex-horizontal-center">
                                            <a href="../blog/single-blog-post.html"
                                                class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                More</a>
                                            <a href="../blog/single-blog-post.html" class="font-size-12 text-gray-5 ml-4"><i
                                                    class="far fa-comment"></i> Leave a comment</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-13 border-0">
                                    <div class="card-body p-0">
                                        <blockquote class="blockquote">
                                            <p>Quisque a commodo lectus. Nunc vel dolor sed libero venenatis egestas. Cras
                                                non volutpat enim. Cras molestie purus id lorem sodales, in facilisis erat
                                                tristique. Aliquam luctus orci aliquet augue eleifend.</p>
                                            <footer class="blockquote-footer"><cite title="Source Title">Steve
                                                    Kowalsky</cite></footer>
                                        </blockquote>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="card mb-8 border-0">
                                    <div class="card-body p-5 p-md-10 bg-gray-1">
                                        <p class="d-block font-size-25 text-gray-39">If you are looking for a developer on
                                            ThemeForest – check out the link</p>
                                        <a href="../blog/single-blog-post.html"
                                            class="text-blue">http://wwww.transvelo.com</a>
                                    </div>
                                </article>
                            </div>
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