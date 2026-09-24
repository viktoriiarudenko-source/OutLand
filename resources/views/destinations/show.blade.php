<h1>{{ $destination->name }}</h1>

@if ($destination->image)
    <img
        src="{{ asset('storage/' . $destination->image) }}"
        alt="{{ $destination->name }}"
        width="500"
    >
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


            @if ($experience->rating)

                <p>
                    @for ($i = 1; $i <= 5; $i++)

                        @if ($i <= $experience->rating)
                            ★
                        @else
                            ☆
                        @endif

                    @endfor

                    {{ $experience->rating }}/5
                </p>

            @endif


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


                @if ($experience->user_id === auth()->id())

                    <a href="/experiences/{{ $experience->id }}/edit">
                        Modifier mon commentaire
                    </a>

                    <form action="/experiences/{{ $experience->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Supprimer mon commentaire
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