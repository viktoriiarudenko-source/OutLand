<x-app-layout>

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


        {{-- AJOUTER UNE EXPÉRIENCE --}}

        <a
            class="add-experience-button"
            href="/destinations/{{ $destination->id }}/experiences/create"
        >
            Ajouter un commentaire
        </a>


        <h2 class="comments-title">
            Commentaires
        </h2>


        @if ($experiences->isEmpty())

            <p>Aucun commentaire pour le moment.</p>

        @else

            @foreach ($experiences as $experience)

                <article class="experience-card">

                    <h3>{{ $experience->title }}</h3>

                    <p>
                        Publié par : {{ $experience->user->name }}
                    </p>


                    {{-- NOTE DU COMMENTAIRE --}}

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

                </article>

            @endforeach

        @endif

{{-- RETOUR EXPLORER --}}

<a
    class="back-to-destinations"
    href="/destinations"
>
    ← Retour aux destinations
</a>

    </div>

</x-app-layout>