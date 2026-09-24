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


            @auth

                @php
                    $isSaved = $experience->savedExperiences
                        ->where('user_id', auth()->id())
                        ->isNotEmpty();
                @endphp

                @if ($isSaved)

                    <form action="/experiences/{{ $experience->id }}/save" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            ♥ Enregistré — Retirer
                        </button>
                    </form>

                @else

                    <form action="/experiences/{{ $experience->id }}/save" method="POST">
                        @csrf

                        <button type="submit">
                            ♡ Enregistrer
                        </button>
                    </form>

                @endif

            @endauth

        </div>

    @endforeach

@endif


<a href="/destinations/{{ $destination->id }}/experiences/create">
    Ajouter un commentaire
</a>