<x-app-layout>

    <x-slot name="header">
        <h2>Mes expériences postées</h2>
    </x-slot>

    <div>

        <h1>Mes expériences postées</h1>

        <p>
            Choisissez un pays pour retrouver les expériences
            que vous y avez publiées.
        </p>


        @if ($destinations->isEmpty())

            <p>
                Vous n'avez encore publié aucune expérience.
            </p>

            <a href="/destinations">
                Explorer les destinations
            </a>

        @else

            @foreach ($destinations as $destination)

                <div>

                    {{-- IMAGE DU PAYS --}}
                    @if ($destination->image)

                        <img
                            src="{{ asset('storage/' . $destination->image) }}"
                            alt="{{ $destination->name }}"
                            width="300"
                        >

                    @endif


                    {{-- NOM DU PAYS --}}
                    <h2>
                        {{ $destination->name }}
                    </h2>


                    {{-- ACCÉDER À MES POSTS POUR CE PAYS --}}
                    <a href="/my-experiences/destination/{{ $destination->id }}">
                        Voir mes expériences
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