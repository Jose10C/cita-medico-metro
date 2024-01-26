<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> @yield('title','Bienvenidos') &mdash; {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    <link rel="icon" type="image/png" href="{{ asset('img/config/logo-claro-metropolitano.png')}}">

    <link rel="stylesheet" href="{{ asset('css/p_medical-guide.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="{{ asset('fonts/p_medical-guide-icons.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/p_default-color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_dropmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_sticky-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_settings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_extralayers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_tabs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_jquery.mmenu.all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_loader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/p_switcher.css') }}">
    <!-- /END GA -->
</head>

<body>
    <div id="wrap">
        <!-- Navar -->
        @include('layouts.external.navigation')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.external.footer')
    </div>

    <script type="text/javascript" src="{{ asset('js/p_jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_scroll-desktop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_scroll-desktop-smooth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_jquery-ui-1.10.3.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_counter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_tabs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_jquery.mmenu.min.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/p_custom.js') }}"></script>
    <script type="text/javascript">
        jQuery(".tp-banner")
            .show()
            .revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 720,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "nexttobullets",
                navigationArrows: "solo",
                navigationStyle: "preview",

                touchenabled: "on",
                onHoverStop: "on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner4",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",

                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: "",
            });
    </script>
    <!-- Revolution Slider -->
    <script type="text/javascript">
        jQuery(".tp-banner")
            .show()
            .revolution({
                dottedOverlay: "none",
                delay: 9000,
                startwidth: 1170,
                startheight: 720,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "nexttobullets",
                navigationArrows: "solo",
                navigationStyle: "preview",

                touchenabled: "on",
                onHoverStop: "on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner4",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",

                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 800,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: "",
            });
    </script>
</body>

</html>