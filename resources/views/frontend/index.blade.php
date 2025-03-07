@extends('frontend.layout.layout')

@php
    $headTitle = 'Home';
    $header = 'false';
    $counterone = 'Six';
    $css =
        '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '" />';
    $css3 =
        '<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
           <script src="' . asset('assets/js/insur.js') . '"></script>';
    $footer = 'false';
@endphp

@section('content')
    <!--Main Slider Start-->
    <section class="main-slider-seven clearfix">
        @if ($homepageSettings->banner_slides)
            <div class="swiper-container thm-swiper__slider"
                data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                    @foreach ($homepageSettings->banner_slides as $item)
                        <div class="swiper-slide">
                            <div class="main-slider-seven__bg"
                                style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-bg.jpg') }}')">
                            </div>
                            <div class="main-slider-seven__shape-bg"
                                style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-shape-bg.png') }}')">
                            </div>
                            <div class="main-slider-seven__img">
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="">
                                <div class="main-slider-seven__support">
                                    <div class="main-slider-seven__support-icon">
                                        <i class="{{ $item['support_icon'] }}"></i>
                                    </div>
                                    <div class="main-slider-seven__support-content">
                                        <h5 class="main-slider-seven__support-title">{{ $item['support_title'] }}</h5>
                                        <p class="main-slider-seven__support-number">{{ $item['support_text'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slider-seven__shape-1 float-bob-y">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/main-slider-seven-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-seven__content">
                                            <h2 class="main-slider-seven__title">{!! $item['title'] !!}</h2>
                                            <p class="main-slider-seven__text">{!! $item['text'] !!}</p>
                                            <div class="main-slider-seven__email">
                                                <form class="main-slider-seven__email-box" data-url="MC_FORM_URL">
                                                    <div class="main-slider-seven__email-input-box">
                                                        <input type="email" placeholder="enter your email" name="email">
                                                        <div class="main-slider-seven__email-icon">
                                                            <span class="icon-email"></span>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="main-slider-seven__contact-btn">Contact
                                                        Us</button>
                                                </form>
                                                <div class="mc-form__response"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-seven__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <span>Next</span>
                        <i class="icon-right-arrow1"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                        <span>Prev</span>
                    </div>
                </div>

            </div>
        @endif
    </section>
    <!--Main Slider End-->

    <!--About Eight Start-->
    <section class="about-eight">
        <div class="about-eight__img-three float-bob-x">
            <img src="{{ asset('storage/' . $homepageSettings->aboutus_background_image_left) }}" alt="">
        </div>
        <div class="about-eight__img-four float-bob-y">
            <img src="{{ asset('storage/' . $homepageSettings->aboutus_background_image_right) }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-eight__left">
                        <div class="about-eight__img-box">
                            <div class="about-eight__img">
                                <img src="{{ asset('storage/' . $homepageSettings->aboutus_main_image_top) }}"
                                    alt="">
                                alt="">
                            </div>
                            <div class="about-eight__img-two">
                                <img src="{{ asset('storage/' . $homepageSettings->aboutus_main_image_bottom) }}"
                                    alt="">
                            </div>
                            <div class="about-eight__experience">
                                <div class="about-eight__experience-shape"
                                    style="background-image: url('{{ asset('assets/images/update-17-06-2023/shapes/about-eight-experience-shape-1.png') }}')">
                                </div>
                                <h3>{{ $homepageSettings->aboutus_experience }}</h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-eight__right">
                        <div class="section-title-five text-left">
                            <span class="section-title-five__tagline">{{ $homepageSettings->aboutus_tagline }}</span>
                            <h2 class="section-title-five__title">{{ $homepageSettings->aboutus_title }}
                            </h2>
                        </div>
                        <p class="about-eight__text">{{ $homepageSettings->aboutus_text }}</p>
                        @if ($homepageSettings->aboutus_services)
                            <ul class="list-unstyled about-eight__service">
                                @foreach ($homepageSettings->aboutus_services as $item)
                                    <li>
                                        <div class="icon">
                                            <span class="{{ $item['icon'] }}"></span>
                                        </div>
                                        <div class="text">
                                            <p>{!! $item['title'] !!}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        @if ($homepageSettings->aboutus_points)
                            <ul class="list-unstyled about-eight__points">
                                @foreach ($homepageSettings->aboutus_points as $item)
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $item['point'] }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="about-eight__btn-box">
                            <a href="#!" class="about-eight__btn thm-btn-four">Discover More<span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Eight End-->

    <!--Reg Insurance Start-->
    <section class="reg-insurance">
        <div class="reg-insurance__bg"
            style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/reg-insurance-bg.jpg') }}')">
        </div>
        <div class="reg-insurance__shape-1 float-bob-y"
            style="background-image: url('{{ asset('storage/' . $homepageSettings->claim_status_background_image) }}')">
        </div>
        <div class="reg-insurance__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/update-17-06-2023/shapes/reg-insurance-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="reg-insurance__inner">
                <h3 class="reg-insurance__title">{{ $homepageSettings->claim_status_title }}</h3>
                <p class="reg-insurance__text">{!! $homepageSettings->claim_status_text !!}</p>
                <div class="reg-insurance__btn-box">
                    <a href="{{ route('register') }}" class="reg-insurance__btn-one thm-btn-four">Register Free<span
                            class="fas fa-arrow-right"></span></a>
                    <a href="{{ route('login') }}" class="reg-insurance__btn-two thm-btn-four">Sign In<span
                            class="fas fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--Reg Insurance End-->

    <!--Services Seven Start-->
    <section class="services-seven">
        <div class="container">
            <div class="section-title-five text-center">
                <span class="section-title-five__tagline">{{ $homepageSettings->services_tagline }}</span>
                <h2 class="section-title-five__title">{{ $homepageSettings->services_title }}</h2>
            </div>
            @if ($homepageSettings->service_items)
                <div class="row">
                    @foreach ($homepageSettings->service_items as $item)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
                            data-wow-delay="{{ $loop->iteration * 100 }}ms">
                            <div class="services-seven__single">
                                <h3 class="services-seven__title"><a href="">{{ $item['title'] }}</a></h3>
                                <p class="services-seven__text">{!! $item['text'] !!}</p>
                                <a href="{{ route('service.show', ['slug' => $item['url_slug']]) }}"
                                    class="services-seven__btn thm-btn-four">Details<span
                                        class="fas fa-arrow-right"></span></a>
                                <div class="services-seven__img">
                                    <img src="{{ asset('storage/' . $item['image']) }}" alt="">
                                </div>
                                <div class="services-seven__hover-box">
                                    <div class="services-seven__hover-bg"
                                        style="background-image: url('{{ asset('storage/' . $item['hover_image']) }}')">
                                    </div>
                                    <h3 class="services-seven__hover-title"><a href="">{{ $item['title'] }}</a>
                                    </h3>
                                    <a href="{{ route('service.show', ['slug' => $item['url_slug']]) }}"
                                        class="services-seven__btn-two thm-btn-four">Details<span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!--Services Seven End-->

    <!--Team Six Start-->
    <section class="team-six">
        <div class="container">
            <div class="section-title-five text-center">
                <span class="section-title-five__tagline">Our Team</span>
                <h2 class="section-title-five__title">Meet Our Experienced Team</h2>
            </div>
            <div class="row">
                <!--Team Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-six__single">
                        <div class="team-six__img-box">
                            <div class="team-six__img">
                                <img src="{{ asset('assets/images/update-17-06-2023/team/team-6-1.jpg') }}"
                                    alt="">
                                <div class="team-six__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-six__content">
                            <h3 class="team-six__name"><a href="">Bob Thomas</a></h3>
                            <p class="team-six__sub-title">DESIGNER</p>
                            <div class="team-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/team-six-shape-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Six Single End-->
                <!--Team Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-six__single">
                        <div class="team-six__img-box">
                            <div class="team-six__img">
                                <img src="{{ asset('assets/images/update-17-06-2023/team/team-6-2.jpg') }}"
                                    alt="">
                                <div class="team-six__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-six__content">
                            <h3 class="team-six__name"><a href="">Nency Thomas</a></h3>
                            <p class="team-six__sub-title">DESIGNER</p>
                            <div class="team-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/team-six-shape-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Six Single End-->
                <!--Team Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-six__single">
                        <div class="team-six__img-box">
                            <div class="team-six__img">
                                <img src="{{ asset('assets/images/update-17-06-2023/team/team-6-3.jpg') }}"
                                    alt="">
                                <div class="team-six__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-six__content">
                            <h3 class="team-six__name"><a href="">Bob Nicols</a></h3>
                            <p class="team-six__sub-title">DESIGNER</p>
                            <div class="team-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/team-six-shape-1.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Six Single End-->
            </div>
        </div>
    </section>
    <!--Team Six End-->

    <!--Counter Four Start-->
    <section class="counter-four">
        <div class="counter-four__bg"
            style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/counter-four-bg.jpg') }}')">
        </div>
        <div class="container">
            <div class="counter-four__inner">
                <ul class="counter-four__count-box list-unstyled">
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}"
                                alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-agreement"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="876" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Insurance Policies</p>
                    </li>
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}"
                                alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-group"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="223" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Happy Clients</p>
                    </li>
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}"
                                alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-ring"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="96" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Award Winning</p>
                    </li>
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}"
                                alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-insurance-2"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="786" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Skilled Contractors</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter Four End-->

    <!--Why Choose Six Start-->
    <section class="why-choose-six">
        <div class="container">
            <div class="why-choose-six__top">
                <div class="section-title-five text-left">
                    <span class="section-title-five__tagline">{{ $homepageSettings->why_us_tagline }}</span>
                    <h2 class="section-title-five__title">{{ $homepageSettings->why_us_title }}</h2>
                </div>
                <div class="why-choose-six__btn-box">
                    <a href="}" class="why-choose-six__btn thm-btn-four">View More<span
                            class="fas fa-arrow-right"></span></a>
                </div>
            </div>
            @if ($homepageSettings->why_us_items)
                <div class="row">
                    @foreach ($homepageSettings->why_us_items as $item)
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 100 }}ms">
                            <div class="why-choose-six__single">
                                <div class="why-choose-six__single-bg"
                                    style="background-image: url('{{ asset('storage/' . $item['hover_image']) }}');">
                                </div>
                                <div class="why-choose-six__content">
                                    <div class="why-choose-six__icon">
                                        <span class="{{ $item['icon'] }}"></span>
                                    </div>
                                    <h4 class="why-choose-six__title"><a href="">{{ $item['title'] }}</a></h4>
                                    <p class="why-choose-six__text">{{ $item['text'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <!--Why Choose Six End-->

    <!--Testimonial Seven Start-->
    <section class="testimonial-seven">
        <div class="testimonial-seven__sec-img float-bob-x">
            <img src="{{ asset('storage/' . $homepageSettings->feedback_background_image) }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testimonial-seven__left">
                        <h3 class="testimonial-seven__title">{{ $homepageSettings->feedback_title }}</h3>
                        @if ($homepageSettings->feedback_items)
                            <div class="testimonial-seven__carousel-outer">
                                <div class="testimonial-seven__quote">
                                    <img src="{{ asset('assets/images/update-17-06-2023/icon/testimonial-seven-quote-icon.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-seven__carousel owl-carousel owl-theme thm-owl__carousel"
                                    data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 36,
                                    "nav": true,
                                    "dots": false,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1320": {
                                            "items": 1
                                        }
                                    }
                                }'>
                                    @foreach ($homepageSettings->feedback_items as $item)
                                        <div class="item">
                                            <div class="testimonial-seven__single">
                                                <p class="testimonial-seven__text">{{ $item['feedback'] }}</p>
                                                <div class="testimonial-seven__client">
                                                    <h4 class="testimonial-seven__client-name">
                                                        {{ $item['customer_name'] }}</h4>
                                                    <p class="testimonial-seven__client-sub-title">
                                                        {{ $item['customer_job'] ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="testimonial-seven__right">
                        <div class="testimonial-seven__right-content">
                            <div class="testimonial-seven__shape-1"
                                style="background-image: url('{{ asset('assets/images/update-17-06-2023/shapes/testimonial-seven-shape-1.png') }}')">
                            </div>
                            <div class="testimonial-seven__title-box">
                                <p class="testimonial-seven__sub-title">GET FREE QUOTE</p>
                                <h3 class="testimonial-seven__title-two">Insurance quote</h3>
                            </div>
                            <div class="testimonial-seven__main-tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#car-insurance" class="tab-btn active-btn">
                                        <div class="icon-box">
                                            <span class="icon-drive"></span>
                                        </div>
                                    </li>
                                    <li data-tab="#home-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="icon-home"></span>
                                        </div>
                                    </li>
                                    <li data-tab="#health-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="icon-heart-beat"></span>
                                        </div>
                                    </li>
                                    <li data-tab="#book-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="icon-folder"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="car-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Car insurance</option>
                                                            <option value="2">Life insurance</option>
                                                            <option value="3">Home insurance</option>
                                                            <option value="3">Health insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit"
                                                        class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="home-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Car insurance</option>
                                                            <option value="2">Life insurance</option>
                                                            <option value="3">Home insurance</option>
                                                            <option value="3">Health insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit"
                                                        class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="health-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Car insurance</option>
                                                            <option value="2">Life insurance</option>
                                                            <option value="3">Home insurance</option>
                                                            <option value="3">Health insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit"
                                                        class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="book-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Car insurance</option>
                                                            <option value="2">Life insurance</option>
                                                            <option value="3">Home insurance</option>
                                                            <option value="3">Health insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit"
                                                        class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Seven End-->

    <!--Process Two Start-->
    <section class="process-two">
        <div class="container">
            <div class="section-title-five text-center">
                <span class="section-title-five__tagline">{{ $homepageSettings->process_tagline }}</span>
                <h2 class="section-title-five__title">{{ $homepageSettings->process_text }}</h2>
            </div>
            <div class="process-two__inner">
                @if ($homepageSettings->process_items)
                    <ul class="process-two__list list-unstyled">
                        @foreach ($homepageSettings->process_items as $item)
                            <li>
                                <div class="process-two__single">
                                    <div class="process-two__arrow">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="process-two__img-border">
                                        <div class="process-two__img">
                                            <img src="{{ asset('storage/' . $item['image']) }}" alt="">
                                            <div class="process-two__count"></div>
                                        </div>
                                    </div>
                                    <h3 class="process-two__title">{{ $item['title'] }}</h3>
                                    <p class="process-two__text">{!! $item['text'] !!}</p>
                                    <div class="process-two__btn">
                                        <a href=""><span class="fa fa-arrow-right"></span>view details</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </section>
    <!--Process Two End-->

    <!--CTA Five Start-->
    <section class="cta-five cta-six">
        <div class="cta-five__shape-1 float-bob-y"></div>
        <div class="cta-five__shape-2 float-bob-x"></div>
        <div class="container">
            <div class="cta-five__inner">
                <h3 class="cta-five__title">Subscribe our newsletter</h3>
                <div class="cta-five__subscribe-box">
                    <form class="cta-five__email-box">
                        <div class="cta-five__email-input-box">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                        <button type="submit" class="cta-five__subscribe-btn thm-btn-four">Subscribe
                            Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Five End-->
@endsection
