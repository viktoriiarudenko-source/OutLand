<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mot de passe oublié | OutLand</title>

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
           PAGE MOT DE PASSE OUBLIE
        ===================================================== */

        .forgot-page {
            width: 100%;

            min-height: calc(100vh - 180px);

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 70px 25px 100px;
        }

        .forgot-container {
            width: 100%;
            max-width: 520px;
        }


        /* =====================================================
           TITRES
        ===================================================== */

        .forgot-title {
            margin: 0;

            font-family: 'Playfair Display', serif;

            font-size: clamp(48px, 6vw, 70px);
            font-weight: 400;

            line-height: 1.05;

            text-align: center;

            color: #E0D7D4;
        }

        .forgot-subtitle {
            margin: 20px auto 48px;

            max-width: 480px;

            font-size: 13px;
            font-weight: 300;

            line-height: 1.7;

            text-align: center;

            color: rgba(224, 215, 212, 0.70);
        }


        /* =====================================================
           SESSION STATUS
        ===================================================== */

        .forgot-status {
            margin-bottom: 25px;

            padding: 12px 15px;

            border: 1px solid rgba(224, 215, 212, 0.25);

            font-family: 'Poppins', sans-serif;
            font-size: 12px;

            color: #E0D7D4;
        }


        /* =====================================================
           FORMULAIRE
        ===================================================== */

        .forgot-form {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 28px;
        }

        .forgot-form-group {
            width: 100%;

            display: flex;
            flex-direction: column;

            gap: 9px;
        }

        .forgot-label {
            font-family: 'Poppins', sans-serif !important;

            font-size: 13px !important;
            font-weight: 300 !important;

            color: #E0D7D4 !important;
        }


        /* =====================================================
           INPUT
        ===================================================== */

        .forgot-input {
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

        .forgot-input:focus {
            border-color: #E0D7D4 !important;

            box-shadow: none !important;

            background: rgba(255, 255, 255, 0.03) !important;
        }


        /* =====================================================
           ERREURS
        ===================================================== */

        .forgot-error {
            margin-top: 5px !important;

            font-family: 'Poppins', sans-serif !important;

            font-size: 12px !important;
        }


        /* =====================================================
           BOUTON
        ===================================================== */

        .forgot-actions {
            display: flex;
            justify-content: flex-end;

            margin-top: 5px;
        }

        .forgot-button {
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

        .forgot-button:hover {
            background: #E0D7D4;

            color: #182528;
        }


        /* =====================================================
           RETOUR CONNEXION
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

            .forgot-page {
                min-height: calc(100vh - 130px);

                padding: 55px 25px 75px;
            }

            .forgot-title {
                font-size: 47px;
            }

            .forgot-actions {
                display: block;
            }

            .forgot-button {
                width: 100%;
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
    {{-- MOT DE PASSE OUBLIE --}}
    {{-- ================================================= --}}

    <main class="forgot-page">

        <div class="forgot-container">


            <h1 class="forgot-title">
                Mot de passe<br>
                oublié ?
            </h1>


            <p class="forgot-subtitle">
                Pas de problème. Indiquez l'adresse e-mail associée
                à votre compte OutLand et nous vous enverrons un lien
                vous permettant de choisir un nouveau mot de passe.
            </p>



            {{-- SESSION STATUS --}}

            <x-auth-session-status
                class="forgot-status"
                :status="session('status')"
            />



            {{-- FORMULAIRE --}}

            <form
                method="POST"
                action="{{ route('password.email') }}"
                class="forgot-form"
            >

                @csrf



                {{-- EMAIL --}}

                <div class="forgot-form-group">

                    <x-input-label
                        for="email"
                        :value="__('Email')"
                        class="forgot-label"
                    />


                    <x-text-input
                        id="email"
                        class="forgot-input"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="email"
                    />


                    <x-input-error
                        :messages="$errors->get('email')"
                        class="forgot-error"
                    />

                </div>



                {{-- BOUTON --}}

                <div class="forgot-actions">

                    <button
                        type="submit"
                        class="forgot-button"
                    >
                        Envoyer le lien de réinitialisation
                    </button>

                </div>


            </form>



            {{-- RETOUR CONNEXION --}}

            <div class="login-area">

                <p>
                    Vous vous souvenez de votre mot de passe ?
                </p>

                <a
                    href="{{ route('login') }}"
                    class="login-link"
                >
                    Retour à la connexion
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