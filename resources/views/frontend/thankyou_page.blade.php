@extends('frontend.layout.layout')

@php
    $headTitle = 'Thank You';
    $header = 'false';
    $counterone = 'false';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('styles')
    <style>
        .thankyou {
            text-align: center;
        }

        .thankyou h1 {
            font-size: 5rem;
            font-weight: 400;
            text-transform: uppercase;
        }

        .thankyou p {
            font-size: 1.5rem;
            line-height: 2;
        }

        .thankyou p a {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="thankyou">
                <h1>Thank You</h1>
                <p>Thanks for choosing us, we will contact you soon!</p>
                <p class="mb-4">If you want you can fill the complete form <a href="{{ route('home.accident-repairs') }}">here</a></p>
                <div>
                    <a type="button" href="{{ route('home.index') }}" class="thm-btn comment-form__btn">Home</a>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->
@endsection

@section('scripts')
@endsection
