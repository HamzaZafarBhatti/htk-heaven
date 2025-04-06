@extends('frontend.layout.layout')

@php
    $header = 'false';
    $counterone = 'false';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('styles')
    <style>
        .sidebar {
            background: var(--insur-primary);
            border-radius: var(--insur-bdr-radius);
            border-color: var(--insur-bdr-color);
            color: var(--insur-white);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 1rem;
            cursor: pointer;
        }

        .sidebar ul a:first-child li.active {
            border-radius: 10px 10px 0 0;
        }

        .sidebar ul li.active {
            background-color: var(--insur-base);
            font-weight: 700;
        }

        .sidebar ul a {
            color: inherit;
            font-size: 1.25rem;
        }

        label.error {
            color: #dc3545 !important;
        }

        .notification {
            padding: 10px;
            background: var(--insur-base);
            color: #fff;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content')
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    @include('frontend.dashboard.partials.sidebar')
                </div>
                <div class="col-xl-8 col-lg-7">
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
