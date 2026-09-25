<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mes enregistrements - {{ $destination->name }} | OutLand</title>


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
            background: #511f25;
            color: #111111;
            font-family: 'Poppins', sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .page-header {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 20;

            width: calc(100% - 70px);
            height: 90px;
            margin: 0 35px;

            display: flex;
            align-items: center;

            border-bottom: 1px solid rgba(224, 215, 212, 0.55);
        }

        .logo {
            margin-right: 70px;

            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 400;

            color: #E0D7D4;
        }

        .navigation {
            width: 100%;

            display: flex;
            align-items: center;
            gap: 60px;
        }

        .navigation a {
            font-size: 16px;
            font-weight: 300;

            color: rgba(224, 215, 212, 0.90);
        }

        .navigation a:hover {
            opacity: .7;
        }

        .logout-form {
            margin-left: auto;
        }

        .logout-button {
            padding: 0;

            border: none;
            background: transparent;

            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 300;

            color: rgba(224, 215, 212, 0.90);

            cursor: pointer;
        }


        /* =====================================================
           HERO DESTINATION
        ===================================================== */

        .destination-hero {
            position: relative;

            width: 100%;
            height: 520px;

            overflow: hidden;

            background: #182528;
        }

        .destination-hero img {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .destination-hero::after {
            content: "";

            position: absolute;
            inset: 0;

            background: linear-gradient(
                to right,
                rgba(0, 0, 0, 0.30),
                rgba(0, 0, 0, 0.02)
            );

            pointer-events: none;
        }

        .destination-heading {
            position: absolute;

            left: 8%;
            top: 50%;

            transform: translateY(-35%);

            z-index: 5;

            color: white;
        }

        .destination-country {
            margin: 0 0 5px;

            font-size: 22px;
            font-weight: 300;
        }

        .destination-name {
            margin: 0;

            font-size: clamp(42px, 5vw, 72px);
            font-weight: 400;
            line-height: 1.1;
        }


        /* =====================================================
           SECTION EXPERIENCES ENREGISTRÉES
        ===================================================== */

        .experiences-section {
            min-height: 600px;

            padding: 55px 7% 120px;

            background: #511f25;
        }


        /* =====================================================
           CARTE EXPERIENCE
        ===================================================== */

        .experience-card {
            position: relative;

            width: min(1050px, 100%);
            min-height: 300px;

            margin: 0 auto 28px;

            padding: 32px;

            display: grid;

            grid-template-columns: 230px 1fr;
            gap: 42px;

            align-items: center;

            background: #c6b3b5;
        }


        /* =====================================================
           CARTE PAIRE = IMAGE À DROITE
        ===================================================== */

        .experience-card.card-even {
            grid-template-columns: 1fr 230px;
        }

        .experience-card.card-even .experience-image-wrapper {
            order: 2;
        }

        .experience-card.card-even .experience-content {
            order: 1;
            text-align: right;
        }


        /* =====================================================
           IMAGE
        ===================================================== */

        .experience-image-wrapper {
            width: 230px;
            height: 220px;

            overflow: hidden;
        }

        .experience-image {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .no-image {
            width: 100%;
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255, 255, 255, 0.15);

            font-size: 13px;
        }


        /* =====================================================
           CONTENU
        ===================================================== */

        .experience-content {
            min-width: 0;

            padding-right: 190px;
        }

        .experience-card.card-even .experience-content {
            padding-right: 0;
            padding-left: 190px;
        }

        .experience-title {
            margin: 0 0 15px;

            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: 400;

            color: #111111;
        }

        .experience-text {
            margin: 0;

            font-size: 13px;
            font-weight: 400;
            line-height: 1.55;

            color: #111111;
        }


        /* =====================================================
           AUTEUR + PROFIL + NOTE
        ===================================================== */

        .experience-author {
            position: absolute;

            top: 25px;
            right: 28px;

            z-index: 5;

            display: flex;
            flex-direction: column;
            align-items: flex-end;

            color: #111111;
        }

        .experience-card.card-even .experience-author {
            right: auto;
            left: 28px;

            align-items: flex-start;
        }

        .author-line {
            display: flex;
            align-items: center;

            gap: 12px;
        }

        .experience-card.card-even .author-line {
            flex-direction: row-reverse;
        }

        .author-name {
            font-size: 17px;
            font-weight: 400;
        }


        /* =====================================================
           ICONE PROFIL
        ===================================================== */

        .profile-icon {
            position: relative;

            width: 45px;
            height: 45px;

            flex-shrink: 0;

            border: 3px solid #111111;
            border-radius: 50%;
        }

        .profile-head {
            position: absolute;

            width: 12px;
            height: 12px;

            top: 7px;
            left: 50%;

            transform: translateX(-50%);

            background: #111111;

            border-radius: 50%;
        }

        .profile-body {
            position: absolute;

            width: 23px;
            height: 13px;

            bottom: 6px;
            left: 50%;

            transform: translateX(-50%);

            background: #111111;

            border-radius: 12px 12px 8px 8px;
        }


        /* =====================================================
           ETOILES
        ===================================================== */

        .author-rating {
            display: flex;

            margin-top: 12px;

            gap: 2px;

            font-size: 27px;
            line-height: 1;
        }

        .star {
            color: #111111;
        }


        /* =====================================================
           RETIRER / VOIR LA DESTINATION
        ===================================================== */

        .experience-actions {
            position: absolute;

            right: 28px;
            bottom: 22px;

            display: flex;
            align-items: center;

            gap: 10px;
        }

        .experience-card.card-even .experience-actions {
            right: auto;
            left: 28px;
        }

        .remove-form {
            margin: 0;
        }

        .remove-button,
        .destination-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 75px;

            padding: 6px 12px;

            border: 1px solid rgba(0, 0, 0, 0.45);
            border-radius: 20px;

            background: transparent;

            font-family: 'Poppins', sans-serif;
            font-size: 10px;

            color: #111111;

            cursor: pointer;

            transition: .2s ease;
        }

        .remove-button:hover,
        .destination-button:hover {
            background: #182528;
            color: white;
        }


        /* =====================================================
           RETOUR
        ===================================================== */

        .back-wrapper {
            width: min(1050px, 100%);

            margin: 55px auto 0;
        }

        .back-button {
            font-size: 13px;
            font-weight: 300;

            color: #E0D7D4;
        }

        .back-button:hover {
            text-decoration: underline;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .page-footer {
            padding: 30px 20px;

            background: #511f25;

            text-align: center;

            color: rgba(224, 215, 212, .70);

            font-size: 10px;
            font-weight: 300;
        }

        .footer-links {
            display: flex;
            justify-content: center;

            gap: 6px;

            flex-wrap: wrap;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 750px) {

            .page-header {
                width: calc(100% - 30px);
                height: 65px;

                margin: 0 15px;
            }

            .logo {
                margin-right: 25px;
                font-size: 21px;
            }

            .navigation {
                gap: 20px;
            }

            .navigation a,
            .logout-button {
                font-size: 11px;
            }

            .destination-hero {
                height: 360px;
            }

            .destination-heading {
                left: 7%;
            }

            .destination-country {
                font-size: 16px;
            }

            .destination-name {
                font-size: 40px;
            }

            .experiences-section {
                padding: 35px 20px 80px;
            }

            .experience-card,
            .experience-card.card-even {
                display: flex;
                flex-direction: column;

                padding: 20px;
            }

            .experience-image-wrapper {
                width: 100%;
                height: 260px;

                order: initial !important;
            }

            .experience-content,
            .experience-card.card-even .experience-content {
                width: 100%;

                padding: 0;

                order: initial;

                text-align: left;
            }

            .experience-author,
            .experience-card.card-even .experience-author {
                position: static;

                width: 100%;

                margin-top: 10px;

                align-items: flex-start;
            }

            .experience-card.card-even .author-line {
                flex-direction: row;
            }

            .experience-actions,
            .experience-card.card-even .experience-actions {
                position: static;

                width: 100%;

                margin-top: 20px;

                justify-content: flex-start;
            }
        }

    </style>

</head>


<body>


    {{-- ================================================= --}}
    {{-- HEADER --}}
    {{-- ================================================= --}}

    <header class="page-header">

        <a href="/" class="logo">
            OutLand
        </a>

        <nav class="navigation">

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
    {{-- GRANDE IMAGE DESTINATION --}}
    {{-- ================================================= --}}

    <section class="destination-hero">

        @if ($destination->image)

            <img
                src="{{ asset('storage/' . $destination->image) }}"
                alt="{{ $destination->name }}"
            >

        @endif


        <div class="destination-heading">

            <p class="destination-country">
                Destination
            </p>

            <h1 class="destination-name">
                {{ $destination->name }}
            </h1>

        </div>

    </section>



    {{-- ================================================= --}}
    {{-- EXPERIENCES ENREGISTRÉES --}}
    {{-- ================================================= --}}

    <main class="experiences-section">


        {{-- LISTE DES EXPERIENCES ENREGISTRÉES --}}

        @foreach ($savedExperiences as $savedExperience)

            @php
                $experience = $savedExperience->experience;
            @endphp


            <article
                class="experience-card {{ $loop->even ? 'card-even' : 'card-odd' }}"
            >


                {{-- ========================================= --}}
                {{-- AUTEUR + PROFIL + NOTE --}}
                {{-- ========================================= --}}

                <div class="experience-author">

                    <div class="author-line">

                        <span class="author-name">
                            @<span>{{ $experience->user->name ?? 'Utilisateur' }}</span>
                        </span>

                        <div class="profile-icon">

                            <div class="profile-head"></div>

                            <div class="profile-body"></div>

                        </div>

                    </div>


                    {{-- ETOILES --}}

                    <div class="author-rating">

                        @for ($i = 1; $i <= 5; $i++)

                            <span class="star">

                                @if ($i <= ($experience->rating ?? 0))
                                    ★
                                @else
                                    ☆
                                @endif

                            </span>

                        @endfor

                    </div>

                </div>



                {{-- ========================================= --}}
                {{-- PHOTO --}}
                {{-- ========================================= --}}

                <div class="experience-image-wrapper">

                    @if ($experience->photo)

                        <img
                            src="{{ asset('storage/' . $experience->photo) }}"
                            alt="{{ $experience->title }}"
                            class="experience-image"
                        >

                    @else

                        <div class="no-image">
                            Aucune photo
                        </div>

                    @endif

                </div>



                {{-- ========================================= --}}
                {{-- CONTENU --}}
                {{-- ========================================= --}}

                <div class="experience-content">

                    <h2 class="experience-title">
                        {{ $experience->title }}
                    </h2>

                    <p class="experience-text">
                        {{ $experience->content }}
                    </p>

                </div>



                {{-- ========================================= --}}
                {{-- RETIRER / VOIR LA DESTINATION --}}
                {{-- ========================================= --}}

                <div class="experience-actions">

                    <form
                        action="/experiences/{{ $experience->id }}/save"
                        method="POST"
                        class="remove-form"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="remove-button"
                        >
                            Retirer
                        </button>

                    </form>


                    <a
                        href="/destinations/{{ $experience->destination->id }}"
                        class="destination-button"
                    >
                        Voir la destination
                    </a>

                </div>


            </article>

        @endforeach



        {{-- ================================================= --}}
        {{-- RETOUR --}}
        {{-- ================================================= --}}

        <div class="back-wrapper">

            <a
                href="/saved-experiences"
                class="back-button"
            >
                ← Retour aux pays
            </a>

        </div>


    </main>



    {{-- ================================================= --}}
    {{-- FOOTER --}}
    {{-- ================================================= --}}

    <footer class="page-footer">

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