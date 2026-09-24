<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorer les destinations</title>
</head>

<body>

    <h1>Explorer les destinations</h1>

    @foreach ($destinations as $destination)

        <div>
            <h2>{{ $destination->name }}</h2>

            @if ($destination->image)
                <img
                    src="{{ asset('images/' . $destination->image) }}"
                    alt="{{ $destination->name }}"
                    width="300"
                >
            @endif

            <br>

            <a href="/destinations/{{ $destination->id }}">
                Voir les commentaires
            </a>
        </div>

    @endforeach

</body>

</html>