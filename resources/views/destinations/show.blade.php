<x-app-layout>

    <style>
    .destination-hero {
        position: relative;
        width: 100%;
        height: 520px;
        overflow: hidden;
    }

    .destination-hero img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .destination-hero-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: flex-start;
        padding: 35px 45px;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.35),
            rgba(0, 0, 0, 0)
        );
    }

    .destination-hero h1 {
        margin: 0;
        color: white;
        font-family: 'Playfair Display', serif;
        font-size: 52px;
        font-weight: 400;
    }
    .destination-description {
    max-width: 900px;
    margin: 0 auto;
    padding: 70px 30px;
    color: #f4f1eb;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    line-height: 1.8;
}

.destination-description p {
    margin: 0;
}
</style> 

    <div>

       <div class="destination-hero">
    @if ($destination->image)
        <img
            src="{{ asset('storage/' . $destination->image) }}"
            alt="{{ $destination->name }}"
        >
    @endif

    <div class="destination-hero-overlay">
        <h1>{{ $destination->name }}</h1>
    </div>
</div>

<div class="destination-description">
    <p>{{ $destination->description }}</p>
</div>


        {{-- NOTE MOYENNE DE LA DESTINATION --}}

        @if ($averageRating)

            <div>
                <h2>
                    Note moyenne :

                    @for ($i = 1; $i <= 5; $i)

                        @if ($i <= round($averageRating))
                            ★
                        @else
                            ☆
                        @endif

                    @endfor

                    {{ number_format($averageRating, 1, ',', ' ') }}/5
                </h2>

                <p>
                    {{ $experiences->whereNotNull('rating')->count() }}
                    avis
                </p>
            </div>

        @else

            <p>Pas encore de note pour cette destination.</p>

        @endif


        <h2>Commentaires</h2>

        @if ($experiences->isEmpty())

            <p>Aucun commentaire pour le moment.</p>

        @else

            @foreach ($experiences as $experience)

                <div>

                    <h3>{{ $experience->title }}</h3>

                    <p>
                        Publié par : {{ $experience->user->name }}
                    </p>


                    {{-- NOTE DU COMMENTAIRE --}}
                    @if ($experience->rating)

                        <p>
                            @for ($i = 1; $i <= 5; $i)

                                @if ($i <= $experience->rating)
                                    ★
                                @else
                                    ☆
                                @endif

                            @endfor

                            {{ $experience->rating }}/5
                        </p>

                    @endif


                    {{-- TEXTE --}}
                    <p>
                        {{ $experience->content }}
                    </p>


                    {{-- PHOTO --}}
                    @if ($experience->photo)

                        <img
                            src="{{ asset('storage/' . $experience->photo) }}"
                            alt="{{ $experience->title }}"
                            width="300"
                        >

                    @endif


                    {{-- UTILISATEUR CONNECTÉ --}}
                    @auth

                        @php
                            $isSaved = $experience->savedExperiences
                                ->where('user_id', auth()->id())
                                ->isNotEmpty();
                        @endphp


                        {{-- ENREGISTREMENT --}}
                        @if ($isSaved)

                            <form
                                action="/experiences/{{ $experience->id }}/save"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    ♥ Enregistré — Retirer
                                </button>
                            </form>

                        @else

                            <form
                                action="/experiences/{{ $experience->id }}/save"
                                method="POST"
                            >
                                @csrf

                                <button type="submit">
                                    ♡ Enregistrer
                                </button>
                            </form>

                        @endif


                        {{-- MODIFICATION / SUPPRESSION PAR L'AUTEUR --}}
                        @if ($experience->user_id === auth()->id())

                            <a href="/experiences/{{ $experience->id }}/edit">
                                Modifier mon commentaire
                            </a>

                            <form
                                action="/experiences/{{ $experience->id }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    Supprimer mon commentaire
                                </button>
                            </form>

                        @endif

                    @endauth

                </div>

                <hr>

            @endforeach

        @endif


        {{-- AJOUTER UNE EXPÉRIENCE --}}
        <a href="/destinations/{{ $destination->id }}/experiences/create">
            Ajouter un commentaire
        </a>


        <br>


        {{-- RETOUR EXPLORER --}}
        <a href="/destinations">
            ← Retour aux destinations
        </a>

    </div>

</x-app-layout>