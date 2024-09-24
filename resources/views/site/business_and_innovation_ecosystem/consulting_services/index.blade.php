@extends('layouts.site.master')
@push('css')
    <style>
        .service .service-item {
            position: relative;
            overflow: hidden
        }

        .service .service-item .service-inner .service-title {
            position: relative;
            margin-top: -30px;
            text-align: center;
            transition: .5s
        }

        .service .service-item .service-inner .service-title .service-content {
            position: absolute;
            bottom: -100%;
            left: 0;
            margin-left: 30px;
            margin-right: 30px;
            text-align: center;
            border-radius: 10px;
            background: var(--bs-primary);
            opacity: 0;
            transition: .5s
        }

        .service .service-item:hover .service-inner .service-title .service-content {
            bottom: 0;
            opacity: 1
        }

        .service .service-item .service-inner .service-title .service-content a h4 {
            border-bottom: 1px solid rgba(256, 256, 256, .1)
        }

        .service .service-item .service-inner .service-title .service-title-name {
            transition: .5s
        }

        .service .service-item:hover .service-inner .service-title .service-title-name {
            opacity: 0
        }

        .service .service-item .service-inner .service-img {
            position: relative;
            border-radius: 10px;
            overflow: hidden
        }

        .service .service-item .service-inner .service-img::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            border-radius: 10px;
            background: rgba(255, 255, 255, .5);
            transition: .5s;
            opacity: 0
        }

        .service .service-item:hover .service-inner .service-img::after {
            height: 100%;
            opacity: 1
        }

        .service .service-item .service-inner .service-img img {
            transition: .5s
        }

        .service .service-item:hover .service-inner .service-img img {
            transform: scale(1.3)
        }
        .service-item {
            background: var(--bs-primary) !important;
        }
    </style>
@endpush
@section('title', $page->title)
@section('page-header')
    @php
        $main_image = isset($page->intro_image)
            ? getImageUrl($page->intro_image)
            : asset(
                'https://img.freepik.com/free-photo/business-people-futuristic-business-environment_23-2150970218.jpg?t=st=1722886674~exp=1722890274~hmac=a804d3c39a6daf24955b7867c6630263a485e13c1e95930a80e38c17dcb9c93b&w=1060',
            );
    @endphp
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb" style="background-image: url({{ $main_image }});">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">{{ $page->title }}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">{{ $page->theme }}</li>
                    <li class="breadcrumb-item active text-white">{{ $page->title }}</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')
    {!! $page->content !!}
    <div class="container-fluid pt-6 p-5 mt-5 mb-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5" id="services">
            @foreach ($services as $service)
                <div class="col-lg-6 col-md-6">
                    <div class="service-item bg-primary text-center p-5">
                        <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                            style="width: 90px; height: 90px;">
                            <img class=" rounded bg-light" src="{{ getImageUrl($service->image) }}"
                                alt="{{ $service->name }}" width="100px" height="100px">
                        </div>
                        <h3 class="mb-3 text-white">{{ $service->name }}</h3>
                        <p class="mb-0 text-white">{{ $service->description }}</p>
                        <div class="col-sm-12 text-center mt-3">
                            <a class="btn btn-md btn-soft-primart" href="{{ route('page', str_replace(' ' ,'-',strtolower($service->name))) }}">Read more</a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
