@extends('frontend.layout.layout')

@php
    $headTitle = $service->name;
    $title = 'Service';
    $subTitle = $service->name;
    $headerImage = $service->header_image;
    $header = 'false';
    $counterone = 'false';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('styles')
@endsection

@section('content')
    <!--Contact Page Start-->
    <section class="about-four">
        <div class="container">
            <div class="content">
                {!! str($service->content)->sanitizeHtml() !!}
            </div>
        </div>
    </section>
    <!--Contact Page End-->
    <!--FAQ One Start-->
    @if ($service->faqs)
        <section class="faq-one pt-0">
            <div class="container">
                <div class="row">
                    @foreach ($service->faqs as $item)
                        <div class="col-xl-6 col-lg-6">
                            <div class="faq-one__single">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                    <div class="accrodion @if ($loop->iteration < 3) active @endif">
                                        <div class="accrodion-title">
                                            <h4><span>?</span> {{ $item['question'] }}</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>{{ $item['answer'] }}</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!--FAQ One End-->
@endsection

@section('scripts')
@endsection
