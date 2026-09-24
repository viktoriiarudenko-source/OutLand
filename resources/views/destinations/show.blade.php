<h1>{{ $destination->name }}</h1>

@if ($destination->image)
    <img src="{{ asset('images/' . $destination->image) }}" alt="{{ $destination->name }}">
@endif

<p>{{ $destination->description }}</p>


<h2>Commentaires</h2>

@if ($experiences->isEmpty())

    <p>Aucun commentaire pour le moment.</p>

@else

    @foreach ($experiences as $experience)

        <div>
            <h3>{{ $experience->title }}</h3>

            <p>Publié par : {{ $experience->user->name }}</p>

            <p>{{ $experience->content }}</p>

            @if ($experience->photo)
                <img src="{{ asset('storage/' . $experience->photo) }}" width="300">
            @endif
        </div>

    @endforeach

@endif


<a href="/destinations/{{ $destination->id }}/experiences/create">
    Ajouter un commentaire
</a>