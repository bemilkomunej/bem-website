@extends('pages.landing2.main')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <ul class="background">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Kabinet</li>
                </ol>
                <h2>Kabinet</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>LOGO</h2>
                    <p>Arti dan Makna <span class="text-success">Logo</span> Kabinet</p>
                </header>

                <!-- Feature Icons -->
                <div class="row feature-icons logo-kabinet" data-aos="fade-up">
                    <!-- <h3>Arti dan Makna Logo Kabinet</h3> -->

                    <div class="row">
                        <div class="col-xl-4 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-12 icon-box" data-aos="fade-up">
                                    <!-- <i class="ri-line-chart-line"></i> -->
                                    <div class="feature-box">
                                        <h4>Sandyakala</h4>
                                        <hr>
                                        <p>Sandyakala mengandung arti 'pertemuan waktu', yakni perpaduan
                                            kekuatan besar antara UKM, ORMAWA, dan komunitas di FASILKOM, sehingga BEM bisa
                                            menjadi wadah kesatuan bagi UKM ORMAWA FASILKOM sebagai landasan berpikir untuk
                                            melangkah bersinergi mencapai tujuan. </p>
                                    </div>
                                </div>

                                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <!-- <i class="ri-stack-line"></i> -->
                                    <div class="feature-box">
                                        <h4>Bentuk Angka 8</h4>
                                        <hr>
                                        <p>Bentuk logo yang menyerupai angka 8 melambangkan BEM FASILKOM sekarang telah
                                            memasuki periode ke-8.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 text-center align-self-center" data-aos="fade-right" data-aos-delay="100">
                            <div class="card">
                                <img src={{ asset('landing2/assets/img/sandyakala/logos-bem.png') }} class="img-fluid p-4"
                                    alt="Logo Kabine">
                            </div>
                        </div>

                        <div class="col-xl-4 d-flex content">
                            <div class="row align-self-center gy-4">
                                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <div class="feature-box">
                                        <!-- <i class="ri-command-line"></i> -->
                                        <h4>Huruf S</h4>
                                        <hr>
                                        <p>Bentuk siluet huruf 'S' dan angka 8 merujuk pada nama kabinet yaitu Sandyakala
                                            yang merupakan kabinet ke-8. Terdapat logo BEM yang diikuti 6 titik yang
                                            memiliki arti jumlah divisi di BEM FASILOKM UNEJ.</p>
                                    </div>
                                </div>

                                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <!-- <i class="ri-radar-line"></i> -->
                                    <div class="feature-box">
                                        <h4>Warna Cream & Magenta</h4>
                                        <hr>
                                        <p>Dalam keseluruhan filosofi warna cream & magenta dapat dipahami sebagai
                                            representasi organisasi yang kreatif, inovatif, dan penuh semangat.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div><!-- End Feature Icons -->

            </div>

        </section><!-- End Features Section -->

        <!-- Banner Section -->
        <section class="banner">
            <img src={{ asset('landing2/assets/img/sandyakala/visi-misi-2023.png') }} alt="banner visi misi">
        </section>
        <!-- End Banner Section -->

        <section id="visi_misi">
            <div class="container">
                <div class="row mb-3 p-3">
                    <div class="col-md-12 col-lg-4">
                        <div class="content_visi_kabinet_title mb-3">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48"
                                        height="48">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M19 22H5a3 3 0 0 1-3-3V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12h4v4a3 3 0 0 1-3 3zm-1-5v2a1 1 0 0 0 2 0v-2h-2zM6 7v2h8V7H6zm0 4v2h8v-2H6zm0 4v2h5v-2H6z"
                                            fill="rgba(65,84,241,1)" />
                                    </svg>
                                </li>
                                <li>
                                    <h2 class="text-success mb-0 text-decoration-underline">Visi</h2>
                                    <p class="fw-bolder mb-0">BEM FASILKOM UNEJ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="content_visi_kabinet_description border-bottom border-secondary">
                            <p class="fw-bold text-white">Menjadikan BEM FASILKOM UNEJ sebagai organisasi yang kompeten,
                                berintegritas, intreaktif, dan adaptif selaras terhadap seluruh elemen yang ada di Fakultas
                                Ilmu Komputer untuk meciptakan Fakultas Ilmu Komputer yang lebih sinergis.</p>
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-md-12 col-lg-4">
                        <div class="content_misi_kabinet_title mb-3">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48"
                                        height="48">
                                        <path fill="none" d="M0 0L24 0 24 24 0 24z" />
                                        <path
                                            d="M6 4v4h12V4h2.007c.548 0 .993.445.993.993v16.014c0 .548-.445.993-.993.993H3.993C3.445 22 3 21.555 3 21.007V4.993C3 4.445 3.445 4 3.993 4H6zm3 13H7v2h2v-2zm0-3H7v2h2v-2zm0-3H7v2h2v-2zm7-9v4H8V2h8z"
                                            fill="rgba(65,84,241,1)" />
                                    </svg>
                                </li>
                                <li>
                                    <h2 class="text-success mb-0 text-decoration-underline">Misi</h2>
                                    <p class="fw-bolder mb-0">BEM FASILKOM UNEJ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <ol class="fw-bold text-white">
                            <li>
                                <p>Membangun internal BEM FASILKOM UNEJ yang berdasarkan kekeluargaan dan IMTAQ; </p>
                            </li>
                            <li>
                                <p>Menjalin hubungan baik dengan seluruh warga Fakultas Ilmu Komputer Universitas Jember;
                                </p>
                            </li>
                            <li>
                                <p>Meningkatkan potensi mahasiswa Fakultas Ilmu Komputer Universitas Jember dalam bidang
                                    akademik dan non akademik; </p>
                            </li>
                            <li>
                                <p>menyelaraskan mahasiswa Fakultas Ilmu Komputer Universitas Jember dengan civitas
                                    akademik, dan</p>
                            </li>
                            <li>
                                <p>Meningkatkan profesionalismen dalam menjalankan fungsi dan tanggung jawab BEM FASILKOM
                                    UNEJ;</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Divisi</h2>
                    <p>DIVISI BEM FASILKOM UNEJ</p>
                </header>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src={{ asset('landing2/assets/img/sandyakala/cover-psdm.png') }} class="img-fluid"
                                alt="PSDM Squad">
                            <h3>Divisi PSDM</h3>
                            <p>Divisi Pengembangan Sumber Daya Mahasiswa berorientasi pada potensi manajerial dan
                                mengembangkan kemampuan dalam bidang organisasi individu maupun berkelompok.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src={{ asset('landing2/assets/img/sandyakala/cover-kominfo.png') }} class="img-fluid"
                                alt="Kominfo Squad">
                            <h3>Divisi KOMINFO</h3>
                            <p>Divisi Komunikasi dan Informasi yang berorientasi pada komunikasi, mengelola informasi di
                                bidang ilmu komputer, serta sebagai penyedia media informasi dan komunikasi BEM Fasilkom
                                UNEJ.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src={{ asset('landing2/assets/img/sandyakala/cover-adkesma.png') }} class="img-fluid"
                                alt="Adkesma Squad">
                            <h3>Divisi ADKESMA</h3>
                            <p>Divisi Advokasi dan Kesatuan Mahasiswa yang berorientasi pada persatuan
                                mahasiswa dan memperjuangkan hasil keputusan forum bersama.</p>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src={{ asset('landing2/assets/img/sandyakala/cover-luardalam.png') }} class="img-fluid"
                                alt="Luar Dalam Squad">
                            <h3>Divisi LuarDalam</h3>
                            <p>Divisi Luar Dalam yang berorientasi pada memperkenalkan Fasilkom,
                                dan menjalin koordinasi, konsolidasi, dan monitoring juga hubungan baik dengan
                                lembaga mahasiswa Fakultas Ilmu Komputer Universitas Jember termasuk pengurus
                                BEM Fasilkom UNEJ.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src={{ asset('landing2/assets/img/sandyakala/cover-rt.png') }} class="img-fluid"
                                alt="Rumah Tangga Squad">
                            <h3>Divisi RumahTangga</h3>
                            <p>Divisi Minat Bakat (Rumah Tangga) yang berorientasi pada
                                penjaringan dan peningkatan mahasiswa dibidang akademik dan non-akademik baik
                                individu maupun kelompok serta koordinasi dengan Unit Kegiatan Mahasiswa.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src={{ asset('landing2/assets/img/sandyakala/cover-perekonomian.png') }} class="img-fluid"
                                alt="Perekonomian Squad">
                            <h3>Divisi Perekonomian</h3>
                            <p>Divisi Perekonomian yang berorientasi pada kesejahteraan BEM Fasilkom UNEJ melalui kegiatan
                                untuk menambah pemasukan dalam bentuk apa pun.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>STRUKTUR</h2>
                    <p>KABINET SANDYAKALA</p>
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

    </main><!-- End #main -->
@endsection
