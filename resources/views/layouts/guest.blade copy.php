<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> @yield('title','Bienvenidos') &mdash; {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('modules/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet" href="{{asset('modules/bootstrap-social/bootstrap-social.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <!-- Navar -->
            @include('layouts.external.navigation')

            <!-- Content -->
            <div class="main-content">
                <div class="section-body">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            @include('layouts.external.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('modules/jquery.min.js')}}"></script>
    <script src="{{asset('modules/popper.js')}}"></script>
    <script src="{{asset('modules/tooltip.js')}}"></script>
    <script src="{{asset('modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('modules/moment.min.js')}}"></script>
    <script src="{{asset('js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('modules/jquery-selectric/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>