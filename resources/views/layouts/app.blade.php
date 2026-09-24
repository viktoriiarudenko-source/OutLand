<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->

    </head>

    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">

            {{-- NAVIGATION --}}
            @include('layouts.navigation')


            {{-- PAGE HEADING --}}
            @isset($header)

                <header class="bg-white shadow">

                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                        {{ $header }}

                    </div>

                </header>

            @endisset


            {{-- CONTENU DE LA PAGE --}}
            <main>

                {{ $slot }}

            </main>


            {{-- FOOTER --}}
            <footer>

                <div>

                    {{-- LOGO / NOM --}}
                    <a href="/">
                        OutLand
                    </a>


                    {{-- NAVIGATION FOOTER --}}
                    <div>

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

                            <a href="{{ route('register') }}">
                                Créer un compte
                            </a>

                        @endauth

                    </div>


                    {{-- COPYRIGHT --}}
                    <p>
                        © {{ date('Y') }} OutLand
                    </p>

                </div>

            </footer>

        </div>

    </body>

</html>