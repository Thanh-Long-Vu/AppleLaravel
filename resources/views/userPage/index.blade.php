<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ asset('/') }}">

    <title>Electro &#8211; Electronics Ecommerce Theme</title>

    <link rel="stylesheet" type="text/css" href="user_page/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="user_page/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="user_page/css/animate.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="user_page/css/font-electro.css" media="all" />
    <link rel="stylesheet" type="text/css" href="user_page/css/owl-carousel.css" media="all" />
    <link rel="stylesheet" type="text/css" href="user_page/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="user_page/css/colors/yellow.css" media="all" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="user_page/images/fav-icon.png">
</head>

<body class="page home page-template-default">
<div id="page" class="hfeed site">
    @include("userPage.layouts.top-bar")
    @include("userPage.layouts.header")
    @include("userPage.layouts.nav")

    @yield('content')

    @include("userPage.layouts.footer")
</div><!-- #page -->

<script type="text/javascript" src="user_page/js/jquery.min.js"></script>
<script type="text/javascript" src="user_page/js/tether.min.js"></script>
<script type="text/javascript" src="user_page/js/bootstrap.min.js"></script>
<script type="text/javascript" src="user_page/js/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="user_page/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="user_page/js/echo.min.js"></script>
<script type="text/javascript" src="user_page/js/wow.min.js"></script>
<script type="text/javascript" src="user_page/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="user_page/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="user_page/js/electro.js"></script>

</body>
</html>
