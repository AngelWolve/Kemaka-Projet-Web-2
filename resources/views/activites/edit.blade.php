<x-admin>
    <section id="admin-modifier-activite">
        <h1>Modifier une activité</h1>
    {{-- MESSAGES --}}
    @if (session('succes'))
        <p>
            {{ session('succes') }}</p>
    @endif
    <div class="activite-modifier">
        <form action="{{ route('admin/activites.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $activite->id }}">

            {{-- NOM --}}
            <div>
                <label for="nom">Nom</label>
                <div>
                    <x-forms.erreur champ="nom" />

                    <input id="nom" name="nom" type="text" autofocus
                        value="{{ old('nom') ?? $activite->nom }}">
                </div>
            </div>
            {{-- DESCRIPTION --}}
            <div>
                <label for="description">Description</label>
                <div>
                    <x-forms.erreur champ="description" />

                    <textarea name="description" id="description" rows="5" maxlength="500">{{ old('description') ?? $activite->description }}</textarea>

                </div>
            </div>

             {{-- IMAGE --}}
             <div>
                <label for="image">Image</label>
                <div>
                    <img src="{{$activite->image}}" width="100"  alt="">
                    <x-forms.erreur champ="image" />

                    <input id="image" name="image" type="file" autofocus >
                </div>
            </div>

            {{-- SUBMIT --}}
            <div>
                <input type="submit" value="Modifier!">
            </div>
        </form>

        {{-- RETOUR AUX ACTIVITÉS --}}
        <p>
            <a href="{{ route('admin/activites.index') }}">Retour aux activités</a>
        </p>
    </div>
    </section>

</x-admin>
