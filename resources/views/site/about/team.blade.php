@extends('layouts.site.master')
@section('title', $title)
@section('content')
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
            <h3 class="text-white display-3 mb-4">{{ $title }}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('site.about.index') }}">ABOUT</a></li>
                    <li class="breadcrumb-item active text-white">{{ $title }}</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection

<!-- Team Start -->
@include('site.partials.team')
<!-- Team End -->
@endsection
