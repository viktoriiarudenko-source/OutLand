<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon Voyage - OutLand</title>

    <!-- POLICES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400&display=swap"
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
            background: #101514;
            color: #d8d3ca;
            font-family: 'Poppins', sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }


        /* =====================================================
           PAGE + IMAGE DE FOND
        ===================================================== */

        .voyage-page {
            position: relative;

            width: 100%;
            min-height: 100vh;

            overflow: hidden;

            background: #101514;
        }

        /*
            L'image de fond est séparée du contenu
            pour pouvoir régler son opacité sans
            rendre les textes transparents.
        */

        .voyage-page::before {
            content: "";

            position: absolute;
            inset: 0;

            background-image: url('/images/mon-voyage-bg.png');
            background-size: 100% 100%;
            background-position: top center;
            background-repeat: no-repeat;

            z-index: 0;
        }

        /*
            Léger assombrissement pour retrouver
            le rendu du Figma.
        */

        .voyage-page::after {
            content: "";

            position: absolute;
            inset: 0;

            background: rgba(5, 12, 11, 0.22);

            z-index: 1;

            pointer-events: none;
        }

        .voyage-content {
            position: relative;
            z-index: 2;
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


        /* =====================================================
           INTRO / MON VOYAGE
        ===================================================== */

        .voyage-hero {
            min-height: 650px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            padding: 100px 30px 50px;

            text-align: center;
        }

        .voyage-title {
            margin: 0;

            font-family: 'Playfair Display', serif;
            font-size: clamp(64px, 7vw, 120px);
            font-weight: 400;

            line-height: .95;

            letter-spacing: -0.035em;

            text-transform: uppercase;

            color: rgba(216, 211, 202, 0.88);
        }

        .voyage-subtitle {
            margin: 35px 0 0;

            font-size: clamp(17px, 1.6vw, 27px);
            font-weight: 300;

            line-height: 1.15;

            color: rgba(216, 211, 202, 0.82);
        }


        /* =====================================================
           CARTES
        ===================================================== */

        .journal-section {
            width: 100%;

            padding: 0 8% 170px;
        }

        .journal-cards {
            width: 100%;
            max-width: 1250px;

            margin: 0 auto;

            display: grid;
            grid-template-columns: 1fr 1fr;

            gap: 55px;
        }

        .journal-card {
            position: relative;

            height: 600px;

            overflow: hidden;

            border-radius: 38px;

            background: #bbc3c4;
        }

        .journal-card-image {
            position: absolute;

            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }

        /*
            Voile blanc/gris présent sur les cartes Figma
        */

        .journal-card::after {
            content: "";

            position: absolute;
            inset: 0;

            background: rgba(232, 233, 229, 0.20);

            z-index: 1;

            pointer-events: none;
        }

        .journal-card-content {
            position: relative;

            z-index: 2;

            width: 100%;
            height: 100%;

            display: flex;
            flex-direction: column;
            align-items: center;

            padding: 95px 25px 45px;
        }

        .journal-card-title {
            margin: 0;

            font-family: 'Playfair Display', serif;
            font-size: clamp(26px, 2.2vw, 39px);
            font-weight: 500;

            line-height: .95;

            text-align: center;

            text-transform: uppercase;

            color: #1e2020;
        }

        .journal-card-button {
            margin-top: auto;

            min-width: 205px;
            height: 48px;

            padding: 0 18px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            border: 1px solid rgba(224, 220, 211, .55);

            border-radius: 50px;

            background: rgba(29, 38, 34, .72);

            backdrop-filter: blur(4px);

            font-size: 14px;
            font-weight: 300;

            color: rgba(239, 237, 231, .92);

            transition:
                transform .2s ease,
                background .2s ease;
        }

        .journal-card-button:hover {
            transform: translateY(-2px);

            background: rgba(29, 38, 34, .88);
        }

        .button-arrow {
            font-size: 20px;
            line-height: 1;
        }


        /* =====================================================
           ÉTAPES
        ===================================================== */

        .steps-section {
            width: 100%;

            padding: 0 7% 100px;
        }

        .steps-container {
            width: 100%;
            max-width: 1300px;

            margin: 0 auto;
        }

        .step-card {
            width: 100%;

            min-height: 290px;

            padding: 45px 55px;

            display: flex;
            flex-direction: column;
            justify-content: center;

            border-radius: 38px;

            background: rgba(20, 36, 38, 0.68);

            backdrop-filter: blur(5px);
        }

        .step-title {
            margin: 0 0 18px;

            font-family: 'Playfair Display', serif;
            font-size: clamp(42px, 4.5vw, 68px);
            font-weight: 400;

            line-height: 1;

            letter-spacing: .03em;

            text-transform: uppercase;

            color: rgba(216, 211, 202, .88);
        }

        .step-description {
            max-width: 650px;

            margin: 0;

            font-size: clamp(16px, 1.5vw, 23px);
            font-weight: 300;

            line-height: 1.4;

            color: rgba(216, 211, 202, .78);
        }


        /* =====================================================
           POINTS ENTRE LES BLOCS
        ===================================================== */

        .step-dots {
            height: 130px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            gap: 8px;
        }

        .step-dot {
            width: 13px;
            height: 13px;

            border-radius: 50%;

            background: rgba(216, 211, 202, .80);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .voyage-footer {
            width: 100%;

            padding: 80px 30px 35px;

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

            .voyage-hero {
                min-height: 500px;

                padding-top: 80px;
            }

            .journal-section {
                padding-left: 6%;
                padding-right: 6%;
                padding-bottom: 120px;
            }

            .journal-cards {
                gap: 25px;
            }

            .journal-card {
                height: 470px;

                border-radius: 25px;
            }

            .journal-card-content {
                padding-top: 65px;
            }

            .journal-card-button {
                min-width: 160px;

                font-size: 12px;
            }

            .steps-section {
                padding-left: 6%;
                padding-right: 6%;
            }

            .step-card {
                min-height: 230px;

                padding: 35px;

                border-radius: 28px;
            }

            .step-dots {
                height: 100px;
            }

            .step-dot {
                width: 10px;
                height: 10px;
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

            .voyage-hero {
                min-height: 430px;
            }

            .voyage-title {
                font-size: 48px;
            }

            .voyage-subtitle {
                font-size: 14px;
            }

            .journal-cards {
                gap: 12px;
            }

            .journal-card {
                height: 360px;
            }

            .journal-card-content {
                padding: 45px 10px 25px;
            }

            .journal-card-title {
                font-size: 20px;
            }

            .journal-card-button {
                min-width: 125px;
                height: 38px;

                padding: 0 10px;

                font-size: 9px;
            }

            .step-card {
                min-height: 190px;

                padding: 28px;
            }

            .step-title {
                font-size: 31px;
            }

            .step-description {
                font-size: 13px;
            }
        }

    </style>
</head>


<body>

<div class="voyage-page">

    <div class="voyage-content">


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

        <section class="voyage-hero">

            <h1 class="voyage-title">
                MON VOYAGE
            </h1>

            <p class="voyage-subtitle">
                Mes Voyages, Mes Souvenirs, Mes<br>
                Prochaines Aventures.
            </p>

        </section>



        {{-- ================================================= --}}
        {{-- MES DEUX CARTES --}}
        {{-- ================================================= --}}

        <section class="journal-section">

            <div class="journal-cards">


                {{-- EXPÉRIENCES POSTÉES --}}

                <div class="journal-card">

                    <img
                        class="journal-card-image"
                        src="/images/experiences-postees.png"
                        alt="Expériences postées"
                    >

                    <div class="journal-card-content">

                        <h2 class="journal-card-title">
                            EXPÉRIENCES<br>
                            POSTÉES
                        </h2>

                        <a
                            href="/my-experiences"
                            class="journal-card-button"
                        >
                            <span>Mon journal</span>
                            <span class="button-arrow">→</span>
                        </a>

                    </div>

                </div>



                {{-- MES ENREGISTREMENTS --}}

                <div class="journal-card">

                    <img
                        class="journal-card-image"
                        src="/images/enregistrements.png"
                        alt="Mes enregistrements"
                    >

                    <div class="journal-card-content">

                        <h2 class="journal-card-title">
                            MES<br>
                            ENREGISTREMENTS
                        </h2>

                        <a
                            href="/saved-experiences"
                            class="journal-card-button"
                        >
                            <span>Mes inspirations</span>
                            <span class="button-arrow">→</span>
                        </a>

                    </div>

                </div>

            </div>

        </section>



        {{-- ================================================= --}}
        {{-- ÉTAPES --}}
        {{-- ================================================= --}}

        <section class="steps-section">

            <div class="steps-container">


                {{-- 01 --}}

                <div class="step-card">

                    <h2 class="step-title">
                        01 - EXPLOREZ
                    </h2>

                    <p class="step-description">
                        Découvrez Les Expériences Et<br>
                        Recommandations De La<br>
                        Communauté.
                    </p>

                </div>



                {{-- POINTS --}}

                <div class="step-dots">

                    <span class="step-dot"></span>
                    <span class="step-dot"></span>
                    <span class="step-dot"></span>
                    <span class="step-dot"></span>
                    <span class="step-dot"></span>

                </div>



                {{-- 02 --}}

                <div class="step-card">

                    <h2 class="step-title">
                        02 - ENREGISTREZ
                    </h2>

                    <p class="step-description">
                        Ajoutez À Votre Journal Les Lieux Et<br>
                        Expériences Qui Vous Inspirent En<br>
                        Enregistrant Vos Posts Préférés.
                    </p>

                </div>



                {{-- POINTS --}}

                <div class="step-dots">

                    <span class="step-dot"></span>
                    <span class="step-dot"></span>
                    <span class="step-dot"></span>
                    <span class="step-dot"></span>
                    <span class="step-dot"></span>

                </div>



                {{-- 03 --}}

                <div class="step-card">

                    <h2 class="step-title">
                        03 - VOYAGEZ
                    </h2>

                    <p class="step-description">
                        Construisez Vos Prochaines<br>
                        Aventures Et Partagez Ensuite Vos<br>
                        Découvertes.
                    </p>

                </div>

            </div>

        </section>



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

    </div>

</div>

</body>

</html>