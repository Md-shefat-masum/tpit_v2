<!-- BEGIN: Main Menu-->

    <div class="navbar-header mb-2">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/"><span class="brand-logo">
                    <img src="{{ asset(setting(key:'header_logo')) }}" class="img-fluid mb-2" style="max-width: 150px;" alt="tech park it">
                    {{-- <h2 class="brand-text">Tp IT</h2> --}}
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('course_manager_dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Home</span></a></li>
            <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('course_manager_courses') }}"><i data-feather="book-open"></i><span class="menu-title text-truncate" data-i18n="Course Management">Course Management</span></a></li>
            <li class="nav-item"><a class="d-flex align-items-center" href="{{ route('course_manager_quizes') }}"><i data-feather="book-open"></i><span class="menu-title text-truncate" data-i18n="Course Management">Quiz Management</span></a></li>
        </ul>
    </div>

<!-- END: Main Menu-->