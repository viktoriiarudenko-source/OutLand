<x-app-layout>

    <x-slot name="header">
        <h2>Mes enregistrements - {{ $destination->name }}</h2>
    </x-slot>

    <div>

        <h1>{{ $destination->name }}</h1>

        <p>
            Mes expériences enregistrées pour ce pays.
        </p>


        @foreach ($savedExperiences as $savedExperience)

            <div>

                {{-- TITRE --}}
                <h2>
                    {{ $savedExperience->experience->title }}
                </h2>


                {{-- AUTEUR --}}
                <p>
                    Publié par :
                    {{ $savedExperience->experience->user->name }}
                </p>


                {{-- NOTE --}}
                @if ($savedExperience->experience->rating)

                    <p>

                        @for ($i = 1; $i <= 5; $i++)

                            @if ($i <= $savedExperience->experience->rating)
                                ★
                            @else
                                ☆
                            @endif

                        @endfor

                        {{ $savedExperience->experience->rating }}/5

                    </p>

                @endif


                {{-- TEXTE --}}
                <p>
                    {{ $savedExperience->experience->content }}
                </p>


                {{-- PHOTO --}}
                @if ($savedExperience->experience->photo)

                    <img
                        src="{{ asset('storage/' . $savedExperience->experience->photo) }}"
                        alt="{{ $savedExperience->experience->title }}"
                        width="300"
                    >

                @endif


                {{-- RETIRER DES ENREGISTREMENTS --}}
                <form
                    action="/experiences/{{ $savedExperience->experience->id }}/save"
                    method="POST"
                >

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        ♥ Retirer des enregistrements
                    </button>

                </form>


                {{-- VOIR LE PAYS --}}
                <a href="/destinations/{{ $savedExperience->experience->destination->id }}">
                    Voir la destination
                </a>

            </div>

            <hr>

        @endforeach


        <a href="/saved-experiences">
            ← Retour aux pays
        </a>

    </div>

</x-app-layout>