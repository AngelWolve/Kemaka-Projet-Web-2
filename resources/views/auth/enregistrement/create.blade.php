<x-admin titre="Enregistrement">
    {{-- Section enregistrement --}}
    <section id="enregistrement">

        <div class="form-enregistrement">
            <h1>
                Créez votre compte
            </h1>

            {{-- Formulaire d'enregistrement --}}
            <form action="{{ route('enregistrement.store') }}" method="POST">
                @csrf

                {{-- Prénom --}}
                <div class="input">
                    <label for="prenom">
                        Prénom
                    </label>
                    <div>
                        <x-forms.erreur champ="prenom" />
                        <input id="prenom" name="prenom" type="text" autofocus maxlength="255"
                            value="{{ old('prenom') }}" required>
                    </div>
                </div>

                {{-- Nom --}}
                <div class="input">
                    <label for="nom">
                        Nom
                    </label>
                    <div>
                        <x-forms.erreur champ="nom" />
                        <input id="nom" name="nom" type="text" maxlength="255" value="{{ old('nom') }}"
                            required>
                    </div>
                </div>

                {{-- Courriel --}}
                <div class="input">
                    <label for="email">
                        Courriel
                    </label>
                    <div>
                        <x-forms.erreur champ="email" />
                        <input id="email" name="email" type="email" maxlength="255" value="{{ old('email') }}"
                            required>
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

                {{-- Confirmation du mot de passe --}}
                <div class="input">
                    <label for="password_confirmation">
                        Confirmation du mot de passe
                    </label>
                    <div>
                        <x-forms.erreur champ="password_confirmation" />
                        <input id="password_confirmation" name="password_confirmation" type="password" maxlength="255"
                            required>
                    </div>
                </div>

                {{-- Choix du rôle si administrateur --}}
                @if (Auth::check() && Auth()->user()->role_id == 1)
                    <div class="input">
                        <label for="role_id">
                            Rôle
                        </label>
                        <div>
                            <x-forms.erreur champ="role_id" />
                            <select name="role_id" id="role_id" required>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">
                                        {{ ucfirst($role->nom) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endif

                {{-- Soumission --}}
                <div class="submit">
                    <input class="btn-primaire" type="submit" value="Créez votre compte">
                </div>

            </form> {{-- Fin du formulaire d'enregistrement --}}

            {{-- Retour --}}
            @if (Auth::check() && Auth()->user()->role_id == 1)
                <div class="retour">
                    <a href="{{ route('admin/utilisateurs.index') }}">Retour à la Liste</a>
                </div>
            @else
                <div class="retour">
                    Déjà membre?

                    <a href="{{ route('connexion.create') }}">
                        Connectez-vous!
                    </a>
                </div>
            @endif

        </div>
    </section> {{-- Fin de la section enregistrement --}}
</x-admin>
