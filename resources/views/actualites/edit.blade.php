<x-admin>
    <section id="admin-modifier-actualite">
        <h1>Modifier une actualité</h1>
        {{-- MESSAGES --}}
        @if (session('succes'))
            <p>
                {{ session('succes') }}</p>
        @endif
        <div class="actualite-modifier">
            <form action="{{ route('admin/actualites.update') }}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $actualite->id }}">

                {{-- TITRE --}}
                <div>
                    <label for="titre">Titre</label>
                    <div>
                        <x-forms.erreur champ="titre" />

                        <input id="titre" name="titre" type="text" autofocus
                            value="{{ old('titre') ?? $actualite->titre }}">
                    </div>
                </div>
                {{-- DESCRIPTION --}}
                <div>
                    <label for="description">Description</label>
                    <div>
                        <x-forms.erreur champ="description" />

                        <textarea name="description" id="description" rows="5" maxlength="500">{{ old('description') ?? $actualite->description }}</textarea>

                    </div>
                </div>

                {{-- SUBMIT --}}
                <div>
                    <input type="submit" value="Modifier!">
                </div>
            </form>

            {{-- RETOUR AUX ACTUALITÉS --}}
            <p>
                <a href="{{ route('admin/actualites.index') }}">Retour aux actualités</a>
            </p>
        </div>
    </section>

</x-admin>
