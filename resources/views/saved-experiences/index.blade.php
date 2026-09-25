<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mes Enregistrements - OutLand</title>

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
           HEADER
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
           TITRE
        ===================================================== */

        .saved-title-section {
            min-height: 260px;

            padding: 40px 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #182528;
        }

        .saved-title {
            margin: 0;

            font-family: 'Playfair Display', serif;
            font-size: clamp(50px, 8vw, 100px);
            font-weight: 400;

            line-height: 1;

            letter-spacing: 0.02em;

            color: #d8d1c7;

            text-align: center;

            text-transform: uppercase;
        }


        /* =====================================================
           LISTE DES PAYS
        ===================================================== */

        .saved-list {
            width: 100%;
        }

        .country-card {
            position: relative;

            width: 100%;
            height: 300px;

            overflow: hidden;

            border-top: 1px solid rgba(255, 255, 255, 0.20);
        }

        .country-link {
            position: relative;

            display: block;

            width: 100%;
            height: 100%;

            overflow: hidden;
        }

        .country-image {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: transform 0.6s ease;
        }

        .country-link::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    to right,
                    rgba(0, 0, 0, 0.30),
                    rgba(0, 0, 0, 0.02)
                );

            z-index: 1;

            pointer-events: none;
        }


        /* =====================================================
           TEXTE SUR LES IMAGES
        ===================================================== */

        .country-content {
            position: absolute;

            left: 45px;
            top: 50%;

            transform: translateY(-50%);

            z-index: 2;
        }

        .country-label {
            margin: 0 0 5px;

            font-size: 16px;
            font-weight: 300;

            color: rgba(255, 255, 255, 0.95);
        }

        .country-name {
            margin: 0;

            font-size: 27px;
            font-weight: 400;

            color: #ffffff;
        }


        /* =====================================================
           HOVER
        ===================================================== */

        .country-card:hover .country-image {
            transform: scale(1.04);
        }

        .country-card:hover .country-name {
            text-decoration: underline;
            text-underline-offset: 6px;
        }


        /* =====================================================
           AUCUN ENREGISTREMENT
        ===================================================== */

        .empty-saved {
            min-height: 350px;

            padding: 80px 30px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            text-align: center;

            background: #182528;
        }

        .empty-saved p {
            margin: 0 0 25px;

            font-size: 18px;
            font-weight: 300;

            color: rgba(216, 211, 202, .85);
        }

        .empty-button {
            padding: 11px 25px;

            border: 1px solid rgba(216, 211, 202, .65);
            border-radius: 30px;

            font-size: 14px;
            font-weight: 300;

            transition:
                background .2s ease,
                color .2s ease;
        }

        .empty-button:hover {
            background: #d8d1c7;
            color: #182528;
        }


        /* =====================================================
           FOOTER
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

            .country-card {
                height: 270px;
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

            .saved-title-section {
                min-height: 180px;
            }

            .saved-title {
                font-size: 42px;
            }

            .country-card {
                height: 220px;
            }

            .country-content {
                left: 25px;
            }

            .country-label {
                font-size: 13px;
            }

            .country-name {
                font-size: 23px;
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

        </nav>

    </header>



    {{-- ================================================= --}}
    {{-- TITRE --}}
    {{-- ================================================= --}}

    <section class="saved-title-section">

        <h1 class="saved-title">
            MES ENREGISTREMENTS
        </h1>

    </section>



    {{-- ================================================= --}}
    {{-- PAYS AVEC DES POSTS ENREGISTRÉS --}}
    {{-- ================================================= --}}

    @if ($destinations->isEmpty())


        <section class="empty-saved">

            <p>
                Vous n'avez encore enregistré aucune expérience.
            </p>

            <a
                href="/destinations"
                class="empty-button"
            >
                Explorer les destinations
            </a>

        </section>


    @else


        <main class="saved-list">


            @foreach ($destinations as $destination)


                <article class="country-card">


                    <a
                        href="/saved-experiences/destination/{{ $destination->id }}"
                        class="country-link"
                    >


                        {{-- IMAGE DU PAYS --}}

                        @if ($destination->image)

                            <img
                                src="{{ asset('storage/' . $destination->image) }}"
                                alt="{{ $destination->name }}"
                                class="country-image"
                            >

                        @endif



                        {{-- NOM DU PAYS --}}

                        <div class="country-content">

                            <p class="country-label">
                                Destination
                            </p>

                            <h2 class="country-name">
                                {{ $destination->name }}
                            </h2>

                        </div>


                    </a>


                </article>


            @endforeach


        </main>


    @endif



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


</body>

</html>