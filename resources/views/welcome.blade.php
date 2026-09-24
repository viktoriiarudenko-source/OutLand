<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OutLand</title>
</head>

<body>


    {{-- ============================== --}}
    {{-- HEADER --}}
    {{-- ============================== --}}

    <header>

        <nav>

            {{-- LOGO --}}
            <a href="/">
                OutLand
            </a>


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


            {{-- CONNEXION / DÉCONNEXION --}}
            @auth

                {{-- Lien administration uniquement pour l'admin --}}
                @if (auth()->user()->is_admin)

                    <a href="/admin/destinations">
                        Administration
                    </a>

                @endif


                <form
                    method="POST"
                    action="{{ route('logout') }}"
                    style="display: inline;"
                >
                    @csrf

                    <button type="submit">
                        Déconnexion
                    </button>
                </form>

            @else

                <a href="{{ route('login') }}">
                    Me Connecter
                </a>

            @endauth

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