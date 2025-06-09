@extends('frontend.layout.layout')

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
    <style>
        .tracking__content {
            margin: 0;
        }

        .tracking__left .row {
            --bs-gutter-y: 1.5rem;
        }

        .testimonial-one__text {
            font-size: 18px;
        }
    </style>
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
                        <h3 class="insurance-details__opportunities-points-title">We Repair Your Vehicles Proficiently With
                            Top-Quality Parts</h3>
                        <p class="insurance-details__opportunities-points-text">After every non-fault accident, each
                            customer's vehicle deserves to be restored to its pre-accident condition efficiently. Our wide
                            range of repair networks mends the damaged cars and replaces the defective parts with similar
                            and high-quality parts. Our efficient repair service is available for customers across the UK.
                        </p>
                        <p class="insurance-details__opportunities-points-text">
                            Besides that, our other Accident Management Services include:
                        </p>
                        <ul class="insurance-details__opportunities-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Recovery of Vehicle</p>
                                </div>
                            </li>
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
                            <div class="tracking__content">
                                <h3 class="tracking__title">Distinctive Features of SAS Vehicle Repair Service</h3>
                                <p class="tracking__sub-title">Swift Accident Solutions' vehicle repair service is
                                    distinctive in the following ways:</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <p class="testimonial-one__text">SAS uses top-quality manufacturer-authorized repair
                                            parts and paints.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <p class="testimonial-one__text">SAS aims to restore damaged vehicles to
                                            pre-accident condition.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <p class="testimonial-one__text">SAS won't ask you to pay anything.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <p class="testimonial-one__text">SAS assigns you a dedicated claims handler who
                                            updates you regularly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <p class="testimonial-one__text">SAS provides you with a comparable replacement
                                            vehicle for the entire duration yours is out of order.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="insurance-details__age-box">
                    <div class="insurance-details__age-title-box">
                        <h3 class="insurance-details__opportunities-points-title">Vehicle Repair Service is Free of Cost!
                        </h3>
                        <p class="insurance-details__opportunities-points-text mb-0">Our repair process is free, and the
                            at-fault driver’s insurance company handles all the expenses. Also, we use the best quality
                            parts for vehicle repair to guarantee customer safety and comfort.</p>
                    </div>
                </div>
                <div class="insurance-details__opportunities row">
                    <div class="col-md-7">
                        <div class="">
                            <h3 class="insurance-details__opportunities-points-title">Why SAS?</h3>
                            <p class="insurance-details__opportunities-points-text">You must avail of our Accident
                                Management services for the following benefits.</p>
                            <ul class="insurance-details__opportunities-list why-list list-unstyled">
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>No Additional Charges</p>
                                        </div>
                                    </div>
                                    <p>We claim all repair costs from the at-fault driver's insurer, and you won't have to
                                        pay any extra expenses.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Top-Quality & Safety</p>
                                        </div>
                                    </div>
                                    <p>We use high-quality parts during its repair and ensure your vehicle's safety after an
                                        accident.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Nationwide Availability</p>
                                        </div>
                                    </div>
                                    <p>Our organized repair centers are available across the UK, and each of them ensures
                                        convenience and efficiency.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Personalized Claims Handler</p>
                                        </div>
                                    </div>
                                    <p>A dedicated expert will manage your claim and keep you updated regularly throughout
                                        the procedure.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manufacturer-Authorized</p>
                                        </div>
                                    </div>
                                    <p>Each repair center will use the parts and paints authorized by the company.</p>
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
                            <h4 class="procedure-title mb-lg-4">Vehicle Repair Process at
                                <span class="text-base">S</span><span class="text-primary">A</span><span
                                    class="text-base">S</span>
                            </h4>
                            <p class="mb-5 insurance-details__opportunities-points-text">Once you file a non-fault claim
                                with us we will ensure your experience is convenient and hassle-free.</p>
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
                                        <h5 class="fs-lg-2 fs-3">Reach to Us</h5>
                                        <p class="insurance-details__opportunities-points-text">You must call us at the
                                            number below after an accident where you aren't guilty.</p>
                                        <a href="tel:+{{ $site_settings->phone }}"
                                            class="thm-btn comment-form__btn">Contact No:
                                            {{ $site_settings->phone }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-file-signature fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>02</b></p>
                                        <h5 class="fs-lg-2 fs-3">Eligibility evaluation</h5>
                                        <p class="insurance-details__opportunities-points-text">We acquire the accident
                                            details from the customers and evaluate their eligibility for Accident
                                            Management Services after non-fault accidents.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-heart fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>03</b></p>
                                        <h5 class="fs-lg-2 fs-3">Like-4-like replacement car</h5>
                                        <p class="insurance-details__opportunities-points-text">We deliver a comparable
                                            vehicle for the customer's personal use while your one is being repaired.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-car fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>04</b></p>
                                        <h5 class="fs-lg-2 fs-3">Vehicle repair</h5>
                                        <p class="insurance-details__opportunities-points-text">We repair your vehicle at a
                                            recognized repair center and update you about the proceedings.</p>
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
                                        <h5 class="fs-lg-2 fs-3">Recover accident expenses</h5>
                                        <p class="insurance-details__opportunities-points-text">We negotiate with the
                                            at-fault driver’s insurer on your behalf to claim the cost.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-road fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>06</b></p>
                                        <h5 class="fs-lg-2 fs-3">Hitting the road</h5>
                                        <p class="insurance-details__opportunities-points-text">Once your vehicle car is
                                            restored to its pre-accident condition, you will get back to your normal
                                            routine.</p>
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
                                    <h4><span>?</span> How Will You Update Me About the Repair Process?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>When you file a claim with us, we will assign you a dedicated claim handler who
                                            will update you regularly about each stage of your vehicle’s repair till it
                                            ends.</p>
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
                                    <h4><span>?</span> What could be the duration of vehicle repair?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>The course of the vehicle's repair relies on the extent of the damage to your
                                            car. Remember, our team operates efficiently to ensure your vehicle hits the
                                            road as early as possible.</p>
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
