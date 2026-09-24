<h1>Add Destination</h1>

<form action="/admin/destinations" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="image">Image</label>
    <input type="text" id="image" name="image">

    <label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

    <button type="submit">Save</button>
</form>