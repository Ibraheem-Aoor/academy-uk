@extends('layouts.site.master')
@section('title', $page->ittle)
@push('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@endpush
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
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">BASC Smart Training</h5>
                <h1 class="text-white mb-4">Online Application Form</h1>
                <p class="text-white mb-4">
                    Apply now to join our cutting-edge smart training programs. Enhance your skills with our industry-focused courses designed to help you stay ahead in your career.
                </p>
                <p class="text-white mb-4">
                    Our programs are tailored to meet the needs of modern professionals. Join us and experience the future of learning with our smart training solutions.
                </p>
            </div>
            <div class="col-lg-6">
                <h1 class="text-white mb-3">Apply Now</h1>
                <p class="text-white mb-4">
                    Fill out the form below to apply for our programs. Get ready to take the next step in your career with BASC Smart Training.
                </p>
                <form class="custom-form" action="{{ route('site.smart_training.apply_submit') }}" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-white border-0" id="name" placeholder="Your Name" name="name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-white border-0" id="email" placeholder="Your Email" name="email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control bg-white border-0" id="phone" placeholder="Your Phone Number" name="phone" required>
                                <label for="phone">Your Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="categorySelect" required name="category">
                                    <option value="" disabled selected>Select Category</option>
                                    @foreach ($programs_categories as $category)
                                        <option value="{{ $category->id }}" data-programs="{{ json_encode($category->programs) }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <label for="categorySelect">Select Category</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="programSelect" required name="program">
                                    <option value="" disabled selected>Select Program</option>
                                </select>
                                <label for="programSelect">Select Program</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-white border-0" placeholder="Tell us about your goals" id="message" style="height: 100px" name="message" required></textarea>
                                <label for="message">Tell us about your goals</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary text-white w-100 py-3" type="submit">Submit Application</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@endpush
