<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ajouter un commentaire | OutLand</title>


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


        /* =====================================================
           HEADER
        ===================================================== */

        .page-header {
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
           PAGE
        ===================================================== */

        .experience-create-page {
            width: min(850px, 88%);

            min-height: calc(100vh - 180px);

            margin: 0 auto;

            padding: 75px 0 100px;
        }


        /* =====================================================
           TITRE
        ===================================================== */

        .experience-create-title {
            margin: 0 0 55px;

            font-family: 'Playfair Display', serif;
            font-size: clamp(48px, 6vw, 75px);
            font-weight: 400;
            line-height: 1.05;

            color: #E0D7D4;
        }


        /* =====================================================
           FORMULAIRE
        ===================================================== */

        .experience-form {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 32px;
        }

        .experience-form-group {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 10px;
        }

        .experience-form-group label {
            font-size: 14px;
            font-weight: 300;

            color: #E0D7D4;
        }


        /* =====================================================
           INPUTS
        ===================================================== */

        .experience-form-group input[type="text"],
        .experience-form-group textarea,
        .experience-form-group select {
            width: 100%;

            padding: 15px 18px;

            border: 1px solid rgba(224, 215, 212, 0.70);
            border-radius: 0;

            background: transparent;

            color: #E0D7D4;

            font-family: 'Poppins', sans-serif;
            font-size: 14px;

            outline: none;
        }

        .experience-form-group textarea {
            min-height: 150px;

            resize: vertical;
        }

        .experience-form-group input[type="text"]:focus,
        .experience-form-group textarea:focus,
        .experience-form-group select:focus {
            border-color: #E0D7D4;

            background: rgba(255, 255, 255, 0.03);
        }


        /* =====================================================
           SELECT
        ===================================================== */

        .experience-form-group select {
            cursor: pointer;
        }

        .experience-form-group select option {
            background: #511f25;
            color: #E0D7D4;
        }


        /* =====================================================
           FICHIER / PHOTO
        ===================================================== */

        .experience-form-group input[type="file"] {
            width: 100%;

            padding: 13px;

            border: 1px solid rgba(224, 215, 212, 0.70);

            background: transparent;

            color: #E0D7D4;

            font-family: 'Poppins', sans-serif;
            font-size: 13px;
        }

        .experience-form-group input[type="file"]::file-selector-button {
            margin-right: 15px;

            padding: 8px 15px;

            border: none;

            background: #E0D7D4;

            color: #511f25;

            font-family: 'Poppins', sans-serif;

            cursor: pointer;
        }


        /* =====================================================
           PUBLIER
        ===================================================== */

        .publish-experience-button {
            align-self: flex-start;

            min-width: 145px;

            margin-top: 10px;

            padding: 12px 30px;

            border: 1px solid #E0D7D4;
            border-radius: 30px;

            background: transparent;

            color: #E0D7D4;

            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 400;

            cursor: pointer;

            transition: .2s ease;
        }

        .publish-experience-button:hover {
            background: #E0D7D4;
            color: #511f25;
        }


        /* =====================================================
           RETOUR
        ===================================================== */

        .back-to-destination {
            display: inline-block;

            margin-top: 45px;

            font-size: 13px;
            font-weight: 300;

            color: #E0D7D4;
        }

        .back-to-destination:hover {
            text-decoration: underline;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .page-footer {
            width: 100%;

            padding: 30px 20px;

            background: #511f25;

            border-top: 1px solid rgba(224, 215, 212, 0.15);

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

            .experience-create-page {
                width: 90%;

                padding: 55px 0 75px;
            }

            .experience-create-title {
                margin-bottom: 40px;

                font-size: 45px;
            }

        }

    </style>

</head>


<body>


    {{-- ================================================= --}}
    {{-- HEADER --}}
    {{-- ================================================= --}}

    <header class="page-header">

        <a
            href="/"
            class="logo"
        >
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
    {{-- PAGE AJOUTER UN COMMENTAIRE --}}
    {{-- ================================================= --}}

    <main class="experience-create-page">


        <h1 class="experience-create-title">
            Ajouter un commentaire
        </h1>



        <form
            class="experience-form"
            action="/destinations/{{ $destinationId }}/experiences"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf



            {{-- TITRE --}}

            <div class="experience-form-group">

                <label for="title">
                    Titre
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    required
                >

            </div>



            {{-- COMMENTAIRE --}}

            <div class="experience-form-group">

                <label for="content">
                    Votre commentaire
                </label>

                <textarea
                    id="content"
                    name="content"
                    rows="6"
                    required
                ></textarea>

            </div>



            {{-- NOTE --}}

            <div class="experience-form-group">

                <label for="rating">
                    Note
                </label>

                <select
                    id="rating"
                    name="rating"
                    required
                >

                    <option value="">
                        Choisir une note
                    </option>

                    <option value="1">
                        ★☆☆☆☆ - 1/5
                    </option>

                    <option value="2">
                        ★★☆☆☆ - 2/5
                    </option>

                    <option value="3">
                        ★★★☆☆ - 3/5
                    </option>

                    <option value="4">
                        ★★★★☆ - 4/5
                    </option>

                    <option value="5">
                        ★★★★★ - 5/5
                    </option>

                </select>

            </div>



            {{-- PHOTO --}}

            <div class="experience-form-group">

                <label for="photo">
                    Ajouter une photo
                </label>

                <input
                    type="file"
                    id="photo"
                    name="photo"
                    accept="image/*"
                >

            </div>



            {{-- PUBLIER --}}

            <button
                type="submit"
                class="publish-experience-button"
            >
                Publier
            </button>


        </form>



        {{-- RETOUR --}}

        <a
            href="/destinations/{{ $destinationId }}"
            class="back-to-destination"
        >
            ← Retour au pays
        </a>


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