@props(['titre' => 'Asian Quest'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre }}</title>
    <link rel="stylesheet" href="https://use.typekit.net/dcs5msy.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>

    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>

    </footer>
</body>

</html>
