@extends('frontend.layout.layout')

@php
    $header = 'false';
    $counterone = 'false';
    $css2 =
        '<link rel="stylesheet" href="' .
        asset('assets/css/color-5.css?v=') .
        time() .
        '" /><link rel="stylesheet" href="' .
        asset('assets/css/user-dashboard.css?v=') .
        time() .
        '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('styles')
@endsection

@section('content')
    <div class="contact-page">
        <div class="container">
            <div class="row">
                @auth
                    <div class="col-xl-4 col-lg-5">
                        @include('frontend.dashboard.partials.sidebar')
                    </div>
                @endauth
                @guest
                    <div class="col-12">
                    @endguest
                    @auth
                        <div class="col-xl-8 col-lg-7">
                        @endauth
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                @include('frontend.dashboard.partials.notification')

                                @yield('customer-dashboard')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
    @endsection
