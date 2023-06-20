<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png" />
  <!-- Author Meta -->
  <meta name="author" content="CodePixar" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <!-- <title>Karma Shop</title> -->
  @yield('title_tamplate')
  <!--
		CSS
		============================================= -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/linearicons.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/nice-select.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/nouislider.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/ion.rangeSlider.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/ion.rangeSlider.skinFlat.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
  <!-- Boostrap 530 -->
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap530/css/bootstrap.css')}}" />

<body>
  <!-- Start Header Area -->
  <header class="header_area sticky-header">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light main_box">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{ url('/')}}"><img src="/img/logo.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/')}}">Home</a>
              </li>
              <li class="nav-item {{ Request::is('kategori') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('kategori')}}">Kategori</a>
              </li>
              <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
              </li>
              <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('about') }}">About</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <!-- <li class="nav-item">
                                <a href="#" class="cart"><span class="ti-bag"></span></a>
                            </li> -->
              <li class="nav-item">
                <button class="search">
                  <span class="lnr lnr-magnifier" id="search"></span>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="search_input" id="search_input_box">
  <div class="container">
    <form class="d-flex justify-content-between" action="/" method="GET" id="search_form">
      <input type="text" class="form-control" id="search_input" name="Nama_Produk" placeholder="Search Here" />
      <button type="submit" class="btn"></button>
      <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
    </form>
  </div>
</div>
    </div>
  </header>
  <!-- End Header Area -->

  @yield('body_tamplate')

  <!-- start footer Area -->
  <div class="footer-dark">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 text">
            <h3>Services</h3>
              <p>Menjual Computer,Laptop dan Elektronik
                Pemasangan Home Security
                Service Computer & Printer</p>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">Company</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>DJIECOM</h3>
            <p>Djicom adalah toko komputer yang menjual berbagai merk komputer,laptop
              printer dan juga menjual Home Security, serta menerima perbaikan komputer dan printer
            </p>
          </div>
          <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a></div>
        </div>
        <p class="copyright">DJIECOM © 2020</p>
      </div>
    </footer>
  </div>

  <!-- End footer Area -->
  <script src="{{ asset('js/algolia.js') }}"></script>
  <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/nouislider.min.js') }}"></script>
  <script src="{{ asset('js/countdown.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="{{ asset('js/gmaps.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('bootstrap530/js/bootstrap.js') }}"></script>
  <script>
  document.getElementById("search_form").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form melakukan aksi default (refresh halaman)

    var keyword = document.getElementById("search_input").value;
    var url = "{{ url('search') }}" + "?Nama_Produk=" + keyword; // Menambahkan parameter pencarian ke URL

    window.location.href = url; // Mengarahkan ke URL hasil pencarian
  });
</script>
</body>

</html>