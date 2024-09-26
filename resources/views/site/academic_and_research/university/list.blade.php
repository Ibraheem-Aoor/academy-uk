@extends('layouts.site.master')
@push('css')
    <style>
        .service .service-item {
            position: relative;
            overflow: hidden;
        }

        /* Existing CSS from your question */
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
            <h3 class="text-white display-3 mb-4">{{ $page->title }}</h3>
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
    <!-- Additional Content -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                @if (str_contains($university->name , 'British'))
                    <!-- Box 1 -->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-primary">Applied Accredited Degrees (L3 to L7)</h3>
                                <p>Offered Programmes:</p>
                                <ul>
                                    <li>Academic Degrees under UK accreditation system (approved by Ofqual “The British Main
                                        accrediting Body”)</li>
                                    <li>L3: Foundation for UK University (Level 3)</li>
                                    <li>Level 4: Diploma (1st year BSc UK, 2nd year Arab System)</li>
                                    <li>Level 5: HND (Higher National Diploma) / 2nd year BSc UK, 3rd year Arab System</li>
                                    <li>Level 6: Bachelor's Degree</li>
                                    <li>Level 7-a: Post Graduate Diploma</li>
                                    <li>Level 7-b: Master’s Degree</li>
                                </ul>
                                <a href="/assets/files/HND HNC all course flyer without prices_ agentzz.pdf"
                                    class="btn btn-primary">Download Catalog</a>
                            </div>
                        </div>
                    </div>

                    <!-- Box 2 -->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-primary">UK eUniversities Degree</h3>
                                <p>UK eUniversities HUB Offered Programmes:</p>
                                <ul>
                                    <li>UK academic programmes (Traditional, Hybrid, and Online) from various UK
                                        Universities</li>
                                    <li>HND, Bachelor's, and Master's Degrees</li>
                                </ul>
                                <p>Participating Universities:</p>
                                <ul>
                                    <li>Anglia Ruskin University</li>
                                    <li>Buckinghamshire New University</li>
                                    <li>Edinburgh Napier University</li>
                                    <li>University of Bolton</li>
                                    <li>University of Central Lancashire</li>
                                    <li>University of Chichester</li>
                                    <li>University of Derby</li>
                                    <li>University of Essex</li>
                                    <li>University of Gloucestershire</li>
                                    <li>Wrexham Glyndr University</li>
                                </ul>
                                <a href="/assets/files/Product Catalogue eAcademy - UK 2024.pdf"
                                    class="btn btn-primary">Download Catalog</a>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Box 1 -->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-primary">American Graduate Industrial Business School / Arena
                                </h3>
                                <p>Programmes:</p>
                                <ul>
                                    <li>Industrial / Professional Business Certification</li>
                                    <li>BBA (Bachelor of Business Administration) in 4 Disciplines</li>
                                    <li>MBA in 10 Disciplines (Master of Business Administration)</li>
                                    <li>DBA in 10 Disciplines (Doctor of Business Administration)</li>
                                    <li>DM (Doctor of Management)</li>
                                </ul>
                                <a href="/assets/files/HND HNC all course flyer without prices_ agentzz.pdf"
                                    class="btn btn-primary">Download Catalog</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- University Cards -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px">Universities</h5>
                <h1>Explore {{ $university->name }} Universities</h1>
            </div>
            <div class="row">
                @foreach ($universities as $university)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="cat-item position-relative overflow-hidden rounded mb-2">
                            <img loading="lazy" class="img-fluid" src="{{ getImageUrl($university->image) }}"
                                alt="{{ $university->name }}" />
                            <a class="cat-overlay text-white text-decoration-none"
                                href="{{ route('site.academic_and_research.university.details', encrypt($university->id)) }}">
                                <h4 class="text-white font-weight-medium">{{ $university->name }}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
