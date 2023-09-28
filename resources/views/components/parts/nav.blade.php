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
        <i class="fa-solid fa-cart-shopping"></i>
        <x-parts.bouton-primaire route="{{ route('connexion.create') }}" texte="CONNEXION / S'INSCRIRE" />
    </div>
</nav>
