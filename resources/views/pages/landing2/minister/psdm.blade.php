@extends('pages.landing2.main')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Kementerian PSDM</h1>
                <h4 class="text-white" data-aos="fade-up" data-aos-delay="400">Memberdayakan dan mengembangkan sumber daya mahasiswa dalam manajerial diri dan pola pikir keorganisasian;</h4>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#services" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Detail</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src={{asset("landing2/assets/img/team/Team-PSDM.png")}} class="img-fluid" alt="">
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
                        <p>Merupakan usaha untuk mendorong keberhasilan mahasiswa Fakultas Ilmu Komputer dalam mencetak kader-kader bangsa yang memiliki visi dan misi yang jelas serta berkompeten dalam dunia nyata.</p>
                        <a href="https://instagram.com/lkmmtd_fasilkom" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Pilmapres</h3>
                        <p>yaitu sebuah kegiatan untuk memilih atau mencari dan memberikan penghargaan kepada mahasiswa yang berhasil mencapai prestasi tinggi, baik kurikuler, kokurikuler, maupun ekstrakurikuler sesuai dengan kriteria yang ditentukan.</p>
                        <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>PKM Center</h3>
                        <p>Dalam upaya untuk mendukung kegiatan (PKM) dalam bidang penelitian dan pengabdian pada masyarakat yang diharapkan dapat meningkatkan kualitas intelektual dan karakter serta membuka akses pengembangan minat dan bakat mahasiswa di bidang akademik sepanjang periode belajarnya di perguruan tinggi.</p>
                        <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Staf Muda</h3>
                        <p>Staf Muda BEM Fakultas Ilmu Komputer adalah suatu program kerja yang berorientasi pada pembinaan dan pengembangan yang berada pada naungan Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Jember.</p>
                        <a href="https://wa.me/+623891620532" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>PKKMB</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                        <a href="https://www.instagram.com/pkkmb_ilkomunej/" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-discuss-line icon"></i>
                        <h3>PPMB</h3>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                        <a href="https://instagram.com/ppmb_ilkomunej" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
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
                <p>Daftar Anggota Kominfo</p>
            </header>

            <div class="row gy-4">
                @foreach( $members as $member)
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-toggle="tooltip" title="{{ $member->name }}">
                    <div class="member">
                        <div class="member-img">
                            <img src={{asset("storage/img/member/" . $member->thumbnail)}} class="img-fluid" alt="{{ $member->name }}">
                            <div class="social">
                                <a href="{{ $member->instagram }}"><i class="bi bi-instagram"></i></a>
                                <a href="{{ $member->linkedin }}"><i class="bi bi-linkedin"></i></a>
                            </div>
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