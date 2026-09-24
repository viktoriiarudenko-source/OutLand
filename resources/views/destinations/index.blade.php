<x-app-layout>

    <x-slot name="header">
        <h2>Explorer les destinations</h2>
    </x-slot>


    <div>

        <h1>Explorer les destinations</h1>


        {{-- BARRE DE RECHERCHE --}}
        <div>

            <label for="search">
                Rechercher une destination
            </label>

            <input
                type="text"
                id="search"
                placeholder="Rechercher une destination..."
            >

        </div>


        {{-- LISTE DES DESTINATIONS --}}
        <div id="destinations-list">

            @foreach ($destinations as $destination)

                <div
                    class="destination"
                    data-name="{{ strtolower($destination->name) }}"
                >

                    {{-- NOM DU PAYS --}}
                    <h2>
                        {{ $destination->name }}
                    </h2>


                    {{-- IMAGE DU PAYS --}}
                    @if ($destination->image)

                        <img
                            src="{{ asset('storage/' . $destination->image) }}"
                            alt="{{ $destination->name }}"
                            width="300"
                        >

                    @endif


                    <br>


                    {{-- VOIR LA DESTINATION --}}
                    <a href="/destinations/{{ $destination->id }}">
                        Voir les commentaires
                    </a>

                </div>

            @endforeach

        </div>


        {{-- AUCUN RÉSULTAT --}}
        <p id="no-results" style="display: none;">
            Aucune destination trouvée.
        </p>

    </div>


    {{-- RECHERCHE DYNAMIQUE --}}
    <script>

        // Récupère la barre de recherche
        const searchInput = document.getElementById('search');

        // Récupère toutes les destinations
        const destinations = document.querySelectorAll('.destination');

        // Message "Aucune destination trouvée"
        const noResults = document.getElementById('no-results');


        // Se déclenche à chaque fois que l'utilisateur écrit
        searchInput.addEventListener('input', function () {

            const search = searchInput.value.toLowerCase().trim();

            let resultFound = false;


            destinations.forEach(function (destination) {

                const destinationName = destination.dataset.name;


                // Vérifie si le nom contient la recherche
                if (destinationName.includes(search)) {

                    destination.style.display = 'block';

                    resultFound = true;

                } else {

                    destination.style.display = 'none';

                }

            });


            // Affiche un message si aucun pays n'est trouvé
            if (resultFound) {

                noResults.style.display = 'none';

            } else {

                noResults.style.display = 'block';

            }

        });

    </script>

</x-app-layout>