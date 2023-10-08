<nav>
    <div class="conteneur-liens">
        <a class="lien" href="{{ route('accueil') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Asian Quest">
        </a>
        <ul class="menu-liste">
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
        <div title="Menu" class="hamburger">
            <div class="barre"></div>
            <div class="barre"></div>
            <div class="barre"></div>
        </div>
    </div>
    <div class="conteneur-connexion">

        @if (Auth::check() && Auth()->user()->role_id == 1)
            <a title="Administration" href="{{ route('admin.index') }}">
                <i class="fa-solid fa-computer"></i>
            </a>
        @endif

        @if (Auth::check() && Auth()->user()->role_id == 2)
            <a title="Réservations" href="{{ route('employe.index') }}">
                <i class="fa-solid fa-clipboard"></i>
            </a>
        @endif

        @if (Auth::check() && Auth()->user()->role_id == 3)
            <a class="shopping-cart" title="Panier d'achat" href="{{ route('client.index') }}">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        @endif

        @if (Auth::check())
            <form action="{{ route('deconnexion') }}" method="POST">
                @csrf

                <button title="Déconnexion" class="icone-deconnect">
                    <i type="submit" class="fa-solid fa-xmark"></i>
                </button>

                <button type="submit" class="btn-primaire">
                    DÉCONNEXION
                </button>
            </form>
        @else
            <a class="btn-user" title="Connexion/S'inscrire" href="{{ route('connexion.create') }}">
                <i class="fa-solid fa-user"></i>
            </a>
            <x-parts.bouton-primaire route="{{ route('connexion.create') }}" texte="CONNEXION / S'INSCRIRE" />
        @endif
    </div>
</nav>
