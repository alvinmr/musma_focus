@php
$configData = Helper::applClasses();
@endphp
@extends('layouts/fullLayoutMaster')

@section('title', 'Home Page')
    
@section('content')

<!-- ======= Header ======= -->
<header id="navbar" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center"> 
        <span>MUSMA FOCUS</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#header">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#polling">Polling</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact Us</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<section id="header" class="hero d-flex align-items-center">
  
  <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat Datang Teman Teman di MUSMA FOCUS</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">"Stay Focus, Stay On Top"</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#polling" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Mulai Polling</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('images/banner/upgrade.png') }}" class="img-fluid" alt="">
        </div>
      </div>
  </div>

</section>

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-12 d-flex flex-column justify-content-center text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h1>Apa Itu Musma Focus?</h1>
            <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
            <p>
              Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
            </p>
          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->


  <!-- ======= polling Section ======= -->
  <section id="polling" class="pricing">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>MUSMA FOCUS 2021</h2>
        <p>CALON KANDIDAT</p>
      </header>

      <div class="row gy-4" data-aos="fade-left">

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h1 style="color: #07d5c0;">Dicky Umardhani</h1>
            <img src="{{ asset('images/avatars/3.png') }}" class="img-fluid" alt="">
            <button href="#" class="btn-buy" data-bs-toggle="modal" data-bs-target="#modalVisiMisi">Lihat Visi & Misi</button>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="box">
            <h1 style="color: #65c600;">Dimas Aldi</h1>
            <img src="{{ asset('images/avatars/3.png') }}" class="img-fluid" alt="">
            <button href="#" class="btn-buy" data-bs-toggle="modal" data-bs-target="#modalVisiMisi">Lihat Visi & Misi</button>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <h1 style="color: #ff901c;">Rizky Chandra</h1>
            <img src="{{ asset('images/avatars/3.png') }}" class="img-fluid" alt="">
            <button href="#" class="btn-buy" data-bs-toggle="modal" data-bs-target="#modalVisiMisi">Lihat Visi & Misi</button>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="box">
            <h1 style="color: #ff0071;">Desak Mulya</h1>
            <img src="{{ asset('images/avatars/3.png') }}" class="img-fluid" alt="">
            <button href="#" class="btn-buy" data-bs-toggle="modal" data-bs-target="#modalVisiMisi">Lihat Visi & Misi</button>
          </div>
        </div>

        <div class="text-center text-lg-start d-grid gap-2 col-lg-3 mx-auto">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Mulai Polling</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>

      </div>
    </div>

  </section><!-- End Pricing Section -->

  {{-- Modal Visi dan Misi --}}
  <div class="modal fade" id="modalVisiMisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Visi & Misi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          asdasdasdasd
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>MUSMA FOCUS</span>
          </a>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
          Dicky <br>
          Denpasar, 28 August 2001<br>
          Bali <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
        &copy; Copyright <strong><span>Dicky Umardhani</span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection