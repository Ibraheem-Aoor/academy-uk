@extends('layouts.site.master')
@section('title', 'HOME')
@section('carousel')
    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://img.freepik.com/free-photo/business-people-futuristic-business-environment_23-2150970218.jpg?t=st=1722886674~exp=1722890274~hmac=a804d3c39a6daf24955b7867c6630263a485e13c1e95930a80e38c17dcb9c93b&w=1060"
                        class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The
                                FUTURE
                            </h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Unite for a Smarter Tomorrow
                            </h1>
                            <p class="mb-5 fs-5">Welcome to The British Smart Academic City, where innovation drives excellence. We advance education, support entrepreneurship, and build global connections to shape the future.


                            </p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                    href="#">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/premium-photo/businessman-working-with-ai-robot-business-technology-data-network-adapt-implement-new-policies-technology-effectively_1028938-128490.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid" class="img-fluid" alt="Smart Academic City">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Academic and Research Hub</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Empowering Future Innovators</h1>
                            <p class="mb-5 fs-5">Join our state-of-the-art Smart Academic City, where cutting-edge technology meets world-class education. Pioneering research, smart learning environments, and global collaboration are at the heart of our city.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://img.freepik.com/premium-photo/businessman-holds-magnifying-glass-light-is-projected-from-light-bulb-icon-representing-insight-innovation-finding-business-solutions_854723-34988.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid" class="img-fluid" alt="Business Innovation Ecosystem">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Business & Innovation Ecosystem</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Driving Sustainable Growth</h1>
                            <p class="mb-5 fs-5">Our city fosters a dynamic business environment, where innovation and sustainability go hand in hand. Explore opportunities for growth, collaboration, and success in a thriving smart ecosystem.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Opportunities</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
@endsection

@section('content')

<div class="container py-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Latest News</h5>
        <h1 class="mb-4">Updates from British Smart Academic City</h1>
        <p class="mb-0">
            Stay informed with the latest developments, initiatives, and success stories from our smart academic community.
        </p>
    </div>
    <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="blog-item">
                <div class="blog-img">
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded-top" src="https://img.freepik.com/premium-photo/panorama-cityscape-chicago-downtown-riverwalk-boardwalk-with-bridges-day-time-chicago-illinois-usa-education-concept-academic-research-top-ranking-universities-hologram_269648-14751.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid" alt="Smart Campus Expansion">
                        <div class="blog-icon">
                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                        </div>
                    </div>
                    <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>15 Aug 2024</small>
                        <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>2.3K</a>
                        <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1.2K</a>
                    </div>
                </div>
                <div class="blog-content border border-top-0 rounded-bottom p-4">
                    <p class="mb-3">Posted By: Jane Doe</p>
                    <a href="#" class="h4">Smart Campus Expansion</a>
                    <p class="my-3">Explore the latest phase in our campus expansion, featuring cutting-edge facilities and innovative learning environments.</p>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="blog-item">
                <div class="blog-img">
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded-top" src="https://img.freepik.com/free-photo/ai-cloud-concept-with-robot-arms_23-2149739749.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid" alt="AI-Powered Learning Initiatives">
                        <div class="blog-icon">
                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                        </div>
                    </div>
                    <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Aug 2024</small>
                        <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.9K</a>
                        <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>980</a>
                    </div>
                </div>
                <div class="blog-content border border-top-0 rounded-bottom p-4">
                    <p class="mb-3">Posted By: John Smith</p>
                    <a href="#" class="h4">AI-Powered Learning Initiatives</a>
                    <p class="my-3">Discover how our AI-driven programs are transforming education, providing personalized learning experiences for every student.</p>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="blog-item">
                <div class="blog-img">
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded-top" src="https://img.freepik.com/premium-photo/midsection-man-wearing-graduation-gown-while-holding-globe_1048944-2321588.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid" alt="Global Academic Partnerships">
                        <div class="blog-icon">
                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                        </div>
                    </div>
                    <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>10 Aug 2024</small>
                        <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>2.1K</a>
                        <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1.1K</a>
                    </div>
                </div>
                <div class="blog-content border border-top-0 rounded-bottom p-4">
                    <p class="mb-3">Posted By: Sarah Lee</p>
                    <a href="#" class="h4">Global Academic Partnerships</a>
                    <p class="my-3">Learn about our newest collaborations with international universities, aimed at fostering global educational exchanges.</p>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- About Start -->
    <div class="container-fluid about py-5">
        {!! $about_page->content !!}
        <div class="row">
            <div class="col-sm-12 text-center">
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ route('site.about.index') }}">Read More</a>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light service py-5" id="services">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Services</h5>
                <h1 class="mb-0">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Smart Consultations</h5>
                                    <p class="mb-0">Providing expert advice and solutions tailored to your academic,
                                        professional, and entrepreneurial needs, leveraging the latest in smart technology
                                        and industry insights.</p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-lightbulb fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Graduate School for Business & Entrepreneurship</h5>
                                    <p class="mb-0">Offering advanced degrees and training programs to equip you with the
                                        skills and knowledge needed to excel in business and entrepreneurship.</p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-briefcase fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Smart Training and Development</h5>
                                    <p class="mb-0">Providing cutting-edge training programs and professional development
                                        opportunities to help you stay ahead in your field.</p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-chalkboard-teacher fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Smart International Universities Hub</h5>
                                    <p class="mb-0">Connecting you with prestigious international universities, offering
                                        a range of global academic programs and opportunities.</p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-university fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-globe fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Smart Local Universities Hub</h5>
                                    <p class="mb-0">Facilitating access to top local universities, providing a range of
                                        accredited programs to further your education and career.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-users fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Academic Venues</h5>
                                    <p class="mb-0">Providing state-of-the-art venues for academic events, workshops, and
                                        conferences to support learning and networking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-flask fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Smart Incubators</h5>
                                    <p class="mb-0">Supporting entrepreneurial ventures through our smart incubators,
                                        providing resources, mentorship, and networking opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-laptop fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Remote Freelancing Arena</h5>
                                    <p class="mb-0">Offering a dedicated platform for remote freelancing, connecting you
                                        with clients and projects to expand your career.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2 d-none" href="/core-services">Service More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <div class="container-fluid ExploreTour py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Explore Tour</h5>
                <h1 class="mb-4">The World</h1>
                <p class="mb-0">    Discover a world of opportunities with our international universities. Offering a diverse range of programs, these institutions provide the perfect platform for academic excellence, global networking, and cultural enrichment. Join a community of scholars and professionals who are shaping the future across borders and disciplines.

                </p>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">

                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#InternationalTab-2">
                            <span class="text-dark" style="width: 250px;">International Universities</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill d-none"
                            data-bs-toggle="pill" href="#NationalTab-1">
                            <span class="text-dark" style="width: 250px;">Local Universities</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="NationalTab-1" class="tab-pane fade show p-0 ">
                        <div class="row g-4">
                            @foreach ($universities->where('type', 'local-universities') as $university)
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="{{ getImageUrl($university->image) }}" class="img-fluid w-100 rounded"
                                            alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">{{ $university->name }}</h5>
                                                <a href="{{ route('site.academic_and_research.university.index', $university->type) }}"
                                                    class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="national-plus-icon">
                                            <a href="{{ route('site.academic_and_research.university.index', $university->type) }}"
                                                class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="InternationalTab-2" class="tab-pane fade show p-0 active">
                        <div class="InternationalTour-carousel owl-carousel">
                            @foreach ($universities->where('type', 'international-partnerships') as $university)
                                <div class="international-item">
                                    <img src="{{ getImageUrl($university->image) }}" class="img-fluid w-100 rounded"
                                        alt="Image">
                                    <div class="international-content">
                                        <div class="international-info">
                                            <h5 class="text-white text-uppercase mb-2">{{ $university->name }}</h5>
                                            <a href="{{ route('site.academic_and_research.university.index', $university->type) }}"
                                                class="btn-hover text-white me-4 d-none"><i
                                                    class="fas fa-map-marker-alt me-1"></i> 8 Cities</a>
                                            <a href="{{ route('site.academic_and_research.university.index', $university->type) }}"
                                                class="btn-hover text-white d-none"><i class="fa fa-eye ms-2"></i>
                                                <span>143+ Tour Places</span></a>
                                        </div>
                                    </div>
                                    <div class="tour-offer bg-success">NEW</div>
                                    <div class="international-plus-icon">
                                        <a href="{{ route('site.academic_and_research.university.index', $university->type) }}"
                                            class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Programs</h5>
                <h1 class="mb-0">Explore Our Programs</h1>
            </div>
            <div class="packages-carousel owl-carousel">
                @foreach ($programs as $program)
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
                                <p class="mb-4">{{ $program->quick_description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="packages-item">
                    <div class="packages-img">
                        <img src="https://via.placeholder.com/800x400?text=Academic+and+Research+Hub"
                            class="img-fluid w-100 rounded-top" alt="Academic and Research Hub">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-book me-2"></i>Academic
                                Hub</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-university me-2"></i>Research & Studies</small>
                            <small class="flex-fill text-center py-2"><i
                                    class="fa fa-graduation-cap me-2"></i>Undergraduate & Postgraduate</small>
                        </div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Academic & Research Hub</h5>
                            <small class="text-uppercase">University Programs</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Explore our comprehensive academic programs and research facilities,
                                including undergraduate, postgraduate, and doctoral studies. Connect with top international
                                and local universities, and utilize state-of-the-art academic venues.</p>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="https://via.placeholder.com/800x400?text=Business+and+Innovation"
                            class="img-fluid w-100 rounded-top" alt="Business and Innovation">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-rocket me-2"></i>Business
                                & Innovation</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-building me-2"></i>Incubators & Consultancies</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-globe me-2"></i>Global
                                Partnerships</small>
                        </div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Business & Innovation Ecosystem</h5>
                            <small class="text-uppercase">Startup Support</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Dive into our business and innovation ecosystem that supports startups,
                                fosters entrepreneurship, and drives growth through incubators and consulting services.
                                Explore opportunities for global collaboration and business partnerships.</p>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="https://via.placeholder.com/800x400?text=Smart+Training+Programs"
                            class="img-fluid w-100 rounded-top" alt="Smart Training Programs">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-laptop me-2"></i>Smart
                                Training</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-certificate me-2"></i>Accredited Programs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-calendar me-2"></i>Professional
                                Development</small>
                        </div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Smart Training Programs</h5>
                            <small class="text-uppercase">E-Training & Certification</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Advance your career with our smart training programs offering conventional,
                                professional, and accredited courses. Access high-quality e-training platforms designed for
                                your personal and professional development.</p>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="https://via.placeholder.com/800x400?text=Global+Engagement"
                            class="img-fluid w-100 rounded-top" alt="Global Engagement">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-globe me-2"></i>Global
                                Engagement</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-network-wired me-2"></i>International Partnerships</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-users me-2"></i>Collaborative
                                Projects</small>
                        </div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Global Engagement Opportunities</h5>
                            <small class="text-uppercase">International Collaborations</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Engage with our global network through international business partnerships,
                                collaborative research projects, and global outreach programs. Connect with a world of
                                opportunities to expand your horizons.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Packages End -->


    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 my-5 d-none">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Gallery</h5>
            <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum
                cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                        href="#GalleryTab-1">
                        <span class="text-dark" style="width: 150px;">All</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-2">
                        <span class="text-dark" style="width: 150px;">World tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-3">
                        <span class="text-dark" style="width: 150px;">Ocean Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-4">
                        <span class="text-dark" style="width: 150px;">Summer Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-5">
                        <span class="text-dark" style="width: 150px;">Sport Tour</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-1.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-1.jpg') }}" data-lightbox="gallery-1"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-2.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-3.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-4.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-4.jpg') }}" data-lightbox="gallery-4"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-5.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-5.jpg') }}" data-lightbox="gallery-5"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-6.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-6.jpg') }}" data-lightbox="gallery-6"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-7.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-7.jpg') }}" data-lightbox="gallery-7"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-8.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-8.jpg') }}" data-lightbox="gallery-8"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-9.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-9.jpg') }}" data-lightbox="gallery-9"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-10.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-10.jpg') }}" data-lightbox="gallery-10"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-2" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-2.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-3.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-3" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-2.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-3.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-4" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-2.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-3.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-5" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-2.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-2.jpg') }}" data-lightbox="gallery-2"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/site/img/gallery-3.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('assets/site/img/gallery-3.jpg') }}" data-lightbox="gallery-3"
                                        class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5 d-none">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="section-booking-title pe-3">Join The Community</h5>
                    <h1 class="text-white mb-4">Online Applying</h1>
                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime
                        ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?
                        Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                    </p>
                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime
                        ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium?
                        Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                    </p>
                    <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-white mb-3">Become Part Of Our Community</h1>
                    {{-- <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure
                    Trip With Travela. Get More Deal Offers Here.</p> --}}
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-white border-0" id="datetime"
                                        placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="select1">
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 2</option>
                                        <option value="3">Destination 3</option>
                                    </select>
                                    <label for="select1">Destination</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="SelectPerson">
                                        <option value="1">Persons 1</option>
                                        <option value="2">Persons 2</option>
                                        <option value="3">Persons 3</option>
                                    </select>
                                    <label for="SelectPerson">Persons</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="CategoriesSelect">
                                        <option value="1">Kids</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="CategoriesSelect">Categories</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white w-100 py-3" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->

    <!-- Team Start -->
    {{-- @include('site.partials.team') --}}
    <!-- Team End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5 d-none">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Blog</h5>
                <h1 class="mb-4">Popular Travel Blogs</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset('assets/site/img/blog-1.jpg') }}"
                                    alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i
                                        class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                        class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset('assets/site/img/blog-2.jpg') }}"
                                    alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i
                                        class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                        class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset('assets/site/img/blog-3.jpg') }}"
                                    alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i
                                        class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                        class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Our Clients Say!!!</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                @foreach ($testmonials as $testmonial)
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">
                                {{ $testmonial->feedback }}
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="{{ getImageUrl($testmonial->image) }}" class="img-fluid rounded-circle"
                                alt="Image" width="50px" height="50px">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">{{ $testmonial->name }}</h5>
                            <p class="mb-0">{{ $testmonial->location }}</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
