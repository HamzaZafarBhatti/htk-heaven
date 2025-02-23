@extends('frontend.layout.layout')

@php
    $headTitle = 'Road Traffic Accident Form';
    $header = 'false';
    // $title = 'RTA Form';
    // $subTitle = 'Road Traffic Accident Form';
    $counterone = 'false';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-signature/css/jquery.signature.css') }}">
    <style>
        .filepond--credits {
            display: none;
        }

        .kbw-signature {
            width: 100%;
            height: 200px;
        }
    </style>
@endsection

@section('content')
    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="">
                <div class="contact-page__left">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Road Traffic Accident Form</p>
                            <div class="section-title-shape-1">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Please fill in the form below to report an accident!</h2>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="contact-page__right">
                    <div class="contact-page__form">
                        <form action="assets/inc/sendemail" class="comment-one__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Accident Reporting Date</label>
                                        <input type="date" name="accident_date">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Driver Reference (Driver Number)</label>
                                        <input type="text" name="driver_reference">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Agreement Reference Number</label>
                                        <input type="text" placeholder="" name="agreement_reference">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5>Driver Details</h5>
                                    <hr>
                                </div>
                                <div class="col-12">
                                    <label>Name</label>
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Title" name="title" id="title">
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="First Name" name="first_name"
                                                    id="first_name">
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Last Name" name="last_name"
                                                    id="last_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" id="dob">
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Email</label>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Phone</label>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Occupation</label>
                                        <input type="text" name="occupation">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Address</label>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Address Line 1" name="address_line_1"
                                                    id="address_line_1">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Address Line 2" name="address_line_2"
                                                    id="address_line_2">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="City" name="city" id="city">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Postal / Zip Code" name="postal_code"
                                                    id="postal_code">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <select name="country" id="country">
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $key => $country)
                                                        <option value="{{ $key }}"
                                                            @if ($key == 'GB') selected @endif>
                                                            {{ $country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>National Insurance Number</label>
                                        <input type="text" name="nin">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Type of Injury</label>
                                        <input type="text" name="injury_type">
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Driver's Insurance Company</label>
                                        <input type="text" name="insurance_company">
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Insurance Policy Number</label>
                                        <input type="text" name="insurance_policy_number">
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Cover Type</label>
                                        <select name="cover_type">
                                            <option value="">Select Cover Type</option>
                                            @foreach ($insurance_cover_types as $key => $item)
                                                <option value="{{ $key }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="comment-form__input-box">
                                        <label>Insurance Company Phone</label>
                                        <input type="text" name="insurance_company_phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Did Driver Report to the police?</label>
                                    <div class="comment-form__input-box">
                                        <input type="radio" name="is_police_reported" id="police_reported_yes"
                                            value="1">
                                        <label for="police_reported_yes">Yes</label>
                                        <input type="radio" name="is_police_reported" id="police_reported_no"
                                            value="0" checked>
                                        <label for="police_reported_no">No</label>
                                    </div>
                                </div>
                                <div class="col-xl-6" id="cad_reference_number" style="display: none;">
                                    <div class="comment-form__input-box">
                                        <label>If Yes, What is CAD reference Number</label>
                                        <input type="text" name="cad_reference_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Vehicle Details</h5>
                                    <hr>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Vehicle Registration</label>
                                        <input type="text" name="vehicle_registration">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Make</label>
                                        <input type="text" name="vehicle_make">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Model</label>
                                        <input type="text" name="vehicle_model">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Colour</label>
                                        <input type="text" name="vehicle_colour">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Year</label>
                                        <input type="text" name="vehicle_year">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Vehicle Road Worthy</label>
                                    <div class="comment-form__input-box">
                                        <input type="radio" name="is_vehicle_road_worthy" id="vehicle_road_worthy_yes"
                                            value="1" checked>
                                        <label for="vehicle_road_worthy_yes">Yes</label>
                                        <input type="radio" name="is_vehicle_road_worthy" id="vehicle_road_worthy_no"
                                            value="0">
                                        <label for="vehicle_road_worthy_no">No</label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Vehicle Damage</label>
                                        <input type="text" name="vehicle_damage">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Third Party Details</h5>
                                    <hr>
                                </div>
                                <div class="col-12">
                                    <label>Name</label>
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Title" name="tp_title">
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="First Name" name="tp_first_name">
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Last Name" name="tp_last_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Address</label>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Address Line 1"
                                                    name="tp_address_line_1">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Address Line 2"
                                                    name="tp_address_line_2">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="City" name="tp_city">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Postal / Zip Code"
                                                    name="tp_postal_code">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <select name="tp_country">
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $key => $country)
                                                        <option value="{{ $key }}"
                                                            @if ($key == 'GB') selected @endif>
                                                            {{ $country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Email</label>
                                        <input type="email" name="tp_email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Phone</label>
                                        <input type="text" name="tp_phone">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>TP Vehicle Registration</label>
                                        <input type="text" name="tp_vehicle_registration">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Make</label>
                                        <input type="text" name="tp_vehicle_make">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Model</label>
                                        <input type="text" name="tp_vehicle_model">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Colour</label>
                                        <input type="text" name="tp_vehicle_colour">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="comment-form__input-box">
                                        <label>Year</label>
                                        <input type="text" name="tp_vehicle_year">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>TP Insurance Company</label>
                                        <input type="text" name="tp_insurance_company">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Insurance Policy Number</label>
                                        <input type="text" name="tp_insurance_policy_number">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Insurance Company Phone</label>
                                        <input type="text" name="tp_insurance_company_phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Occupancies in the Vehicle</h5>
                                    <hr>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Number of Pessengers in HTK Driver's Vehicle</label>
                                        <input type="text" name="passengers_count">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Number of Pessenger in Third Party Vehicle</label>
                                        <input type="text" name="tp_passengers_count">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Is Any of pessenger injured?</label>
                                    <div class="comment-form__input-box">
                                        <input type="radio" name="is_passenger_injured" id="passenger_injured_yes"
                                            value="1">
                                        <label for="passenger_injured_yes">Yes</label>
                                        <input type="radio" name="is_passenger_injured" id="passenger_injured_no"
                                            value="0" checked>
                                        <label for="passenger_injured_no">No</label>
                                    </div>
                                </div>
                                <div class="col-xl-6" id="passenger_injury_type" style="display: none;">
                                    <div class="comment-form__input-box">
                                        <label>Type of Injury</label>
                                        <input type="text" name="passenger_injury_type">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Independent Witness</h5>
                                    <hr>
                                </div>
                                <div class="col-12">
                                    <label>Name</label>
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Title" name="witness_title">
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="First Name" name="witness_first_name">
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Last Name" name="witness_last_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Address</label>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Address Line 1"
                                                    name="witness_address_line_1">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Address Line 2"
                                                    name="witness_address_line_2">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="City" name="witness_city">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Postal / Zip Code"
                                                    name="witness_postal_code">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="comment-form__input-box">
                                                <select name="witness_country">
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $key => $country)
                                                        <option value="{{ $key }}"
                                                            @if ($key == 'GB') selected @endif>
                                                            {{ $country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Email</label>
                                        <input type="email" name="witness_email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Phone</label>
                                        <input type="text" name="witness_phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>CCTV</label>
                                    <div class="comment-form__input-box">
                                        <input type="radio" name="is_cctv" id="cctv_yes" value="1">
                                        <label for="cctv_yes">Yes</label>
                                        <input type="radio" name="is_cctv" id="cctv_no" value="0" checked>
                                        <label for="cctv_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Accident Details</h5>
                                    <hr>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Accident Date</label>
                                        <input type="date" name="accident_date">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Accident Time</label>
                                        <input type="time" name="accident_time">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="comment-form__input-box">
                                        <label>Location/Postcode</label>
                                        <input type="text" name="accident_location">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Purpose of Journey</label>
                                        <input type="text" name="journey_purpose">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Was the driver wearing seat belt?</label>
                                    <div class="comment-form__input-box">
                                        <input type="radio" name="was_driver_wearing_seat_belt"
                                            id="driver_wearing_seat_belt_yes" value="1" checked>
                                        <label for="driver_wearing_seat_belt_yes">Yes</label>
                                        <input type="radio" name="was_driver_wearing_seat_belt"
                                            id="driver_wearing_seat_belt_no" value="0">
                                        <label for="driver_wearing_seat_belt_no">No</label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Weather Condition</label>
                                        <input type="text" name="wather_condition">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Road Condition</label>
                                        <input type="text" name="road_condition">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Speed of HTK Driver's Vehicle</label>
                                        <input type="text" name="vehicle_speed">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Speed of Third Party Vehicle</label>
                                        <input type="text" name="tp_vehicle_speed">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <label>HTK Vehicle Damage</label>
                                        <input type="text" name="vehicle_damage">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <label>Third Party Vehicle Damage</label>
                                        <input type="text" name="tp_vehicle_damage">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <label>Police Reference Number</label>
                                        <input type="text" name="police_reference_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Incident Details</h5>
                                    <hr>
                                </div>
                                <div class="col-xl-12">
                                    <label>Circumstances <i class="fas fa-info-circle" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Please write the incident details"></i>
                                    </label>
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="circumstances"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label>Notes <i class="fas fa-info-circle" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Any Other Relavant information"></i>
                                    </label>
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="notes"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Upload Pictures</h5>
                                    <hr>
                                </div>
                                <div class="col-xl-6">
                                    <label>Upload Pictures</label>
                                    <div class="comment-form__input-box">
                                        <input type="file" name="pictures[]" accept="images/*" class="filepond"
                                            multiple data-allow-reorder="true" data-max-file-size="3MB"
                                            data-max-files="10">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Insurance Policy Certificate</label>
                                    <div class="comment-form__input-box">
                                        <input type="file" name="insurance_certificate" class="filepond"
                                            data-max-file-size="5MB">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Contract</label>
                                    <div class="comment-form__input-box">
                                        <input type="file" name="contract" class="filepond" data-max-file-size="5MB">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Proof of Address, ID</label>
                                    <div class="comment-form__input-box">
                                        <input type="file" name="id_proof" class="filepond" data-max-file-size="5MB">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Others</label>
                                    <div class="comment-form__input-box">
                                        <input type="file" name="others" multiple class="filepond"
                                            data-allow-reorder="true" data-max-file-size="5MB" data-max-files="5">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h5>Acknowledgement</h5>
                                    <hr>
                                    <p>
                                        <b>The content of this statement are true and best to my Knowledge and belief.</b>
                                    </p>
                                    <p>
                                        <b>Name: </b><span id="driver_name"></span>
                                    </p>
                                    <p>
                                        <b>Address: </b><span id="driver_address"></span>
                                    </p>
                                    <p>
                                        <b>Date of Birth: </b><span id="driver_dob"></span>
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <label>Signature</label>
                                    <div id="signature"></div>
                                    <div>
                                        <button type="button" id="clear_signature"
                                            class="btn btn-secondary btn-sm">Clear</button>
                                    </div>
                                    <input type="hidden" name="signature" id="signature_json">
                                </div>
                                <div class="col-xl-6">
                                    <label>Date</label>
                                    <div class="comment-form__input-box">
                                        <input type="date" name="signature_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="thm-btn comment-form__btn mt-3 float-end">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </section>
    <!--Contact Page End-->
@endsection

@section('scripts')
    {{-- filepond --}}
    <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js">
    </script>
    <script
        src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    {{-- signature --}}
    <script src="{{ asset('assets/vendors/jquery-signature/js/jquery.signature.min.js') }}"></script>
    <script>
        function updateFullName() {
            const title = document.getElementById("title").value.trim();
            const firstName = document.getElementById("first_name").value.trim();
            const lastName = document.getElementById("last_name").value.trim();

            const fullName = [title, firstName, lastName].filter(Boolean).join(" ");
            document.getElementById("driver_name").textContent = fullName;
        }

        function updateFullAddress() {
            const address1 = document.getElementById("address_line_1").value.trim();
            const address2 = document.getElementById("address_line_2").value.trim();
            const city = document.getElementById("city").value.trim();
            const postcode = document.getElementById("postal_code").value.trim();
            const countrySelect = document.getElementById("country");
            const country = countrySelect.options[countrySelect.selectedIndex].text.trim();

            const fullAddress = [address1, address2, city, postcode, country].filter(Boolean).join(", ");
            document.getElementById("driver_address").textContent = fullAddress;
        }

        function updateDob() {
            const dob = document.getElementById("dob").value;
            const dateObj = new Date(dob);
            const options = {
                day: "numeric",
                month: "long",
                year: "numeric"
            };
            const formattedDate = dateObj.toLocaleDateString("en-GB", options);
            document.getElementById("driver_dob").textContent = formattedDate;
        }

        document.querySelectorAll("#title, #first_name, #last_name").forEach(input => {
            input.addEventListener("input", updateFullName);
        });
        document.querySelectorAll("#address_line_1, #address_line_2, #city, #postal_code, #country").forEach(input => {
            input.addEventListener("input", updateFullAddress);
        });
        document.getElementById("dob").addEventListener("change", updateDob);
        $(document).ready(function() {
            $('#police_reported_yes').click(function() {
                $('#cad_reference_number').show();
            })
            $('#police_reported_no').click(function() {
                $('#cad_reference_number').hide();
            })
            $('#passenger_injured_yes').click(function() {
                $('#passenger_injury_type').show();
            })
            $('#passenger_injured_no').click(function() {
                $('#passenger_injury_type').hide();
            })

            var sig = $('#signature').signature({
                guideline: true,
                guidelineOffset: 25,
                guidelineIndent: 20,
                syncField: '#signature_json',
                syncFormat: 'PNG',
            });

            $('#clear_signature').click(function() {
                sig.signature('clear');
            });

            FilePond.registerPlugin(
                // encodes the file as base64 data
                FilePondPluginFileEncode,
                // validates the size of the file
                FilePondPluginFileValidateSize,
                // corrects mobile image orientation
                FilePondPluginImageExifOrientation,
                // previews dropped images
                FilePondPluginImagePreview
            );

            // Select the file input and use create() to turn it into a pond
            document.querySelectorAll('.filepond').forEach((filepondInput) => {
                FilePond.create(
                    filepondInput
                );
            })

        });
    </script>
@endsection
