<x-admin>
    {{-- Section modifier une actualité --}}
    <section id="admin-modifier-actualite">

        {{-- Message de confirmation --}}
        @if (session('succes'))
            <p>
                {{ session('succes') }}
            </p>
        @endif

        <div class="modifier-actualite">
            <h1>Modifier une actualité</h1>

            {{-- Formulaire de modification --}}
            <form action="{{ route('admin/actualites.update') }}" method="POST">
                @csrf

                {{-- Champ caché pour l'id --}}
                <x-forms.erreur champ="id" />
                <input type="hidden" name="id" value="{{ $actualite->id }}" required>

                {{-- Titre --}}
                <div class="input">
                    <label for="titre">
                        Titre
                    </label>
                    <div>
                        <x-forms.erreur champ="titre" />
                        <input id="titre" name="titre" type="text" autofocus maxlength="50"
                            value="{{ old('titre') ?? $actualite->titre }}" required>
                    </div>
                </div>

                {{-- Description --}}
                <div class="textarea">
                    <label for="description">
                        Description
                    </label>
                    <div>
                        <x-forms.erreur champ="description" />
                        <textarea id="description" name="description" rows="15" maxlength="750" required>{{ old('description') ?? $actualite->description }}</textarea>
                    </div>
                </div>

                {{-- Soumission --}}
                <div class="submit">
                    <input class="btn-primaire" type="submit" value="Modifier">
                </div>

            </form> {{-- Fin du formulaire de modification --}}

            {{-- Retour --}}
            <div class="retour">
                <a href="{{ route('admin/actualites.index') }}">
                    Retour aux actualités
                </a>
            </div>

        </div>
    </section> {{-- Fin de la section modifier une actualité --}}
</x-admin>
