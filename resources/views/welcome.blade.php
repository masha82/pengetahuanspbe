@extends('layouts.master')
@push('css')
    
@endpush
@section('title')
    <title>Manajemen Pengetahuan SPBE Kabupaten Situbondo</title>
@endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row justify-content-center gy-6">

            <div class="col-lg-5 col-md-8">
              <img src="assets/img/hero-carousel/hero-carousel-1.svg" alt="" class="img-fluid img">
            </div>

            <div class="col-lg-9 text-center">
              <h2>Manajemen Pengetahuan Kab. Situbondo</h2>
              <p></p>
            </div>

          </div>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="container">
          <div class="row justify-content-center gy-6">

            <div class="col-lg-5 col-md-8">
              <img src="assets/img/hero-carousel/hero-carousel-2.svg" alt="" class="img-fluid img">
            </div>

            <div class="col-lg-9 text-center">
              <h2>Penerapan SPBE</h2>
              <p></p>
              {{-- <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a> --}}
            </div>

          </div>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="container">
          <div class="row justify-content-center gy-6">

            <div class="col-lg-5 col-md-8">
              <img src="assets/img/hero-carousel/hero-carousel-3.svg" alt="" class="img-fluid img">
            </div>

            <div class="col-lg-9 text-center">
              <h2>Hasil Evaluasi SPBE</h2>
              <p></p>
              {{-- <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a> --}}
            </div>

          </div>
        </div>
      </div><!-- End Carousel Item -->
    </div>

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </section><!-- End Hero Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h1>SPBE</h1>
            <p>SPBE merupakan singkatan dari Sistem Pemerintahan Berbasis Elektronik. SPBE adalah penyelenggaraan pemerintahan yang memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan kepada Pengguna SPBE. Hal ini seperti yang tertuang pada Peraturan Presiden No. 95 Tahun 2018 tentang Sistem Pemerintahan Berbasis Elektronik.</p>
          </div>
  
          <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-5">
              <div class="about">
                <img src="{{ asset('assets/img/bupati.png') }}" class="img-fluid" alt="">
              </div>
            </div>
  
            <div class="col-lg-7">
              <h3 class="pt-0 pt-lg-5">Sistem Pemerintahan Berbasis Elektronik (SPBE)</h3>
  
              <!-- Tabs -->
              <ul class="nav nav-pills mb-3">
                <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Dasar Hukum SPBE</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Tahapan Evaluasi SPBE</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Domain dan Indikator SPBE</a></li>
              </ul><!-- End Tabs -->
  
              <!-- Tab Content -->
              <div class="tab-content">
  
                <div class="tab-pane fade show active" id="tab1">
  
                  <p class="fst-italic">Dasar hukum pelaksanaan pemantauan dan evaluasi SPBE</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Peraturan Presiden Nomor 95 Tahun 2018 tentang Sistem Pemerintahan Berbasis Elektronik</h4>
                  </div>
                  <p></p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Peraturan Menteri PANRB Nomor 59 Tahun 2020 tentang Pemantauan dan Evaluasi Sistem Pemerintahan Berbasis Elektronik</h4>
                  </div>
                  <p></p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Pedoman Menteri PANRB Nomor 6 Tahun 2023 tentang Tata Cara Pemantauan dan Evaluasi Sistem Pemerintahan Berbasis Elektronik</h4>
                  </div>
                  <p></p>
  
                </div><!-- End Tab 1 Content -->
  
                <div class="tab-pane fade show" id="tab2">
  
                  <p class="fst-italic">Tahapan Evaluasi SPBE Tahun 2023 (sesuai PERMENPANRB No. 59 Tahun 2020)</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Tahap Persiapan</h4>
                  </div>
                  <p>Tahapan Persiapan Evaluasi SPBE yaitu Penyusunan Perencanaan, Pembentukan Tim Asesor, dan Sosialisasi pedoman pemantauan dan evaluasi SPBE.</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Tahap Pelaksanaan</h4>
                  </div>
                  <p>Tahapan Pelaksanaan Evaluasi SPBE yaitu Penilaian mandiri, Penilaian dokumen, Penilaian interviu, dan Penilaian visitasi (jika diperlukan).</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Tahap Pelaporan</h4>
                  </div>
                  <p>Laporan tentang Evaluasi SPBE yaitu Indeks SPBE, Indeks Domain, Indeks Aspek, Nilai Indikator, dan Rekomendasi perbaikan.</p>
  
                </div><!-- End Tab 2 Content -->
  
                <div class="tab-pane fade show" id="tab3">
  
                  <p class="fst-italic">Domain dan Indikator SPBE (sesuai PERMENPANRB No. 59 Tahun 2020)</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Domain Kebijakan Internal SPBE</h4>
                  </div>
                  <p>Pada domain Kebijakan Internal SPBE terdapat 1 Aspek (Kebijakan Internal Tata Kelola SPBE) dan 10 Indikator terkait Kebijakan Internal SPBE.</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Domain Tata Kelola</h4>
                  </div>
                  <p>Pada domain Tata Kelola SPBE terdapat 3 Aspek (Perencanaan Strategis SPBE, Teknologi Informasi dan Komunikasi, dan Penyelenggara SPBE) dan 10 Indikator terkait Tata Kelola SPBE.</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Domain Manajemen SPBE</h4>
                  </div>
                  <p>Pada domain Manajemen SPBE terdapat 2 Aspek (Penerapan Manajemen SPBE dan Audit TIK) dan 11 Indikator terkait Manajemen SPBE.</p>
  
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Domain Layanan SPBE</h4>
                  </div>
                  <p>Pada domain Layanan SPBE terdapat 2 Aspek (Layanan Administrasi Pemerintahan dan Layanan Publik) dan 16 Indikator terkait Layanan SPBE.</p>
  
                </div><!-- End Tab 3 Content -->
  
              </div>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End About Section -->

<!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Berita</h2>
            <p>Berita terbaru tentang SPBE</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-date">Tue, December 12</span>
                  <span class="post-author"> / Julia Parker</span>
                </div>
                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...</p>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
  
      </section><!-- End Recent Blog Posts Section -->
@endsection