@extends('pages.landing2.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Divisi Kominfo</h1>
                    <h4 class="text-white" data-aos="fade-up" data-aos-delay="400">Mengelola dan mengembangkan media informasi
                        dan komunikasi BEM Fasilkom UNEJ</h4>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#services"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Detail</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src={{ asset('landing2/assets/img/navaratna/CoverKominfo.png') }} class="img-fluid"
                        alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>PROKER</h2>
                    <p>Program Kerja Kominfo</p>
                </header>

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>BISIK</h3>
                            <p>Bisik merupakan program kerja yang diadakan sebagai sarana pengembangan potensi dan bakat mahasiswa dalam bentuk podcast</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Mading Fasilkom</h3>
                            <p>Mading Fasilkom merupakan program kerja pengelolaan mading fakultas ilmu komputer sebagai sarana penyebaran informasi dari internal maupun eksternal.</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Pengelolaan Sosial Media</h3>
                            <p>Pengelolaan sosial media merupakan program kerja yang bertugas untuk mengelola konten dari sosial media bem fasilkom unej</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400"> --}}
                    {{-- <div class="service-box green"> --}}
                    {{-- <i class="ri-discuss-line icon"></i> --}}
                    {{-- <h3>Ledo Markt</h3> --}}
                    {{-- <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p> --}}
                    {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500"> --}}
                    {{-- <div class="service-box red"> --}}
                    {{-- <i class="ri-discuss-line icon"></i> --}}
                    {{-- <h3>Asperiores Commodi</h3> --}}
                    {{-- <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p> --}}
                    {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600"> --}}
                    {{-- <div class="service-box purple"> --}}
                    {{-- <i class="ri-discuss-line icon"></i> --}}
                    {{-- <h3>Velit Doloremque.</h3> --}}
                    {{-- <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p> --}}
                    {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700"> --}}
                    {{-- <div class="service-box pink"> --}}
                    {{-- <i class="ri-discuss-line icon"></i> --}}
                    {{-- <h3>Dolori Architecto</h3> --}}
                    {{-- <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p> --}}
                    {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>ANGGOTA</h2>
            <p>Daftar Anggota Kominfo</p>
        </header>

        <div class="row members-container">
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/rio.png" alt="Member 1">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/amel.png" alt="Member 2">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/devina.png")" alt="Member 4">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/dinar.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/lia.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/natan.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/maul.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/yanu.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/hafiz.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/kominfo/danu.png">
                </div>
            </div>
        </div>

    </div>
</section>


        <!-- End Team Section -->
    </main>
@endsection

