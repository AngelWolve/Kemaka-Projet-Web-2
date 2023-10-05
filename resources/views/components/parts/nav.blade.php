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

        @if (Auth::check() && Auth()->user()->role_id == 1)
            <a title="Administration" href="{{ route('admin.index') }}">
                <i class="fa-solid fa-computer"></i>
            </a>
        @endif

        @if (Auth::check() && Auth()->user()->role_id == 2)
            <a title="Administration" href="{{ route('employe.index') }}">
                <i class="fa-solid fa-computer"></i>
            </a>
        @endif

        @if (Auth::check() && Auth()->user()->role_id == 3)
            <a title="Panier d'achat" href="{{ route('client.index') }}">
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
