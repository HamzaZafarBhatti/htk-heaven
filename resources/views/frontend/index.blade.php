@extends('frontend.layout.app')

@section('styles')
{{-- page specific styles --}}
@endsection

@section('content')
<section class="hero-section">
    <div class="container">
        <h2 class="fw-bold ">Keep your insurance<br>
            policy squeaky clean</h2>
        <p class="fs-4 text-white">A totally free service that keeps your own policy completely clean in the event
            of a road traffic accident *</p>
        <ul class="list-unstyled">
            <li><i class="fa-solid fa-circle-check"></i>Like-4-like replacement vehicle</li>
            <li><i class="fa-solid fa-circle-check"></i>No excess to pay – average saving £348*</li>
            <li><i class="fa-solid fa-circle-check"></i>We act for you, Not the insurer.</li>
            <li><i class="fa-solid fa-circle-check"></i>We won't ask you to pay a penny</li>
        </ul>
        <div class="mt-4">
            <a href="#" class="btn btn-primary fw-bold px-4 py-2">Start your claim</a>
        </div>
    </div>
</section>
<section class="claim-assistance">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="sec-title">Claim Assistance</h2>
                <p class="sub-title">After an Accident most think to call their insurance. We’re changing our clients
                    minds.</p>
            </div>
            <div class="col-md-6">
                <div class="row assistance-cards">
                    <div class="col col-md-6">
                        <h4>Its completely FREE</h4>
                        <p>
                            All costs recovered from the other side’s insurer, so it doesn’t cost you a penny.
                        </p>
                    </div>
                    <div class="col col-md-6">
                        <h4>Save £££</h4>
                        <p>
                            Nearly 100% of our customers saved money by using us to manage their claim.
                        </p>
                    </div>
                    <div class="col col-md-6">
                        <h4>Quick turnaround</h4>
                        <p>
                            We get you back on the road within 24 hours, that’s a promise!
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection

@section('scripts')
{{-- page specific scripts --}}
@endsection