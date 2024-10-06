@extends('pages.landing2.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Divisi PSDM</h1>
                    <h4 class="text-white" data-aos="fade-up" data-aos-delay="400">Memberdayakan dan mengembangkan sumber daya
                        mahasiswa dalam manajerial diri dan pola pikir keorganisasian;</h4>
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
                    <img src={{ asset('landing2/assets/img/navaratna/CoverPsdm.png') }} class="img-fluid" alt="">
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
                            <h3>LKMMTD</h3>
                            <p>Merupakan usaha untuk mendorong keberhasilan mahasiswa Fakultas Ilmu Komputer dalam mencetak
                                kader-kader bangsa yang memiliki visi dan misi yang jelas serta berkompeten dalam dunia
                                nyata.</p>
                            <a href="https://instagram.com/lkmmtd_fasilkom" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Pilmapres</h3>
                            <p>yaitu sebuah kegiatan untuk memilih atau mencari dan memberikan penghargaan kepada mahasiswa
                                yang berhasil mencapai prestasi tinggi, baik kurikuler, kokurikuler, maupun ekstrakurikuler
                                sesuai dengan kriteria yang ditentukan.</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>PKM Center</h3>
                            <p>Dalam upaya untuk mendukung kegiatan (PKM) dalam bidang penelitian dan pengabdian pada
                                masyarakat yang diharapkan dapat meningkatkan kualitas intelektual dan karakter serta
                                membuka akses pengembangan minat dan bakat mahasiswa di bidang akademik sepanjang periode
                                belajarnya di perguruan tinggi.</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-discuss-line icon"></i>
                            <h3>FORGATE</h3>
                            <p>FORGATE BEM Fakultas Ilmu Komputer adalah suatu program kerja yang berorientasi pada
                                pembinaan dan pengembangan yang berada pada naungan Badan Eksekutif Mahasiswa Fakultas Ilmu
                                Komputer Universitas Jember.</p>
                            <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-discuss-line icon"></i>
                            <h3>PKKMB</h3>
                            <p>Program Pengenalan Kehidupan Kampus bagi Mahasiswa Baru agar mahasiswa dapat beradaptasi
                                dengan lingkungan baru</p>
                            <a href="https://www.instagram.com/pkkmb_ilkomunej/" class="read-more"><span>Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-discuss-line icon"></i>
                            <h3>PPMB</h3>
                            <p>Pembinaan dan Pengembangan Mahasiswa Baru untuk memberikan edukasi dan melatih kedisiplinan
                                mahasiswa baru sebelum mengikuti perkuliahan di kampus</p>
                            <a href="https://instagram.com/ppmb_ilkomunej" class="read-more"><span>Selengkapnya</span> <i
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
            <p>Daftar Anggota PSDM</p>
        </header>

        <div class="row members-container">
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/wawan.png" alt="Member 1">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/caca.png" alt="Member 2">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/adis.png")" alt="Member 4">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/aqil.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/regina.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/nilna.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/diana.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/bagas.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/silvi.png">
                </div>
            </div>
            <div class="member">
                <div class="member-img">
                    <img src="landing2/assets/img/navaratna/team/psdm/lina.png">
                </div>
            </div>
        </div>

    </div>
    </main>
@endsection
