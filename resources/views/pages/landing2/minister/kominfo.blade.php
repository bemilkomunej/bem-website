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
                    <img src={{ asset('landing2/assets/img/sandyakala/cover-kominfo.png') }} class="img-fluid"
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
                            <h3>Sarasehan</h3>
                            <p>Sarasehan merupakan salah satu program kerja divisi kominfo yang bertujuan untuk diskusi
                                bersama dengan bem luar fasilkom</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Study Excursie</h3>
                            <p>kegiatan yang dapat menambah informasi terkait standar kompetensi yang dipersyaratkan dan
                                diskusi dengan para praktisi TI terkait dengan kurikulum dan proses pembelajaran yang
                                diperlukan dalam menyiapkan mahasiswa untuk memenuhi kebutuhan industri TI.</p>
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

                <div class="row gy-4">
                    @foreach ($members as $member)
                        <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                            data-toggle="tooltip" title="{{ $member->name }}">
                            <div class="member">
                                <div class="member-img">
                                    <img src={{ asset('landing2/assets/img/member/' . $member->thumbnail) }}
                                        class="img-fluid" alt="{{ $member->name }}">
                                    {{-- <div class="social">
                                <a href="{{ $member->instagram }}"><i class="bi bi-instagram"></i></a>
                                <a href="{{ $member->linkedin }}"><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                                </div>
                                <div class="member-info">
                                    <h4 class="text-truncate">{{ $member->name }}</h4>
                                    <span>{{ $member->position . ' ' . $member->division }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Team Section -->
    </main>
@endsection
