@extends('frontend.layout.layout')

@php
    $headTitle = 'Register';
    $counterone = 'false';
    $header = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
    $css3 =
        '<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $footer = 'false';
@endphp

@section('content')
    <!--Sign In Start -->
    <section class="sign-in">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="sign-in__single">
                        <h3 class="sign-in__title text-center">Register</h3>
                        <form class="sign-in__form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="sign-in__form-input-box">
                                <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
                                    required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="sign-in__form-input-box">
                                <input type="email" placeholder="Email address" name="email" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checked-box">
                                <input type="checkbox" name="is_privacy_policy_accepted" id="skipper3" checked="">
                                <label for="skipper3"><span></span>I accept company privacy policy.</label>
                            </div>
                            <div class="sign-in__form-btn-box">
                                <button type="submit" class="thm-btn sign-in__form-btn">Register</button>
                                <div class="sign-in__form-forgot-password">
                                    <a href="{{ route('login') }}">Already registered?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Sign In End-->
@endsection
