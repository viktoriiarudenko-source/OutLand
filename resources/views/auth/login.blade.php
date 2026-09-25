<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Connexion | OutLand</title>


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
           PAGE CONNEXION
        ===================================================== */

        .login-page {
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

        .login-container {
            width: 100%;
            max-width: 520px;
        }


        /* =====================================================
           TITRES
        ===================================================== */

        .login-title {
            margin: 0;

            font-family: 'Playfair Display', serif;

            font-size: clamp(55px, 7vw, 78px);
            font-weight: 400;

            line-height: 1;

            text-align: center;

            color: #E0D7D4;
        }

        .login-subtitle {
            margin: 17px 0 48px;

            font-size: 14px;
            font-weight: 300;

            text-align: center;

            color: rgba(224, 215, 212, 0.70);
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .login-status {
            margin-bottom: 25px;

            font-size: 13px;

            color: #E0D7D4;
        }


        /* =====================================================
           FORMULAIRE
        ===================================================== */

        .login-form {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 28px;
        }

        .login-form-group {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 9px;
        }

        .login-label {
            font-family: 'Poppins', sans-serif !important;

            font-size: 13px !important;
            font-weight: 300 !important;

            color: #E0D7D4 !important;
        }


        /* =====================================================
           INPUTS
        ===================================================== */

        .login-input {
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

        .login-input:focus {
            border-color: #E0D7D4 !important;

            box-shadow: none !important;

            background: rgba(255, 255, 255, 0.03) !important;
        }


        /* =====================================================
           ERREURS
        ===================================================== */

        .login-error {
            margin-top: 5px !important;

            font-family: 'Poppins', sans-serif !important;

            font-size: 12px !important;
        }


        /* =====================================================
           SE SOUVENIR
        ===================================================== */

        .login-remember {
            margin-top: -7px;
        }

        .login-remember label {
            display: inline-flex;
            align-items: center;

            gap: 9px;

            font-size: 12px;
            font-weight: 300;

            color: rgba(224, 215, 212, 0.75);

            cursor: pointer;
        }

        .login-remember input {
            width: 14px;
            height: 14px;

            accent-color: #E0D7D4;
        }


        /* =====================================================
           ACTIONS
        ===================================================== */

        .login-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 25px;

            margin-top: 5px;
        }

        .forgot-password {
            font-size: 12px;
            font-weight: 300;

            color: rgba(224, 215, 212, 0.70);

            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .forgot-password:hover {
            color: #E0D7D4;
        }


        /* =====================================================
           BOUTON CONNEXION
        ===================================================== */

        .login-button {
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

        .login-button:hover {
            background: #E0D7D4;

            color: #182528;
        }


        /* =====================================================
           CREER UN COMPTE
        ===================================================== */

        .register-area {
            margin-top: 55px;

            padding-top: 28px;

            border-top: 1px solid rgba(224, 215, 212, 0.18);

            text-align: center;
        }

        .register-area p {
            margin: 0 0 12px;

            font-size: 12px;
            font-weight: 300;

            color: rgba(224, 215, 212, 0.65);
        }

        .register-link {
            font-family: 'Playfair Display', serif;

            font-size: 19px;

            color: #E0D7D4;
        }

        .register-link:hover {
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

            .login-page {
                min-height: calc(100vh - 130px);

                padding: 55px 25px 75px;
            }

            .login-title {
                font-size: 52px;
            }

            .login-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .login-button {
                width: 100%;
            }

            .forgot-password {
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
    {{-- CONNEXION --}}
    {{-- ================================================= --}}

    <main class="login-page">

        <div class="login-container">


            <h1 class="login-title">
                Connexion
            </h1>


            <p class="login-subtitle">
                Connectez-vous à votre compte OutLand
            </p>



            {{-- SESSION STATUS --}}

            <x-auth-session-status
                class="login-status"
                :status="session('status')"
            />



            {{-- FORMULAIRE --}}

            <form
                method="POST"
                action="{{ route('login') }}"
                class="login-form"
            >

                @csrf



                {{-- EMAIL --}}

                <div class="login-form-group">

                    <x-input-label
                        for="email"
                        :value="__('Email')"
                        class="login-label"
                    />


                    <x-text-input
                        id="email"
                        class="login-input"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                    />


                    <x-input-error
                        :messages="$errors->get('email')"
                        class="login-error"
                    />

                </div>



                {{-- MOT DE PASSE --}}

                <div class="login-form-group">

                    <x-input-label
                        for="password"
                        :value="__('Mot de passe')"
                        class="login-label"
                    />


                    <x-text-input
                        id="password"
                        class="login-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    />


                    <x-input-error
                        :messages="$errors->get('password')"
                        class="login-error"
                    />

                </div>



                {{-- SE SOUVENIR DE MOI --}}

                <div class="login-remember">

                    <label for="remember_me">

                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember"
                        >

                        <span>
                            Se souvenir de moi
                        </span>

                    </label>

                </div>



                {{-- ACTIONS --}}

                <div class="login-actions">

                    @if (Route::has('password.request'))

                        <a
                            class="forgot-password"
                            href="{{ route('password.request') }}"
                        >
                            Mot de passe oublié ?
                        </a>

                    @endif


                    <button
                        type="submit"
                        class="login-button"
                    >
                        Se connecter
                    </button>

                </div>


            </form>



            {{-- CREER UN COMPTE --}}

            <div class="register-area">

                <p>
                    Vous n'avez pas encore de compte ?
                </p>

                <a
                    href="{{ route('register') }}"
                    class="register-link"
                >
                    Créer un compte
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