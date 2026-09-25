<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Explorer - OutLand</title>

    <!-- POLICES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet"
    >

    <style>

        /* =====================================================
           BASE
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            background: #182528;
            color: #f4f1eb;
            font-family: 'Poppins', sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }


        /* =====================================================
           HEADER - MÊME QUE MON VOYAGE
        ===================================================== */

        .voyage-header {
            width: calc(100% - 70px);
            height: 90px;

            margin: 0 auto;

            display: flex;
            align-items: center;

            border-bottom: 1px solid rgba(216, 211, 202, 0.40);
        }

        .voyage-logo {
            flex-shrink: 0;

            margin-right: 75px;

            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 400;

            color: rgba(216, 211, 202, 0.90);
        }

        .voyage-navigation {
            width: 100%;

            display: flex;
            align-items: center;

            gap: 60px;
        }

        .voyage-navigation a {
            font-size: 17px;
            font-weight: 300;

            color: rgba(216, 211, 202, 0.82);

            transition: opacity .2s ease;
        }

        .voyage-navigation a:hover {
            opacity: .7;
        }

        .logout-form {
            margin-left: auto;
        }

        .logout-button {
            padding: 0;

            border: none;
            background: none;

            font-family: 'Poppins', sans-serif;
            font-size: 17px;
            font-weight: 300;

            color: rgba(216, 211, 202, 0.82);

            cursor: pointer;
        }

        .logout-button:hover {
            opacity: .7;
        }


        /* =====================================================
           EXPLORER
        ===================================================== */

        .explorer-header {
            height: 260px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #182528;
        }

        .explorer-title {
            margin: 0;

            font-family: 'Playfair Display', serif;
            font-size: clamp(56px, 10vw, 105px);
            font-weight: 400;

            letter-spacing: 0.03em;

            color: #d8d1c7;

            text-align: center;
        }


        /* =====================================================
           RECHERCHE
        ===================================================== */

        .search-container {
            padding: 25px 30px 40px;

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

            font-family: 'Poppins', sans-serif;
            font-size: 16px;

            outline: none;
        }

        .search-container input::placeholder {
            color: #b9b4ac;
        }

        .search-container input:focus {
            background: rgba(255, 255, 255, 0.05);
        }


        /* =====================================================
           DESTINATIONS
        ===================================================== */

        #destinations-list {
            width: 100%;
        }

        .destination {
            position: relative;

            width: 100%;
            height: 300px;

            overflow: hidden;

            border-top: 1px solid rgba(255, 255, 255, 0.20);
        }

        .destination-link {
            position: relative;

            display: block;

            width: 100%;
            height: 100%;

            color: inherit;

            text-decoration: none;
        }

        .destination img {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: transform 0.6s ease;
        }

        .destination-link::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
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

            color: #ffffff;

            font-family: 'Poppins', sans-serif;
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


        /* =====================================================
           AUCUN RÉSULTAT
        ===================================================== */

        #no-results {
            margin: 0;

            padding: 60px 20px;

            background: #182528;

            color: #d8d1c7;

            text-align: center;

            font-size: 18px;
        }


        /* =====================================================
           FOOTER - MÊME QUE MON VOYAGE
        ===================================================== */

        .voyage-footer {
            width: 100%;

            padding: 80px 30px 35px;

            background: #182528;

            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            align-items: center;

            gap: 7px;

            flex-wrap: wrap;

            font-size: 11px;
            font-weight: 300;

            color: rgba(216, 211, 202, .72);
        }

        .footer-links a:hover {
            text-decoration: underline;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 850px) {

            .voyage-header {
                width: calc(100% - 30px);
                height: 70px;
            }

            .voyage-logo {
                margin-right: 30px;

                font-size: 22px;
            }

            .voyage-navigation {
                gap: 25px;
            }

            .voyage-navigation a,
            .logout-button {
                font-size: 13px;
            }
        }


        @media (max-width: 600px) {

            .voyage-header {
                width: calc(100% - 20px);
            }

            .voyage-logo {
                margin-right: 20px;
            }

            .voyage-navigation {
                gap: 15px;
            }

            .voyage-navigation a,
            .logout-button {
                font-size: 10px;
            }

            .explorer-header {
                height: 180px;
            }

            .explorer-title {
                font-size: 55px;
            }

            .search-container {
                padding: 20px 15px 30px;
            }

            .destination {
                height: 240px;
            }

            .destination-name {
                left: 18px;
                bottom: 20px;

                font-size: 20px;
            }

            .voyage-footer {
                padding: 55px 20px 25px;
            }

            .footer-links {
                font-size: 9px;
            }
        }

    </style>
