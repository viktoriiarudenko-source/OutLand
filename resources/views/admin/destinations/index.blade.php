<h1>Manage Destinations</h1>

<a href="/admin/destinations/create">Add Destination</a>

@foreach ($destinations as $destination)
    <p>
        {{ $destination->name }}

        <a href="/admin/destinations/{{ $destination->id }}/edit">Edit</a>

        <form action="/admin/destinations/{{ $destination->id }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>
    </p>
@endforeach