@props(['titre' => 'Asian Quest'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asian Quest | {{ $titre }}</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RB3DNP3N8C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-RB3DNP3N8C');
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/dcs5msy.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-parts.nav />
    @if ($titre == 'Accueil')
        <x-parts.header-accueil />
    @else
        <x-parts.header titre="{{ $titre }}" />
    @endif

    <main>
        {{ $slot }}
    </main>

    <x-parts.infolettre />

    <x-parts.footer />

    <script src="{{ asset('js/hamburger.js') }}"></script>
    @if ($titre == 'Accueil')
        <script src="{{ asset('js/countdown.js') }}"></script>
        <script src="{{ asset('js/imageCarrousel.js') }}"></script>
        <script src="{{ asset('js/swiper.js') }}"></script>
    @endif
</body>

</html>
