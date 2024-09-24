@extends('layouts.site.master')
@section('title', 'Contact us')
@push('css')
    <style>
        .iframe-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #f3f3f3;
            border-radius: 8px;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@endpush
@section('page-header')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb"
        style="background-image: url(https://img.freepik.com/premium-photo/minimalist-pop-art-single-massive-japanese-skyscraper_579873-15193.jpg?ga=GA1.1.1266518853.1715856292&semt=ais_hybrid);">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">{{ 'Contact us' }}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">{{ 'Contact us' }}</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Contact Us</h5>
                <h1 class="mb-0">Contact For Any Query</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-4">
                    <div class="bg-white rounded p-4">
                        <div class="text-center mb-4">
                            <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                            <h4 class="text-primary">
                                <Address></Address>
                            </h4>
                            <p class="mb-0">{{ @$settings['address'] }}</p>
                        </div>
                        <div class="text-center mb-4">
                            <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Mobile</h4>
                            <p class="mb-0">{{ @$settigs['phone'] }}</p>
                        </div>

                        <div class="text-center">
                            <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Email</h4>
                            <p class="mb-0">{{ @$settings['email'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3 class="mb-2">Send us a message</h3>
                    <p class="mb-4">
                        Our contact form is currently under maintenance. To quickly set up a fully functional contact form
                        with Ajax and PHP, you can use our easy-to-follow guide. Simply download the files, add a few lines
                        of code, and you'll have a working contact form in no time. <a
                            href="https://htmlcodex.com/contact-form">Get Started Here</a>.
                    </p>

                    <form class="custom-form" action="{{ route('site.contact.submit') }}" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name"
                                        placeholder="Your Name" name="name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email"
                                        placeholder="Your Email" name="email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="subject" placeholder="Subject"
                                        name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"
                                        name="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12">
                    <div class="rounded text-center">
                        <!-- Responsive iframe wrapper -->
                        <div class="iframe-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.2299560050474!2d31.354915175061826!3d30.05894231788456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d6611e83bb3%3A0xd9b2ed92e27473da!2sOX%20PS%26PUB!5e0!3m2!1sen!2seg!4v1723219956596!5m2!1sen!2seg"
                                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endpush
