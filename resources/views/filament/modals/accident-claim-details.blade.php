<p><strong>Name:</strong> {{ $record->full_name }}</p>
<p><strong>Email:</strong> {{ $record->email }}</p>
<p><strong>Contact #:</strong> {{ $record->phone }}</p>
<p><strong>Car Registration #:</strong> {{ $record->car_registration_number }}</p>
<p><strong>Accident Date:</strong> {{ $record->accident_date->format('M d, Y') }}</p>
<p>
    <strong>Whose fault was the accident?:</strong>
    {{ $record->accident_fault == 'my-fault' ? "Customer's Fault" : ucwords(str_replace('-', ' ', $record->accident_fault)) }}
</p>
<p>
    <strong>Where did the accident take place?:</strong>
    {{ ucwords(str_replace('-', ' ', $record->accident_location)) }}
</p>
<p>
    <strong>Is car still roadworthy?:</strong> {{ ucwords(str_replace('-', ' ', $record->is_car_roadworthy)) }}
</p>
@if ($record->pictures)
    <div class="image-gallery">
        <strong>Images:</strong>
        <div class="gallery-grid">
            @foreach ($record->pictures as $image)
                <div class="gallery-item">
                    <a href="{{ asset('storage/' . $image) }}" target="_blank">
                        <img src="{{ asset('storage/' . $image) }}" alt="Accident Image" class="gallery-image">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@else
    <p><strong>Images:</strong> No images available.</p>
@endif

<style>
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 1rem;
    }

    .gallery-item {
        position: relative;
        padding-top: 100%;
        /* Creates square aspect ratio */
        overflow: hidden;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
    }

    .gallery-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.2s ease;
    }

    .gallery-image:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
