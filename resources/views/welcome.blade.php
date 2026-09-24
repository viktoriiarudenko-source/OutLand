<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OutLand</title>

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <style>

        /* =========================
           BASE
        ========================= */

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
            background: #071214;
            color: #E0D7D4;
        }


        /* =========================
           FOND DE TOUTE LA PAGE
        ========================= */

       .home-page {
    position: relative;
    width: 100%;
    min-height: 100vh;
    background-color: #071214;
}

.home-page::before {
    content: "";
    position: absolute;
    inset: 0;

    background-image: url('/images/hero.png');
    background-size: 100% 100%;
    background-position: top center;
    background-repeat: no-repeat;

    opacity: 0.40;

    z-index: 0;
}

.home-header,
main,
footer {
    position: relative;
    z-index: 1;
}

        /* =========================
           HEADER
        ========================= */

        .home-header {
            width: 100%;
            height: 90px;

            padding: 0 35px;

            background: transparent;
        }

        .home-nav {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;

            border-bottom: 1px solid rgba(224, 215, 212, 0.65);
        }


        /* =========================
           LOGO
        ========================= */

        .home-logo {
            flex-shrink: 0;

            margin-right: 70px;

            font-family: Arial, sans-serif;
            font-size: 30px;
            font-weight: 400;

            color: #E0D7D4;

            text-decoration: none;
        }


        /* =========================
           NAVIGATION
        ========================= */

        .home-nav-links {
            width: 100%;

            display: flex;
            align-items: center;

            gap: 65px;
        }

        .home-nav-links a {
            font-family: 'Poppins', sans-serif;

            font-size: 25px;
            font-weight: 400;

            letter-spacing: -0.06em;

            color: rgba(224, 215, 212, 0.83);

            text-decoration: none;
        }

        .home-nav-links a:hover {
            color: #E0D7D4;
        }


        /* =========================
           CONNEXION
        ========================= */

        .home-login {
            margin-left: auto;

            display: flex;
            align-items: center;

            gap: 14px;
        }

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

            font-size: 16px;
        }


        /* =========================
           DECONNEXION
        ========================= */

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


        /* =========================
           HERO
        ========================= */

        .hero {
            width: 100%;
            min-height: 600px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 60px 35px;

            background: transparent;
        }

        .hero-title {
            margin: 0;

            font-family: Georgia, 'Times New Roman', serif;

            font-size: 90px;
            font-weight: 400;

            line-height: 0.92;

            letter-spacing: -0.04em;

            text-align: center;

            color: #E0D7D4;
        }


        /* =========================
           SECTIONS
        ========================= */

        .home-section {
            width: 100%;

            padding: 80px 35px;

            background: transparent;
        }

        .home-section h2 {
            margin-top: 0;

            color: #E0D7D4;
        }

        .home-section p {
            color: #E0D7D4;
        }

        .home-section a {
            color: #E0D7D4;
        }


        /* =========================
           INTRO
        ========================= */

        .intro-card {
            max-width: 1000px;

            margin: 0 auto;

            padding: 50px;

            background: rgba(8, 25, 26, 0.55);

            border-radius: 35px;

            text-align: center;

            backdrop-filter: blur(4px);
        }

        .intro-card h2 {
            font-family: Georgia, 'Times New Roman', serif;

            font-size: 42px;
            font-weight: 400;
        }

        .intro-card p {
            max-width: 750px;

            margin: 20px auto 30px;

            font-family: 'Poppins', sans-serif;

            line-height: 1.7;
        }

        .intro-links {
            display: flex;
            justify-content: center;
            align-items: center;

            gap: 25px;

            flex-wrap: wrap;
        }

        .main-button {
            display: inline-block;

            padding: 13px 30px;

            border: 1px solid rgba(224, 215, 212, 0.8);

            border-radius: 30px;

            font-family: 'Poppins', sans-serif;

            text-decoration: none;
        }


        /* =========================
           DESTINATIONS
        ========================= */

        .destinations-section {
            text-align: center;
        }

        .destinations-title {
            margin-bottom: 50px;

            font-family: Georgia, 'Times New Roman', serif;

            font-size: 52px;
            font-weight: 400;

            line-height: 1;

            text-align: center;
        }

        .destination-list {
            width: 100%;
            max-width: 1100px;

            margin: 0 auto 40px;

            display: flex;
            flex-direction: column;

            gap: 25px;
        }

        .destination-card {
            position: relative;

            width: 100%;
            height: 230px;

            overflow: hidden;

            border-radius: 35px;

            background: rgba(0, 0, 0, 0.25);
        }

        .destination-card img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }

        .destination-name {
            position: absolute;

            left: 35px;
            bottom: 25px;

            margin: 0;

            font-family: Georgia, 'Times New Roman', serif;

            font-size: 36px;
            font-weight: 400;

            color: white;

            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
        }

        .see-more {
            display: inline-block;

            margin-top: 10px;

            padding: 12px 30px;

            border: 1px solid rgba(224, 215, 212, 0.8);

            border-radius: 30px;

            font-family: 'Poppins', sans-serif;

            text-decoration: none;
        }


        /* =========================
           OUTLAND
        ========================= */

        .outland-big-title {
            margin: 60px 0;

            font-family: Georgia, 'Times New Roman', serif;

            font-size: 110px;
            font-weight: 400;

            line-height: 1;

            text-align: center;

            color: #E0D7D4;
        }


        /* =========================
           DERNIERE CARTE
        ========================= */

        .features-card {
            max-width: 1100px;

            margin: 0 auto;

            padding: 55px;

            border-radius: 35px;

            background: rgba(8, 25, 26, 0.58);

            backdrop-filter: blur(4px);
        }

        .features-card h2 {
            margin-bottom: 40px;

            font-family: Georgia, 'Times New Roman', serif;

            font-size: 42px;
            font-weight: 400;

            text-align: center;
        }

        .features-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 50px;
        }

        .feature {
            text-align: center;
        }

        .feature h3 {
            font-family: Georgia, 'Times New Roman', serif;

            font-size: 27px;
            font-weight: 400;
        }

        .feature p {
            font-family: 'Poppins', sans-serif;

            line-height: 1.7;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            width: 100%;

            padding: 80px 35px 30px;

            background: transparent;

            color: #E0D7D4;

            text-align: center;
        }

        .footer-links {
            display: flex;
            align-items: center;
            justify-content: center;

            gap: 30px;

            flex-wrap: wrap;

            margin-bottom: 25px;
        }

        footer a {
            font-family: 'Poppins', sans-serif;

            color: #E0D7D4;

            text-decoration: none;
        }

        footer p {
            font-family: 'Poppins', sans-serif;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .home-header {
                padding: 0 20px;
            }

            .home-logo {
                margin-right: 30px;

                font-size: 24px;
            }

            .home-nav-links {
                gap: 20px;
            }

            .home-nav-links a,
            .home-logout {
                font-size: 17px;
            }

            .hero {
                min-height: 500px;
            }

            .hero-title {
                font-size: 60px;
            }

            .home-section {
                padding: 60px 20px;
            }

            .destinations-title {
                font-size: 40px;
            }

            .outland-big-title {
                font-size: 70px;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>


<body>

<div class="home-page">


    <!-- =========================
         HEADER
    ========================== -->

    <header class="home-header">

        <nav class="home-nav">

            <a href="/" class="home-logo">
                OutLand
            </a>


            <div class="home-nav-links">

                @auth

                    <a href="/dashboard">
                        Mon Voyage
                    </a>

                @else

                    <a href="{{ route('login') }}">
                        Mon Voyage
                    </a>

                @endauth


                <a href="/destinations">
                    Explorer
                </a>


                @auth

                    @if (auth()->user()->is_admin)

                        <a href="/admin/destinations">
                            Administration
                        </a>

                    @endif


                    <form method="POST" action="{{ route('logout') }}">

                        @csrf

                        <button type="submit" class="home-logout">
                            Déconnexion
                        </button>

                    </form>

                @else

                    <a href="{{ route('login') }}" class="home-login">
                        Me Connecter
                    </a>

                @endauth

            </div>

        </nav>

    </header>



    <main>


        <!-- =========================
             BEYOND THE MAP
        ========================== -->

        <section class="hero">

            <h1 class="hero-title">
                BEYOND<br>
                THE MAP
            </h1>

        </section>



        <!-- =========================
             INTRODUCTION
        ========================== -->

        <section class="home-section">

            <div class="intro-card">

                <h2>
                    Vous Hésitez Encore Sur Votre<br>
                    Prochaine Destination ?
                </h2>


                <p>
                    Inspirez-vous des expériences d'autres voyageurs,
                    partagez les vôtres et rassemblez toutes vos
                    découvertes pour préparer votre prochaine aventure.
                </p>


                <div class="intro-links">

                    @auth

                        <a href="/dashboard" class="main-button">
                            Mon Voyage
                        </a>

                    @else

                        <a href="{{ route('login') }}" class="main-button">
                            Mon Voyage
                        </a>

                        <a href="{{ route('register') }}">
                            Créer un compte
                        </a>

                    @endauth

                </div>

            </div>

        </section>



        <!-- =========================
             DESTINATIONS
        ========================== -->

        <section class="home-section destinations-section">

            <h2 class="destinations-title">
                QUELQUES DESTINATIONS<br>
                À EXPLORER
            </h2>


            <div class="destination-list">

                @foreach ($destinations as $destination)

                    <a
                        href="/destinations/{{ $destination->id }}"
                        class="destination-card"
                    >

                        @if ($destination->image)

                            <img
                                src="{{ asset('storage/' . $destination->image) }}"
                                alt="{{ $destination->name }}"
                            >

                        @endif


                        <h3 class="destination-name">
                            {{ $destination->name }}
                        </h3>

                    </a>

                @endforeach

            </div>


            <a href="/destinations" class="see-more">
                Voir Plus
            </a>

        </section>



        <!-- =========================
             GROS TITRE OUTLAND
        ========================== -->

        <section class="home-section">

            <h2 class="outland-big-title">
                OUTLAND
            </h2>

        </section>



        <!-- =========================
             FONCTIONNALITES
        ========================== -->

        <section class="home-section">

            <div class="features-card">

                <h2>
                    Que Pouvez-Vous Faire<br>
                    Sur Notre Site ?
                </h2>


                <div class="features-grid">

                    <div class="feature">

                        <h3>
                            Partagez vos expériences
                        </h3>

                        <p>
                            Racontez vos voyages, ajoutez vos photos
                            et donnez votre avis sur les destinations
                            que vous avez découvertes.
                        </p>

                    </div>


                    <div class="feature">

                        <h3>
                            Inspirez votre prochain voyage
                        </h3>

                        <p>
                            Découvrez les expériences des autres
                            voyageurs et enregistrez celles qui
                            vous inspirent.
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </main>



    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        <div class="footer-links">

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


</div>

</body>

</html>