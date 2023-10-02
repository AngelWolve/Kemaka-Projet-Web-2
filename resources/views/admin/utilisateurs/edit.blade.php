<x-admin>
    <section id="admin-modifier-administrateur">
        <div class="modifier-form">
            <h1>Modifier une administrateur</h1>
            {{-- MESSAGES --}}
            @if (session('succes'))
                <p>
                    {{ session('succes') }}</p>
            @endif
            {{-- FORMULAIRE --}}
            <form action="{{ route('admin/utilisateurs.update') }}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $utilisateur->id }}">

                {{-- PRÉNOM --}}
                <div class="prenom">
                    <label for="prenom">Prénom</label>
                    <div>
                        <x-forms.erreur champ="prenom" />

                        <input id="prenom" name="prenom" type="text" autofocus
                            value="{{ old('prenom') ?? $utilisateur->prenom }}">
                    </div>
                </div>

                {{-- NOM --}}
                <div class="nom">
                    <label for="nom">Nom</label>
                    <div>
                        <x-forms.erreur champ="nom" />

                        <input id="nom" name="nom" type="text" autofocus
                            value="{{ old('nom') ?? $utilisateur->nom }}">
                    </div>
                </div>

                {{-- COURRIEL --}}
                <div class="courriel">
                    <label for="email">Courriel</label>
                    <div>
                        <x-forms.erreur champ="email" />

                        <input id="email" name="email" type="text" autofocus
                            value="{{ old('email') ?? $utilisateur->email }}">
                    </div>
                </div>



                {{-- SUBMIT --}}
                <div class="submit-modifier">
                    <input class="btn-primaire" type="submit" value="Modifier!">
                </div>
            </form>

            {{-- RETOUR AUX LISTE --}}
            <p class="retour-admin">
                <a href="{{ route('admin/utilisateurs.index') }}">Retour aux Liste</a>
            </p>
        </div>
    </section>
</x-admin>
