<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Fitnvine</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('front/css/magnific-popup.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}"> --}}
  @stack('top-script')
  <link rel="shortcut icon" href="{{ asset('front/img/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('front/img/apple-touch-icon.html') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front/img/apple-touch-icon-72x72.html') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front/img/apple-touch-icon-114x114.html') }}">
</head>

<body>
@include('content.home.header')

@yield('content')
    
@include('content.home.footer')

<div class="menu-mobile">
  <ul>
    <li>Home</li>
    <li>Shop</li>
  </ul>
</div>

  <script src="{{asset('front/js/jQuery_v3.1.1.min.js')}}"></script>
  <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
  {{-- <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
  <script src="{{asset('front/js/jquery.firstVisitPopup.js')}}"></script> --}}
  <script src="{{asset('front/js/custom.js')}}"></script>
  @stack('bottom-script')
</body>

</html>