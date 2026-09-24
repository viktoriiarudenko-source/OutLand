<x-app-layout>

    <x-slot name="header">
        <h2>Mes expériences postées</h2>
    </x-slot>


    <div>

        <h1>Mes expériences postées</h1>


        @if ($experiences->isEmpty())

            <p>
                Vous n'avez encore publié aucune expérience.
            </p>

            <a href="/destinations">
                Explorer les destinations
            </a>


        @else

            @foreach ($experiences as $experience)

                <div>

                    {{-- DESTINATION --}}
                    <h2>
                        {{ $experience->destination->name }}
                    </h2>


                    {{-- TITRE DU POST --}}
                    <h3>
                        {{ $experience->title }}
                    </h3>


                    {{-- NOTE --}}
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


                    {{-- MODIFIER --}}
                    <a href="/experiences/{{ $experience->id }}/edit">
                        Modifier
                    </a>


                    {{-- SUPPRIMER --}}
                    <form
                        action="/experiences/{{ $experience->id }}"
                        method="POST"
                    >

                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Supprimer
                        </button>

                    </form>


                    {{-- VOIR LA DESTINATION --}}
                    <a href="/destinations/{{ $experience->destination_id }}">
                        Voir la destination
                    </a>

                </div>

                <hr>

            @endforeach

        @endif


        <a href="/dashboard">
            Retour à Mon Voyage
        </a>

    </div>

</x-app-layout>