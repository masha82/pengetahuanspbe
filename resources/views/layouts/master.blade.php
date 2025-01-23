<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Manajemen Pengetahuan SPBE Kabupaten Situbondo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo_situbondo.png') }}" rel="icon">
  {{-- <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
  @stack('css')
  @yield('title')
  {{-- <style>
  .testimonial.testimonial-full .flex-control-nav {
      margin-top: 0px;
  }
  </style> --}}
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Manajemen Pengetahuan<span><br>
          Kab. Situbondo</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="#"><a href="{{ url('/') }}"><span>Home</span></a>
          </li>

          <li><a class="nav-link scrollto" href="index.html#about">Tentang SPBE</a></li>
          <li class="dropdown"><a href="index.html#services">Domain SPBE</a><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ url('policy') }}">Kebijakan SPBE</a></li>
              <li><a href="#">Tata Kelola SPBE</a></li>
              <li><a href="#">Manajemen SPBE</a></li>
              <li><a href="#">Layanan SPBE</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('regulasi') }}" >Regulasi</a></li>
          <li><a class="nav-link scrollto" href="{{ url('knowledge') }}">Pengetahuan Pemkab Situbondo</a></li>
          <li><a class="nav-link scrollto" href="#">Berita</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="index.html#about">Apa itu SPBE?</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

	<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap p-0 mb-4">
		@yield('content')
	</div>
</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            Copyright &copy; <strong><span>Dinas Kominfo Kabupaten Situbondo</span></strong>
          </div>
          <div class="credits">
            <p>Jl. PB. Sudirman No. 1, Kab. Situbondo</p>
          </div>
        </div>
      </div>
  </footer>
</body> 
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')
</body>
</html>