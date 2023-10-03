@props(['titre' => 'Asian Quest'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asian Quest | {{ $titre }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/dcs5msy.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-parts.nav />
    @if ($titre != 'Accueil')
        <x-parts.header titre="{{ $titre }}" />
    @endif

    <main>
        {{ $slot }}
    </main>

    <x-parts.infolettre />

    <x-parts.footer />

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
