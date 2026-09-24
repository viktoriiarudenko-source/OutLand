<h1>Edit Destination</h1>

<form action="/admin/destinations/{{ $destination->id }}" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ $destination->name }}">

    <label for="image">Image</label>
    <input type="text" id="image" name="image" value="{{ $destination->image }}">

    <label for="description">Description</label>
    <textarea id="description" name="description">{{ $destination->description }}</textarea>

    <button type="submit">Save</button>
</form>