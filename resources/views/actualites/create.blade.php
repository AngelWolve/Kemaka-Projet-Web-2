<x-admin>
    {{-- Section création d'actualité --}}
    <section id="admin-create-actualite">

        {{-- Message de confirmation --}}
        @if (session('succes'))
            <p>
                {{ session('succes') }}
            </p>
        @endif

        <div class="ajouter-actualite">
            <h1>Créer une actualité</h1>

            {{-- Formulaire d'ajout --}}
            <form action="{{ route('admin/actualites.store') }}" method="POST">
                @csrf

                {{-- Titre --}}
                <div class="input">
                    <label for="titre">
                        Titre
                    </label>
                    <div>
                        <x-forms.erreur champ="titre" />
                        <input id="titre" name="titre" type="text" autofocus maxlength="50"
                            value="{{ old('nom') }}" required>
                    </div>
                </div>

                {{-- Description --}}
                <div class="textarea">
                    <label for="description">
                        Description
                    </label>
                    <div>
                        <x-forms.erreur champ="description" />
                        <textarea id="description" name="description" rows="15" maxlength="750" required>{{ old('description') }}</textarea>
                    </div>
                </div>

                {{-- Soumission --}}
                <div class="submit">
                    <input class="btn-primaire" type="submit" value="Ajouter">
                </div>

            </form> {{-- Fin du formulaire d'ajout --}}

            {{-- Retour --}}
            <div class="retour">
                <a href="{{ route('admin/actualites.index') }}">
                    Retour aux actualités
                </a>
            </div>

        </div>
    </section> {{-- Fin de la section création d'actualité --}}
</x-admin>
