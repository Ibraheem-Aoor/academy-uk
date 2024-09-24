@extends('layouts.site.master')
@section('title', $page->ittle)
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
    <div class="container-fluid country overflow-hidden py-5">
        <div class="container">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="section-title px-3">{{ $page->title }}</h5>
                <h1 class="mb-4">Explore Our Branches Worldwide</h1>
            </div>
            <div class="row g-4 text-center mt-4">
                @foreach ($branches as $branch)
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="{{ getImageUrl($branch->image) }}" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="{{ asset('assets/common/countries/' . $branch->country->code . '.svg') }}"
                                    class="img-fluid rounded-circle" alt="{{ $branch->country->name }}" >
                            </div>
                            <div class="country-name">
                                <a href="{{ $branch->location }}" target="_blank" class="text-white fs-4">{{ $branch->country->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
