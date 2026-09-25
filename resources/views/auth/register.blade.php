<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inscription | OutLand</title>


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
            min-height: 100vh;

            background: #182528;

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

        .login-nav {
            margin-left: auto;
        }


        /* =====================================================
           PAGE INSCRIPTION
        ===================================================== */

        .register-page {
            width: 100%;

            min-height: calc(100vh - 180px);

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 70px 25px 100px;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .register-container {
            width: 100%;
            max-width: 520px;
        }


        /* =====================================================
           TITRES
        ===================================================== */

        .register-title {
            margin: 0;

            font-family: 'Playfair Display', serif;

            font-size: clamp(55px, 7vw, 78px);
            font-weight: 400;

            line-height: 1;

            text-align: center;

            color: #E0D7D4;
        }

        .register-subtitle {
            margin: 17px 0 48px;

            font-size: 14px;
            font-weight: 300;

            text-align: center;

            color: rgba(224, 215, 212, 0.70);
        }


        /* =====================================================
           FORMULAIRE
        ===================================================== */

        .register-form {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 28px;
        }

        .register-form-group {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 9px;
        }

        .register-label {
            font-family: 'Poppins', sans-serif !important;

            font-size: 13px !important;
            font-weight: 300 !important;

            color: #E0D7D4 !important;
        }


        /* =====================================================
           INPUTS
        ===================================================== */

        .register-input {
            width: 100% !important;

            padding: 14px 16px !important;

            border: 1px solid rgba(224, 215, 212, 0.65) !important;
            border-radius: 0 !important;

            background: transparent !important;

            box-shadow: none !important;

            color: #E0D7D4 !important;

            font-family: 'Poppins', sans-serif !important;
            font-size: 14px !important;

            outline: none !important;
        }

        .register-input:focus {
            border-color: #E0D7D4 !important;

            box-shadow: none !important;

            background: rgba(255, 255, 255, 0.03) !important;
        }


        /* =====================================================
           ERREURS
        ===================================================== */

        .register-error {
            margin-top: 5px !important;

            font-family: 'Poppins', sans-serif !important;

            font-size: 12px !important;
        }


        /* =====================================================
           ACTIONS
        ===================================================== */

        .register-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 25px;

            margin-top: 5px;
        }

        .already-registered {
            font-size: 12px;
            font-weight: 300;

            color: rgba(224, 215, 212, 0.70);

            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .already-registered:hover {
            color: #E0D7D4;
        }


        /* =====================================================
           BOUTON INSCRIPTION
        ===================================================== */

        .register-button {
            min-width: 135px;

            padding: 12px 28px;

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

        .register-button:hover {
            background: #E0D7D4;

            color: #182528;
        }


        /* =====================================================
           CONNEXION
        ===================================================== */

        .login-area {
            margin-top: 55px;

            padding-top: 28px;

            border-top: 1px solid rgba(224, 215, 212, 0.18);

            text-align: center;
        }

        .login-area p {
            margin: 0 0 12px;

            font-size: 12px;
            font-weight: 300;

            color: rgba(224, 215, 212, 0.65);
        }

        .login-link {
            font-family: 'Playfair Display', serif;

            font-size: 19px;

            color: #E0D7D4;
        }

        .login-link:hover {
            opacity: .7;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .page-footer {
            width: 100%;

            padding: 30px 20px;

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

            .navigation a {
                font-size: 11px;
            }

            .register-page {
                min-height: calc(100vh - 130px);

                padding: 55px 25px 75px;
            }

            .register-title {
                font-size: 52px;
            }

            .register-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .register-button {
                width: 100%;
            }

            .already-registered {
                text-align: center;
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

            <a href="{{ route('login') }}">
                Mon Voyage
            </a>

            <a href="/destinations">
                Explorer
            </a>

            <a
                href="{{ route('login') }}"
                class="login-nav"
            >
                Me Connecter
            </a>

        </nav>

    </header>



    {{-- ================================================= --}}
    {{-- INSCRIPTION --}}
    {{-- ================================================= --}}

    <main class="register-page">

        <div class="register-container">


            <h1 class="register-title">
                Inscription
            </h1>


            <p class="register-subtitle">
                Créez votre compte OutLand
            </p>



            {{-- FORMULAIRE --}}

            <form
                method="POST"
                action="{{ route('register') }}"
                class="register-form"
            >

                @csrf



                {{-- NOM --}}

                <div class="register-form-group">

                    <x-input-label
                        for="name"
                        :value="__('Nom')"
                        class="register-label"
                    />


                    <x-text-input
                        id="name"
                        class="register-input"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                    />


                    <x-input-error
                        :messages="$errors->get('name')"
                        class="register-error"
                    />

                </div>



                {{-- EMAIL --}}

                <div class="register-form-group">

                    <x-input-label
                        for="email"
                        :value="__('Email')"
                        class="register-label"
                    />


                    <x-text-input
                        id="email"
                        class="register-input"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="username"
                    />


                    <x-input-error
                        :messages="$errors->get('email')"
                        class="register-error"
                    />

                </div>



                {{-- MOT DE PASSE --}}

                <div class="register-form-group">

                    <x-input-label
                        for="password"
                        :value="__('Mot de passe')"
                        class="register-label"
                    />


                    <x-text-input
                        id="password"
                        class="register-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                    />


                    <x-input-error
                        :messages="$errors->get('password')"
                        class="register-error"
                    />

                </div>



                {{-- CONFIRMATION MOT DE PASSE --}}

                <div class="register-form-group">

                    <x-input-label
                        for="password_confirmation"
                        :value="__('Confirmer le mot de passe')"
                        class="register-label"
                    />


                    <x-text-input
                        id="password_confirmation"
                        class="register-input"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    />


                    <x-input-error
                        :messages="$errors->get('password_confirmation')"
                        class="register-error"
                    />

                </div>



                {{-- BOUTON --}}

                <div class="register-actions">

                    <a
                        href="{{ route('login') }}"
                        class="already-registered"
                    >
                        Déjà inscrit ?
                    </a>


                    <button
                        type="submit"
                        class="register-button"
                    >
                        S'inscrire
                    </button>

                </div>


            </form>



            {{-- CONNEXION --}}

            <div class="login-area">

                <p>
                    Vous avez déjà un compte ?
                </p>

                <a
                    href="{{ route('login') }}"
                    class="login-link"
                >
                    Se connecter
                </a>

            </div>


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