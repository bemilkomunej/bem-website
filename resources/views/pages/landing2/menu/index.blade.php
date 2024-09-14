@extends('pages.landing2.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Jember</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">#HarmoniAspirasiKekuatanAksi</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src={{ asset('landing2\assets\img\navaratna\zuama-dejan.png') }} class="img-fluid"
                        alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Kami</h3>
                            <h2>Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Jember</h2>
                            <p style="text-align: justify;">
                                Badan Eksekutif Mahasiswa (BEM) merupakan lembaga eksekutif tertinggi di Fakultas Ilmu
                                Komputer (FASILKOM) UNEJ. Dalam menjalankan tugas dan fungsinya, BEM FASILKOM UNEJ
                                bertanggung jawab kepada Badan Perwakilan Mahasiswa (BPM) FASILKOM UNEJ yang bersifat
                                representatif terhadap mahasiswa FASILKOM UNEJ.

                            </p>
                            <div class="text-center text-lg-start">
                                <a href="{{ route('profil') }}"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src={{ asset('landing2/assets/img/about-bem.JPG') }} class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- Banner Section -->
        <section class="banner">
            <img src={{ asset('landing2/assets/img/cover-kabinet-navaratna.png') }} alt="">
        </section>
        <!-- End Banner Section -->

        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts"> --}}
        {{-- <div class="container" data-aos="fade-up"> --}}

        {{-- <div class="row gy-4"> --}}

        {{-- <div class="col-lg-3 col-md-6"> --}}
        {{-- <div class="count-box"> --}}
        {{-- <i class="bi bi-emoji-smile"></i> --}}
        {{-- <div> --}}
        {{-- <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="3" class="purecounter"></span> --}}
        {{-- <p>Pengurus</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6"> --}}
        {{-- <div class="count-box"> --}}
        {{-- <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i> --}}
        {{-- <div> --}}
        {{-- <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span> --}}
        {{-- <p>Program Kerja</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6"> --}}
        {{-- <div class="count-box"> --}}
        {{-- <i class="bi bi-headset" style="color: #15be56;"></i> --}}
        {{-- <div> --}}
        {{-- <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span> --}}
        {{-- <p>Divisi</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6"> --}}
        {{-- <div class="count-box"> --}}
        {{-- <i class="bi bi-people" style="color: #bb0852;"></i> --}}
        {{-- <div> --}}
        {{-- <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span> --}}
        {{-- <p>Media Partner</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- </div> --}}

        {{-- </div> --}}
        {{-- </section><!-- End Counts Section --> --}}



        <!-- ======= Pricing Section ======= -->
        {{-- <section id="pricing" class="pricing"> --}}

        {{-- <div class="container" data-aos="fade-up"> --}}

        {{-- <header class="section-header"> --}}
        {{-- <h2>Pricing</h2> --}}
        {{-- <p>Check our Pricing</p> --}}
        {{-- </header> --}}

        {{-- <div class="row gy-4" data-aos="fade-left"> --}}

        {{-- <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100"> --}}
        {{-- <div class="box"> --}}
        {{-- <h3 style="color: #07d5c0;">Free Plan</h3> --}}
        {{-- <div class="price"><sup>$</sup>0<span> / mo</span></div> --}}
        {{-- <img src={{asset("landing2/assets/img/pricing-free.png")}} class="img-fluid" alt=""> --}}
        {{-- <ul> --}}
        {{-- <li>Aida dere</li> --}}
        {{-- <li>Nec feugiat nisl</li> --}}
        {{-- <li>Nulla at volutpat dola</li> --}}
        {{-- <li class="na">Pharetra massa</li> --}}
        {{-- <li class="na">Massa ultricies mi</li> --}}
        {{-- </ul> --}}
        {{-- <a href="#" class="btn-buy">Buy Now</a> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200"> --}}
        {{-- <div class="box"> --}}
        {{-- <span class="featured">Featured</span> --}}
        {{-- <h3 style="color: #65c600;">Starter Plan</h3> --}}
        {{-- <div class="price"><sup>$</sup>19<span> / mo</span></div> --}}
        {{-- <img src={{asset("landing2/assets/img/pricing-starter.png")}} class="img-fluid" alt=""> --}}
        {{-- <ul> --}}
        {{-- <li>Aida dere</li> --}}
        {{-- <li>Nec feugiat nisl</li> --}}
        {{-- <li>Nulla at volutpat dola</li> --}}
        {{-- <li>Pharetra massa</li> --}}
        {{-- <li class="na">Massa ultricies mi</li> --}}
        {{-- </ul> --}}
        {{-- <a href="#" class="btn-buy">Buy Now</a> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300"> --}}
        {{-- <div class="box"> --}}
        {{-- <h3 style="color: #ff901c;">Business Plan</h3> --}}
        {{-- <div class="price"><sup>$</sup>29<span> / mo</span></div> --}}
        {{-- <img src={{asset("landing2/assets/img/pricing-business.png")}} class="img-fluid" alt=""> --}}
        {{-- <ul> --}}
        {{-- <li>Aida dere</li> --}}
        {{-- <li>Nec feugiat nisl</li> --}}
        {{-- <li>Nulla at volutpat dola</li> --}}
        {{-- <li>Pharetra massa</li> --}}
        {{-- <li>Massa ultricies mi</li> --}}
        {{-- </ul> --}}
        {{-- <a href="#" class="btn-buy">Buy Now</a> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400"> --}}
        {{-- <div class="box"> --}}
        {{-- <h3 style="color: #ff0071;">Ultimate Plan</h3> --}}
        {{-- <div class="price"><sup>$</sup>49<span> / mo</span></div> --}}
        {{-- <img src={{asset("landing2/assets/img/pricing-ultimate.png")}} class="img-fluid" alt=""> --}}
        {{-- <ul> --}}
        {{-- <li>Aida dere</li> --}}
        {{-- <li>Nec feugiat nisl</li> --}}
        {{-- <li>Nulla at volutpat dola</li> --}}
        {{-- <li>Pharetra massa</li> --}}
        {{-- <li>Massa ultricies mi</li> --}}
        {{-- </ul> --}}
        {{-- <a href="#" class="btn-buy">Buy Now</a> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- </div> --}}

        {{-- </div> --}}

        {{-- </section><!-- End Pricing Section --> --}}

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>TAUTAN</h2>
                    <p>Tautan Cepat</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-app">Covid-19</li>
                            <li data-filter=".filter-card">Relasi</li>
                            <li data-filter=".filter-web">Adkesma</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="https://d22gwcrfo2de51.cloudfront.net/wp-content/uploads/2020/06/new-visualisation-of-the-covid-19-virus-stockpack-unsplash-scaled.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Info Covid</h4>
                                <p>https://unej.ac.id/poscovid19/</p>
                                <div class="portfolio-links">
                                    <a href="landing2/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="https://www.matamatanews.com/sites/default/files/field/image/datacenter.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DB Adkesma</h4>
                                <p>https://unej.id/adkesma</p>
                                <div class="portfolio-links">
                                    <!-- <a href="landing2/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a> -->
                                    <a href="https://unej.id/adkesma" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="https://images.unsplash.com/photo-1624727828489-a1e03b79bba8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                                class="img-fluid" alt="covidcare">
                            {{-- {{asset("landing2/assets/img/portfolio/portfolio-3.jpg")}} --}}
                            <div class="portfolio-info">
                                <h4>Covid Care</h4>
                                <p>https://covidcare.id/</p>
                                <div class="portfolio-links">
                                    <!-- <a href="landing2/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a> -->
                                    <a href="https://covidcare.id/" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="https://images.unsplash.com/photo-1549923746-c502d488b3ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Media Partner</h4>
                                <p>https://wa.me/+623891620532</p>
                                <div class="portfolio-links">
                                    <!-- <a href="landing2/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a> -->
                                    <a href="https://wa.me/+623891620532" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="https://images.unsplash.com/photo-1626863905121-3b0c0ed7b94c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Hotline Adkesma</h4>
                                <p>wa.me/+6285731791397</p>
                                <div class="portfolio-links">
                                    <a href="landing2/assets/img/portfolio/portfolio-5.jpg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="https://wa.me/+6285731791397" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Hotline Covid</h4>
                                <p>wa.me/+6283847317651</p>
                                <div class="portfolio-links">
                                    <a href="landing2/assets/img/portfolio/portfolio-6.jpg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src={{ asset('landing2/assets/img/portfolio/portfolio-7.jpg') }} class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="landing2/assets/img/portfolio/portfolio-7.jpg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src={{ asset('landing2/assets/img/portfolio/portfolio-8.jpg') }} class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="landing2/assets/img/portfolio/portfolio-8.jpg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src={{ asset('landing2/assets/img/portfolio/portfolio-9.jpg') }} class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="landing2/assets/img/portfolio/portfolio-9.jpg"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Portfolio Section -->



        <!-- ======= Clients Section ======= -->
        {{-- <section id="clients" class="clients"> --}}

        {{-- <div class="container" data-aos="fade-up"> --}}

        {{-- <header class="section-header"> --}}
        {{-- <h2>ORMAWA & UKM</h2> --}}
        {{-- <p>Organisasi Mahasiswa</p> --}}
        {{-- </header> --}}

        {{-- <div class="clients-slider swiper"> --}}
        {{-- <div class="swiper-wrapper align-items-center"> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-0.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-1.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-2.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-3.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-4.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-5.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-6.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-7.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-8.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- <div class="swiper-slide"><img src={{asset("landing2/assets/img/clients/ormawa/ormawa-9.png")}}
    class="img-fluid" alt=""></div> --}}
        {{-- </div> --}}
        {{-- <div class="swiper-pagination"></div> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- </section> --}}
        <!-- End Clients Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Berita</h2>
                    <p>Baca Berita Terkini</p>
                </header>

                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4">
                            <div class="post-box">
                                <!-- <div class="post-img"><img src={{ $blog->thumbnail != null ? asset('storage/img/blog/' . $blog->thumbnail) : asset('landing2/assets/img/blog/blog-1.jpg') }} class="img-fluid" alt=""></div> -->
                                <span class="post-date">{{ $blog->created_at->format('D, M d') }}</span>
                                <h3 class="post-title">{{ $blog->title }}</h3>
                                <p style="text-align: justify;">{{ Str::limit(strip_tags($blog->contents), 100) }}</p>
                                <a href="/blog/{{ $blog->slug }}" class="readmore stretched-link mt-auto"><span>Read
                                        More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        Apa itu FORGATE?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Forgate merupakan salah satu program kerja tahunan BEM sebagai wadah bagi mahasiswa
                                        yang ingin mengenal lingkungan organisasi serta birokrasi di fasilkom unej.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        Kapan BEM membuka pendaftaran anggota baru?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Pendaftaran anggota baru akan dibuka saat akhir periode kepengurusan bulan desember.
                                        Stay tune!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        Bagaimana prosedur pengajuan kegiatan studi banding/sarasehan dengan BEM?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Bagi yang ingin melakukan studi banding/sarasehan dapat langsung menghubungi
                                        departemen hubungan masyarakat dengan memberikan detail serta proposal kegiatan.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-1">
                                        Bagaimana prosedur pengajuan media partner?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Untuk mengajukan media partner diwajibkan melakukan follow instagram @bemilkomunej
                                        sebanyak 10 akun, lalu screenshot bukti tersebut dan kirimkan pada departemen humas
                                        beserta konten yang akan diposting.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-2">
                                        Bagaimana cara menyampaikan aspirasi saya?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Serap aspirasi merupakan program kerja BPM yang bekerja sama dengan departemen
                                        ADKESMA BEM, silahkan menghubungi BPM untuk memberikan aspirasi kamu ya :)
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-3">
                                        Bagaimana jika saya mempunyai pertanyaan lain?
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Kirimkan pertanyaanmu melalui email bemilkom@cs.unej.ac.id atau whatsapp departemen
                                        hubungan masyarakat(HUMAS) kami akan segera merespon pada jam kerja.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        {{-- <section id="contact" class="contact"> --}}

        {{-- <div class="container" data-aos="fade-up"> --}}

        {{-- <header class="section-header"> --}}
        {{-- <h2>Contact</h2> --}}
        {{-- <p>Contact Us</p> --}}
        {{-- </header> --}}

        {{-- <div class="row gy-4"> --}}

        {{-- <div class="col-lg-6"> --}}

        {{-- <div class="row gy-4"> --}}
        {{-- <div class="col-md-6"> --}}
        {{-- <div class="info-box"> --}}
        {{-- <i class="bi bi-geo-alt"></i> --}}
        {{-- <h3>Address</h3> --}}
        {{-- <p>A108 Adam Street,<br>New York, NY 535022</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- <div class="col-md-6"> --}}
        {{-- <div class="info-box"> --}}
        {{-- <i class="bi bi-telephone"></i> --}}
        {{-- <h3>Call Us</h3> --}}
        {{-- <p>+1 5589 55488 55<br>+1 6678 254445 41</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- <div class="col-md-6"> --}}
        {{-- <div class="info-box"> --}}
        {{-- <i class="bi bi-envelope"></i> --}}
        {{-- <h3>Email Us</h3> --}}
        {{-- <p>info@example.com<br>contact@example.com</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- <div class="col-md-6"> --}}
        {{-- <div class="info-box"> --}}
        {{-- <i class="bi bi-clock"></i> --}}
        {{-- <h3>Open Hours</h3> --}}
        {{-- <p>Monday - Friday<br>9:00AM - 05:00PM</p> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> --}}

        {{-- </div> --}}

        {{-- <div class="col-lg-6"> --}}
        {{-- <form action="forms/contact.php" method="post" class="php-email-form"> --}}
        {{-- <div class="row gy-4"> --}}

        {{-- <div class="col-md-6"> --}}
        {{-- <input type="text" name="name" class="form-control" placeholder="Your Name" required> --}}
        {{-- </div> --}}

        {{-- <div class="col-md-6 "> --}}
        {{-- <input type="email" class="form-control" name="email" placeholder="Your Email" required> --}}
        {{-- </div> --}}

        {{-- <div class="col-md-12"> --}}
        {{-- <input type="text" class="form-control" name="subject" placeholder="Subject" required> --}}
        {{-- </div> --}}

        {{-- <div class="col-md-12"> --}}
        {{-- <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea> --}}
        {{-- </div> --}}

        {{-- <div class="col-md-12 text-center"> --}}
        {{-- <div class="loading">Loading</div> --}}
        {{-- <div class="error-message"></div> --}}
        {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}

        {{-- <button type="submit">Send Message</button> --}}
        {{-- </div> --}}

        {{-- </div> --}}
        {{-- </form> --}}

        {{-- </div> --}}

        {{-- </div> --}}

        {{-- </div> --}}

        {{-- </section><!-- End Contact Section --> --}}

    </main><!-- End #main -->
@endsection
