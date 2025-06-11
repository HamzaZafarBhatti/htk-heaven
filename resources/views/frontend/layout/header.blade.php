<header class="main-header-seven">
    <div class="main-header-seven__top">
        <div class="container">
            <div class="main-header-seven__top-inner">
                <div class="main-header-seven__top-address">
                    <ul class="list-unstyled main-header-seven__top-address-list">
                        <li>
                            <i class="icon">
                                <span class="icon-telephone-call"></span>
                            </i>
                            <div class="text">
                                <p class="mb-2"><a
                                        href="tel:{{ $site_settings->phone }}">{{ $site_settings->phone }}</a></p>
                                <p><a href="tel:{{ $site_settings->mobile }}">{{ $site_settings->mobile }}</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="icon">
                                <span class="fas fa-envelope"></span>
                            </i>
                            <div class="text">
                                <p><a href="mailto:{{ $site_settings->email }}">{{ $site_settings->email }}</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="icon">
                                <span class="icon-pin"></span>
                            </i>
                            <div class="text">
                                <p style="width: 430px;">{{ $site_settings->address }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-header-seven__top-right">
                    <h4 class="main-header-seven__solicl-title">Follow Us:</h4>
                    <div class="main-header-seven__top-social">
                        <a href="{{ $site_settings->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $site_settings->tiktok }}" target="_blank"><i class="fab fa-tiktok"></i></a>
                        <a href="{{ $site_settings->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-seven">
        <div class="main-menu-seven__wrapper">
            <div class="container">
                <div class="main-menu-seven__wrapper-inner">
                    <div class="main-menu-seven__logo">
                        <a href="{{ route('home.index') }}"><img
                                src="{{ asset('assets/images/update-17-06-2023/resources/main-menu-logo.png') }}"
                                alt=""></a>
                    </div>
                    <div class="main-menu-seven__left">
                        <div class="main-menu-seven__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="{{ Route::is('home.index') ? 'current' : '' }}">
                                    <a href="{{ route('home.index') }}">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#"
                                        class="{{ Route::is([/* 'home.how-is-it-free', */ 'home.replacement-vehicle', 'home.report-claim']) ? 'current' : '' }}">
                                        Our Services
                                    </a>
                                    <ul>
                                        {{-- <li><a href="{{ route('home.how-is-it-free') }}">How is it Free?</a></li> --}}
                                        <li>
                                            <a href="{{ route('home.index') }}#about-us">
                                                About Us
                                            </a>
                                        </li>
                                        <li><a href="{{ route('home.report-claim') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-seven__right">
                        <div class="main-menu-seven__search-get-quote-btn">
                            <div class="main-menu-seven__get-quote-btn-box">
                                <a href="{{ route('home.report-claim') }}"
                                    class="thm-btn-three main-menu-seven__get-quote-btn">Report a
                                    Claim<span class="fas fa-paper-plane"></span></a>
                            </div>
                            <div class="main-menu-seven__search-box">
                                @auth
                                    <a href="#" class="main-menu-seven__search search-toggler fas fa-user"></a>
                                @else
                                    <a href="{{ route('login') }}" class="thm-btn-three">Sign In <span
                                            class="fas fa-sign-in-alt"></span></a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-seven">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
