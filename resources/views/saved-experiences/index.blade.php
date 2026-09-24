<x-app-layout>

    <x-slot name="header">
        <h2>Mes enregistrements</h2>
    </x-slot>

    <div>

        <h1>Mes enregistrements</h1>

        <p>
            Choisissez un pays pour retrouver les expériences
            que vous avez enregistrées.
        </p>

        @if ($destinations->isEmpty())

            <p>
                Vous n'avez encore enregistré aucune expérience.
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


                    {{-- VOIR LES ENREGISTREMENTS DE CE PAYS --}}
                    <a href="/saved-experiences/destination/{{ $destination->id }}">
                        Voir mes enregistrements
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