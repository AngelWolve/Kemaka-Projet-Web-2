<x-admin titre="Connexion">
    {{-- Section connexion --}}
    <section id="connexion">

        {{-- Message d'erreur --}}
        @if (session('echec'))
            <p>
                {{ session('echec') }}
            </p>
        @endif

        <div class="form-connexion">
            <h1>
                Connexion à votre compte
            </h1>

            {{-- Formulaire de connexion --}}
            <form action="{{ route('connexion.authentifier') }}" method="POST">
                @csrf

                {{-- Courriel --}}
                <div class="input">
                    <label for="email">
                        Courriel
                    </label>
                    <div>
                        <x-forms.erreur champ="email" />
                        <input id="email" name="email" type="email" autofocus maxlength="255"
                            value="{{ old('nom') }}" autocomplete required>
                    </div>
                </div>

                {{-- Mot de passe --}}
                <div class="input">
                    <label for="password">
                        Mot de passe
                    </label>
                    <div>
                        <x-forms.erreur champ="password" />
                        <input id="password" name="password" type="password" maxlength="255" required>
                    </div>
                </div>

                {{-- Soummission --}}
                <div class="submit">
                    <input class="btn-primaire" type="submit" value="Connexion">
                </div>

            </form> {{-- Fin du formulaire de connexion --}}

            {{-- Création de compte --}}
            <p class="compte">
                Pas de compte?

                <a href="{{ route('enregistrement.create') }}">
                    Enregistrez-vous!
                </a>
            </p>

            {{-- Retour --}}
            <div class="retour">
                <a class="btn-retour" href="{{ route('accueil') }}">
                    Retour
                </a>
            </div>

        </div>

    </section> {{-- Fin de la section connexion --}}
</x-admin>
