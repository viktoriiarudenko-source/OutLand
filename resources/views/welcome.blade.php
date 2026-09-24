<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OutLand</title>

    <style>

        /* ============================== */
        /* BASE */
        /* ============================== */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }


        /* ============================== */
        /* HEADER */
        /* ============================== */

        .home-header {
            width: 100%;
            height: 74px;

            display: flex;
            align-items: center;

            padding: 0 35px;

            background-color: #182123;
        }


        .home-nav {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;

            border-bottom: 1px solid rgba(255, 255, 255, 0.55);
        }


        /* ============================== */
        /* LOGO OUTLAND */
        /* ============================== */

        .home-logo {
            margin-right: 50px;

            color: transparent;

            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.9);

            font-family: Arial, sans-serif;
            font-size: 29px;
            font-weight: 400;

            letter-spacing: 0.5px;

            text-decoration: none;
        }


        /* ============================== */
        /* LIENS DU HEADER */
        /* ============================== */

        .home-nav-links {
            width: 100%;

            display: flex;
            align-items: center;

            gap: 42px;
        }


        .home-nav-links a {
            color: rgba(255, 255, 255, 0.82);

            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: 300;

            text-decoration: none;
        }


        .home-nav-links a:hover {
            color: white;
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


        /* PETIT CARRÉ AVEC FLÈCHE */

        .home-login::after {
            content: "→";

            width: 21px;
            height: 21px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(255, 255, 255, 0.75);
            border-radius: 2px;

            color: white;

            font-size: 14px;
            line-height: 1;
        }


        /* ============================== */
        /* DÉCONNEXION */
        /* ============================== */

        .home-nav form {
            margin: 0 0 0 auto;
        }


        .home-logout {
            color: rgba(255, 255, 255, 0.82);

            background: transparent;

            border: none;

            padding: 0;

            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: 300;

            cursor: pointer;
        }


        .home-logout:hover {
            color: white;
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


            {{-- NAVIGATION --}}
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


                    {{-- ADMIN --}}
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


                    {{-- CONNEXION --}}
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
        {{-- GRAND TITRE --}}
        {{-- ============================== --}}

        <section>

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


                        {{-- IMAGE --}}
                        @if ($destination->image)

                            <a href="/destinations/{{ $destination->id }}">

                                <img
                                    src="{{ asset('storage/' . $destination->image) }}"
                                    alt="{{ $destination->name }}"
                                    width="500"
                                >

                            </a>

                        @endif


                        {{-- NOM --}}
                        <h3>
                            {{ $destination->name }}
                        </h3>


                        {{-- LIEN --}}
                        <a href="/destinations/{{ $destination->id }}">
                            Découvrir
                        </a>


                    </div>

                @endforeach

            </div>


            {{-- VOIR PLUS --}}
            <a href="/destinations">
                Voir plus
            </a>

        </section>



        {{-- ============================== --}}
        {{-- DEUXIÈME CARTE --}}
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