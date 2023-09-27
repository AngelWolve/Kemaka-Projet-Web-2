<x-admin>
    <section id="admin-create-activite">
        <h1>Créer une activité</h1>
        {{-- MESSAGES --}}
        @if (session('succes'))
            <p>
                {{ session('succes') }}</p>
        @endif
        <div class="activite-bg">
            {{-- FORMULAIRE --}}
            <form action="{{ route('admin/activites.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    {{-- NOM --}}
                    <label for="nom">Nom</label>
                    <div>

                        <x-forms.erreur champ="nom" />

                        <input id="nom" name="nom" type="text" autofocus value="{{ old('nom') }}">
                    </div>
                </div>

                <div>
                    {{-- DESCRIPTION --}}
                    <label for="description">Description</label>
                    <div>
                        <x-forms.erreur champ="description" />

                        <textarea name="description" id="description" rows="5" maxlength="500">{{ old('description') }}</textarea>

                    </div>
                </div>

                {{-- IMAGE --}}
                <div>
                    <label for="image"> Image </label>
                    <div>
                        <input id="image" name="image" type="file">

                        <x-forms.erreur champ="image" />
                    </div>

                </div>

                {{-- SUBMIT --}}
                <div>
                    <input type="submit" vlue="Ajouter!">
                </div>
            </form>

            {{-- LIEN RETOUR --}}
            <p>
                <a href="{{ route('admin/activites.index') }}" class="hover:text-indigo-600">Retour aux activites</a>
            </p>
        </div>
    </section>

</x-admin>
