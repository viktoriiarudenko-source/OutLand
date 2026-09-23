<h1>Our Destinations</h1>

@foreach ($destinations as $destination)
    <p>
        <a href="/destinations/{{ $destination->id }}">
            {{ $destination->name }}
        </a>
    </p>
@endforeach
