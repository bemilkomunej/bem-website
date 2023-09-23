@extends('pages.landing2.main')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Divisi Adkesma</h1>
                <h4 class="text-white" data-aos="fade-up" data-aos-delay="400">Mencari, mengkaji dan menindaklanjuti
                    persoalan-persoalan yang ada di dalam lingkungan Fakultas Ilmu Komputer Universitas Jember dengan
                    data-data yang di dapat dari dalam maupun luar Fakultas Ilmu Komputer Universitas Jember.</h4>
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
                <img src={{asset("landing2/assets/img/team/Team-ADKESMA.png")}} class="img-fluid" alt="">
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
                <p>Program Kerja Adkesma</p>
            </header>

            <div class="row gy-4 justify-content-center">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Rasio</h3>
                        <p>Diselenggarakannya kegiatan tersebut untuk menyatukan dan memberikan informasi yang tepat
                            terkait format surat menyurat, format proposal kegiatan dan lain sebagainya. Kegiatan
                            tersebut juga sebagai upaya untuk memperlancar proses persiapan maupun proses perizinan
                            kegiatan.</p>
                        <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Mubes</h3>
                        <p>forum musyawarah untuk membahas pedoman kerja AD/ART, GBHO dan GBHK BEM Fakultas Ilmu
                            Komputer kepada seluruh perwakilan angkatan, perwakilan organisasi lain yang bertanggung
                            jawab kepada BEM Fakultas Ilmu Komputer</p>
                        <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Sosialisasi IKM</h3>
                        <p>Memberikan informasi yang tepat mengenai isi undang-undang dasar Ikatan Keluarga Mahasiswa
                            kepada seluruh mahasiswa Fakultas Ilmu Komputer Universitas Jember.</p>
                        <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>ANGGOTA</h2>
                <p>Daftar Anggota Perekonomian</p>
            </header>

            <div class="row gy-4">
                @foreach( $members as $member)
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-toggle="tooltip" title="{{ $member->name }}">
                    <div class="member">
                        <div class="member-img">
                            <img src={{Storage::url("img/member/" . $member->thumbnail)}} class="img-fluid"
                                alt="{{ $member->name }}">
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
