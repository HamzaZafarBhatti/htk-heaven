@extends('frontend.dashboard.index')

@php
    $headTitle = 'Profile';
@endphp

@section('customer-dashboard')
    <form action="{{ route('profile.update') }}" class="comment-one__form needs-validation was-validated"
        novalidate="novalidate" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-12">
                <div class="comment-form__input-box">
                    <input type="text" placeholder="Your name" name="name" value="{{ old('name', $user->name) }}"
                        required>
                    @error('name')
                        <label class="invalid-feedback eror">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="comment-form__input-box">
                    <input type="email" placeholder="Email address" name="email"
                        value="{{ old('email', $user->email) }}">
                    @error('email')
                        <label class="invalid-feedback eror">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="comment-form__input-box">
                    <input type="text" placeholder="Phone" name="phone" value="{{ old('phone', $user->phone) }}">
                    @error('phone')
                        <label class="invalid-feedback eror">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="comment-form__input-box">
                    <input type="text" placeholder="Address" name="address"
                        value="{{ old('address', $user->address) }}">
                    @error('address')
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
