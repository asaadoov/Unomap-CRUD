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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>
  @include('inc.navbar')

  <header id="subheader">
      <div id="subheader_wrap">
          <!-- Icon Background -->
          <div id="icon_border"></div>
      </div>
  </header>

<!-- Main Content -->
<section id="content">


<!-- Icon -->
<div id="icon_wrap">
    <!-- Icon Image can be modified in #Icon CSS Rule -->
    <div id="icon">
        <a href="#" title="Icon"><div id="icon_link"></div></a>
    </div>
</div>


<!-- Categories -->
<div id="content_wrap">
  @include('inc.messages')
  @yield('content')
</div>


<!-- Pagination/Social Media -->
<footer id="page_footer">
    <nav id="pagination">
        <!-- Footer Navigation -->
        <ul>
            <li><a href="#" class="pagination_link" id="left"><i class="fa fa-angle-double-left"></i> Previous</a></li>
        </ul>
        <ul>
            <li><a href="#" class="pagination_link">1</a></li>
            <li><a href="#" class="pagination_link" id="current_page">2</a></li>
            <li><a href="#" class="pagination_link">3</a></li>
            <li>...</li>
            <li><a href="#" class="pagination_link">18</a></li>
        </ul>
        <ul>
            <li><a href="#" class="pagination_link">Next <i class="fa fa-angle-double-right"></i></a></li>
        </ul>
    </nav>
    <!-- Blog Post Button -->
    <a href="#" title="New Blog Post"><div id="new_post">New Blog Post</div></a>
    <!-- Social Media -->
    <div id="social_media">
        <ul>
            <li><a href="#" class="facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="#" class="google_plus"><i class="fa fa-google-plus fa-lg"></i></a></li>
            <li><a href="#" class="linkedin"><i class="fa fa-linkedin fa-lg"></i></a></li>
            <li><a href="#" class="dribbble"><i class="fa fa-dribbble fa-lg"></i></a></li>
            <li><a href="#" class="instagram"><i class="fa fa-instagram fa-lg"></i></a></li>
            <li><a href="#" class="youtube"><i class="fa fa-youtube-play fa-lg"></i></a></li>
            <li><a href="#" class="pinterest"><i class="fa fa-pinterest fa-lg"></i></a></li>
        </ul>
    </div>
</footer>
<footer id="footer_banner">
    <div id="footer_banner_wrap">&#169; Copyright Unomap 2019</div>
</footer>
</section>
<!-- Blur.js - https://github.com/jakiestfu/Blur.js -->
<script type="text/javascript" src="{{ asset('js/blur.min.js') }}"></script>
<!-- FlexSlider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Custom Javascript -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
        {{-- <main class="py-4 container">
            @include('inc.messages')
            @yield('content')
        </main> --}}
