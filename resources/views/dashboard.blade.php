<x-app-layout>

    <x-slot name="header">
        <h2>
            Mon Voyage
        </h2>
    </x-slot>


    <div>

        <h1>Mon Voyage</h1>

        <p>
            Retrouvez ici vos expériences et vos prochains voyages.
        </p>


        {{-- CARTE : EXPÉRIENCES POSTÉES --}}
        <div>

            <h2>Expériences postées</h2>

            <p>
                Retrouvez toutes les expériences que vous avez partagées.
            </p>

            <a href="/my-experiences">
                Voir mes expériences
            </a>

        </div>


        {{-- CARTE : À VENIR --}}
        <div>

            <h2>À venir</h2>

            <p>
                Cette fonctionnalité sera disponible prochainement.
            </p>

        </div>

    </div>

</x-app-layout>