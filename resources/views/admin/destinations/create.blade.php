<h1>Add Destination</h1>

<form action="/admin/destinations" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="image">Image</label>
    <input type="file" id="image" name="image" accept="image/*">

    <label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

    <button type="submit">Save</button>
</form>