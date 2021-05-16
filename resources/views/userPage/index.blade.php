<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ asset('/user_page/assets') }}">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/font-electro.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    @yield('script_header')
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

    {{-- @include('userPage.layouts.scripts_end') --}}

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    @yield('script_footer')
    <script>
        $(document).on('ready', function (){
            function login(email, password) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    }
                });
                $.ajax({
                    url: "{{ route('login') }}",
                    method: "POST",
                    data: {email: email, password: password}
                }).done(function(data) {
                    let role = data.role
                    if (role === "Admin") {
                        window.location.href = "{{route('home.index')}}";
                    } else if(role === "User") {
                        window.location.href = "{{route('home')}}";
                    }
                }).error(function (error) {
                    $('#signIn-error').append(error.responseJSON.message)
                });
            }
            $('#submitLogin').click(function (e) {
                let email = $('#signInEmail').val()
                let password = $('#signInPassword').val()
                if(!email && !password) return

                e.preventDefault();
                // e.stopImmediatePropagation();
                login(email, password)
            })
        })
    </script>
</body>
</html>
