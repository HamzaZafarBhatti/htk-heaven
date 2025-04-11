<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ route('home.index') }}" aria-label="logo image"><img
                    src="{{ asset('assets/images/resources/mobile-logo.png') }}" width="143" alt=""></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{ $site_settings->email }}">{{ $site_settings->email }}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <p class="d-flex flex-column">
                    <a href="tel:{{ $site_settings->phone }}">{{ $site_settings->phone }}</a>
                    <a href="tel:{{ $site_settings->mobile }}">{{ $site_settings->mobile }}</a>
                </p>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="{{ $site_settings->facebook }}" class="fab fa-facebook"></a>
                <a href="{{ $site_settings->tiktok }}" class="fab fa-tiktok"></a>
                <a href="{{ $site_settings->whatsapp }}" class="fab fa-whatsapp"></a>
            </div><!-- /.mobile-nav__social -->

        </div><!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
