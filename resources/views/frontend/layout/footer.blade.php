<!--Site Footer Four Start-->
<footer class="site-footer-four">
    <div class="site-footer-four__bg"
        style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/site-footer-four-bg-2.png') }}')">
    </div>
    <div class="container">
        <div class="site-footer-four__top">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget-four__column footer-widget-four__about">
                        <div class="footer-widget-four__logo">
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('assets/images/update-17-06-2023/resources/main-menu-logo.png') }}"
                                    alt="" width="100%">
                            </a>
                        </div>
                        {{-- <div class="footer-widget-four__about-text-box">
                            <p class="footer-widget__about-text">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna</p>
                        </div> --}}
                        <div class="site-footer-four__social">
                            <a href="{{ $site_settings->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $site_settings->tiktok }}"><i class="fab fa-tiktok"></i></a>
                            <a href="{{ $site_settings->whatsapp }}"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget-four__column footer-widget-four__services clearfix">
                        <h3 class="footer-widget-four__title">Our Services</h3>
                        <ul class="footer-widget-four__services-list list-unstyled clearfix">
                            <li>
                                <a href="{{ route('home.index') }}#about-us">About</a>
                            </li>
                            {{-- <li>
                                <a href="">Insurance</a>
                            </li> --}}
                            <li>
                                <a href="">Latest Portfolio</a>
                            </li>
                            <li>
                                <a href="">Our Faqs</a>
                            </li>
                            <li>
                                <a href="{{ route('home.report-claim') }}">Get in Touch</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget-four__column footer-widget-four__contact">
                        <h3 class="footer-widget-four__title">Contact us</h3>
                        <ul class="footer-widget-four__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone-call"></span>
                                </div>
                                <div class="content">
                                    <p>Phone:</p>
                                    <h3><a href="tel:{{ $site_settings->phone }}">{{ $site_settings->phone }}</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone-call"></span>
                                </div>
                                <div class="content">
                                    <p>Mobile:</p>
                                    <h3><a href="tel:{{ $site_settings->mobile }}">{{ $site_settings->mobile }}</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="content">
                                    <p>E-mail:</p>
                                    <h3><a href="mailto:{{ $site_settings->email }}">{{ $site_settings->email }}</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget-four__column footer-widget-four__news">
                        <h3 class="footer-widget-four__title">news</h3>
                        <ul class="footer-widget-four__news-list list-unstyled">
                            <li>
                                <div class="footer-widget-four__news-img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/resources/footer-widget-four-news-img-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="content">
                                    <h3><a href="">The 8 best things about
                                            insurance</a></h3>
                                    <p><span class="fa fa-calendar-alt"></span>05-09-2023</p>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget-four__news-img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/resources/footer-widget-four-news-img-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="content">
                                    <h3><a href="">How to make contrary
                                            to popular</a></h3>
                                    <p><span class="fa fa-calendar-alt"></span>05-09-2023</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer-four__bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer-four__bottom-inner">
                        <p class="site-footer-four__bottom-text">© All Copyright {{ now()->format('Y') }} by <a
                                href="https://www.upwork.com/freelancers/~01558c47eff3d1eca3" target="_blank">Hamza</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer Four End-->
