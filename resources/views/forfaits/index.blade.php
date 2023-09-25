<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Les forfaits</h1>
    </div>
    @foreach ($forfaits as $forfait)
        <li>
            <h2>
                {{ $forfait->nom }}
            </h2>
            <p>
                {{ $forfait->description }}
            </p>

            <p>
                {{ $forfait->prix }}
            </p>
            <p>
                {{ $forfait->created_at }}
            </p>
        </li>

        {{-- RÉSERVATION --}}
        <a href="{{ route('reservations.create', $forfait) }}">
            <span>
                commander
            </span>
        </a>
    @endforeach

</body>

</html>
