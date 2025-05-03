@extends('frontend.layout.layout')

@php
    $headTitle = '404 - Not Found';
    $header = 'false';
    $counterone = 'false';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
    $footer = 'false';
@endphp

@section('content')
    <section class="error-page">
        <div class="error-page-shape-1 float-bob-y"
            style="background-image: url({{ asset('assets/images/shapes/error-page-shape-1.png') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__inner">
                        <div class="error-page__title-box">
                            <h2 class="error-page__title">404</h2>
                            <h3 class="error-page__sub-title">Not found!</h3>
                        </div>
                        <p class="error-page__text">Sorry we can't find what you are looking for!</p>
                        <form class="error-page__form" action="" method="get">
                            @csrf
                            <div class="error-page__form-input">
                                <input type="search" placeholder="Search here" id="rta_number" name="rta_number">
                                <a type="button" href="{{ route('claims.show', '123') }}"
                                    class="main-slider-seven__contact-btn check-claim"><i
                                        class="icon-magnifying-glass"></i></a>
                            </div>
                        </form>
                        <a href="{{ route('home.index') }}" class="thm-btn error-page__btn">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#rta_number').on('input', function() {
                var rta_number = $(this).val();
                $('.check-claim').attr('href', `/claims/${rta_number}`)
            })

            $('.error-page__form').submit(function(e) {
                e.preventDefault();
                console.log('submit');

                $('.check-claim')[0].click();
            });
        })
    </script>
@endsection
