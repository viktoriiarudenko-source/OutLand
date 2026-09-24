<x-app-layout>

    <x-slot name="header">
        <h2>
            Mon Voyage
        </h2>
    </x-slot>

    <div>

        <h1>Mon Voyage</h1>

        <p>
            Retrouvez ici les expériences que vous avez publiées
            et celles que vous avez enregistrées.
        </p>


        {{-- MES EXPÉRIENCES POSTÉES --}}
        <div>

            <h2>Expériences postées</h2>

            <p>
                Retrouvez toutes les expériences que vous avez partagées.
            </p>

            <a href="/my-experiences">
                Voir mes expériences
            </a>

        </div>


        {{-- MES ENREGISTREMENTS --}}
        <div>

            <h2>Mes enregistrements</h2>

            <p>
                Retrouvez toutes les expériences que vous avez enregistrées.
            </p>

            <a href="/saved-experiences">
                Voir mes enregistrements
            </a>

        </div>

    </div>

</x-app-layout>