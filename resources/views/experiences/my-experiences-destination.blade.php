<x-app-layout>

    <x-slot name="header">
        <h2>Mes expériences - {{ $destination->name }}</h2>
    </x-slot>

    <div>

        <h1>{{ $destination->name }}</h1>

        <p>
            Mes expériences publiées dans ce pays.
        </p>

        @foreach ($experiences as $experience)

            <div>

                {{-- TITRE --}}
                <h2>
                    {{ $experience->title }}
                </h2>

                {{-- NOTE --}}
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


                {{-- MODIFIER --}}
                <br>

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

            </div>

            <hr>

        @endforeach


        {{-- RETOUR --}}
        <a href="/my-experiences">
            ← Retour aux pays
        </a>

    </div>

</x-app-layout>