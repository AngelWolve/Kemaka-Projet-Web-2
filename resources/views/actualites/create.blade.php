<x-admin>
    <section id="admin-create-actualite">
        <div class="actualite-form">
            <h1>Créer une actualité</h1>
            {{-- MESSAGES --}}
            @if (session('succes'))
                <p>
                    {{ session('succes') }}</p>
            @endif
            {{-- FORMULAIRE --}}
            <form action="{{ route('admin/actualites.store') }}" method="POST">
                @csrf

                {{-- TITRE --}}
                <div class="titre">
                    <label for="titre">Titre</label>
                    <div>

                        <x-forms.erreur champ="titre" />

                        <input id="titre" name="titre" type="text" autofocus value="{{ old('titre') }}">
                    </div>
                </div>

                {{-- DESCRIPTION --}}
                <div class="description">
                    <label for="description">Description</label>
                    <div>
                        <x-forms.erreur champ="description" />

                        <textarea name="description" id="description" rows="5" maxlength="500">{{ old('description') }}</textarea>

                    </div>
                </div>

                {{-- SUBMIT --}}
                <div class="submit-create">
                    <input class="btn-primaire" type="submit" value="Ajouter!">
                </div>
            </form>

            {{-- LIEN RETOUR --}}
            <p class="retour-actualite">
                <a href="{{ route('admin/actualites.index') }}" class="hover:text-indigo-600">Retour aux actualités</a>
            </p>
        </div>
    </section>

</x-admin>
