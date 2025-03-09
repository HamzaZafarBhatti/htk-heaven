@extends('frontend.layout.layout')

@php
    $headTitle = 'Accident Repairs';
    $header = 'false';
    $counterone = 'false';
    $css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css?v=') . time() . '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/form-wizard.css') }}">
@endsection

@section('content')
    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="">
                <div class="contact-page__left">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box d-flex justify-content-center align-items-center m-0 gap-4">
                            <div class="">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                            </div>
                            <h2 class="section-title__title">FIND OUT IN LESS THAN 30 SECONDS</h2>
                            <div class="">
                                <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <div class="contact-page__right">
                    <div class="contact-page__form">
                        <form class="wizard-container comment-one__form contact-form-validated" method="POST"
                            enctype="multipart/form-data" action="{{ route('home.report-claim') }}" id="js-wizard-form"
                            novalidate="novalidate">
                            @csrf
                            <div class="progress" id="js-progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span class="progress-val"></span>
                                </div>
                            </div>
                            <ul class="nav nav-tab">
                                <li class="active">
                                    <a href="#tab1" data-number="1" data-toggle="tab">1</a>
                                </li>
                                <li>
                                    <a href="#tab2" data-number="2" data-toggle="tab">1</a>
                                </li>
                                <li>
                                    <a href="#tab3" data-number="3" data-toggle="tab">1</a>
                                </li>
                                <li>
                                    <a href="#tab4" data-number="4" data-toggle="tab">1</a>
                                </li>
                                <li>
                                    <a href="#tab5" data-number="5" data-toggle="tab">1</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="section-title text-center">
                                        <div class="section-sub-title-box">
                                            <h2 class="section-title__title">Whose fault was the accident? <span
                                                    class="text-danger">*</span></h2>
                                            <p>Select an option below</p>
                                        </div>
                                    </div>
                                    <div class="radio-container row">
                                        <div class="col-md-3 my-2">
                                            <input type="radio" id="myFault" name="accident_fault" value="my-fault"
                                                checked>
                                            <label for="myFault">My Fault</label>
                                        </div>
                                        <div class="col-md-3 my-2">
                                            <input type="radio" id="somebodyElse" name="accident_fault"
                                                value="somebody-else">
                                            <label for="somebodyElse">Somebody else</label>
                                        </div>
                                        <div class="col-md-3 my-2">
                                            <input type="radio" id="fiftyFifty" name="accident_fault" value="fifty-fifty">
                                            <label for="fiftyFifty">50/50</label>
                                        </div>
                                        <div class="col-md-3 my-2">
                                            <input type="radio" id="faultNotSure" name="accident_fault" value="not-sure">
                                            <label for="faultNotSure">Not sure</label>
                                        </div>
                                    </div>
                                    <div class="btn-next-con">
                                        <button type="button" class="btn btn-next">Next <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="section-title text-center">
                                        <div class="section-sub-title-box">
                                            <h2 class="section-title__title">Where did the accident take place? <span
                                                    class="text-danger">*</span></h2>
                                            <p>Select an option below</p>
                                        </div>
                                    </div>
                                    <div class="radio-container row">
                                        <div class="col-md-4 my-2">
                                            <input type="radio" id="england-wales" name="accident_location"
                                                value="england/wales" checked>
                                            <label for="england-wales">England/Wales</label>
                                        </div>
                                        <div class="col-md-4 my-2">
                                            <input type="radio" id="scotland" name="accident_location"
                                                value="scotland">
                                            <label for="scotland">Scotland</label>
                                        </div>
                                        <div class="col-md-4 my-2">
                                            <input type="radio" id="northern-ireland" name="accident_location"
                                                value="northern-ireland">
                                            <label for="northern-ireland">Northern Ireland</label>
                                        </div>
                                    </div>
                                    <div class="btn-next-con">
                                        <button type="button" class="btn btn-back"><i class="fas fa-arrow-left"></i>
                                            back</button>
                                        <button type="button" class="btn btn-next">Next <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <div class="section-title text-center">
                                        <div class="section-sub-title-box">
                                            <h2 class="section-title__title">Is your car still roadworthy? <span
                                                    class="text-danger">*</span></h2>
                                            <p>Select an option below</p>
                                        </div>
                                    </div>
                                    <div class="radio-container row">
                                        <div class="col-md-4 my-2">
                                            <input type="radio" id="yes" name="is_car_roadworthy" value="yes"
                                                checked>
                                            <label for="yes">Yes</label>
                                        </div>
                                        <div class="col-md-4 my-2">
                                            <input type="radio" id="no" name="is_car_roadworthy"
                                                value="no">
                                            <label for="no">No</label>
                                        </div>
                                        <div class="col-md-4 my-2">
                                            <input type="radio" id="roadworthyNotSure" name="is_car_roadworthy"
                                                value="not-sure">
                                            <label for="roadworthyNotSure">Not Sure</label>
                                        </div>
                                    </div>
                                    <div class="btn-next-con">
                                        <button type="button" class="btn btn-back"><i class="fas fa-arrow-left"></i>
                                            back</button>
                                        <button type="button" class="btn btn-next">Next <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <div class="comment-form__input-box">
                                        <input type="file" name="pictures[]" accept="images/*" class="filepond"
                                            multiple data-allow-reorder="true" data-max-file-size="3MB"
                                            data-max-files="10">
                                    </div>
                                    <div class="btn-next-con">
                                        <button type="button" class="btn btn-back"><i class="fas fa-arrow-left"></i>
                                            back</button>
                                        <button type="button" class="btn btn-next">Next <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab5">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <label>Phone Number <span class="text-danger">*</span></label>
                                                <input type="text" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <label>Full name <span class="text-danger">*</span></label>
                                                <input type="text" name="full_name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <label>Car registration <span class="text-danger">*</span></label>
                                                <input type="text" name="car_registration_number" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <label>Accident Location Postcode <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="accident_postcode" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <label>When did the accident happen? <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" name="accident_date" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="checked-box">
                                                <input type="checkbox" name="privacy_policy_accepted"
                                                    id="privacy_policy_accepted" required value="1">
                                                <label for="privacy_policy_accepted">
                                                    <span></span>By ticking the box you
                                                    consent for us to
                                                    contact you in line with our <a class="privacy"
                                                        href="{{ route('home.privacy-policy') }}" target="_blank">privacy
                                                        policy</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-next-con">
                                        <button type="button" class="btn btn-back"><i class="fas fa-arrow-left"></i>
                                            back</button>
                                        <button type="submit" class="btn btn-last">Submit <i
                                                class="fas fa-check"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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

    <script src="{{ asset('assets/vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>
    <script>
        $(document).ready(function() {
            FilePond.registerPlugin(
                FilePondPluginImagePreview
            );

            document.querySelectorAll('.filepond').forEach((filepondInput) => {
                FilePond.create(
                    filepondInput, {
                        storeAsFile: true,
                    }
                );
            })

        });
    </script>
@endsection
