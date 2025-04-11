@extends('frontend.dashboard.index')

@php
    $headTitle = 'Security';
@endphp

@section('customer-dashboard')
    <form action="{{ route('password.update') }}" class="comment-one__form needs-validation was-validated"
        novalidate="novalidate" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-12">
                <div class="comment-form__input-box">
                    <input type="password" placeholder="Current Password" name="current_password">
                    @error('current_password')
                        <label class="invalid-feedback eror">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="comment-form__input-box">
                    <input type="password" placeholder="New Password" name="password">
                    @error('password')
                        <label class="invalid-feedback eror">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="comment-form__input-box">
                    <input type="password" placeholder="Confirm Password" name="password_confirmation">
                    @error('password_confirmation')
                        <label class="invalid-feedback eror">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="comment-form__btn-box">
                    <button type="submit" class="thm-btn comment-form__btn">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection
