<!DOCTYPE html>
<html lang="zxx">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>  @yield('title')  | Famous Electronics eCommerce Website Template</title>
<meta name="google" content="clean template, electronics Store, html5, electronics template, makeup store, modern, multipurpose store, electronics shop, commerce, ecommerce, electronics, electronics theme, megamenu, modern, retail, store"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicons Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ url('site_theme/images/favicon.ico')}}">

<!-- CSS Style -->
<link type="text/css" rel="stylesheet" href="{{ url('site_theme/css/style.css')}}">
 @yield('css') 
</head>

@yield('body')

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 

<!-- mobile menu -->
<div id="mobile-menu">
  @include('site.extra.mobile_menu')
</div>
<!-- end mobile menu -->
<div id="page"> 
  
  <!-- Header -->
  <header>
    @include('site.extra.header_logo')
  </header>
  <!-- end header -->
  <nav>
    @include('site.extra.main_menu')
  </nav>
  
  @yield('content')
  <!-- BANNER-AREA-END -->
  
  <!-- Footer -->
  <footer>
    @include('site.extra.footer')
  </footer>
 <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a> 
  
  <!-- End Footer --> 
</div>


<!-- JS --> 
@include('site.extra.footer_js')
<!-- jquery js --> 
@yield('js')

{{-- <script type="text/javascript" src="//themera.net/embed/themera.js?id=65867"></script> --}}
</body>
</html>
