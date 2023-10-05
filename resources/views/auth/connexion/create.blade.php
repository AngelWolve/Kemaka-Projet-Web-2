<x-admin titre="Connexion">
    <section id="connexion">
        <div class="form-connexion">
            <h1>
                Connexion à votre compte
            </h1>
            @if (session('email'))
                <p>{{ session('email') }}</p>
            @endif
            <form action="{{ route('connexion.authentifier') }}" method="POST">
                @csrf

                <x-forms.input name="email" label="Courriel" autocomplete required max_length="255"
                    placeholder="Entrez votre courriel" />

                <x-forms.input name="password" type="password" label="Mot de passe" required max_length="255"
                    placeholder="Entrez votre mot de passe" />

                <div class="submit-connexion">
                    <button class="btn-primaire" type="submit">
                        Connectez-vous!
                    </button>
                </div>
            </form>

            <p class="compte">
                Pas de compte?

                <a href="{{ route('enregistrement.create') }}">
                    Enregistrez-vous!
                </a>
            </p>

            <div class="retour">
                <a class="btn-retour" href="{{ route('accueil') }}">
                    Retour
                </a>
            </div>
        </div>

    </section>
</x-admin>
