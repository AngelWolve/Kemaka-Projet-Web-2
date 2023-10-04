<x-admin>
    <section id="admin-create-activite">
        <div class="activite-form">
            <h1>Créer une activité</h1>
            {{-- MESSAGES --}}
            @if (session('succes'))
                <p>
                    {{ session('succes') }}</p>
            @endif
            {{-- FORMULAIRE --}}
            <form action="{{ route('admin/activites.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- NOM --}}
                <div class="nom">
                    <label for="nom">Nom</label>
                    <div>

                        <x-forms.erreur champ="nom" />

                        <input id="nom" name="nom" type="text" autofocus value="{{ old('nom') }}">
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

                {{-- IMAGE --}}
                <div class="image">
                    <label for="image"> Image </label>
                    <div>
                        <input id="image" name="image" type="file">

                        <x-forms.erreur champ="image" />
                    </div>

                </div>

                {{-- SUBMIT --}}
                <div class="submit-create">
                    <input class="btn-primaire" type="submit" value="Ajouter!">
                </div>
            </form>

            {{-- LIEN RETOUR --}}
            <p class="retour-activite">
                <a href="{{ route('admin/activites.index') }}" class="hover:text-indigo-600">Retour aux activités</a>
            </p>
        </div>
    </section>

</x-admin>
