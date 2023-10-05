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

                <x-forms.input name="password" type="password" label=" Mot de passe" autocomplete="current-password"
                    autofocus required max_length="255" />

                <x-forms.input name="password_confirmation" type="password" label=" Confirmation du mot de passe"
                    autofocus required max_length="255" />

                @if (Auth::check() && Auth()->user()->role_id == 1)
                    <div class="role">
                        <label for="role_id">Role</label>
                        <div>
                            <select name="role_id" id="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">
                                        {{ $role->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                @endif
                <div class="submit-enregistrement">
                    <button class="btn-primaire" type="submit">
                        Créez votre compte!
                    </button>
                </div>
            </form>
            {{-- @if (Auth()->user()->role_id != 1)
                <p class="compte">
                    Déjà membre?

                    <a href="{{ route('connexion.create') }}">
                        Connectez-vous!
                    </a>
                </p>
            @else
                <div class="retour">
                    <a class="btn-retour" href="{{ route('admin/utilisateurs.index') }}">
                        Retour
                    </a>
                </div>
            @endif --}}

        </div>

    </section>
</x-admin>
