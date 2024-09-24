<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('page-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.7.0" />
    <meta name="csrf" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}" />
    <!-- Css -->
    <link href="{{ asset('assets/admin/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/admin/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('assets/admin/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
    {{-- Toastr Css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('css')

</head>

<body>
    @include('layouts.admin.partials.loader')
    <div class="page-wrapper toggled">
        <!-- sidebar-wrapper -->
        @if (!isset($is_login_page))
            @include('layouts.admin.partials.sidebar')
        @endif
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <!-- Top Header -->
            @if (!isset($is_login_page))
                @include('layouts.admin.partials.top-header')
            @endif
            <!-- Top Header -->

            <div class="container-fluid">
                <div class="layout-specing">
                    @yield('content')
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
            <footer class="shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center mx-md-2">
                                <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script><i class="mdi mdi-heart text-danger"></i> by <a href="{{ route('home') }}" target="_blank" class="text-reset">{{ config('app.name') }}</a>.</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer>

            <!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->



    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets/admin/js/plugins.init.js') }}"></script>
    {{-- Toaster Js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/master.js') }}"></script>

    @stack('js')

</body>

</html>
