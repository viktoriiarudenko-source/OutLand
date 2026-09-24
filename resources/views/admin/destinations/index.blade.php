<h1>Manage Destinations</h1>

<a href="/admin/destinations/create">Add Destination</a>

@foreach ($destinations as $destination)
    <p>
        {{ $destination->name }}
        <a href="/admin/destinations/{{ $destination->id }}/edit">Edit</a>
    </p>
@endforeach