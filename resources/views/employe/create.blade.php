<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Créer une employé</h1>
    {{-- MESSAGES --}}
    @if (session('succes'))
        <p>
            {{ session('succes') }}</p>
    @endif
    <div>
        {{-- FORMULAIRE --}}
        <form action="{{ route('admin/employes.store') }}" method="POST">
            @csrf

            <div>
                {{-- PRÉNOM --}}
                <label for="prenom">Prénom</label>
                <div>

                    <x-forms.erreur champ="prenom" />

                    <input id="prenom" name="prenom" type="text" autofocus value="{{ old('prenom') }}">
                </div>
            </div>

            <div>
                {{-- NOM --}}
                <label for="nom">Nom</label>
                <div>

                    <x-forms.erreur champ="nom" />

                    <input id="nom" name="nom" type="text" autofocus value="{{ old('nom') }}">
                </div>

            </div>

            <div>
                {{-- EMAIL --}}
                <label for="email">Courriel</label>
                <div>

                    <x-forms.erreur champ="email" />

                    <input id="email" name="email" type="text" autofocus value="{{ old('email') }}">
                </div>

            </div>

            {{-- SUBMIT --}}
            <div>
                <input type="submit" vlue="Ajouter!">
            </div>
        </form>

        {{-- LIEN RETOUR --}}
        <p>
            <a href="{{ route('admin/employes.index') }}" class="hover:text-indigo-600">Retour aux employés</a>
        </p>
    </div>
</body>

</html>
