<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WRBT Consulting</title>
<!-- Bootstrap CSS -->
<link href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="{{ asset('frontend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- Linear icons CSS-->
<link href="{{ asset('frontend/assets/linearicons/css/icon-font.min.css') }}" rel="stylesheet">
<!-- Mobile Menu Css -->
<link href="{{ asset('frontend/assets/css/meanmenu.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
<!-- Animate CSS -->
<link href="{{ asset('frontend/assets/animate/animate.css') }}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon_wrbt.png') }}">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<header class="theme-header headerfirst" data-spy="affix" data-offset-top="197">
  <!--Header-Main-->
  <div class="header-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-3">
          <div class="logo"> <a href="index.html"><img src="{{ asset('frontend/images/logo_wrbt.png') }}" alt=""></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!--header-bottom-->
  <div class="header-bottom">
    <div class="container">
      <div class="nav-outer clearfix">
        <!-- Main Menu -->
        <!--Searchbox-->
        <nav class="main-menu">
          <div class="navbar-header">
            <!-- Toggle Button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="navbar-collapse collapse clearfix">
            <ul class="navigation clearfix">
              <li><a href="{{ route('welcome') }}">Home</a></li>
              <li><a href="{{ route('page.about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('page.ahli') }}">Tenaga Ahli Afiliasi</a></li>
                <li><a href="{{ route('page.service') }}">Layanan Kami</a></li>
              <li><a href="{{ route('page.client') }}">Daftar Klien</a></li>
              <li><a href="{{ route('page.contact') }}">Hubungi Kami</a></li>
            </ul>
          </div>
        </nav>
        <!-- Main Menu End-->
        <div class="srchbox1">
          <ul class="menusearch">
            <li>
              <div class="ex-search-bar" id="search_button1"> <i class="fa fa-error" aria-hidden="true"></i> </div>
              <div id="search_open" class="ex-search-box">
                <input placeholder="Search here" type="text">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </li>
          </ul>
        </div>
        <!--Quote Button-->
        {{-- <div class="quote-btn"> <a href="#" class="theme-btn quote-btn">Get a Quote</a> </div> --}}
      </div>
    </div>
  </div>
  <!--Sticky Header-->
  <div class="sticky-header">
    <div class="top-container clearfix">
      <!--Logo-->
      <div class="logo pull-left"> <a href="index.html" class="img-responsive"><img src="{{ asset('frontend/images/logo-fixed_wrbt.png') }}" alt="Expert" title="Expert"></a> </div>

      <!--Right Col-->
      <div class="right-col pull-right">
        <!-- Main Menu -->
        <nav class="main-menu">
          <div class="navbar-header">
            <!-- Toggle Button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="navbar-collapse collapse clearfix">
            <ul class="navigation clearfix">
              <li><a href="{{ route('welcome') }}">Home</a></li>
              <li><a href="{{ route('page.about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('page.ahli') }}">Tenaga Ahli Afiliasi</a></li>
			        <li><a href="{{ route('page.service') }}">Layanan Kami</a></li>
              <li><a href="{{ route('page.client') }}">Daftar Klien</a></li>
              <li><a href="{{ route('page.contact') }}">Hubungi Kami</a></li>
            </ul>
          </div>
        </nav>
        <!-- Main Menu End-->
        <!--Searchbox-->
        <ul class="menusearch">
          <li>
            <div class="ex-search-bar" id="search_button"> <i class="fa fa-error" aria-hidden="true"></i> </div>
            <div id="search_open1" class="ex-search-box">
              <input placeholder="Search here" type="text">
              <button> </button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--End Sticky Header-->
</header>
<!--Home Slider Start -->
@yield('content')
<!-- Footer Start -->
<footer id="footer-area">
    <div class="footer-top footer-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="widget widget_links fix">
              <h3 class="widget-title">Website Links</h3>
              <ul class="site_map_links">
                <li><a href="http://iaiglobal.or.id" target="_blank"><i class="fa fa-bullseye" aria-hidden="true"></i> Ikatan Akuntan Indonesia</a></li>
                <li><a href="http://pppk.kemenkeu.go.id/" target="_blank"><i class="fa fa-bullseye" aria-hidden="true"></i> PPPK Kemenkeu</a></li>
                <li><a href="https://pajak.go.id/" target="_blank"><i class="fa fa-bullseye" aria-hidden="true"></i> Ditjen Pajak</a></li>
                <li><a href="https://www.inkindo.org"target="_blank"><i class="fa fa-bullseye" aria-hidden="true"></i> Ikatan Nasional Konsultan Indonesia</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="widget">
              <h3 class="widget-title">Kontak Kami</h3>
              <p>Jl. Haji Nawi Raya No. 17/191<br>Jakarta Selatan 12420</p>
              <a href="javascript:void(0)" class="button contact-btn">Contact Us</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom fix">
      <div class="container bb-top foo-padding">
        <div class="row">
          <div class="col-sm-12">
            <div class="social-links">
              <ul>
                <li class="facebook"><a class="fa fa-facebook" href="javascript:void(0)"></a></li>
                <li class="google"><a class="fa fa-google-plus" href="javascript:void(0)"> </a></li>
                <li class="twitter"><a class="fa fa-twitter" href="javascript:void(0)"></a></li>
                <li class="linkedin"><a class="fa fa-linkedin" href="javascript:void(0)"></a></li>
                <li class="youtube"><a class="fa fa-youtube" href="javascript:void(0)"></a></li>
                <li class="dribbble"><a class="fa fa-dribbble" href="javascript:void(0)"></a></li>
              </ul>
            </div>
            <p>&copy; Copyright
              <script type="text/javascript">
          var d=new Date();
          document.write(d.getFullYear());
          </script>,
              WRBT Consulting | All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('frontend/assets/jquery/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/jquery/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/jquery/plugins.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('fronted/assets/jquery/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/custom.js') }}"></script>
  </body>
  </html>
