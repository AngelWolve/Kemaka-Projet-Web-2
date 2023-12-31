@props(['titre' => 'Asian Quest | Administration'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if ($titre == 'Connexion' || $titre == 'Enregistrement')
        <title>Asian Quest | {{ $titre }}</title>
    @elseif ($titre == 'Administration')
        <title>Asian Quest | {{ $titre }}</title>
    @else
        <title>Asian Quest | Admin | {{ $titre }}</title>
    @endif
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
    <link rel="stylesheet" href="https://use.typekit.net/dcs5msy.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <main>
        {{ $slot }}
    </main>

</body>

</html>
