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
                        <h3 class="insurance-details__opportunities-points-title">We Provide Like-4-Like Replacement Vehicles
                            After An Accident Where You Aren't Guilty.</h3>
                        <p class="insurance-details__opportunities-points-text">Our convenient vehicle replacement services
                            ensure the availability of a comparable vehicle to non-fault customers post-accident. We aim
                            that the specifications and size of replacement cars meet the customer's requirements and
                            standards. They will return to their daily routine stress-free and conveniently.</p>
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
                            <div class="tracking__content">
                                <h3 class="tracking__title">Distinctive Features of SAS Replacement Vehicles</h3>
                                <p class="tracking__sub-title">Swift Accident Solutions will provide a like-4-like
                                    replacement that will be distinctive compared to an ordinary courtesy car provided by
                                    your insurance company after a not-at-fault accident.</p>
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
                                        <p class="testimonial-one__text">SAS Vehicle is similar in size and specifications
                                            to your damaged vehicle.</p>
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
                                        <p class="testimonial-one__text">SAS won't cost you anything.</p>
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
                                        <p class="testimonial-one__text">SAS replacement car is provided the same day you
                                            file your claim with us.</p>
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
                                        <p class="testimonial-one__text">SAS replacement car is available for the period
                                            your vehicle is out of order.</p>
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
                                        <p class="testimonial-one__text">SAS expert claim handler will manage your claim
                                            from the beginning till the end and will regularly update you about the
                                            proceedings.</p>
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
                                        <p class="testimonial-one__text">SAS will deliver the replacement car to the
                                            provided address and collect it from you when your claim ends.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="insurance-details__age-box">
                    <div class="insurance-details__age-title-box">
                        <h3 class="insurance-details__opportunities-points-title">Replacement Vehicle Delivery is Free of
                            Cost!</h3>
                        <p class="insurance-details__opportunities-points-text mb-0">If you aren't guilty after an accident,
                            we won't charge you for our Accident Management Services as our expertise claims the accident
                            costs from the at-fault driver's insurer.</p>
                        <p class="insurance-details__opportunities-points-text mb-0">The accident expenses include:</p>
                        <ul class="insurance-details__opportunities-list list-unstyled">
                            <li>
                                <div class="text-primary">
                                    <span class="fa fa-check-double"></span>
                                </div>
                                <div class="text">
                                    <p>Accident recovery and damaged vehicle storage.</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-primary">
                                    <span class="fa fa-check-double"></span>
                                </div>
                                <div class="text">
                                    <p>Like-4-like replacement car.</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-primary">
                                    <span class="fa fa-check-double"></span>
                                </div>
                                <div class="text">
                                    <p>Car repair or total loss compensation (if the car is fully damaged).</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="insurance-details__opportunities row">
                    <div class="col-md-7">
                        <div class="">
                            <h3 class="insurance-details__opportunities-points-title">Why SAS?</h3>
                            <p class="insurance-details__opportunities-points-text">Clients can utilize our Accident
                                Management services for the reasons here.</p>
                            <ul class="insurance-details__opportunities-list why-list list-unstyled">
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>No Financial Burden</p>
                                        </div>
                                    </div>
                                    <p>The non-fault customer won't have to pay for the like-4-like replacement vehicle. We
                                        will recover its cost from the at-fault driver's insurance company.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Like-4-Like Replacement</p>
                                        </div>
                                    </div>
                                    <p>The availability of a wide range of vehicles authorizes us to provide a comparable
                                        vehicle to the customer, almost similar to the damaged one. We ensure the provided
                                        vehicle meets their expectations and requirements.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Vehicle Availability on Same Day</p>
                                        </div>
                                    </div>
                                    <p>Our staff will deliver a comparable replacement of the customer's choice at the
                                        provided address on the day you start your claim with SAS.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Dispatch Across the UK</p>
                                        </div>
                                    </div>
                                    <p>We deliver the replacement vehicle after a non-fault accident at the provided address
                                        across the UK. So, customers should be least concerned about its transport.</p>
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
                                    <p>A specialist claim handler will manage your claim individually and provide you with
                                        the best Accident Management Service.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Replacement Car For Full Duration</p>
                                        </div>
                                    </div>
                                    <p>Each customer can utilize the comparable replacement vehicle until their car is
                                        repaired or the total loss is recovered (if written off).</p>
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
                            <h4 class="procedure-title mb-lg-4">Comparable Vehicle Delivery Procedure at
                                <span class="text-base">S</span><span class="text-primary">A</span><span
                                    class="text-base">S</span>
                            </h4>
                            <p class="mb-5 insurance-details__opportunities-points-text">We proceed in the following steps
                                for delivering like-4-like replacement vehicles.</p>
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
                                        <h5 class="fs-lg-2 fs-3">Reach our team</h5>
                                        <p class="insurance-details__opportunities-points-text">Reach our professional team
                                            after a non-fault accident at the number below.</p>
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
                                        <h5 class="fs-lg-2 fs-3">Eligibility review</h5>
                                        <p class="insurance-details__opportunities-points-text">Once the customers call us,
                                            we collect the customer's incident details and evaluate the non-fault driver's
                                            eligibility for Accident Management Services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-truck-loading fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>03</b></p>
                                        <h5 class="fs-lg-2 fs-3">Like-4-like replacement car</h5>
                                        <p class="insurance-details__opportunities-points-text">Our experts will deliver a
                                            replacement vehicle to the customer's location (home, workplace, or other). It's
                                            almost similar to the damaged car.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-money-bill-wave fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>04</b></p>
                                        <h5 class="fs-lg-2 fs-3">Vehicle restoration or total loss value</h5>
                                        <p class="insurance-details__opportunities-points-text">Our team will dispatch the
                                            damaged vehicle to one of our accident repair centers across the UK. However, if
                                            the client's car is completely damaged, we will recover the total loss cost.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-recycle fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>05</b></p>
                                        <h5 class="fs-lg-2 fs-3">Accident expenditures recovery</h5>
                                        <p class="insurance-details__opportunities-points-text">Subsequently, our
                                            specialists will bargain with the at-fault guy's insurance company to recover
                                            accident costs and won't let you pay a single penny.</p>
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
                                        <p class="insurance-details__opportunities-points-text">The customer will receive
                                            their vehicle after its repair and return the replacement car. In case of a
                                            total loss, they will receive the settlement cost and can use the vehicle for an
                                            additional week till they purchase a new one.</p>
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
                                    <h4><span>?</span> For how much time can the customer keep the replacement car?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>The customers will get the replacement car right after they file a claim after a
                                            non-fault accident and can keep it for the whole duration till their car hits
                                            the road.</p>
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
                                    <h4><span>?</span> What if the customer's car is written off?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>If the customer's vehicle is completely damaged, Swift Accident Solutions
                                            negotiates with the at-fault driver's insurance company for an appropriate cost.
                                            The customers can keep the replacement vehicle for an additional week even after
                                            they receive the total loss amount. We aim to give them extra time to buy a new
                                            car.</p>
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
