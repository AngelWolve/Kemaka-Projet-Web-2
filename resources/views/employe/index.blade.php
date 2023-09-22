<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>liste des réservation</h1>
    @if ($reservations->isEmpty())
        <p>Aucun réservation pour l'instant.</p>
    @else
        <ul>
            @foreach ($reservations as $reservation)
                <li>
                    <strong>Date:</strong> {{ $reservation->created_at }}<br>
                    <strong>Prénom de client:</strong> {{ $reservation->user->prenom }}<br>
                    <strong>Nom de client:</strong> {{ $reservation->user->nom }}<br>
                    <strong>Nom de forfait:</strong> {{ $reservation->forfait->nom }}<br>

                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>
