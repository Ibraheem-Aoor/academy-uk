<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper sidebar-colored">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html">
                <i class="fa fa-cut me-3"></i>{{ config('app.name', 'FEMILUX') }}
                <span class="sidebar-colored d=none">
                    <img src="{{ getAppLogo('light') }}" height="24" alt="">
                </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="">
                <a href="{{ route('admin.dashboard') }}"><i class="ti ti-home me-2"></i>DASHBOARD</a>
            </li>
            {{-- <li class="d-none">
                <a href="{{ route('admin.service.index') }}"><i class="ti ti-browser  me-2"></i>SERVICES</a>
            </li> --}}
            <li class="">
                <a href="{{ route('admin.team.category.index') }}"><i class="ti ti-user me-2"></i>TEAM Category</a>
            </li>
            <li class="">
                <a href="{{ route('admin.team.index') }}"><i class="ti ti-user me-2"></i>TEAM MEMBERS</a>
            </li>
            <li class="">
                <a href="{{ route('admin.contacts.index') }}"><i class="ti ti-mail-opened me-2"></i>CONTACTS</a>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>HOME PAGE</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.page.home.testmonials.index') }}">Testmonials</a>
                        </li>
                        <li><a href="{{ route('admin.page.home.smart_training_programs.index' , ['status' => true]) }}">Home Page Program</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>ACADEMIC & RESEARCH HUB</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.academic_and_research.branch.index') }}">Our Branches</a>
                        </li>
                        <li><a href="{{ route('admin.academic_and_research.university.index') }}">Universities</a>
                        </li>
                        <li><a href="{{ route('admin.fam_college.project_category.index') }}">FAM Project Categories</a>
                        <li><a href="{{ route('admin.fam_college.project.index') }}">FAM Projects</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>BUSINESS & INNOVATION ECOSYSTEM</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.business_and_innovatio_ecosystem.consulting_services.index') }}">Smart Conslutinces</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>SMART TRAINING</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.training.program_category.index') }}">Program Categories</a>
                        </li>
                        <li><a href="{{ route('admin.training.program.index') }}">Programs</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>PAGES</a>
                <div class="sidebar-submenu">
                    <ul>
                        {{-- <li><a href="{{ route('admin.page.edit', ['slug' => 'home']) }}">{{ __('general.home') }}</a></li> --}}
                        @foreach ($admin_sidebar_pages as $title => $slug)
                            <li><a href="{{ route('admin.page.edit', ['slug' => $slug]) }}">{{ $title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown" id="test">
                <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>SETTINGS</a>
                <div class="sidebar-submenu">
                    <ul>
                        {{-- <li><a href="{{ route('admin.work_hour.edit') }}">{{ __('general.working_hours') }}</a></li> --}}
                        <li><a href="{{ route('admin.setting.edit') }}">{{ __('general.site_settings') }}</a></li>
                    </ul>
                </div>
            </li>
            {{-- <li class="sidebar-dropdown d-none">
                <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>{{ __('general.example') }}</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="comingsoon.html">{{ __('general.comingsoon') }}</a></li>
                        <li><a href="maintenance.html">{{ __('general.maintenance') }}</a></li>
                        <li><a href="error.html">{{ __('general.error') }}</a></li>
                        <li><a href="thankyou.html">{{ __('general.thankyou') }}</a></li>
                    </ul>
                </div>
            </li> --}}
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper -->
