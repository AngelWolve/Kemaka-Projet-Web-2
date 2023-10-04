<x-admin>
    <section id="admin-modifier-activite">
        <div class="activite-modifier">
            <h1>Modifier une activité</h1>
            {{-- MESSAGES --}}
            @if (session('succes'))
                <p>
                    {{ session('succes') }}</p>
            @endif
            {{-- FORMULAIRE --}}
            <form action="{{ route('admin/activites.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $activite->id }}">

                {{-- NOM --}}
                <div class="nom">
                    <label for="nom">Nom</label>
                    <div>
                        <x-forms.erreur champ="nom" />

                        <input id="nom" name="nom" type="text" autofocus
                            value="{{ old('nom') ?? $activite->nom }}">
                    </div>
                </div>

                {{-- DESCRIPTION --}}
                <div class="description">
                    <label for="description">Description</label>
                    <div>
                        <x-forms.erreur champ="description" />

                        <textarea name="description" id="description" rows="5" maxlength="500">{{ old('description') ?? $activite->description }}</textarea>

                    </div>
                </div>

                {{-- IMAGE --}}
                <div class="image">
                    <label for="image">Image</label>
                    <div class="image-contenu">
                        <img src="{{ $activite->image }}" width="100" alt="">
                        <x-forms.erreur champ="image" />

                        <input id="image" name="image" type="file" autofocus>
                    </div>
                </div>

                {{-- SUBMIT --}}
                <div class="submit-modifier">
                    <input class="btn-primaire" type="submit" value="Modifier!">
                </div>
            </form>

            {{-- RETOUR AUX ACTIVITÉS --}}
            <p class="retour-activite">
                <a href="{{ route('admin/activites.index') }}">Retour aux activités</a>
            </p>
        </div>
    </section>

</x-admin>
