<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $destination->name }} | OutLand</title>

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
            color: #E0D7D4;
            font-family: 'Poppins', sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font-family: 'Poppins', sans-serif;
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

            color: rgba(224, 215, 212, 0.90);

            font-size: 16px;
            font-weight: 300;

            cursor: pointer;
        }

        .logout-button:hover {
            opacity: .7;
        }

        .login-link {
            margin-left: auto;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .destination-hero {
            position: relative;

            width: 100%;
            height: 520px;

            overflow: hidden;

            background: #182528;
        }

        .destination-hero img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;
        }

        .destination-hero::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    to bottom,
                    rgba(0, 0, 0, .30) 0%,
                    rgba(0, 0, 0, .05) 45%,
                    rgba(0, 0, 0, .55) 100%
                );
        }

        .destination-hero-overlay {
            position: absolute;

            z-index: 3;

            left: 7%;
            bottom: 65px;
        }

        .destination-hero-overlay h1 {
            margin: 0;

            font-family: 'Playfair Display', serif;

            font-size: clamp(52px, 7vw, 82px);
            font-weight: 400;

            line-height: 1;

            color: #F0E8E5;
        }


        /* =====================================================
           CONTENU
        ===================================================== */

        .destination-content {
            width: 100%;

            padding: 55px 7% 120px;

            background: #511f25;
        }


        /* =====================================================
           DESCRIPTION
        ===================================================== */

        .destination-description {
            width: min(850px, 100%);

            margin: 0 auto 40px;

            text-align: center;
        }

        .destination-description p {
            margin: 0;

            font-size: 15px;
            font-weight: 300;

            line-height: 1.8;

            color: rgba(240, 232, 229, .82);
        }


        /* =====================================================
           NOTE MOYENNE
        ===================================================== */

        .average-rating {
            margin: 0 auto 35px;

            text-align: center;
        }

        .average-label {
            display: block;

            margin-bottom: 6px;

            font-size: 11px;
            font-weight: 300;

            text-transform: uppercase;
            letter-spacing: .15em;

            color: rgba(240, 232, 229, .55);
        }

        .average-value {
            font-family: 'Playfair Display', serif;

            font-size: 23px;

            color: #F0E8E5;
        }


        /* =====================================================
           AJOUTER UNE EXPERIENCE
        ===================================================== */

        .add-experience-wrapper {
            display: flex;
            justify-content: center;

            margin-bottom: 80px;
        }

        .add-experience-button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 13px 30px;

            border-radius: 30px;

            background: #176b65;

            color: #F0E8E5;

            font-size: 13px;
            font-weight: 400;

            transition: .2s ease;
        }

        .add-experience-button:hover {
            transform: translateY(-2px);

            background: #1d7a73;
        }


        /* =====================================================
           TITRE EXPERIENCES
        ===================================================== */

        .comments-header {
            width: min(1050px, 100%);

            margin: 0 auto 40px;

            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            gap: 20px;

            border-bottom: 1px solid rgba(240, 232, 229, .25);

            padding-bottom: 18px;
        }

        .comments-title {
            margin: 0;

            font-family: 'Playfair Display', serif;

            font-size: 42px;
            font-weight: 400;

            color: #F0E8E5;
        }

        .comments-count {
            margin-bottom: 5px;

            font-size: 11px;
            font-weight: 300;

            text-transform: uppercase;
            letter-spacing: .12em;

            color: rgba(240, 232, 229, .55);
        }


        /* =====================================================
           LISTE EXPERIENCES
        ===================================================== */

        .experiences-list {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 35px;
        }


        /* =====================================================
           CARTE
        ===================================================== */

        .experience-card {
            position: relative;

            width: min(1050px, 100%);
            min-height: 300px;

            margin: 0 auto;

            padding: 32px;

            display: grid;

            grid-template-columns: 230px 1fr;

            gap: 42px;

            background: #c6b3b5;

            color: #34171a;
        }

        .experience-card.no-photo {
            display: block;

            min-height: 250px;

            padding-top: 70px;
        }


        /* =====================================================
           PHOTO
        ===================================================== */

        .experience-image {
            width: 230px;
            height: 220px;

            overflow: hidden;
        }

        .experience-image img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;
        }


        /* =====================================================
           CONTENU EXPERIENCE
        ===================================================== */

        .experience-content {
            min-width: 0;

            display: flex;
            flex-direction: column;
        }

        .experience-title {
            margin: 32px 0 14px;

            font-family: 'Playfair Display', serif;

            font-size: 31px;
            font-weight: 400;

            line-height: 1.15;

            color: #34171a;
        }

        .no-photo .experience-title {
            margin-top: 0;
        }

        .experience-text {
            margin: 0 0 25px;

            font-size: 13px;
            font-weight: 300;

            line-height: 1.75;

            color: rgba(52, 23, 26, .83);
        }


        /* =====================================================
           AUTEUR + NOTE
        ===================================================== */

        .experience-meta {
            position: absolute;

            top: 25px;
            right: 30px;

            display: flex;
            align-items: center;

            gap: 14px;
        }

        .author-icon {
            width: 27px;
            height: 27px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(52, 23, 26, .55);
            border-radius: 50%;

            font-size: 11px;
        }

        .meta-text {
            text-align: right;
        }

        .author-name {
            margin-bottom: 2px;

            font-size: 11px;
            font-weight: 400;
        }

        .rating {
            font-size: 12px;

            letter-spacing: 1px;
        }

        .rating-number {
            margin-left: 5px;

            font-size: 10px;

            letter-spacing: 0;
        }


        /* =====================================================
           ACTIONS
        ===================================================== */

        .experience-actions {
            margin-top: auto;

            display: flex;
            align-items: center;
            justify-content: flex-end;

            gap: 10px;

            flex-wrap: wrap;
        }

        .experience-actions form {
            margin: 0;
        }

        .action-button,
        .action-link {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-height: 34px;

            padding: 8px 15px;

            border: 1px solid rgba(52, 23, 26, .50);
            border-radius: 20px;

            background: transparent;

            color: #34171a;

            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            font-weight: 400;

            cursor: pointer;

            transition: .2s ease;
        }

        .action-button:hover,
        .action-link:hover {
            background: #34171a;

            color: #c6b3b5;
        }

        .save-button {
            border-color: #176b65;

            color: #176b65;
        }

        .save-button:hover {
            background: #176b65;

            color: white;
        }

        .delete-button {
            border-color: rgba(104, 28, 36, .7);

            color: #681c24;
        }

        .delete-button:hover {
            background: #681c24;

            color: white;
        }


        /* =====================================================
           AUCUNE EXPERIENCE
        ===================================================== */

        .empty-comments {
            width: min(1050px, 100%);

            margin: 0 auto;

            padding: 65px 30px;

            border: 1px solid rgba(240, 232, 229, .15);

            text-align: center;
        }

        .empty-comments p {
            margin: 0;

            font-family: 'Playfair Display', serif;

            font-size: 24px;

            color: rgba(240, 232, 229, .75);
        }


        /* =====================================================
           RETOUR
        ===================================================== */

        .back-wrapper {
            width: min(1050px, 100%);

            margin: 60px auto 0;
        }

        .back-to-destinations {
            display: inline-block;

            font-size: 12px;
            font-weight: 300;

            color: rgba(240, 232, 229, .70);
        }

        .back-to-destinations:hover {
            color: #F0E8E5;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .page-footer {
            width: 100%;

            padding: 30px 20px;

            background: #511f25;

            border-top: 1px solid rgba(224, 215, 212, .15);

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

        .footer-links a {
            color: rgba(224, 215, 212, .70);
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

            .destination-hero-overlay {
                left: 25px;
                bottom: 40px;
            }

            .destination-hero-overlay h1 {
                font-size: 48px;
            }

            .destination-content {
                padding: 45px 20px 80px;
            }

            .comments-title {
                font-size: 34px;
            }

            .experience-card {
                display: flex;
                flex-direction: column;

                padding: 20px;

                gap: 20px;
            }

            .experience-image {
                width: 100%;
                height: 260px;
            }

            .experience-meta {
                position: static;

                justify-content: flex-end;
            }

            .experience-title {
                margin-top: 0;
            }

            .experience-actions {
                justify-content: flex-start;
            }

            .experience-card.no-photo {
                padding-top: 20px;
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
                    class="login-link"
                >
                    Me Connecter
                </a>

            @endauth

        </nav>

    </header>



    {{-- ================================================= --}}
    {{-- HERO --}}
    {{-- ================================================= --}}

    <section class="destination-hero">

        @if ($destination->image)

            <img
                src="{{ asset('storage/' . $destination->image) }}"
                alt="{{ $destination->name }}"
            >

        @endif


        <div class="destination-hero-overlay">

            <h1>
                {{ $destination->name }}
            </h1>

        </div>

    </section>



    {{-- ================================================= --}}
    {{-- CONTENU --}}
    {{-- ================================================= --}}

    <main class="destination-content">


        {{-- DESCRIPTION --}}

        @if ($destination->description)

            <div class="destination-description">

                <p>
                    {{ $destination->description }}
                </p>

            </div>

        @endif



        {{-- NOTE MOYENNE --}}

        @if ($averageRating)

            <div class="average-rating">

                <span class="average-label">
                    Note moyenne
                </span>

                <span class="average-value">
                    ★ {{ number_format($averageRating, 1) }}/5
                </span>

            </div>

        @endif



        {{-- AJOUTER UNE EXPERIENCE --}}

        <div class="add-experience-wrapper">

            @auth

                <a
                    class="add-experience-button"
                    href="/destinations/{{ $destination->id }}/experiences/create"
                >
                    + Ajouter mon expérience
                </a>

            @else

                <a
                    class="add-experience-button"
                    href="{{ route('login') }}"
                >
                    + Ajouter mon expérience
                </a>

            @endauth

        </div>



        {{-- TITRE EXPERIENCES --}}

        <div class="comments-header">

            <h2 class="comments-title">
                Expériences
            </h2>

            <span class="comments-count">

                {{ $experiences->count() }}

                {{ $experiences->count() > 1 ? 'expériences' : 'expérience' }}

            </span>

        </div>



        {{-- ================================================= --}}
        {{-- EXPERIENCES --}}
        {{-- ================================================= --}}

        @if ($experiences->isEmpty())

            <div class="empty-comments">

                <p>
                    Aucune expérience pour le moment.
                </p>

            </div>

        @else

            <div class="experiences-list">

                @foreach ($experiences as $experience)

                    <article
                        class="experience-card {{ !$experience->photo ? 'no-photo' : '' }}"
                    >


                        {{-- PHOTO --}}

                        @if ($experience->photo)

                            <div class="experience-image">

                                <img
                                    src="{{ asset('storage/' . $experience->photo) }}"
                                    alt="{{ $experience->title }}"
                                >

                            </div>

                        @endif



                        {{-- AUTEUR + NOTE --}}

                        <div class="experience-meta">

                            <div class="author-icon">
                                ♙
                            </div>


                            <div class="meta-text">

                                <div class="author-name">
                                    {{ $experience->user->name ?? 'Utilisateur' }}
                                </div>


                                @if ($experience->rating)

                                    <div class="rating">

                                        @if ($experience->rating >= 1)
                                            ★
                                        @else
                                            ☆
                                        @endif

                                        @if ($experience->rating >= 2)
                                            ★
                                        @else
                                            ☆
                                        @endif

                                        @if ($experience->rating >= 3)
                                            ★
                                        @else
                                            ☆
                                        @endif

                                        @if ($experience->rating >= 4)
                                            ★
                                        @else
                                            ☆
                                        @endif

                                        @if ($experience->rating >= 5)
                                            ★
                                        @else
                                            ☆
                                        @endif

                                        <span class="rating-number">
                                            {{ $experience->rating }}/5
                                        </span>

                                    </div>

                                @endif

                            </div>

                        </div>



                        {{-- CONTENU --}}

                        <div class="experience-content">

                            <h3 class="experience-title">
                                {{ $experience->title }}
                            </h3>


                            <p class="experience-text">
                                {{ $experience->content }}
                            </p>



                            {{-- ACTIONS --}}

                            <div class="experience-actions">

                                @auth

                                    @php

                                        $isSaved = $experience
                                            ->savedExperiences
                                            ->where('user_id', auth()->id())
                                            ->isNotEmpty();

                                    @endphp



                                    {{-- ENREGISTRER / RETIRER --}}

                                    @if ($isSaved)

                                        <form
                                            action="/experiences/{{ $experience->id }}/save"
                                            method="POST"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action-button save-button"
                                            >
                                                ♥ Enregistré — Retirer
                                            </button>

                                        </form>

                                    @else

                                        <form
                                            action="/experiences/{{ $experience->id }}/save"
                                            method="POST"
                                        >

                                            @csrf

                                            <button
                                                type="submit"
                                                class="action-button save-button"
                                            >
                                                ♡ Enregistrer
                                            </button>

                                        </form>

                                    @endif



                                    {{-- MODIFIER : UNIQUEMENT L'AUTEUR --}}

                                    @if ($experience->user_id === auth()->id())

                                        <a
                                            href="/experiences/{{ $experience->id }}/edit"
                                            class="action-link"
                                        >
                                            Modifier
                                        </a>

                                    @endif



                                    {{-- SUPPRIMER : AUTEUR OU ADMIN --}}

                                    @if (
                                        $experience->user_id === auth()->id()
                                        || auth()->user()->is_admin
                                    )

                                        <form
                                            action="/experiences/{{ $experience->id }}"
                                            method="POST"
                                            onsubmit="return confirm('Voulez-vous vraiment supprimer cette expérience ?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action-button delete-button"
                                            >
                                                Supprimer
                                            </button>

                                        </form>

                                    @endif


                                @endauth

                            </div>

                        </div>


                    </article>

                @endforeach

            </div>

        @endif



        {{-- RETOUR --}}

        <div class="back-wrapper">

            <a
                class="back-to-destinations"
                href="/destinations"
            >
                ← Retour aux destinations
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