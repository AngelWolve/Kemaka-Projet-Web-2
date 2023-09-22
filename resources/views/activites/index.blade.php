<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste d'activités</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="banniere-activite">
        <h1>
            Les activités
        </h1>
    </div>

    {{-- <div class="main-activite">
        @foreach ($activites as $activite)
            <h2 class="activite">
                {{ $activite->nom }}
            </h2>
            <p class="activite">
                {{ $activite->description }}
            </p>
            <img src="{{ asset('images/???.png') }}" alt="image" class="activite">
        @endforeach
    </div> --}}
</body>

</html>
