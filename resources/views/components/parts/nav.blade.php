<nav>
    <div class="conteneur-liens">
        <img src="{{ asset('images/logo1.png') }}" alt="Logo Asian Quest">
        <ul>
            <li>
                <a href="{{ route('accueil') }}">
                    ACCUEIL
                </a>
            </li>
            <li>
                <a href="{{ route('accueil') }}">
                    ACTIVITÉS
                </a>
            </li>
            <li>
                <a href="{{ route('accueil') }}">
                    FORFAITS
                </a>
            </li>
            <li>
                <a href="{{ route('accueil') }}">
                    À PROPOS
                </a>
            </li>
            <li>
                <a href="{{ route('accueil') }}">
                    NOUS JOINDRE
                </a>
            </li>
        </ul>
    </div>
    <div class="conteneur-connexion">
        <div>
            <a href="#">
                <img src="{{ asset('images/panier.svg') }}" alt="panier d'achat">
            </a>
        </div>
        {{-- <x-parts.bouton-primaire route="accueil" texte="CONNEXION / S'INSCRIRE"> --}}
    </div>
</nav>
