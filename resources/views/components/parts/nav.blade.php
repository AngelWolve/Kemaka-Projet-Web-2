<nav>
    <div class="conteneur-liens">
        <a class="lien" href="{{ route('accueil') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Asian Quest">
        </a>
        <ul>
            <li>
                <a class="lien" href="{{ route('accueil') }}">
                    ACCUEIL
                </a>
            </li>
            <li>
                <a class="lien" href="{{ route('activites.index') }}">
                    ACTIVITÉS
                </a>
            </li>
            <li>
                <a class="lien" href="{{ route('forfaits.index') }}">
                    FORFAITS
                </a>
            </li>
            <li>
                <a class="lien" href="{{ route('a_propos.index') }}">
                    À PROPOS
                </a>
            </li>
            <li>
                <a class="lien" href="{{ route('nous_joindre.index') }}">
                    NOUS JOINDRE
                </a>
            </li>
        </ul>
    </div>
    <div class="conteneur-connexion">
        @if (Auth::check())
            <a href="{{ route('client.index') }}">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        @else
            <a href="{{ route('connexion.create') }}">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        @endif


        @if (Auth::check())
            <form action="{{ route('deconnexion') }}" method="POST">
                @csrf

                <button type="submit" class="btn-primaire">
                    Déconnexion
                </button>
            </form>
        @else
            <x-parts.bouton-primaire route="{{ route('connexion.create') }}" texte="Connexion/S'inscrire" />
        @endif
    </div>
</nav>
