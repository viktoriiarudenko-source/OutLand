<h1>Edit Destination</h1>

<form action="/admin/destinations/{{ $destination->id }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Name</label>
    <input
        type="text"
        id="name"
        name="name"
        value="{{ $destination->name }}"
    >

    @if ($destination->image)
        <p>Image actuelle :</p>

        <img
            src="{{ asset('storage/' . $destination->image) }}"
            alt="{{ $destination->name }}"
            width="300"
        >
    @endif

    <div>
        <label for="image">Changer l'image</label>
        <input
            type="file"
            id="image"
            name="image"
            accept="image/*"
        >
    </div>

    <label for="description">Description</label>

    <textarea
        id="description"
        name="description"
    >{{ $destination->description }}</textarea>

    <button type="submit">Save</button>
</form>