<x-admin>
    <h1 class="client">liste des réservations</h1>
    @if ($reservations->isEmpty())
        <p class="message">Aucune réservation pour l'instant.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nom de forfait</th>
                    <th>Date_arrivée</th>
                    <th>Date_départ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->forfait->nom }}</td>
                        <td>{{ $reservation->date_arrivee }}</td>
                        <td>{{ $reservation->date_depart }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-admin>
