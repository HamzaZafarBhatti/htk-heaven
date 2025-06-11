@extends('frontend.layout.layout')

@section('meta_tags')
    <meta name="title" content="{{ $pageMetaSettings->recovery_of_vehicle_title }}">
    <meta name="description" content="{{ $pageMetaSettings->recovery_of_vehicle_description }}">
@endsection

@php
    $headTitle = $serviceName;
    $title = 'Service';
    $subTitle = $serviceName;
    // $headerImage = $service->header_image;
    $header = 'false';
    $counterone = 'false';
    $css2 =
        '<link rel="stylesheet" href="' .
        asset('assets/css/color-5.css?v=') .
        time() .
        '" /><link rel="stylesheet" href="' .
        asset('assets/css/service.css?v=') .
        time() .
        '" />';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
    $footer = 'false';
@endphp

@section('styles')
@endsection

@section('content')
    <section class="about-four">
        <div class="container">
            <div class="content">
                <div class="insurance-details__opportunities row mt-0 section-1">
                    <div class="col-md-5">
                        <div class="insurance-details__opportunities-img">
                            <img src="{{ asset('assets/images/update-10-02-2023/resources/insurance-details-opportunities-img.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="insurance-details__opportunities-points-title">Recovering Your Vehicle From An
                            Accident That Wasn't Your Fault</h3>
                        <p class="insurance-details__opportunities-points-text">One of our Accident Management Services
                            is recovering the customer's vehicle after a non-fault accident. Anyone can get stressed
                            once their car collides with another driver's vehicle. In such cases, reach out to our
                            professionals instead of contacting your insurer. We will efficiently and quickly recover
                            your automobile and get you back on the roads without causing financial distress in record
                            time. Our services are available 24/7 for all the not-at-fault clients nationwide.</p>
                        <p class="insurance-details__opportunities-points-text">
                            Besides that, our other Accident Management Services include:
                        </p>
                        <ul class="insurance-details__opportunities-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Claims Handling</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Comparable Vehicle</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Vehicle Repair</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tracking__inner">
                    <div class="tracking-shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-1.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-2.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-3.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-4 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-4.png') }}" alt="">
                    </div>
                    <div class="tracking__left">
                        <div class="d-flex">
                            <div class="tracking__icon">
                                <span class="far fa-question-circle"></span>
                            </div>
                            <div class="tracking__content">
                                <h3 class="tracking__title">What should you do right after you meet a roadside accident?
                                </h3>
                                <p class="tracking__sub-title">If any of you have an accident where you aren't guilty,
                                    you
                                    must follow the given guidelines to proceed with a non-fault claim.</p>
                            </div>
                        </div>
                        <ul class="insurance-details__points list-unstyled">
                            <li>
                                <div class="insurance-details__points-left">
                                    <div class="insurance-details__points-icon">
                                        <span class="icon-easy-to-use"></span>
                                    </div>
                                    <h3 class="insurance-details__points-title">Be Composed & Assess Injuries</h3>
                                </div>
                                <div class="insurance-details__points-right">
                                    <p>First and foremost, stay calm and make sure everyone is safe and sound. Also,
                                        contact the emergency team and acquire their assistance if required.</p>
                                </div>
                            </li>
                            <li>
                                <div class="insurance-details__points-left">
                                    <div class="insurance-details__points-icon">
                                        <span class="icon-contract"></span>
                                    </div>
                                    <h3 class="insurance-details__points-title">Gather At-fault Driver's & Witness'
                                        Information</h3>
                                </div>
                                <div class="insurance-details__points-right">
                                    <p>You must collect the other driver's information along with the witness' statement
                                        on the spot.</p>
                                </div>
                            </li>
                            <li>
                                <div class="insurance-details__points-left">
                                    <div class="insurance-details__points-icon">
                                        <span class="fas fa-phone-square text-center" style="width: 44px;"></span>
                                    </div>
                                    <h3 class="insurance-details__points-title">Contact SAS</h3>
                                </div>
                                <div class="insurance-details__points-right">
                                    <p>Call Swift Accident Solutions' team for quick recovery and professional
                                        assistance.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="insurance-details__age-box">
                    <div class="insurance-details__age-title-box">
                        <h3 class="insurance-details__opportunities-points-title">Vehicle Recovery is Free of Cost!</h3>
                        <p class="insurance-details__opportunities-points-text">All the not-at-fault customers must
                            remember that our team will recover the accident cost from the at-guilty driver's insurance
                            company. These expenditures include vehicle recovery, damaged vehicle storage, like-4-like
                            vehicle replacement, and top-quality repair. It means our roadside recovery services are
                            free.</p>
                    </div>
                </div>
                <div class="insurance-details__opportunities row">
                    <div class="col-md-7">
                        <div class="">
                            <h3 class="insurance-details__opportunities-points-title">Why SAS?</h3>
                            <p class="insurance-details__opportunities-points-text">Customers can avail of our Accident
                                Management Services for the following reasons.</p>
                            <ul class="insurance-details__opportunities-list why-list list-unstyled">
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>No Extra Cost</p>
                                        </div>
                                    </div>
                                    <p>We won't charge you for roadside recovery after an accident where you aren't
                                        guilty.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Quick Recovery Nationwide</p>
                                        </div>
                                    </div>
                                    <p>Our experts will ensure the quick recovery of your vehicle across the UK.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Personalized Management</p>
                                        </div>
                                    </div>
                                    <p>A specialist handler will personally manage your claim from the start till the end.
                                    </p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Unaffected Insurance</p>
                                        </div>
                                    </div>
                                    <p>We won't let your insurance policy get affected as we file the claim against the
                                        at-fault driver's insurer.
                                    </p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Ensure No-Claims Bonus Safety</p>
                                        </div>
                                    </div>
                                    <p>Besides protecting your insurance, we will also ensure the safety of your no-claims
                                        bonus.
                                    </p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Reliability</p>
                                        </div>
                                    </div>
                                    <p>We allow our professional and experienced members only to handle each claim.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="insurance-details__opportunities-img">
                            <img src="{{ asset('assets/images/update-10-02-2023/resources/insurance-details-opportunities-img.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="procedure-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pe-lg-5 mb-lg-0 mb-5">
                        <div class="sticky-15">
                            <h4 class="procedure-title mb-lg-4">Accident Recovery Procedure at
                                <span class="text-base">S</span><span class="text-primary">A</span><span
                                    class="text-base">S</span>
                            </h4>
                            <p class="mb-5 insurance-details__opportunities-points-text">You must follow the simple steps
                                to avail of our roadside recovery services,
                                file a non-fault claim at Swift Accident Solutions, and get a stress-free experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 px-0">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-phone fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>01</b></p>
                                        <h5 class="fs-lg-2 fs-3">Contact our team</h5>
                                        <p class="insurance-details__opportunities-points-text">Our recovery helpline is
                                            available 24/7 for customers after a non-fault accident at the roadside. You can
                                            call us at the number below.</p>
                                        <a href="tel:+{{ $site_settings->phone }}"
                                            class="thm-btn comment-form__btn">Contact No:
                                            {{ $site_settings->phone }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-car fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>02</b></p>
                                        <h5 class="fs-lg-2 fs-3">Quick dispatch & rehab</h5>
                                        <p class="insurance-details__opportunities-points-text">Our specialist collects all
                                            the accident details and dispatches our recovery team immediately.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-broom fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>03</b></p>
                                        <h5 class="fs-lg-2 fs-3">Accident site clean-up</h5>
                                        <p class="insurance-details__opportunities-points-text">Our team cleans up the
                                            accident site and collects the leftover particles from your vehicle.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-warehouse fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>04</b></p>
                                        <h5 class="fs-lg-2 fs-3">Vehicle storage and replacement</h5>
                                        <p class="insurance-details__opportunities-points-text">Your damaged vehicle is
                                            stored in our safe facilities, and we give you a comparable vehicle as its
                                            replacement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-user-cog fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>05</b></p>
                                        <h5 class="fs-lg-2 fs-3">Claims handling</h5>
                                        <p class="insurance-details__opportunities-points-text">We assign your claim to a
                                            personalized professional who will recover all costs from the at-fault driver’s
                                            insurer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-key fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>06</b></p>
                                        <h5 class="fs-lg-2 fs-3">Hitting the road</h5>
                                        <p class="insurance-details__opportunities-points-text">We repair your damaged car
                                            or recover the cost from the other driver in case of a total loss, resulting in
                                            getting your vehicle on the road.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @if ($service->faqs) --}}
        <div class="container" style="margin-top: 55px;">
            <h3 class="insurance-details__opportunities-points-title mb-4">FAQs</h3>
            <div class="row">
                {{-- @foreach ($service->faqs as $item) --}}
                <div class="col-12">
                    <div class="faq-one__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4><span>?</span> Who will recover my vehicle post-accident?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>After a non-fault accident, the best possible you will left with is Swift
                                            Accident Solutions. We will manage accident recovery for you from beginning to
                                            end without any cost.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-one__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4><span>?</span> Will it be appropriate to contact our insurer for accident recovery?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>It isn't recommended as long as you are not guilty after an accident. It is so
                                            because your insurer can start a claim against your own policy apart from
                                            recovering your vehicle. It can be considered your protection; however, it can
                                            negatively affect your insurance and risk your no-claims bonus.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
        {{-- @endif --}}
    </section>
@endsection

@section('scripts')
@endsection
