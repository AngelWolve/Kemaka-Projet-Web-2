<x-admin>
    {{-- Section modification d'activité --}}
    <section id="admin-modifier-activite">

        {{-- Message de confirmation --}}
        @if (session('succes'))
            <p>
                {{ session('succes') }}
            </p>
        @endif

        <div class="modifier-activite">
            <h1>Modifier une activité</h1>

            {{-- Formulaire de modification --}}
            <form action="{{ route('admin/activites.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Champ caché pour l'id --}}
                <x-forms.erreur champ="id" />
                <input type="hidden" name="id" value="{{ $activite->id }}" required>

                {{-- Nom --}}
                <div class="input">
                    <label for="nom">
                        Nom
                    </label>
                    <div>
                        <x-forms.erreur champ="nom" />
                        <input id="nom" name="nom" type="text" autofocus maxlength="75"
                            value="{{ old('nom') ?? $activite->nom }}" required>
                    </div>
                </div>

                {{-- Description --}}
                <div class="textarea">
                    <label for="description">
                        Description
                    </label>
                    <div>
                        <x-forms.erreur champ="description" />
                        <textarea id="description" name="description" rows="10" maxlength="500" required>{{ old('description') ?? $activite->description }}</textarea>
                    </div>
                </div>

                {{-- Image --}}
                <div class="input">
                    <label for="image">
                        Image
                    </label>
                    <div>
                        <x-forms.erreur champ="image" />
                        <div class="img-activite">
                            <img src="{{ $activite->image }}" width="100" alt="Image de l'activité">
                            <input id="image" name="image" type="file">
                        </div>
                    </div>
                </div>

                {{-- Soumission --}}
                <div class="submit">
                    <input class="btn-primaire" type="submit" value="Modifier">
                </div>

            </form> {{-- Fin du formulaire de modification --}}

            {{-- Retour --}}
            <div class="retour">
                <a href="{{ route('admin/activites.index') }}">
                    Retour aux activités
                </a>
            </div>

        </div>
    </section> {{-- Fin de la section modification d'activité --}}
</x-admin>
