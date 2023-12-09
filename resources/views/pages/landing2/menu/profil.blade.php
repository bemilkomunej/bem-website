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
                    <li>Profil</li>
                </ol>
                <h2>Profil</h2>

            </div>
        </section><!-- End Breadcrumbs -->



        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>PROFILE</h2>
                    <p>Budaya Organisasi</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src={{ asset('landing2/assets/img/features.png') }} class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Senyum</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Sapa</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Salam</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Sopan</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Santun</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Solid</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- / row -->

                <!-- Feature Tabs -->
                <div class="row feture-tabs" data-aos="fade-up">
                    <div class="col-lg-6">
                        <h3>Sejarah Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Jember</h3>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">2017</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab2">2018</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab3">2019</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab4">2020</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab5">2021</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab6">2022</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#tab7">2023</a>
                            </li>
                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content" style="text-align: justify;">

                            <div class="tab-pane fade show active" id="tab1">
                                <p>Sebelum berdirinya <b>BEM PSSI</b>, telebih dahulu berdiri organisasi Himpunan Mahasiswa
                                    Sistem Informasi
                                    Pada tahun 2016 PSSI akan dijadikan Fakultas sehingga harus ada <b>organisasi
                                        tertinggi</b>.
                                    Putusan pertama pada rapat pendiri adalah nama ormawa yaitu HIMASIF setara BEM,
                                    mengingat masih berbentuk program studi.
                                    Bem Fasilko Unej didirikan tanggan <b>22 Juni 2015</b> bertempat di Ruang 1/ Ruang Aula
                                    Lt. 2 di gedung UPT Perpustakaan-24A Universitas Jember</p>
                            </div><!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">
                                <p>Sebelum berdirinya <b>BEM PSSI</b>, telebih dahulu berdiri organisasi Himpunan Mahasiswa
                                    Sistem Informasi
                                    Pada tahun 2016 PSSI akan dijadikan Fakultas sehingga harus ada <b>organisasi
                                        tertinggi</b>.
                                    Putusan pertama pada rapat pendiri adalah nama ormawa yaitu HIMASIF setara BEM,
                                    mengingat masih berbentuk program studi.
                                    Bem Fasilko Unej didirikan tanggan <b>22 Juni 2015</b> bertempat di Ruang 1/ Ruang Aula
                                    Lt. 2 di gedung UPT Perpustakaan-24A Universitas Jember</p>
                                <!-- <p>Kabinet KM ITB tahun ini dipimpin oleh Ardhi Rasy Wardhana (TA’13). Kablnet Suarasa kental dengan semangat nasionalismenya & membawa KM ITB menjadi Koordinator Isu Infrastruktur di BEM SI. Kabinet ini menginisiasi Kolaborasa, yaitu acara pesta rakyat bersama masyarakat sekitar kampus, mengirimkan Buku Kajian #AntiSerampangan 19 Mei kepada Presiden Joko VWidodo, & melakukan dialog bersama Pansus Hak Angket KPK di Gedung DPR RI bersama BEM UI yg mendapat banyak sorotan media. Kabinet ini menginisiasi kembali Diklat Aktivis Terpusat (DAT) & Diklat Dasar Aktivis Terpusat (DDAT) setelah beberapa tahun tidak terlaksana. Kabinet ini melaksanakan Aksi Indonesia Tetap Bersatu pada saat isu SARA kental mengisi media dan perpolitikan nasional. MWA WM pada masa ini adalah Fauzan Makarim (TM’13). Beliau kembali memperjuangkan perkara jam malam mahasiswa ITB.</p> -->
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade show" id="tab3">
                                <p>Sebelum berdirinya <b>BEM PSSI</b>, telebih dahulu berdiri organisasi Himpunan Mahasiswa
                                    Sistem Informasi
                                    Pada tahun 2016 PSSI akan dijadikan Fakultas sehingga harus ada <b>organisasi
                                        tertinggi</b>.
                                    Putusan pertama pada rapat pendiri adalah nama ormawa yaitu HIMASIF setara BEM,
                                    mengingat masih berbentuk program studi.
                                    Bem Fasilko Unej didirikan tanggan <b>22 Juni 2015</b> bertempat di Ruang 1/ Ruang Aula
                                    Lt. 2 di gedung UPT Perpustakaan-24A Universitas Jember</p>
                                <!-- <p>Di tahun ini ada acara kolaborasi yang mengajak seluruh elemen massa KM ITB untuk terlibat. Di dalamnya terjadi banyak kolaborasi elemen baik dalam hal keprofesian maupun dalam hal hobi. Adanya demo mahasiswa ITB atas kehadiran Jokowi ke kampus yang saat itu statusnya telah menjadi bakal calon Presiden RI. Demo yang dilakukan mengenai penolakan politisasi kampus ini diinisiasi oleh Jeffry Giranza selaku K3M.</p> -->
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade show" id="tab4">
                                <p>Sebelum berdirinya <b>BEM PSSI</b>, telebih dahulu berdiri organisasi Himpunan Mahasiswa
                                    Sistem Informasi
                                    Pada tahun 2016 PSSI akan dijadikan Fakultas sehingga harus ada <b>organisasi
                                        tertinggi</b>.
                                    Putusan pertama pada rapat pendiri adalah nama ormawa yaitu HIMASIF setara BEM,
                                    mengingat masih berbentuk program studi.
                                    Bem Fasilko Unej didirikan tanggan <b>22 Juni 2015</b> bertempat di Ruang 1/ Ruang Aula
                                    Lt. 2 di gedung UPT Perpustakaan-24A Universitas Jember</p>
                                <!-- <p>Di tahun ini, muncul warna baru di KM ITB. Kegiatan kampus mulai mengarah pada kedekatan mahasiswa dengan masyarakat dan juga dengan alam. Untuk pertama kalinya di OSKM ada manajemen sampah, agar sampah yang dihasilkan di acara kaderisasi terbesar ini tidak membludak. Sempat ada demo Bue dilakukan mahasiswa bersama BEM SI mengenai kenaikan BBM, dan ITB turut serta disana dengan Nyoman Anjani sebagai K3M saat itu juga turun. Kabinet Nyoman juga menginisiasi program Ekspedisi Pelita Muda yang akhirnya berjalan di awal tahun 2014. Di tahun ini juga ada peningkatan propaganda PKM yang ćukup meningkatkan animo massa mengenai kegiatan pengaryaan tersebut.</p> -->
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade show" id="tab5">
                                <p>Sebelum berdirinya <b>BEM PSSI</b>, telebih dahulu berdiri organisasi Himpunan Mahasiswa
                                    Sistem Informasi
                                    Pada tahun 2016 PSSI akan dijadikan Fakultas sehingga harus ada <b>organisasi
                                        tertinggi</b>.
                                    Putusan pertama pada rapat pendiri adalah nama ormawa yaitu HIMASIF setara BEM,
                                    mengingat masih berbentuk program studi.
                                    Bem Fasilko Unej didirikan tanggan <b>22 Juni 2015</b> bertempat di Ruang 1/ Ruang Aula
                                    Lt. 2 di gedung UPT Perpustakaan-24A Universitas Jember</p>
                                <!-- <p>Pada 1-2 Februari KM ITB mengadakan Kongres BEM Nasional untuk merumuskan solusi bagi perbaikan bangsa. Tetapi Kongres ini dibayang-bayangi perpecahan mahasiswa akibat tidak ikut sertanya KM ITB dalam aksi menuntut turunnya Mega-Hamzah. Pemilu Raya 2003 menghasilkan Ahmad Mustofa (TK’99) sebagai Presiden dengan ketua kongres 2003-2004 Indra Sembada (EL’2000), dan Anggota MWA Wakil Mahasiswa adalah Fantri Azhari (MS’99). OSKM 2003 yang bertemakan “Kreativitas Membangun Integrasi” diakhiri dengan insiden pembubaran di acara penutupan. Hal ini diakibatkan dinyanyikannya lagu kampus dengan gaya rock. Tahun ini juga terdapat beberapa aksi mulai dari longmarch Bandung-Jakarta memperingati 5 tahun reformasi, aksi penolakan USM-PMBP yang dianggap sebagai jalan komersialisasi kampus dan juga pembentukan Satuan Tugas Penyikapan Pemilu RI 2004.</p> -->
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade show" id="tab6">
                                <p>Sebelum berdirinya <b>BEM PSSI</b>, telebih dahulu berdiri organisasi Himpunan Mahasiswa
                                    Sistem Informasi
                                    Pada tahun 2016 PSSI akan dijadikan Fakultas sehingga harus ada <b>organisasi
                                        tertinggi</b>.
                                    Putusan pertama pada rapat pendiri adalah nama ormawa yaitu HIMASIF setara BEM,
                                    mengingat masih berbentuk program studi.
                                    Bem Fasilko Unej didirikan tanggan <b>22 Juni 2015</b> bertempat di Ruang 1/ Ruang Aula
                                    Lt. 2 di gedung UPT Perpustakaan-24A Universitas Jember</p>
                                <!-- <p>Syaiful Anam (EL’01) terpilih menjadi presiden. Kabinet Anam mulai mengalami isu legalitas kaderisasi, kasus skorsing Timbul Harahap (FI’02) dan Ridwan H. K. (FI’02), Ketua Dewan dan Ketua PPAM HIMAFI akibat kasus PPAM HIMAFI 2004, kasus pembekuan IMG, serta perubahan nama OSKM 2005 menjadi Pengenalan Satuan Akademik dan Kemahasiswaan (PSAK). OSKM 2005 yang diketuai Fitrah Dinata (SI’02) adalah OSKM pertama yang dibayang-bayangi isu legalitas kaderisasi. Pada Mei 2005, terdapat launching gerakan ‘Kampus Cerdas’ untuk mengurangi budaya mencontek di mahasiswa ITB. Sedangkan pada September, Wakil Rektor mengeluarkan surat edaran mengenai pelarangan kaderisasi bagi 2005. Oktober tahun itu juga diisi dengan aksi dari KM ITB yang menggulirkan isu tolak kenaikan BBM.</p> -->
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade show" id="tab7">
                                <p>Sebelum berdirinya <b>BEM PSSI</b>, telebih dahulu berdiri organisasi Himpunan Mahasiswa
                                    Sistem Informasi
                                    Pada tahun 2016 PSSI akan dijadikan Fakultas sehingga harus ada <b>organisasi
                                        tertinggi</b>.
                                    Putusan pertama pada rapat pendiri adalah nama ormawa yaitu HIMASIF setara BEM,
                                    mengingat masih berbentuk program studi.
                                    Bem Fasilko Unej didirikan tanggan <b>22 Juni 2015</b> bertempat di Ruang 1/ Ruang Aula
                                    Lt. 2 di gedung UPT Perpustakaan-24A Universitas Jember</p>
                                <!-- <p>Shana Fatina Sukarsono (TI’04) terpilih menjadi Presiden KM ITB. Pemilu ini memakai sistem pasangan calon Presiden dan calon anggota MWA Wakil Mahasiswa. Wahyu Bagus Yuliantok (PL’04) terpilih menjadi Anggota MWA. Kabinet Shana memulai program kerjanya dengan menyatakan sikap menolak kenaikan harga BBM, mendeklarasikan Rumah Belajar, audiensi dengan Menko Kesra dan Mensesneg terkait kebijakan menaikkan harga BBM, serta KonsolidasI BEM Seluruh Indonesia. Ketua PMB terpilih adalah Aulia Ibrahim Yeru (SR’05) dan nama PMB diubah menjadi Inisiasi Keluarga Mahasiswa (INKM).</p> -->
                            </div><!-- End Tab 2 Content -->


                        </div>

                    </div>

                    <div class="col-lg-6">
                        <!-- <iframe src="https://drive.google.com/file/d/1qhJKxj3hulmc6Xgewkh37WXylkdvUcU0/preview" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen" style="border-radius: 20px; width: 100%; height:100%;"></iframe> -->
                        <!-- widt 560 x 314 -->
                        <iframe class="speakerdeck-iframe" frameborder="0"
                        {{-- src="https://speakerdeck.com/player/326090e1c47343d9b38f22fb736d9624" --}}
                        src="https://speakerdeck.com/sibeux/profile-bem-fasilkom-unej-2023"
                        title="Profil BEM FASILKOM UNEJ 2023" allowfullscreen="true" mozallowfullscreen="true"
                            webkitallowfullscreen="true"
                            style="border: 0px; background: padding-box padding-box rgba(0, 0, 0, 0.1); margin: 0px; padding: 0px; border-radius: 6px; box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 40px; width: 100%; height: 100%; min-height: 314px"
                            data-ratio="1.78343949044586"></iframe>
                    </div>

                </div><!-- End Feature Tabs -->

                <!-- Feature Icons -->
                <div class="row feature-icons" data-aos="fade-up">
                    <h3>Arti dan Makna Logo Bem Fasilkom Unej</h3>

                    <div class="row">

                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src={{ asset('landing2/assets/img/clients/ormawa/ormawa-0.png') }} class="img-fluid p-4"
                                alt="">
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <!-- <i class="ri-line-chart-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 64px; height: 64px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Lambang UNEJ</h4>
                                        <p>Lambang UNEJ melambangkan BEM merupakan bagian dari UNEJ;</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <!-- <i class="ri-stack-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 50px; height: 50px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Warna Abu-abu</h4>
                                        <p>Warna abu-abu dan putih, melambangkan Fasilkom Unej;</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <!-- <i class="ri-brush-4-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 50px; height: 50px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Warna Biru</h4>
                                        <p>Warna biru melambangkan “terbuka”;</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <!-- <i class="ri-magic-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 50px; height: 50px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Warna Ungu</h4>
                                        <p>Warna ungu melambangkan “bijaksana”;</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <!-- <i class="ri-command-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 50px; height: 50px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Warna Merah</h4>
                                        <p>Warna merah melambangkan “kerja keras”;</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <!-- <i class="ri-radar-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 50px; height: 50px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Warna Kuning</h4>
                                        <p>Warna kuning melambangkan “sejahtera”;</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <!-- <i class="ri-radar-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 50px; height: 50px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Warna Orange</h4>
                                        <p>Warna orange melambangkan “gotong royong”; dan</p>
                                    </div>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <!-- <i class="ri-radar-line"></i> -->
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_98e3dlbb.json"
                                        background="transparent" speed="2" style="width: 50px; height: 50px;"
                                        autoplay loop></lottie-player>
                                    <div>
                                        <h4>Warna Hijau</h4>
                                        <p>Warna hijau melambangkan “berkembang”.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- End Feature Icons -->

            </div>

        </section><!-- End Features Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <a href="https://docs.google.com/document/d/13iyKdYI0diASB1n02LkbezzdOl-BdMSb/edit?usp=drive_link">
                            <div class="count-box">
                                <!-- <i class="bi bi-emoji-smile"></i> -->
                                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_huy6ppqm.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;" autoplay
                                    loop></lottie-player>
                                <div>
                                    <!-- <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="3" class="purecounter"></span> -->
                                    <span>AD</span>
                                    <p>Download</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="https://docs.google.com/document/d/1Yhue7x-_C43l3ihF7Z2ZLK35hVBG0niz/edit?usp=drive_link">
                            <div class="count-box">
                                <!-- <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i> -->
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_7fyq4w1u.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;" autoplay
                                    loop></lottie-player>
                                <div>
                                    <!-- <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span> -->
                                    <span>ART</span>
                                    <p>Download</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="https://docs.google.com/document/d/1s4Rxf3WI9LYd5JKjtjCuNKwjUJdgemj3/edit?usp=drive_link">
                            <div class="count-box">
                                <!-- <i class="bi bi-headset" style="color: #15be56;"></i> -->
                                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_uxm22dh7.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;" autoplay
                                    loop></lottie-player>
                                <div>
                                    <!-- <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span> -->
                                    <span>GBHO</span>
                                    <p>Download</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="https://docs.google.com/document/d/14YjeiMtWX9edGHVX6j6S1sFPnnyKSm5Z/edit?usp=drive_link">
                            <div class="count-box">
                                <!-- <i class="bi bi-people" style="color: #bb0852;"></i> -->
                                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_qso3udhf.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;" autoplay
                                    loop></lottie-player>
                                <div>
                                    <!-- <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span> -->
                                    <span>GBHK</span>
                                    <p>Download</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->
    </main><!-- End #main -->
@endsection
@section('customscript')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
