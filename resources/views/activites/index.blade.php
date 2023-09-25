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

    <header>
        <h1>Les activités</h1>
    </header>

    <main class="main-acitvites">
        <section class="activites">
            @foreach ($activites as $activite)
                <div class="activite">
                    <div class="image">
                        <img src="{{ $activite->image }}" alt="image">
                    </div>
                    <div class="texte">
                        <h2>
                            {{ $activite->nom }}
                        </h2>
                        <p class="tx-lg">
                            {{ $activite->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </section>
    </main>

</body>

</html>
