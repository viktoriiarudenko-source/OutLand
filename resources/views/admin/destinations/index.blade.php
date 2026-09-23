<h1>Manage Destinations</h1>

@foreach ($destinations as $destination)
    <p>{{ $destination->name }}</p>
@endforeach
