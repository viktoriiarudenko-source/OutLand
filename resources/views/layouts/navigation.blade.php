<nav>

    <div>

        {{-- LOGO / ACCUEIL --}}
        <a href="/">
            OutLand
        </a>


        {{-- MON VOYAGE --}}
        <a href="#">
            Mon Voyage
        </a>


        {{-- EXPLORER --}}
        <a href="/destinations">
            Explorer
        </a>


        {{-- UTILISATEUR CONNECTÉ --}}
        @auth

            {{-- Visible uniquement si l'utilisateur est administrateur --}}
            @if (auth()->user()->is_admin)

                <a href="/admin/destinations">
                    Administration
                </a>

            @endif


            {{-- DÉCONNEXION --}}
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


        {{-- UTILISATEUR NON CONNECTÉ --}}
        @else

            <a href="{{ route('login') }}">
                Me Connecter
            </a>

        @endauth

    </div>

</nav>