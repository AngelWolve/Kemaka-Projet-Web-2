<x-admin titre="Réservations">
    <section id="employes">
        <h1>Liste des réservations</h1>
        <div>
            <a class="btn-retour" href="{{ route('accueil') }}">
                Retour
            </a>
        </div>
        @if ($reservations->isEmpty())
            <p>Aucune réservation pour l'instant.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom de client</th>
                        <th>Nom de forfait</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->created_at->format('Y-m-d') }}</td>
                            <td>{{ $reservation->user->nom_complet }}</td>
                            <td>{{ $reservation->forfait->nom }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
</x-admin>
