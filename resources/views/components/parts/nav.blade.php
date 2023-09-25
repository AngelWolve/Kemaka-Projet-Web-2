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
                <a class="lien" href="{{ route('accueil') }}">
                    ACTIVITÉS
                </a>
            </li>
            <li>
                <a class="lien" href="{{ route('accueil') }}">
                    FORFAITS
                </a>
            </li>
            <li>
                <a class="lien" href="{{ route('accueil') }}">
                    À PROPOS
                </a>
            </li>
            <li>
                <a class="lien" href="{{ route('accueil') }}">
                    NOUS JOINDRE
                </a>
            </li>
        </ul>
    </div>
    <div class="conteneur-connexion">
        <i class="fa-solid fa-cart-shopping"></i>
        <x-parts.bouton-primaire route="accueil" texte="CONNEXION / S'INSCRIRE" />
    </div>
</nav>
