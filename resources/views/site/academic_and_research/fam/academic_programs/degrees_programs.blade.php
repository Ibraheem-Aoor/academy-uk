@extends('layouts.site.master')
@push('css')
    <style>
        .video {
            position: relative;
            height: 100%;
            min-height: 400px;
            background: linear-gradient(rgba(254, 218, 154, 0.1), rgba(254, 218, 154, 0.1)), url(https://demo.htmlcodex.com/2786/catering-services-website-template/img/fact.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 8px
        }

        .video .btn-play {
            position: absolute;
            z-index: 3;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            box-sizing: content-box;
            display: block;
            width: 32px;
            height: 44px;
            border-radius: 50%;
            border: none;
            outline: none;
            padding: 18px 20px 18px 28px
        }

        .video .btn-play:before {
            content: "";
            position: absolute;
            z-index: 0;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 100px;
            height: 100px;
            background: var(--bs-primary);
            border-radius: 50%;
            animation: pulse-border 1500ms ease-out infinite
        }

        .video .btn-play:after {
            content: "";
            position: absolute;
            z-index: 1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 100px;
            height: 100px;
            background: var(--bs-white);
            border-radius: 50%;
            transition: all 200ms
        }

        .video .btn-play img {
            position: relative;
            z-index: 3;
            max-width: 100%;
            width: auto;
            height: auto
        }

        .video .btn-play span {
            display: block;
            position: relative;
            z-index: 3;
            width: 0;
            height: 0;
            border-left: 32px solid var(--bs-dark);
            border-top: 22px solid transparent;
            border-bottom: 22px solid transparent
        }

        @keyframes pulse-border {
            0% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1
            }

            100% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0
            }
        }

        #videoModal {
            z-index: 99999
        }

        #videoModal .modal-dialog {
            position: relative;
            max-width: 800px;
            margin: 60px auto 0
        }

        #videoModal .modal-body {
            position: relative;
            padding: 0
        }

        #videoModal .close {
            position: absolute;
            width: 30px;
            height: 30px;
            right: 0;
            top: -30px;
            z-index: 999;
            font-size: 30px;
            font-weight: 400;
            color: #fff;
            background: #000;
            opacity: 1
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
                    <li class="breadcrumb-item active text-white"><a
                            href="{{ route('page', 'british-fam-college') }}">{{ $page->theme }}</a></li>
                    <li class="breadcrumb-item active text-white">{{ $page->title }}</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')
    {!! $page->content !!}

    @foreach ($programs_categories as $category)
        @if (!$category->programs->isEmpty())
            <div class="container-fluid packages py-5">
                <div class="container py-5">
                    <div class="mx-auto text-center " style="max-width: 900px;">
                        <h5 class="section-title px-3">{{ $category->name }}</h5>
                        <h1 class="mb-2">Explore Our {{ $category->name }} Programs</h1>
                    </div>
                    <div class="packages-carousel owl-carousel">

                        @foreach ($category->programs as $program)
                            <div class="packages-item">
                                <div class="packages-img">
                                    <img src="{{ getImageUrl($program->image) }}" class="img-fluid w-100 rounded-top"
                                        alt="Academic and Research Hub">
                                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                        style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-book me-2"></i>{{ $program->feature_1 }}</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-university me-2"></i>{{ $program->feature_2 }}</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-graduation-cap me-2"></i>{{ $program->feature_2 }}</small>
                                    </div>
                                </div>
                                <div class="packages-content bg-light">
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-0">{{ $program->name }}</h5>
                                        <small class="text-uppercase">{{ $program->category->name }}</small>
                                        <div class="mb-3">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                        <p class="mb-2">{{ $program->quick_description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endforeach

@endsection
