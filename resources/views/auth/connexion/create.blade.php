<x-connexion titre="Connexion">
    <h4>
        Connexion à votre compte
    </h4>
    <section class="form_connexion">

        @if (session('email'))
            <p>{{ session('email') }}</p>
        @endif

        <div>
            <form action="{{ route('connexion.authentifier') }}" method="POST">
                @csrf

                <div>
                    <label for="email">Courriel</label>

                    <x-forms.erreur champ="email" />
                    <div>
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}"
                            placeholder="abc@xyz.com" required>
                    </div>
                </div>

                <div>
                    <div>
                        <label for="password">
                            Mot de passe
                        </label>
                    </div>

                    <x-forms.erreur champ="password" />
                    <div>
                        <input id="password" name="password" type="password" autocomplete="current-password"
                            placeholder="●●●●●●●●" required>
                    </div>
                </div>

                <div>
                    <button type="submit">
                        Connectez-vous!
                    </button>
                </div>
            </form>
        </div>
    </section>
    <p class="compte">
        Pas de compte?

        <a href="{{ route('enregistrement.create') }}">
            Enregistrez-vous!
        </a>
    </p>

</x-connexion>
