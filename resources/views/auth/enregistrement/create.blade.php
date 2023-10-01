<x-admin titre="Enregistrement">
    <section id="enregistrement">
        <div class="form-enregistrement">
            <h1>
                Créez votre compte
            </h1>
            <form action="{{ route('enregistrement.store') }}" method="POST">
                @csrf
                <x-forms.input name="prenom" label="Prénom" autocomplete="given-name" autofocus required max_length="255"
                    value="{{ old('prenom') }}" />

                <x-forms.input name="nom" label="Nom" autocomplete="family-name" autofocus required
                    max_length="255" value="{{ old('nom') }}" />

                <x-forms.input name="email" label="Courriel" autocomplete="email" autofocus required max_length="255"
                    value="{{ old('email') }}" />

                <x-forms.input name="password" type="password" label=" Mot de passe" autocomplete="current-password" autofocus required
                    max_length="255" />

                <x-forms.input name="password_confirmation" type="password" label=" Confirmation du mot de passe" autofocus required
                    max_length="255" />

                <div class="submit-enregistrement">
                    <button class="btn-primaire" type="submit">
                        Créez votre compte!
                    </button>
                </div>
            </form>
            <p class="compte">
                Déjà membre?

                <a href="{{ route('connexion.create') }}">
                    Connectez-vous!
                </a>
            </p>
        </div>

    </section>
</x-admin>
