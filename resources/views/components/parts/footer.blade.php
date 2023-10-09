<footer>
    {{-- Liste des liens --}}
    <ul class="liens-pages">
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
    </ul> {{-- Fin de la liste des liens --}}

    {{-- Logo --}}
    <div class="logo-footer">
        <a href="{{ route('accueil') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Asian Quest">
        </a>
    </div>

    {{-- Liste des liens sociaux --}}
    <ul class="liens-sociaux">
        <li>
            <a href="https://www.facebook.com/" target="_blank">
                <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
            </a>
        </li>
        <li>
            <a href="https://twitter.com/" target="_blank">
                <img src="{{ asset('images/twitter.png') }}" alt="Twitter">
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/" target="_blank">
                <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/" target="_blank">
                <img src="{{ asset('images/youtube.png') }}" alt="Youtube">
            </a>
        </li>
    </ul> {{-- Fin de la liste des liens sociaux --}}

    {{-- Droits d'auteur --}}
    <p class="tx-sm">
        &copy; 2023 - Tous droits réservés à Asian Quest Festival
    </p>

</footer>
