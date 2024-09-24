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
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-7 col-xl-8 mt-0">
                    <div class="position-relative overflow-hidden rounded">
                        <img src="{{ getImageUrl($program->image) }}" class="img-fluid rounded img-zoomin w-100" alt="">
                        {{-- <div class="d-flex justify-content-center px-4 position-absolute flex-wrap"
                            style="bottom: 10px; left: 0;">
                            <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute
                                read</a>
                            <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                            <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05
                                Comment</a>
                            <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                        </div> --}}
                    </div>
                    <div class="border-bottom py-3">
                        <a href="#" class="display-4 text-dark mb-0 link-hover">{{ $program->name }}</a>
                    </div>
                    <p class="mt-3 mb-4">{{ $program->description }}
                    </p>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 pt-0">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="rounded overflow-hidden">
                                    <img src="img/news-3.jpg" class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <a href="#" class="h4 mb-2">Related Programs</a>
                                </div>
                            </div>
                            @foreach ($related_programs as $related_program)
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                <img src="{{ getImageUrl($related_program->image) }}" class="img-zoomin img-fluid rounded w-100"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="{{ route('site.academic_and_research.university.program', encrypt($related_program->id)) }}" class="h6">{{ $related_program->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection
