<!-- Navbar & Hero Start -->
@php
    $activeTheme = isset($page) ? $page->theme : (isset($theme) ? $theme : ''); // Get the theme from the page if it exists
    $currentSlug = request()->route('slug') ?? (isset($slug) ? $slug : request()->route('theme')); // Get the current route slug
    view()->share([
        'activeTheme' => $activeTheme,
        'currentSlug' => $currentSlug,
    ]);
@endphp

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="m-0"><img src="{{ asset('assets/common/logo_dark.png') }}" alt=""></h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span> {{ config('app.name') }}
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ areActiveRoutes(['home']) }}">Home</a>
            <!-- About Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ $activeTheme === 'ABOUT' ? 'active' : ''  }}"
                    data-bs-toggle="dropdown">About</a>
                <div class="dropdown-menu m-0 overflow-auto" style="max-height: 300px;">
                    <a href="{{ route('site.about.index') }}"
                        class="dropdown-item {{ areActiveRoutes(['site.about.index']) }}">About BASC</a>
                    <a href="{{ route('page', 'history') }}"
                        class="dropdown-item {{ $currentSlug === 'history' ? 'active' : '' }}">Our History</a>
                        @foreach ($team_categories as $team_category)
                        <a href="{{ route('site.about.team', encrypt($team_category->id)) }}"
                            class="dropdown-item {{ $currentSlug == ($team_category->name) ? 'active' : '' }}">{{ $team_category->name }}</a> @endforeach
                        </div>
                </div>



                <!-- ACADEMIC AND RESEARCH HUB Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ $activeTheme === 'ACADEMIC AND RESEARCH HUB' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">ACADEMIC AND RESEARCH HUB</a>
                    <div class="dropdown-menu m-0 overflow-auto" style="max-height: 300px;">
                        <a href="{{ route('site.academic_and_research.branch.index', 'our-branches') }}"
                            class="dropdown-item {{ $currentSlug === 'our-branches' ? 'active' : '' }}">Our
                            Branches</a>
                        <a href="{{ route('site.academic_and_research.university.index', 'international-partnerships') }}"
                            class="dropdown-item {{ $currentSlug === 'international-partnerships' ? 'active' : '' }}">Universities</a>
                        <a href="{{ route('site.academic_and_research.university.index', 'local-universities') }}"
                            class="dropdown-item {{ $currentSlug === 'local-universities' ? 'active' : '' }} d-none">Local
                            Universities</a>
                        <a href="{{ route('page', 'academic-venues') }}"
                            class="dropdown-item {{ $currentSlug === 'academic-venues' ? 'active' : '' }}">Academic
                            Venues</a>
                        <a href="{{ route('page', 'graduate-school-business-entrepreneurship') }}"
                            class="dropdown-item {{ $currentSlug === 'graduate-school-business-entrepreneurship' ? 'active' : '' }} d-none">Graduate
                            School of Business & Entrepreneurship</a>
                        <a href="{{ route('page', 'british-fam-college') }}"
                            class="dropdown-item {{ $currentSlug === 'british-fam-college' ? 'active' : '' }}">British
                            FAM
                            College</a>
                    </div>
                </div>

                <!-- BUSINESS AND INNOVATION ECOSYSTEM Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ $activeTheme === 'BUSINESS AND INNOVATION ECOSYSTEM' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">BUSINESS AND INNOVATION ECOSYSTEM</a>
                    <div class="dropdown-menu m-0 overflow-auto" style="max-height: 300px;">
                        <a href="{{ route('site.business_and_innovation_ecosystem.consulting_services.index', 'smart-consultancies') }}"
                            class="dropdown-item {{ $currentSlug === 'smart-consultancies' ? 'active' : '' }}">SMART
                            Consultancies</a>
                        <a href="{{ route('page', 'smart-incubators') }}"
                            class="dropdown-item {{ $currentSlug === 'smart-incubators' ? 'active' : '' }}">SMART Business
                            Incubators</a>
                    </div>
                </div>

                <!-- GLOBAL ENGAGEMENT Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ $activeTheme === 'GLOBAL ENGAGEMENT' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">GLOBAL ENGAGEMENT</a>
                    <div class="dropdown-menu m-0 overflow-auto" style="max-height: 300px;">
                        <a href="{{ route('page', 'business-partnerships') }}"
                            class="dropdown-item {{ $currentSlug === 'business-partnerships' ? 'active' : '' }}">Business
                            Partnerships</a>
                        <a href="{{ route('page', 'communication-platforms') }}"
                            class="dropdown-item {{ $currentSlug === 'communication-platforms' ? 'active' : '' }}">Communication
                            Platforms</a>
                        <a href="{{ route('page', 'global-collaborations') }}"
                            class="dropdown-item {{ $currentSlug === 'global-collaborations' ? 'active' : '' }}">Global
                            Collaborations</a>
                    </div>
                </div>

                <!-- SMART TRAINING Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ $activeTheme === 'SMART TRAINING' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">SMART TRAINING</a>
                    <div class="dropdown-menu m-0 overflow-auto" style="max-height: 300px;">
                        <a href="{{ route('site.smart_training.index', 'conventional-training') }}"
                            class="dropdown-item {{ $currentSlug === 'conventional-training' ? 'active' : '' }}">Conventional
                            Training</a>
                        <a href="{{ route('site.smart_training.index', 'professional-training') }}"
                            class="dropdown-item {{ $currentSlug === 'professional-training' ? 'active' : '' }}">Professional
                            Training</a>
                        <a href="{{ route('site.smart_training.index', 'accredited-training') }}"
                            class="dropdown-item {{ $currentSlug === 'accredited-training' ? 'active' : '' }}">Accredited
                            Training</a>
                        <a href="{{ route('site.smart_training.index', 'e-training') }}"
                            class="dropdown-item {{ $currentSlug === 'e-training' ? 'active' : '' }}">E-training</a>
                        <a href="{{ route('site.smart_training.index', 'remote-freelancing-platform') }}"
                            class="dropdown-item {{ $currentSlug === 'remote-freelancing-platform' ? 'active' : '' }}">Remote
                            Freelancing Platform</a>
                        <a href="{{ route('site.smart_training.index', 'smart-training-development') }}"
                            class="dropdown-item {{ $currentSlug === 'smart-training-development' ? 'active' : '' }}">SMART  Development</a>
                        <a href="{{ route('site.smart_training.apply') }}"
                            class="dropdown-item {{ $currentSlug === 'apply' ? 'active' : '' }}">APPLY</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('site.contact') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4"
                id="">Contact</a>
        </div>
</nav>
<!-- Navbar & Hero End -->
