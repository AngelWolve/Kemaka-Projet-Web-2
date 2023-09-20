<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('reservations.store') }}" method="post">
        @csrf
        <input type="hidden" name="forfait_id" value="{{ $forfait->id }}">

        <label for="date_arrivee">Date d'arrivée :</label>
        <input type="date" name="date_arrivee" required>

        <label for="date_depart">Date de départ :</label>
        <input type="date" name="date_depart" required>

        <button type="submit">Réserver</button>
    </form>

</body>

</html>