</head>


<body>


    {{-- ================================================= --}}
    {{-- HEADER --}}
    {{-- ================================================= --}}

    <header class="voyage-header">

        <a href="/" class="voyage-logo">
            OutLand
        </a>


        <nav class="voyage-navigation">

            <a href="/dashboard">
                Mon Voyage
            </a>

            <a href="/destinations">
                Explorer
            </a>


            @auth

                <form
                    method="POST"
                    action="{{ route('logout') }}"
                    class="logout-form"
                >
                    @csrf

                    <button
                        type="submit"
                        class="logout-button"
                    >
                        Déconnexion
                    </button>
                </form>

            @else

                <a
                    href="{{ route('login') }}"
                    style="margin-left: auto;"
                >
                    Me Connecter
                </a>

            @endauth

        </nav>

    </header>



    {{-- ================================================= --}}
    {{-- TITRE EXPLORER --}}
    {{-- ================================================= --}}

    <header class="explorer-header">

        <h1 class="explorer-title">
            EXPLORER
        </h1>

    </header>



    {{-- ================================================= --}}
    {{-- BARRE DE RECHERCHE --}}
    {{-- ================================================= --}}

    <div class="search-container">

        <label for="search">
            Rechercher une destination
        </label>

        <input
            type="text"
            id="search"
            placeholder="Rechercher une destination..."
        >

    </div>



    {{-- ================================================= --}}
    {{-- DESTINATIONS --}}
    {{-- ================================================= --}}

    <div id="destinations-list">

        @foreach ($destinations as $destination)

            <div
                class="destination"
                data-name="{{ strtolower($destination->name) }}"
            >

                <a
                    class="destination-link"
                    href="/destinations/{{ $destination->id }}"
                >

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



    {{-- ================================================= --}}
    {{-- AUCUN RÉSULTAT --}}
    {{-- ================================================= --}}

    <p
        id="no-results"
        style="display: none;"
    >
        Aucune destination trouvée.
    </p>



    {{-- ================================================= --}}
    {{-- FOOTER --}}
    {{-- ================================================= --}}

    <footer class="voyage-footer">

        <div class="footer-links">

            <span>
                OUTLAND © {{ date('Y') }}
            </span>

            <span>•</span>

            <a href="#">
                Mentions Légales
            </a>

            <span>•</span>

            <a href="#">
                Politique De Confidentialité
            </a>

            <span>•</span>

            <a href="#">
                Gestion Des Cookies
            </a>

            <span>•</span>

            <a href="#">
                Contact
            </a>

        </div>

    </footer>



    {{-- ================================================= --}}
    {{-- RECHERCHE DYNAMIQUE --}}
    {{-- ================================================= --}}

    <script>

        const searchInput = document.getElementById('search');

        const destinations =
            document.querySelectorAll('.destination');

        const noResults =
            document.getElementById('no-results');


        if (searchInput) {

            searchInput.addEventListener('input', function () {

                const search =
                    searchInput.value
                        .toLowerCase()
                        .trim();

                let resultFound = false;


                destinations.forEach(function (destination) {

                    const destinationName =
                        destination.dataset.name || '';


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


</body>

</html>