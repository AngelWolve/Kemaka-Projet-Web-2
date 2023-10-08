<x-admin>
    {{-- Section création d'activité --}}
    <section id="admin-create-activite">

        <div class="activite-form">
            <h1>Créer une activité</h1>
            {{-- Message de confirmation --}}
            @if (session('succes'))
                <p>
                    {{ session('succes') }}</p>
            @endif
            {{-- Formulaire d'ajout --}}
            <form action="{{ route('admin/activites.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Nom --}}
                <div class="input">
                    <label for="nom">
                        Nom
                    </label>
                    <div>
                        <x-forms.erreur champ="nom" />
                        <input id="nom" name="nom" type="text" autofocus maxlength="75"
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
                        <textarea id="description" name="description" rows="10" maxlength="500" required>{{ old('description') }}</textarea>
                    </div>
                </div>
                {{-- Image --}}
                <div class="input">
                    <label for="image">
                        Image
                    </label>
                    <div>
                        <x-forms.erreur champ="image" />
                        <input id="image" name="image" type="file" required>
                    </div>
                </div>
                {{-- Soumission --}}
                <div class="submit">
                    <input class="btn-primaire" type="submit" value="Ajouter!">
                </div>
            </form>

            {{-- Retour --}}
            <p class="retour">
                <a href="{{ route('admin/activites.index') }}" class="hover:text-indigo-600">Retour aux activités</a>
            </p>
        </div>
    </section> {{-- Fin de la section création d'activité --}}
</x-admin>
