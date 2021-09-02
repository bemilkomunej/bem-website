<!DOCTYPE html>
<html lang="en">

<head>
    <title>BEM FASILKOM UNEJ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="apple-touch-icon" href={{asset("template-assets/img/logo/apple-icon.png")}}>--}}
    <link rel="icon" type="image/x-icon" href={{asset("template-assets/img/logo/apple-icon.png")}}>
    <!-- Load Require CSS -->
    <link href={{asset("template-assets/css/bootstrap.min.css")}} rel="stylesheet">
    <!-- Font CSS -->
    <link href={{asset("template-assets/css/boxicon.min.css")}} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href={{asset("template-assets/css/templatemo.css")}}>
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{asset("template-assets/css/custom.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--

TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="{{ route('home') }}">
{{--                <i class='bx bx-buildings bx-sm text-dark'></i>--}}
                <a href="{{ route('home') }}" class="logo"><img class="my-logo" src="template-assets/img/logo/apple-icon.png" alt=""></a>
                <span class="text-dark h4">BEM</span> <span class="text-primary h4">FASILKOM</span> <span class="text-dark h4">UNEJ</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ route('ppmb') }}">PPMB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link banner-button btn rounded-pill btn-outline-primary btn-sm px-md-4" href="{{ route('login') }}" role="button"><i class="fa fa-user"></i>     Login</a>
                        </li>
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ route('blog') }}">Blog</a>--}}
                        {{--                        </li>--}}
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="pricing.html">Pricing</a>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
{{--                <div class="flex-fill mx-xl-5 mb-2">--}}
{{--                    <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ route('login') }}">Masuk</a>--}}
{{--                    <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="{{ route('login') }}" role="button">Masuk</a>--}}
{{--                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Masuk</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    @yield('content')

    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="{{ route('home') }}">
{{--                        <i class='bx bx-buildings bx-sm text-light'></i>--}}
{{--                        <img style="margin-right: 10px; height: 92px; width: 95px" src="template-assets/img/logo/apple-icon.png" alt=""></a>--}}
                        <span class="text-light h5">BEM</span> <span class="text-light h5 semi-bold-600">FASILKOM</span> <span class="text-light h5">UNEJ</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Jember
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.facebook.com/bemilkomunej">
                                <i class='bx bxl-facebook bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://wa.me/6282234077219">
                                <i class='bx bxl-whatsapp bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.instagram.com/bemilkomunej">
                                <i class='bx bxl-instagram bx-md'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Halaman Kami</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                            </li>
{{--                            <li class="pb-2">--}}
{{--                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ route('blog') }}">Blog</a>--}}
{{--                            </li>--}}
{{--                            <li class="pb-2">--}}
{{--                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>--}}
{{--                            </li>--}}
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ route('ppmb') }}">PPMB</a>
                            </li>
                        </ul>
                </div>

{{--                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">--}}
{{--                    <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>--}}
{{--                    <ul class="list-unstyled text-light light-300">--}}
{{--                        <li class="pb-2">--}}
{{--                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Branding</a>--}}
{{--                        </li>--}}
{{--                        <li class="pb-2">--}}
{{--                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Business</a>--}}
{{--                        </li>--}}
{{--                        <li class="pb-2">--}}
{{--                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Marketing</a>--}}
{{--                        </li>--}}
{{--                        <li class="pb-2">--}}
{{--                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Social Media</a>--}}
{{--                        </li>--}}
{{--                        <li class="pb-2">--}}
{{--                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>--}}
{{--                        </li>--}}
{{--                        <li class="pb-2">--}}
{{--                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Hubungi Kami</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="https://wa.me/6282234077219" target="_blank">+6282234077219</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:bemilkomunej@cs.unej.ac.id">bemilkomunej@cs.unej.ac.id</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 BEM FASILKOM UNEJ. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
{{--                            Developed by <a rel="sponsored" class="text-decoration-none text-light" href="https://github.com/iosky07" target="_blank"><strong>iosky07</strong></a>--}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <!-- Bootstrap -->
    <script src={{asset("template-assets/js/bootstrap.bundle.min.js")}}></script>
    <!-- Load jQuery require for isotope -->
    <script src={{asset("template-assets/js/jquery.min.js")}}></script>
    <!-- Isotope -->
    <script src={{asset("template-assets/js/isotope.pkgd.js")}}></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(document).ready(function(){
                var data_filter = ".BPH";
                $projects.isotope({
                    filter: data_filter
                });
                return false;
            });

            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>

    <script>
        $(window).load(function() {
            // Slide
            $('.templatemo-slide-link').click(function() {
                var this_href = $(this).attr('href');
                $('#templatemo-slide-link-target img').attr('src', this_href);
                return false;
            });
            // End Slide
        });
    </script>
    <script src="{{asset("template-assets/js/fslightbox.js")}}"></script>

    <script>
        fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;
    </script>
    <!-- Templatemo -->
    <script src={{asset("template-assets/js/templatemo.js")}}></script>
    <!-- Custom -->
    <script src={{asset("template-assets/js/custom.js")}}></script>
    @livewireScripts
</body>

</html>
