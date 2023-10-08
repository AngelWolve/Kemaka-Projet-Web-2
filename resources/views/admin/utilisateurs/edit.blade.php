<x-admin titre="Modification d'utilisateur">
    {{-- Section modification utilisateur --}}
    <section id="admin-modifier-utilisateur">

        <div class="modifier-utilisateur">
            <h1>Modifier un utilisateur</h1>

            {{-- Formulaire de modification --}}
            <form action="{{ route('admin/utilisateurs.update') }}" method="POST">
                @csrf

                {{-- Champ caché pour l'id --}}
                <x-forms.erreur champ="id" />
                <input type="hidden" name="id" value="{{ $utilisateur->id }}" required>

                {{-- Prénom --}}
                <div class="input">
                    <label for="prenom">
                        Prénom
                    </label>
                    <div>
                        <x-forms.erreur champ="prenom" />
                        <input id="prenom" name="prenom" type="text" autofocus maxlength="255"
                            value="{{ old('prenom') ?? $utilisateur->prenom }}" required>
                    </div>
                </div>

                {{-- Nom --}}
                <div class="input">
                    <label for="nom">
                        Nom
                    </label>
                    <div>
                        <x-forms.erreur champ="nom" />
                        <input id="nom" name="nom" type="text" autofocus maxlength="255"
                            value="{{ old('nom') ?? $utilisateur->nom }}" required>
                    </div>
                </div>

                {{-- Courriel --}}
                <div class="input">
                    <label for="email">
                        Courriel
                    </label>
                    <div>
                        <x-forms.erreur champ="email" />
                        <input id="email" name="email" type="email" autofocus maxlength="255"
                            value="{{ old('email') ?? $utilisateur->email }}" required>
                    </div>
                </div>

                {{-- Rôle --}}
                <div class="input">
                    <label for="role_id">
                        Rôle
                    </label>
                    <div>
                        <x-forms.erreur champ="role_id" />
                        <select name="role_id" id="role_id" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" @if ($role->id == (old('role_id') ?? $utilisateur->role_id)) selected @endif>
                                    {{ ucfirst($role->nom) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Soumission --}}
                <div class="submit">
                    <input class="btn-primaire" type="submit" value="Modifier">
                </div>

            </form> {{-- Fin du formulaire de modification --}}

            {{-- Retour --}}
            <div class="retour">
                <a href="{{ route('admin/utilisateurs.index') }}">
                    Retour à la Liste
                </a>
            </div>

        </div>
    </section> {{-- Fin de la section modifier un utilisateur --}}
</x-admin>
