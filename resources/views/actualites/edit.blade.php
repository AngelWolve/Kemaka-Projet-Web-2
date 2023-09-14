<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Modifier une actualité</h1>
    <div>
        <form action="{{ route('actualites.update') }}" method="POST">
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

                    <input id="description" name="description" type="text" autofocus
                        value="{{ old('description') ?? $actualite->description }}">
                </div>
            </div>

            {{-- SUBMIT --}}
            <div>
                <input type="submit"  value="Modifier!">
            </div>
        </form>

        {{-- RETOUR AUX ACTUALITÉS --}}
        <p>
            <a href="{{ route('actualites.index') }}">Retour aux actualités</a>
        </p>
    </div>
</body>

</html>
