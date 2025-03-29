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
    </style>
@endsection

@section('content')
    <section class="about-four">
        <div class="container">
            <div class="content">
                <div class="insurance-details__opportunities row mt-0">
                    <div class="col-md-5">
                        <div class="insurance-details__opportunities-img">
                            <img src="{{ asset('assets/images/update-10-02-2023/resources/insurance-details-opportunities-img.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="insurance-details__opportunities-points-title">Handling Non-Fault Claims After A Roadside
                            Accident.</h3>
                        <p class="insurance-details__opportunities-points-text">We are here to guide and assist you in
                            filing a non-fault claim after a roadside accident. While proceeding with the claims handling
                            process, we prioritize the interest of our customers, cost them nothing for the service, and
                            recover the accident expenditures from at-guilty drivers. We handle everything from start to
                            finish to ensure a convenient and efficient experience. If you have any queries, please do not
                            hesitate to contact me.</p>
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
                            <div class="tracking__content">
                                <h3 class="tracking__title">Personalized Claims Handler For Each Case</h3>
                                <p class="tracking__sub-title">To avoid a stressful experience after a non-fault accident,
                                    all of you must carefully handle its consequences. At Swift Accident Solutions, we have
                                    a team of dedicated individuals who provide an exemplary customer experience. We assign
                                    a personalized claim handler to each customer who takes over the management from the
                                    moment you file a claim till it ends on your behalf.</p>
                                <p class="tracking__sub-title">The handler will perform the following tasks:</p>
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
                                        <p class="testimonial-one__text">Ensure claims proceeding is efficient and
                                            stress-free.</p>
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
                                        <p class="testimonial-one__text">Keep you up to date.</p>
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
                                        <p class="testimonial-one__text">Deliver specialist assistance.</p>
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
                                        <p class="testimonial-one__text">Address your queries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="insurance-details__age-box">
                    <div class="insurance-details__age-title-box">
                        <h3 class="insurance-details__opportunities-points-title">Claims Handling is Free of Cost!</h3>
                        <p class="insurance-details__opportunities-points-text mb-0">We won't charge you a single penny for
                            accident claims handling if you aren't at fault. Our service includes recovering the accident
                            cost from the at-guilty driver's insurance company.</p>
                        <p class="insurance-details__opportunities-points-text mb-0">These expenditures include:</p>
                        <ul class="insurance-details__opportunities-list list-unstyled">
                            <li>
                                <div class="text-primary">
                                    <span class="fa fa-check-double"></span>
                                </div>
                                <div class="text">
                                    <p>Roadside recovery</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-primary">
                                    <span class="fa fa-check-double"></span>
                                </div>
                                <div class="text">
                                    <p>Damaged vehicle storage</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-primary">
                                    <span class="fa fa-check-double"></span>
                                </div>
                                <div class="text">
                                    <p>Like-4-like replacement vehicle</p>
                                </div>
                            </li>
                            <li>
                                <div class="text-primary">
                                    <span class="fa fa-check-double"></span>
                                </div>
                                <div class="text">
                                    <p>Top-quality repair or total loss settlement (if written off)</p>
                                </div>
                            </li>
                        </ul>
                        <h4 class="insurance-details__opportunities-points-text disclaimer">Our service is free of cost as
                            we
                            claim
                            against the at-fault driver's insurer, not your insurance policy, and it remains unaffected.
                        </h4>
                    </div>
                </div>
                <div class="insurance-details__opportunities row">
                    <div class="col-md-7">
                        <div class="">
                            <h3 class="insurance-details__opportunities-points-title">Why SAS?</h3>
                            <p class="insurance-details__opportunities-points-text">Clients can utilize our Accident
                                Management services for the following reasons.</p>
                            <ul class="insurance-details__opportunities-list why-list list-unstyled">
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Expertise Management</p>
                                        </div>
                                    </div>
                                    <p>Our highly skilled team is aware of the complexities of non-fault claims.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Free of Cost</p>
                                        </div>
                                    </div>
                                    <p>Our claims handling services and other Accident Management Services are available
                                        free of cost if you aren't guilty.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Personalized Handler</p>
                                        </div>
                                    </div>
                                    <p>Each customer can directly communicate with the claim handler of their case.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Prioritise your Interest</p>
                                        </div>
                                    </div>
                                    <p>Our independent claim handler will prioritize your interest and won't affect your
                                        insurance if you aren't guilty.</p>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Trustworthy</p>
                                        </div>
                                    </div>
                                    <p>Our team works tirelessly and honestly to recover your vehicle and accident costs on
                                        your behalf.</p>
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
                            <h4 class="procedure-title mb-lg-4">Claims Handling Procedure at
                                <span class="text-base">S</span><span class="text-primary">A</span><span
                                    class="text-base">S</span>
                            </h4>
                            <p class="insurance-details__opportunities-points-text">The claims handling process at Swift
                                Accident Solutions is simple, efficient, and peaceful.</p>
                            <p class="mb-5 insurance-details__opportunities-points-text">Read more about it below.</p>
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
                                        <h5 class="fs-lg-2 fs-3">Call our team</h5>
                                        <p class="insurance-details__opportunities-points-text">You must call our team at
                                            the number below immediately after a non-fault accident.</p>
                                        <a href="tel:+{{ $site_settings->phone }}"
                                            class="thm-btn comment-form__btn">Contact
                                            No:
                                            {{ $site_settings->phone }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-file-alt fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>02</b></p>
                                        <h5 class="fs-lg-2 fs-3">Eligibility assessment</h5>
                                        <p class="insurance-details__opportunities-points-text">Our specialists collect the
                                            accident details from you to assess whether you are eligible to avail of our
                                            Accident Management Services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-car fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>03</b></p>
                                        <h5 class="fs-lg-2 fs-3">Like-4-like replacement vehicle</h5>
                                        <p class="insurance-details__opportunities-points-text">The personalized claim
                                            handler sends you a replacement vehicle, comparable to the damaged one.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-truck-loading fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>04</b></p>
                                        <h5 class="fs-lg-2 fs-3">Vehicle repairing</h5>
                                        <p class="insurance-details__opportunities-points-text">Our experts will repair
                                            your vehicle with high-quality repair parts or provide an appropriate
                                            pre-accident valuation if your vehicle is written off.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="step-cards h-100 position-relative">
                                    <div class="position-absolute bottom-0 end-0">
                                        <i class="fas fa-credit-card fa-9x icon"></i>
                                    </div>
                                    <div>
                                        <p class="fs-lg-2 fs-3"><b>05</b></p>
                                        <h5 class="fs-lg-2 fs-3">Recovery of expenditures</h5>
                                        <p class="insurance-details__opportunities-points-text">Your claim handler will
                                            negotiate with the at-fault driver's insurer to recover accident costs on your
                                            behalf.</p>
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
                                        <p class="insurance-details__opportunities-points-text">After repairing your car or
                                            reaching a total loss settlement, your vehicle will be back on the road.</p>
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
