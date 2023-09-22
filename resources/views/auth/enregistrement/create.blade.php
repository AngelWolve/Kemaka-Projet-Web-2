<x-connexion titre="Enregistrement">
    <section class="form_enregistrer">
        <h4>
            Créez votre compte
        </h4>

        <div>
            {{-- FORMULAIRE D'ENREGISTREMENT --}}

            <form action="{{ route('enregistrement.store') }}" method="POST" >
                @csrf
                <div class="input_groupe_1">

                    {{-- PRÉNOM --}}
                    <div>
                        <label for="prenom">Prénom</label>
                        <div>
                            <input id="prenom" name="prenom" type="text" autocomplete="given-name" autofocus  required
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
                                autocomplete="family-name"  required>

                            <x-forms.erreur champ="nom" />
                        </div>

                    </div>

                </div>

                {{-- EMAIL --}}
                <div>
                    <label for="email">Courriel</label>
                    <div>
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                            autocomplete="email"  required>

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
                        <input id="password" name="password" type="password" autocomplete="current-password"  required>

                        <x-forms.erreur champ="password" />
                    </div>

                </div>

                {{-- CONFIRM PASSWORD --}}

                <div>
                    <div>
                        <label for="confirm-password">
                            Confirmation du mot de passe
                        </label>
                    </div>
                    <div>
                        <input id="confirm-password" name="confirmation_password" type="password"  required>

                        <x-forms.erreur champ="confirmation_password" />
                    </div>

                </div>
                <div>
                    <label for="role_id">Role </label>
                    <div>
                        <input id="role_id" name="role_id" type="number">

                        <x-forms.erreur champ="role_id" />
                    </div>

                </div>

                <div>
                    <button type="submit">
                        Créez votre compte!
                    </button>
                </div>
            </form>

            <p>
                <a href="{{ route('connexion.create') }}">
                    Déjà membre?Connectez-vous!
                </a>
            </p>
        </div>

    </section>


</x-connexion>
