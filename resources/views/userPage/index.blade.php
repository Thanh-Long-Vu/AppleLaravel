<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ asset('/user_page/assets') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/font-electro.css">

    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>
    <!-- ========== HEADER ========== -->
        @include("userPage.layouts.header")
    <!-- ========== END HEADER ========== -->
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        @yield('content')
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
    <!-- ========== FOOTER ========== -->
    @include("userPage.layouts.footer")
    <!-- ========== END FOOTER ========== -->
    <!-- ========== SECONDARY CONTENTS ========== -->
    @include('userPage.layouts.aside-left')
    <!-- ========== END SECONDARY CONTENTS ========== -->

    @include('userPage.layouts.scripts_end')


</body>
</html>