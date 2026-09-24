<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un commentaire</title>
</head>

<body>

    <h1>Ajouter un commentaire</h1>

    <form action="/destinations/{{ $destinationId }}/experiences" method="POST" enctype="multipart/form-data">

        @csrf
        
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="content">Votre commentaire</label>
            <textarea id="content" name="content"></textarea>
        </div>


        <div>
            <label for="rating">Note</label>

            <select id="rating" name="rating">
                <option value="">Choisir une note</option>
                <option value="1">★☆☆☆☆ - 1/5</option>
                <option value="2">★★☆☆☆ - 2/5</option>
                <option value="3">★★★☆☆ - 3/5</option>
                <option value="4">★★★★☆ - 4/5</option>
                <option value="5">★★★★★ - 5/5</option>
            </select>
        </div>


        <div>
            <label for="photo">Ajouter une photo</label>
            <input type="file" id="photo" name="photo">
        </div>

        <button type="submit">Publier</button>

    </form>

</body>

</html>