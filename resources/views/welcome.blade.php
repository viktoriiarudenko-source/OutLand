<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OutLand</title>

    {{-- POLICE POPPINS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
        rel="stylesheet"
    >

    <style>

        /* ============================== */
        /* BASE */
        /* ============================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
        }


        /* ============================== */
        /* HEADER */
        /* ============================== */

        .home-header {
            position: absolute;

            top: 0;
            left: 0;

            z-index: 100;

            width: 100%;
            height: 90px;

            padding: 0 35px;

            /* AUCUN FOND */
            background: transparent;
        }


        .home-nav {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;

            /* PETITE BARRE DE 1PX SOUS LE HEADER */
            border-bottom: 1px solid rgba(224, 215, 212, 0.65);
        }


        /* ============================== */
        /* LOGO OUTLAND */
        /* ============================== */

        .home-logo {
            flex-shrink: 0;

            margin-right: 70px;

            color: #E0D7D4;

            font-family: Arial, sans-serif;
            font-size: 30px;
            font-weight: 400;

            text-decoration: none;
        }


        /* ============================== */
        /* NAVIGATION */
        /* ============================== */

        .home-nav-links {
            width: 100%;

            display: flex;
            align-items: center;

            gap: 65px;
        }


        /* MON VOYAGE / EXPLORER / ADMINISTRATION */

        .home-nav-links a {
            font-family: 'Poppins', sans-serif;

            font-size: 25px;
            font-weight: 400;

            /*
                Figma : -6 %
                En CSS : -0.06em
            */
            letter-spacing: -0.06em;

            /*
                #E0D7D4
                Opacité 83 %
            */
            color: rgba(224, 215, 212, 0.83);

            text-decoration: none;
        }


        .home-nav-links a:hover {
            color: #E0D7D4;
        }


        /* ============================== */
        /* ME CONNECTER */
        /* ============================== */

        .home-login {
            margin-left: auto;

            display: flex;
            align-items: center;

            gap: 14px;
        }


        /* PETIT CARRÉ + FLÈCHE */

        .home-login::after {
            content: "→";

            width: 25px;
            height: 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(224, 215, 212, 0.83);

            border-radius: 2px;

            color: rgba(224, 215, 212, 0.83);

            font-family: 'Poppins', sans-serif;
            font-size: 16px;

            line-height: 1;
        }


        /* ============================== */
        /* DÉCONNEXION */
        /* ============================== */

        .home-nav form {
            margin: 0 0 0 auto;
        }


        .home-logout {
            padding: 0;

            border: none;

            background: transparent;

            font-family: 'Poppins', sans-serif;

            font-size: 25px;
            font-weight: 400;

            letter-spacing: -0.06em;

            color: rgba(224, 215, 212, 0.83);

            cursor: pointer;
        }


        .home-logout:hover {
            color: #E0D7D4;
        }


        /* ============================== */
        /* IMAGE HERO */
        /* ============================== */

        .hero {
            width: 100%;
            height: 100vh;
            min-height: 700px;

            background-image: url('/images/hero.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            align-items: flex-end;

            padding: 0 35px 60px 35px;
        }


        .hero h1 {
            margin: 0;

            color: #E0D7D4;
        }


    </style>

</head>


<body>


    {{-- ============================== --}}
    {{-- HEADER --}}
    {{-- ============================== --}}

    <header class="home-header">

        <nav class="home-nav">


            {{-- LOGO --}}
            <a href="/" class="home-logo">
                OutLand
            </a>


            <div class="home-nav-links">


                {{-- MON VOYAGE --}}
                @auth

                    <a href="/dashboard">
                        Mon Voyage
                    </a>

                @else

                    <a href="{{ route('login') }}">
                        Mon Voyage
                    </a>

                @endauth


                {{-- EXPLORER --}}
                <a href="/destinations">
                    Explorer
                </a>


                {{-- UTILISATEUR CONNECTÉ --}}
                @auth


                    {{-- ADMINISTRATION --}}
                    @if (auth()->user()->is_admin)

                        <a href="/admin/destinations">
                            Administration
                        </a>

                    @endif


                    {{-- DÉCONNEXION --}}
                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="home-logout"
                        >
                            Déconnexion
                        </button>

                    </form>


                @else


                    {{-- ME CONNECTER --}}
                    <a
                        href="{{ route('login') }}"
                        class="home-login"
                    >
                        Me Connecter
                    </a>


                @endauth


            </div>

        </nav>

    </header>



    <main>


        {{-- ============================== --}}
        {{-- GRAND TITRE + IMAGE HERO --}}
        {{-- ============================== --}}

        <section class="hero">

            <h1>
                BEYOND<br>
                THE MAP
            </h1>

        </section>



        {{-- ============================== --}}
        {{-- PREMIÈRE CARTE EXPLICATIVE --}}
        {{-- ============================== --}}

        <section>

            <div>

                <h2>
                    Vous hésitez encore sur votre prochaine destination ?
                </h2>

                <p>
                    Inspirez-vous des expériences d'autres voyageurs,
                    partagez les vôtres et rassemblez toutes vos
                    découvertes pour préparer votre prochaine aventure.
                </p>


                {{-- UTILISATEUR CONNECTÉ --}}
                @auth

                    <a href="/dashboard">
                        Mon Voyage
                    </a>

                @else

                    {{-- UTILISATEUR NON CONNECTÉ --}}
                    <a href="{{ route('login') }}">
                        Mon Voyage
                    </a>

                    <a href="{{ route('register') }}">
                        Créer un compte
                    </a>

                @endauth

            </div>

        </section>



        {{-- ============================== --}}
        {{-- DESTINATIONS --}}
        {{-- ============================== --}}

        <section>

            <h2>
                QUELQUES DESTINATIONS<br>
                À EXPLORER
            </h2>


            <div>

                @foreach ($destinations as $destination)

                    <div>


                        {{-- IMAGE DE LA DESTINATION --}}
                        @if ($destination->image)

                            <a href="/destinations/{{ $destination->id }}">

                                <img
                                    src="{{ asset('storage/' . $destination->image) }}"
                                    alt="{{ $destination->name }}"
                                    width="500"
                                >

                            </a>

                        @endif


                        {{-- NOM DE LA DESTINATION --}}
                        <h3>
                            {{ $destination->name }}
                        </h3>


                        {{-- VOIR LA DESTINATION --}}
                        <a href="/destinations/{{ $destination->id }}">
                            Découvrir
                        </a>


                    </div>

                @endforeach

            </div>


            {{-- VOIR TOUTES LES DESTINATIONS --}}
            <a href="/destinations">
                Voir plus
            </a>

        </section>



        {{-- ============================== --}}
        {{-- DEUXIÈME CARTE EXPLICATIVE --}}
        {{-- ============================== --}}

        <section>

            <div>

                <h2>
                    Partagez vos expériences
                </h2>

                <p>
                    Vous avez découvert une destination qui vous a marqué ?
                    Partagez votre expérience, ajoutez vos photos et votre
                    avis pour inspirer les prochains voyageurs.
                </p>


                <a href="/destinations">
                    Explorer les destinations
                </a>

            </div>

        </section>


    </main>



    {{-- ============================== --}}
    {{-- FOOTER --}}
    {{-- ============================== --}}

    <footer>

        <div>

            <p>
                OutLand
            </p>


            <a href="/">
                Accueil
            </a>


            <a href="/destinations">
                Explorer
            </a>


            @auth

                <a href="/dashboard">
                    Mon Voyage
                </a>

            @else

                <a href="{{ route('login') }}">
                    Me connecter
                </a>

            @endauth

        </div>


        <p>
            © {{ date('Y') }} OutLand
        </p>

    </footer>


</body>

</html>