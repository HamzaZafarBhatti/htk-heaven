<!DOCTYPE html>
<html lang="en">

@include('frontend.components.head', [
    'rtlMode' => isset($rtlMode) ? $rtlMode : '',
    'headTitle' => isset($headTitle) ? $headTitle : '',
    'css' => isset($css) ? $css : '',
    'css2' => isset($css2) ? $css2 : '',
    'css3' => isset($css3) ? $css3 : '',
])

<body class="custom-cursor <?php echo isset($bodyClass) ? $bodyClass : ''; ?>">

    @include('frontend.components.customcursor')

    @include('frontend.components.preloader')

    <div class="page-wrapper">

        @if (!isset($header))
            @include('frontend.components.header')
            @include('frontend.components.strickyheader')
        @endif

        @include('frontend.layout.header')

        @if (isset($subTitle))
            @include('frontend.components.pageheader', [
                'title' => $title ?? '',
                'subTitle' => $subTitle ?? '',
                'header_image' => $headerImage ?? '',
            ])
        @endif

        @yield('content')

        @include('frontend.layout.footer')

        @if (!isset($counterone))
            @include('frontend.components.counterone')
        @endif

        @if (!isset($footer))
            @include('frontend.components.footer')
        @endif
    </div>

    @include('frontend.components.mobilenav')

    @include('frontend.components.searchpopup')

    @include('frontend.components.script', [
        'script' => $script ?? '',
    ])
</body>

</html>
