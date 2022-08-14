<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BEM Fasilkom Unej</title>
  <meta content="BEM merupakan lembaga eksekutif tertinggi di Fakultas Ilmu Komputer Universitas Jember" name="description">

  <meta content="Website Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Jember" name="keywords">

  <!-- Favicons -->
  <!-- <link href={{asset("landing2/assets/img/icon/favicon.png")}} rel="icon"> -->
  <link href={{asset("landing2/assets/img/icon/apple-icon.png")}} rel="icon">
  <link href={{asset("landing2/assets/img/icon/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("landing2/assets/vendor/aos/aos.css")}} rel="stylesheet">
  <link href={{asset("landing2/assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{asset("landing2/assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{asset("landing2/assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{asset("landing2/assets/vendor/remixicon/remixicon.css")}} rel="stylesheet">
  <link href={{asset("landing2/assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{asset("landing2/assets/css/style.css")}} rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src={{asset('landing2/assets/img/icon/apple-icon.png')}} alt="Logo Bem">
        <span>BEM Fasilkom</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Beranda</a></li>
          <li><a href="{{ route('blog') }}">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('profil') }}">Profil</a></li>
              <li><a href="{{ route('kabinet')}}">Kabinet</a></li>
              <li class="dropdown"><a href="#"><span>Divisi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('kominfo') }}">Kominfo</a></li>
                  <li><a href="{{ route('perekonomian') }}">Perekonomian</a></li>
                  <li><a href="{{ route('psdm') }}">PSDM</a></li>
                  <li><a href="{{ route('adkesma') }}">Adkesma</a></li>
                  <li><a href="{{ route('rumahtangga') }}">Rumah Tangga</a></li>
                  <li><a href="{{ route('luardalam') }}">Luar Dalam</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://uc3.unej.ac.id/">Pengaduan</a></li>
              <li><a href="https://ilkom.unej.ac.id/pusat-informasi-dan-layanan/">Administrasi</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="https://linktr.ee/oprecbemilkom2k21">Open Recruitment</a></li>
              <li><a href="https://drive.google.com/file/d/1jhX0bsRf5wRjFzqlG03ZYN_LvAkdDRIR/view">SOP Kerja Sama</a></li>
              <li><a href="https://drive.google.com/file/d/1M0Y3SvxucQDrw8Vk-ZAMfIsvFEXEQLlM/view">SOP Kunjungan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ route('ppmb') }}">PPMB</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    {{-- <div class="footer-newsletter"> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center"> --}}
    {{-- <div class="col-lg-12 text-center"> --}}
    {{-- <h4>Our Newsletter</h4> --}}
    {{-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> --}}
    {{-- </div> --}}
    {{-- <div class="col-lg-6"> --}}
    {{-- <form action="" method="post"> --}}
    {{-- <input type="email" name="email"><input type="submit" value="Subscribe"> --}}
    {{-- </form> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src={{asset('landing2/assets/img/icon/apple-icon.png')}} alt="Logo Bem">
              <span>BEMILKOMUNEJ</span>
            </a>
            <p>Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Jember.</p>
            <div class="social-links mt-3">
              <a href="https://t.me/bemilkomunej" class="telegram"><i class="bi bi-telegram"></i></a>
              <a href="https://web.facebook.com/bemilkomunej/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/bemilkomunej" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/bemilkom/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Halaman Kami</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/">Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/blog">Berita</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('kabinet') }}">Kabinet</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('profil') }}">Profil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('ppmb') }}">PPMB</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Hubungi Kami</h4>
            <p>
              Jalan. Kalimantan No. 37, <br>
              Kampus Tegalboto, Jember,<br>
              Jawa Timur, 68121, Indonesia <br><br>
              <strong>Phone:</strong> +62 838 9162 0532<br>
              <strong>Email:</strong> bemilkom@cs.unej.ac.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>
            <script>
              document.write(/\d{4}/.exec(Date())[0])
            </script>
          </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bemilkomunej.com/">Bemilkomunej</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{asset("landing2/assets/vendor/purecounter/purecounter.js")}}></script>
  <script src={{asset("landing2/assets/vendor/aos/aos.js")}}></script>
  <script src={{asset("landing2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("landing2/assets/vendor/glightbox/js/glightbox.min.js")}}></script>
  <script src={{asset("landing2/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
  <script src={{asset("landing2/assets/vendor/swiper/swiper-bundle.min.js")}}></script>
  <script src={{asset("landing2/assets/vendor/php-email-form/validate.js")}}></script>

  @yield('customscript')
  
  <!-- Template Main JS File -->
  <script src={{asset("landing2/assets/js/main.js")}}></script>

  @livewireScripts
</body>

</html>