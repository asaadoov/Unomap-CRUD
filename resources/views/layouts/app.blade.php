<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Rokkitt:700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Rokkitt:700" rel="stylesheet">
    <link href="{{ asset('font-awesome/4-0-3/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive_stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('images/favicon.ico') }}" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/4-0-3/css/font-awesome.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body class="d-flex flex-column h-100" >
  @include('inc.navbar')

<!-- Main Content -->
<section id="content" class="d-flex justify-content-center align-items-end flex-shrink-0" style="height: 100%;">

<div id="content_wrap" >
  @yield('content')
</div>
</section>
<footer id="footer_banner" class="footer mt-auto py-2" >
    <div id="footer_banner_wrap">&#169; Copyright Unomap 2019</div>
</footer>

<!-- Blur.js - https://github.com/jakiestfu/Blur.js -->
<script type="text/javascript" src="{{ asset('js/blur.min.js') }}"></script>
<!-- FlexSlider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Custom Javascript -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
