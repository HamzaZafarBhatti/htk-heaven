<section class="pt-5">
    @if ($comments)
        <ul class="timeline">
            @foreach ($comments as $item)
                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ $item->commenter->name }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ $item->created_at->toFormattedDateString() }}</p>
                    <p class="text-muted">
                        {{ $item->message }}
                    </p>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-info">
            <p>No comments yet</p>
        </div>
    @endif
</section>
