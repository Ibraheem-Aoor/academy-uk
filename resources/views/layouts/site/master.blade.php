<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') . ' || ' }} @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ csrf_token() }}" name="csrf">
    <meta content="{{ @$settings['meta_keywords'] }}" name="keywords">
    <meta content="{{ @$settings['meta_description'] }}" name="description">
    <meta content="{{ @$settings['meta_title'] }}" name="author">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/site/css/style.css') }}?v=0.08" rel="stylesheet">
    @stack('css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-2 text-left">
                <a href="{{ route('home') }}" class="navbar-brand p-0 text-white p-2">
                    <img src="{{ asset('assets/common/logo.png') }}" width="100px" alt="" class="mt-2"
                        >
                </a>
            </div>
            <div class="col-lg-8 text-center mb-2 mb-lg-0">
                {{-- <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['twitter'] }}"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['facebook'] }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['linkedin'] }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['instagram'] }}"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="{{ @$settings['youtube'] }}"><i class="fab fa-youtube fw-normal"></i></a>
                </div> --}}
                <a href="{{ route('home') }}" class="navbar-brand p-0 text-white p-2">
                    <h1 class="m-0 text-white">
                        {{ config('app.name') }}</h1>
                </a>
            </div>
            {{-- <div class="col-lg-2 text-left">
                <div class="d-inline-flex align-items-center p-5 text-left" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['twitter'] }}"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['facebook'] }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['linkedin'] }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ @$settings['instagram'] }}"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="{{ @$settings['youtube'] }}"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div> --}}
            <div class="col-lg-2 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <div class="d-inline-flex align-items-center pt-5 text-left" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                            href="{{ @$settings['twitter'] }}"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                            href="{{ @$settings['facebook'] }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                            href="{{ @$settings['linkedin'] }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                            href="{{ @$settings['instagram'] }}"><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                            href="{{ @$settings['youtube'] }}"><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    {{-- NAV START --}}
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('layouts.site.nav')
        @yield('carousel')
    </div>
    @yield('page-header')
    {{-- NAV END --}}
    @yield('search-box')

    @yield('content')

    @include('layouts.site.footer')




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/site/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/site/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/site/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/site/lib/lightbox/js/lightbox.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/site/js/main.js') }}?v=0.01"></script>

    @stack('js')
</body>

</html>
