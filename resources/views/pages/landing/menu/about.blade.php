@extends('pages.landing.main')
@section('content')

    <!-- Start Banner Hero -->
    <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start">
                    <h1 class="h2 py-5 text-primary typo-space-line">Tentang Kami</h1>
                    <p class="light-300">
                        Vector illustration credit goes to <a rel="nofollow" href="http://freepik.com/" target="_blank">FreePik</a> website. Purple Buzz is provided by TemplateMo. Lorem ipsum dolor sit amet, consectetur.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset("template-assets/img/banner-img-02.svg")}}">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Team Member -->
{{--    <section class="container py-5">--}}
{{--        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">--}}

{{--            <div class="col-lg-3">--}}
{{--                <h2 class="h2 py-5 typo-space-line">Our Team</h2>--}}
{{--                <p class="text-muted light-300">--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,--}}
{{--                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="col-lg-9 row">--}}
{{--                <div class="team-member col-md-4">--}}
{{--                    <img class="team-member-img img-fluid rounded-circle p-4" src="{{asset("template-assets/img/team-01.jpg")}}" alt="Card image">--}}
{{--                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">--}}
{{--                        <li>John Doe</li>--}}
{{--                        <li>Business Development</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="team-member col-md-4">--}}
{{--                    <img class="team-member-img img-fluid rounded-circle p-4" src="{{asset("template-assets/img/team-02.jpg")}}" alt="Card image">--}}
{{--                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">--}}
{{--                        <li>Jane Doe</li>--}}
{{--                        <li>Media Development</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="team-member col-md-4">--}}
{{--                    <img class="team-member-img img-fluid rounded-circle p-4" src="{{asset("template-assets/img/team-03.jpg")}}" alt="Card image">--}}
{{--                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">--}}
{{--                        <li>Sam</li>--}}
{{--                        <li>Developer</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    <!-- End Team Member -->

    <section class="service-wrapper py-3">
        <div class="service-tag py-5 bg-secondary">
            <div class="col-md-12">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item mx-lg-4" >
                        <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".BPH" selected>BPH</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".KOMINFO">KOMINFO</a>
                    </li>
                    <li class="filter-btn nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".Luar Dalam">Luar Dalam</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".ADKESMA">ADKESMA</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".PSDM">PSDM</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".Perekonomian">Perekonomian</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".NATKAT">NATKAT</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            @foreach($member as $m)
                <!-- Start Recent Work -->
{{--                <div class="container">--}}

{{--                </div>--}}
{{--                <div class="col-xl-3 col-md-4 col-sm-6 project ui {{ $m->division }}">--}}
{{--                    <a class="card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">a--}}
{{--                        <img class="service card-img" src={{ asset('storage/img/member/'.$m->thumbnail) }} alt="Card image">--}}
{{--                        <div class="service-work-vertical card-img-overlay d-flex align-items-end ">--}}
{{--                            <div class="text-left text-dark">--}}
{{--                                <span class="btn btn-outline-dark rounded-pill mb-lg-3 px-lg-4 light-300">{{ $m->name }}</span>--}}
{{--                                <p class="card-text">{{ $m->position }}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div><!-- End Recent Work -->--}}
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui {{ $m->division }}">
                        <div class="service-work overflow-hidden card mx-5 mx-sm-0">
                            <img class="service card-img" src={{ asset('storage/img/member/'.$m->thumbnail) }} alt="...">
                            <div class="card-body">
                                <h5 class="card-title light-300 text-dark"><b>{{ $m->name }}</b></h5>
                                <p class="card-text light-300 text-dark">
                                    {{ $m->position }}
                                </p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300"><b>"Successful people don't fear failure but understand that it's necessary to learn and grow from"</b></h3>
                    <p class="light-300">Robert Kiyosaki</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->


    <!-- Start Progress -->
{{--    <section class="bg-white py-5">--}}
{{--        <div class="container my-4">--}}

{{--            <h1 class="creative-heading h2 pb-3">Creative & Make Perfect</h1>--}}

{{--            <div class="creative-content row py-3">--}}
{{--                <div class="col-md-5">--}}
{{--                    <p class="text-muted col-lg-8 light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="creative-progress col-md-7">--}}

{{--                    <div class="row mt-4 mt-sm-2">--}}
{{--                        <div class="col-6">--}}
{{--                            <h4 class="h5">Development</h4>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 text-right">66%</div>--}}
{{--                    </div>--}}
{{--                    <div class="progress">--}}
{{--                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                    </div>--}}

{{--                    <div class="row mt-4 mt-sm-2">--}}
{{--                        <div class="col-6">--}}
{{--                            <h4 class="h5">Design</h4>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 text-right">90%</div>--}}
{{--                    </div>--}}
{{--                    <div class="progress">--}}
{{--                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                    </div>--}}


{{--                    <div class="row mt-4 mt-sm-2">--}}
{{--                        <div class="col-6">--}}
{{--                            <h4 class="h5">Marketing</h4>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 text-right">74%</div>--}}
{{--                    </div>--}}
{{--                    <div class="progress">--}}
{{--                        <div class="progress-bar" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Progress -->

    <!-- Start Choice -->
    <section class="why-us banner-bg bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="banner-img col-lg-5">
                    <img src="{{asset("template-assets/img/work.svg")}}" class="rounded img-fluid" alt="">
                </div>
                <div class="banner-content col-lg-7 align-self-end">
                    <h2 class="h2 pb-3">Yuk Kepoin Media Sosial Kami</h2>
                    <p class="text-muted pb-5 light-300">
                        You are allowed to download and use this Purple Buzz template for your websites. You are <strong>not allowed</strong> to re-distribute this template ZIP file on other template websites. It is quite easy to simply copy and repost the ZIP file on any <a rel="nofollow" href="https://www.google.com/search?q=free+css" target="_blank">Free CSS collection</a> websites.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choice -->

    <!-- Start Aim -->
{{--    <section class="banner-bg bg-white py-5">--}}
{{--        <div class="container my-4">--}}
{{--            <div class="row text-center">--}}

{{--                <div class="objective col-lg-4">--}}
{{--                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">--}}
{{--                        <i class="display-4 bx bxs-bulb text-light"></i>--}}
{{--                    </div>--}}
{{--                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Vision</h2>--}}
{{--                    <p class="light-300">--}}
{{--                        Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div class="objective col-lg-4 mt-sm-0 mt-4">--}}
{{--                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">--}}
{{--                        <i class='display-4 bx bx-revision text-light'></i>--}}
{{--                    </div>--}}
{{--                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Mission</h2>--}}
{{--                    <p class="light-300">--}}
{{--                        Eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--                        Ut enim ad minim veniam quis.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <div class="objective col-lg-4 mt-sm-0 mt-4">--}}
{{--                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">--}}
{{--                        <i class="display-4 bx bxs-select-multiple text-light"></i>--}}
{{--                    </div>--}}
{{--                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Goal</h2>--}}
{{--                    <p class="light-300">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,--}}
{{--                        sed do eiusmod tempor.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Aim -->

    <!-- Start Contact -->
{{--    <section class="banner-bg bg-light py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 mx-auto my-4 p-3">--}}
{{--                    <form action="#" method="get"><h1 class="h2 text-center">Stay up to date with us</h1>--}}
{{--                        <div class="input-group py-3">--}}

{{--                            <input name="email" type="text" class="form-control form-control-lg rounded-pill rounded-end" id="email" placeholder="Your Email" aria-label="Your Email">--}}
{{--                            <button class="btn btn-secondary text-white btn-lg rounded-pill rounded-start px-lg-4" type="submit">Subsribe</button>--}}
{{--                        </div>--}}
{{--                        <p class="text-center light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Contact -->


@endsection
