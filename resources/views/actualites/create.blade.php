<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Créer une actualité</h1>
    {{-- MESSAGES --}}
    @if (session('succes'))
        <p>
            {{ session('succes') }}</p>
    @endif
    <div>
        {{-- FORMULAIRE --}}
        <form action="{{ route('admin/actualites.store') }}" method="POST">
            @csrf

            <div>
                {{-- TITRE --}}
                <label for="titre">Titre</label>
                <div>

                    <x-forms.erreur champ="titre" />

                    <input id="titre" name="titre" type="text" autofocus value="{{ old('titre') }}">
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

            {{-- SUBMIT --}}
            <div>
                <input type="submit" vlue="Ajouter!">
            </div>
        </form>

        {{-- LIEN RETOUR --}}
        <p>
            <a href="{{ route('admin/actualites.index') }}" class="hover:text-indigo-600">Retour aux actualites</a>
        </p>
    </div>
</body>

</html>
