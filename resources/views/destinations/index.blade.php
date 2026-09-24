<x-app-layout>
    <x-slot name="header">
        <h2>Explorer les destinations</h2>
    </x-slot>

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            background: #182528;
            color: #f4f1eb;
            font-family: Arial, sans-serif;
        }

        .explorer-header {
            height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #182528;
        }

        .explorer-title {
            margin: 0;
            font-family: Georgia, serif;
            font-size: clamp(56px, 10vw, 105px);
            font-weight: 400;
            letter-spacing: 0.03em;
            color: #d8d1c7;
            text-align: center;
        }

        .search-container {
            padding: 25px 30px;
            background: #182528;
            text-align: center;
        }

        .search-container label {
            display: block;
            margin-bottom: 10px;
            color: #d8d1c7;
            font-size: 16px;
        }

        .search-container input {
            width: min(500px, 90%);
            padding: 13px 18px;
            border: 1px solid #d8d1c7;
            border-radius: 0;
            background: transparent;
            color: #f4f1eb;
            font-size: 16px;
            outline: none;
        }

        .search-container input::placeholder {
            color: #b9b4ac;
        }

        .search-container input:focus {
            background: rgba(255, 255, 255, 0.05);
        }

        #destinations-list {
            width: 100%;
        }

        .destination {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .destination a.destination-link {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: inherit;
        }

        .destination img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .destination::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.05),
                rgba(0, 0, 0, 0.45)
            );
            pointer-events: none;
        }

        .destination-name {
            position: absolute;
            left: 24px;
            bottom: 28px;
            z-index: 2;
            margin: 0;
            color: white;
            font-size: 22px;
            font-weight: 400;
            letter-spacing: 0.02em;
        }

        .destination:hover img {
            transform: scale(1.04);
        }

        .destination:hover .destination-name {
            text-decoration: underline;
            text-underline-offset: 5px;
        }

        #no-results {
            margin: 0;
            padding: 60px 20px;
            background: #182528;
            color: #d8d1c7;
            text-align: center;
            font-size: 18px;
        }

        @media (max-width: 600px) {
            .explorer-header {
                height: 180px;
            }

            .explorer-title {
                font-size: 55px;
            }

            .search-container {
                padding: 20px 15px;
            }

            .destination {
                height: 240px;
            }

            .destination-name {
                left: 18px;
                bottom: 20px;
                font-size: 20px;
            }
        }
    </style>

    <header class="explorer-header">
        <h1 class="explorer-title">EXPLORER</h1>
    </header>

    <div class="search-container">
        <label for="search">Rechercher une destination</label>
        <input
            type="text"
            id="search"
            placeholder="Rechercher une destination..."
        >
    </div>

    <div id="destinations-list">
        @foreach ($destinations as $destination)
            <div
                class="destination"
                data-name="{{ strtolower($destination->name) }}"
            >
                <a class="destination-link" href="/destinations/{{ $destination->id }}">
                    @if ($destination->image)
                        <img
                            src="{{ asset('storage/' . $destination->image) }}"
                            alt="{{ $destination->name }}"
                        >
                    @endif

                    <h2 class="destination-name">
                        {{ $destination->name }}
                    </h2>
                </a>
            </div>
        @endforeach
    </div>

    <p id="no-results" style="display: none;">
        Aucune destination trouvée.
    </p>

    <script>
        const searchInput = document.getElementById('search');
        const destinations = document.querySelectorAll('.destination');
        const noResults = document.getElementById('no-results');

        if (searchInput) {
            searchInput.addEventListener('input', function () {
                const search = searchInput.value.toLowerCase().trim();
                let resultFound = false;

                destinations.forEach(function (destination) {
                    const destinationName = destination.dataset.name || '';

                    if (destinationName.includes(search)) {
                        destination.style.display = 'block';
                        resultFound = true;
                    } else {
                        destination.style.display = 'none';
                    }
                });

                if (resultFound) {
                    noResults.style.display = 'none';
                } else {
                    noResults.style.display = 'block';
                }
            });
        }
    </script>
</x-app-layout>
