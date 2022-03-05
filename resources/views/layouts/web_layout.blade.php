<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Need Tire</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('admin-img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('css/web-css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/odometer.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/default.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/responsive.css') }}">
</head>
<body>


<!-- preloader-start -->
<div class="preloader">
    <div class="meter">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1">
            <div class="loader-circle-2"></div>
        </div>
        <span class="loadtext">Loading</span>
    </div>
</div>
<!-- preloader-end -->

        @include('layouts.web_include.header')

    @yield('content')

    @include('layouts.web_include.footer')






<!-- JS here -->
{{--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
<script src="{{ url('js/web-js/vendor/jquery-3.5.0.min.js')}}"></script>
<script src="{{ url('js/web-js/popper.min.js')}}"></script>
<script src="{{ url('js/web-js/bootstrap.min.js')}}"></script>
<script src="{{ url('js/web-js/isotope.pkgd.min.js')}}"></script>
<script src="{{ url('js/web-js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ url('js/web-js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ url('js/web-js/jquery.nice-select.min.js')}}"></script>
<script src="{{ url('js/web-js/owl.carousel.min.js')}}"></script>
<script src="{{ url('js/web-js/jquery.odometer.min.js')}}"></script>
<script src="{{ url('js/web-js/jquery.accrue.min.js')}}"></script>
<script src="{{ url('js/web-js/jquery.appear.js')}}"></script>
<script src="{{ url('js/web-js/jarallax.min.js')}}"></script>
<script src="{{ url('js/web-js/slick.min.js')}}"></script>
<script src="{{ url('js/web-js/ajax-form.js')}}"></script>
<script src="{{ url('js/web-js/wow.min.js')}}"></script>
<script src="{{ url('js/web-js/aos.js')}}"></script>
<script src="{{ url('js/web-js/plugins.js')}}"></script>
<script src="{{ url('js/web-js/main.js')}}"></script>
</body>
</html>
