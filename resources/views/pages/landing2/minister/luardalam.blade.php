@extends('pages.landing2.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Divisi Luar Dalam</h1>
                    <h4 class="text-white" data-aos="fade-up" data-aos-delay="400">Melakukan konsolidasi dan kerja sama
                        antara BEM Fasilkom UNEJ dengan stakeholder dari dalam maupun luar Fakultas Ilmu Komputer
                        Universitas Jember;</h4>
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
                    <img src={{ asset('landing2/assets/img/navaratna/CoverLuarDalam.png') }} class="img-fluid"
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
                    <p>Program Kerja PSDM</p>
                </header>

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>IDLe</h3>
                            <p>bisa meningkatkan kualitas dalam berpikir kritis,menganalisa permasalahan,memberikan solusi,
                                serta memiliki jiwa berkompetisi. Lomba ini ditujukan untuk mengasah potensi dan bakat semua
                                mahasiswa,sesuai dengan bidang yang ditekuni dan untuk persiapan menghadapi lomba ditingkat
                                yang lebih lanjut.</p>
                            <a href="https://idle-unej.my.id" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Makrab</h3>
                            <p>Menumbuhkan, mempererat rasa kekeluargaan dan tali persaudaraan serta rasatanggung jawab.
                                Membina potensi pengurus baru dalam mengembangkan dan membentuk jiwa kepemimpinan yang
                                tangguh, mandiri, konsisten, berprinsip serta memiliki loyalitas yang tinggi.</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Semnas</h3>
                            <p>Menambah wawasan mahasiswa Fakultas Ilmu Komputer Universitas Jember dan masyarakat umum
                                tentang Era Society 5.0 di bidang IT</p>
                            <a href="https://www.instagram.com/semnasfasilkom/" class="read-more"><span>Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i></a>
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
                    <p>Daftar Anggota Luar Dalam</p>
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
