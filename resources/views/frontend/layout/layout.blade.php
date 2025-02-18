<!DOCTYPE html>
<html lang="en">

@include('components.head', [
    'rtlMode' => isset($rtlMode) ? $rtlMode : '',
    'headTitle' => isset($headTitle) ? $headTitle : '',
    'css' => isset($css) ? $css : '',
    'css2' => isset($css2) ? $css2 : '',
    'css3' => isset($css3) ? $css3 : '',
])

<body class="custom-cursor <?php echo isset($bodyClass) ? $bodyClass : ''; ?>">

    @include('components.customcursor')

    @include('components.preloader')

    <div class="page-wrapper">

        @if (!isset($header))
            @include('components.header')
            @include('components.strickyheader')
        @endif

        @include('frontend.layout.header')

        @if (isset($subTitle))
            @include('components.pageheader', [
                'title' => $title ?? '',
                'subTitle' => $subTitle ?? '',
            ])
        @endif

        @yield('content')

        @include('frontend.layout.footer')

        @if (!isset($counterone))
            @include('components.counterone')
        @endif

        @if (!isset($footer))
            @include('components.footer')
        @endif
    </div>

    @include('components.mobilenav')

    @include('components.searchpopup')

    @include('components.script', [
        'script' => $script ?? '',
    ])
</body>

</html>
