<x-connexion titre="Enregistrement">
    <h4>
        Créez votre compte
    </h4>
    <section class="form_enregistrer">

        <div>
            {{-- FORMULAIRE D'ENREGISTREMENT --}}

            <form action="{{ route('enregistrement.store') }}" method="POST">
                @csrf
                <div class="input_groupe_1">

                    {{-- PRÉNOM --}}
                    <div>
                        <label for="prenom">Prénom</label>
                        <div>
                            <input id="prenom" name="prenom" type="text" autocomplete="given-name" autofocus required
                                value="{{ old('prenom') }}">

                            <x-forms.erreur champ="prenom" />

                        </div>
                    </div>

                    {{-- NOM --}}
                    <div>
                        <label for="nom">
                            Nom
                        </label>
                        <div>
                            <input id="nom" name="nom" type="text" value="{{ old('nom') }}"
                                autocomplete="family-name" required>

                            <x-forms.erreur champ="nom" />
                        </div>

                    </div>

                </div>

                {{-- EMAIL --}}
                <div>
                    <label for="email">Courriel</label>
                    <div>
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                            autocomplete="email" required>

                        <x-forms.erreur champ="email" />
                    </div>

                </div>

                {{-- PASSWORD --}}

                <div>
                    <div>
                        <label for="password">
                            Mot de passe
                        </label>
                    </div>

                    <div>
                        <input id="password" name="password" type="password" autocomplete="current-password" required>

                        <x-forms.erreur champ="password" />
                    </div>

                </div>

                {{-- CONFIRM PASSWORD --}}

                <div>
                    <div>
                        <label for="password_confirmation">
                            Confirmation du mot de passe
                        </label>
                    </div>
                    <div>
                        <input id="password_confirmation" name="password_confirmation" type="password" required>

                        <x-forms.erreur champ="password_confirmation" />
                    </div>

                </div>

                <div>
                    <button type="submit">
                        Créez votre compte!
                    </button>
                </div>
            </form>
        </div>
    </section>
    <p class="compte">
        Déjà membre?

        <a href="{{ route('connexion.create') }}">
            Connectez-vous!
        </a>
    </p>

</x-connexion>
