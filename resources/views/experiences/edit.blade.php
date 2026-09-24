<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modifier mon commentaire</title>
</head>

<body>

    <h1>Modifier mon commentaire</h1>

    <form action="/experiences/{{ $experience->id }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <div>
            <label for="title">Titre</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ $experience->title }}"
                required
            >
        </div>


        <div>
            <label for="content">Votre commentaire</label>

            <textarea
                id="content"
                name="content"
                required
            >{{ $experience->content }}</textarea>
        </div>


        <div>
            <label for="rating">Note</label>

            <select id="rating" name="rating" required>

                <option value="1" {{ $experience->rating == 1 ? 'selected' : '' }}>
                    ★☆☆☆☆ - 1/5
                </option>

                <option value="2" {{ $experience->rating == 2 ? 'selected' : '' }}>
                    ★★☆☆☆ - 2/5
                </option>

                <option value="3" {{ $experience->rating == 3 ? 'selected' : '' }}>
                    ★★★☆☆ - 3/5
                </option>

                <option value="4" {{ $experience->rating == 4 ? 'selected' : '' }}>
                    ★★★★☆ - 4/5
                </option>

                <option value="5" {{ $experience->rating == 5 ? 'selected' : '' }}>
                    ★★★★★ - 5/5
                </option>

            </select>
        </div>


        <div>
            <p>Photo actuelle :</p>

            @if ($experience->photo)

                <img
                    src="{{ asset('storage/' . $experience->photo) }}"
                    width="300"
                    alt="Photo de l'expérience"
                >

            @else

                <p>Aucune photo.</p>

            @endif
        </div>


        <div>
            <label for="photo">Changer la photo</label>

            <input
                type="file"
                id="photo"
                name="photo"
                accept="image/*"
            >
        </div>


        <button type="submit">
            Enregistrer les modifications
        </button>

    </form>


    <a href="/destinations/{{ $experience->destination_id }}">
        Annuler
    </a>

</body>

</html>