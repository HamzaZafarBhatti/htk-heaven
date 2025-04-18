@extends('frontend.dashboard.index')

@php
    $headTitle = 'Accident Claims';
@endphp

@section('customer-dashboard')
    <div class="row">
        <div class="col-lg-6">
            <section>
                <h3>Actions</h3>
                @if ($actions)
                    <ul class="timeline">
                        @foreach ($actions as $item)
                            <li class="timeline-item mb-5">
                                <p class="text-muted mb-2 fw-bold">
                                    {{ \Carbon\Carbon::parse($item['date'])->toFormattedDateString() }}</p>
                                <p class="text-muted">
                                    {{ $item['note'] }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="alert alert-info">
                        <p>No actions yet</p>
                    </div>
                @endif
            </section>
        </div>
        <div class="col-lg-6">
            <section>
                <h3>Events</h3>
                @if ($events)
                    <ul class="timeline">
                        @foreach ($events as $item)
                            <li class="timeline-item mb-5">
                                <p class="text-muted mb-2 fw-bold">
                                    {{ \Carbon\Carbon::parse($item['date'])->toFormattedDateString() }}</p>
                                <p class="text-muted">
                                    {{ $item['comment'] }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="alert alert-info">
                        <p>No events yet</p>
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection
