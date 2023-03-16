@extends('pages.landing2.main')
@section('content')
<main id="main" class="mt-5">
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
                <li>PPMB</li>
            </ol>
            <h2>PPMB</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <livewire:search-student />

    @if($detail !== NULL)
    <section class="score">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card_header">
                            <h4>{{ $detail->name }} - {{ $detail->nim }} <span class="{{ $detail->point > 60 ? 'text-success' : 'text-danger' }}">({{ $detail->point }} POIN)</span></h4>
                        </div>
                        <div class="card_content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>PELANGGARAN</th>
                                            <th>POIN PENGURANGAN</th>
                                            <th>KEPATUHAN</th>
                                            <th>POIN PENAMBAHAN</th>
                                            <th>TOTAL POIN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($p_detail as $m)
                                        <tr>
                                            <td>{{ ($m->offense != NULL)? $m->offense->title: '-'}}</td>
                                            <td class="{{ $m->offense == NULL ? '' : 'text-danger' }}">{{ ($m->offense != NULL)? $m->offense->minus_point:'-' }}</td>
                                            <td>{{ ($m->addition != NULL)? $m->addition->title:'-'}}</td>
                                            <td class="{{ $m->addition == NULL ? '' : 'text-success' }}">{{ ($m->addition !=NULL)?$m-> addition->plus_point :'-' }}</td>
                                            <td>{{ $m->current_point }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Testimonials</h2>
                <p>What they are saying about PPMB</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Program Pengembangan dan Pembinaan Mahasiswa Baru mengajarkan hal baru bagi saya terkait lingkungan kampus, tata krama dan sopan santun selama menjadi mahasiswa
                            </p>
                            <div class="profile mt-auto">
                                <img src={{asset("landing2/assets/img/testimonials/rio.JPG")}} class="testimonial-img" alt="Rio Alvian Syach">
                                <h3>Rio Alviansyach</h3>
                                <h4>Ketua PPMB 2021</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Melalui kegiatan PPMB saya dapat mengerti dan memahami pentingnya mengenal rekan sesama mahasiswa. Disini saya membentuk rasa kekeluargaan dengan seluruh mahasiswa baru
                            </p>
                            <div class="profile mt-auto">
                                <img src={{asset("landing2/assets/img/testimonials/bagas.JPG")}} class="testimonial-img" alt="Bagas Suryadika Miranda">
                                <h3>Bagas Suryadika Miranda</h3>
                                <h4>Ketua BEM 2020</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Cara terbaik dan tercepat untuk beradaptasi di lingkungan kampus adalah dengan mengenal teman satu angkatan, program PPMB membantu saya untuk beradaptasi menjadi lebih baik
                            </p>
                            <div class="profile mt-auto">
                                <img src={{asset("landing2/assets/img/testimonials/azriel.JPG")}} class="testimonial-img" alt="Muhammad Andi Azriel Akbar">
                                <h3>Muhammad Andi Azriel Akbar</h3>
                                <h4>Ketua PPMB 2022</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Tak kenal maka tak tahu, program PPMB membantu saya dalam memperluas relasi pertemanan tidak hanya teman satu angkatan namun juga kakak tingkat
                            </p>
                            <div class="profile mt-auto">
                                <img src={{asset("landing2/assets/img/testimonials/naufal.JPG")}} class="testimonial-img" alt="Muhammad Naufal Hafiyyan">
                                <h3>Muhammad Naufal Hafiyyan</h3>
                                <h4>Ketua Bem 2021</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                PPMB membantu saya beradaptasi dengan lingkungan kampus dengan cepat dan lebih baik
                            </p>
                            <div class="profile mt-auto">
                                <img src={{asset("landing2/assets/img/testimonials/fiki.png")}} class="testimonial-img" alt="">
                                <h3>Fiki Aviantono</h3>
                                <h4>Mahasiswa TI</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->

</main>
@endsection
