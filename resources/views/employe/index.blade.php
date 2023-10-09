<x-admin titre="Réservations">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />

    {{-- Section employé --}}
    <section id="employes">
        <h1>Liste des réservations</h1>

        <div>
            <a class="btn-retour" href="{{ route('accueil') }}">
                Retour
            </a>
        </div>

        {{-- Si aucune réservation --}}
        @if ($reservations->isEmpty())
            <p>Aucune réservation pour l'instant.</p>
        @else
            {{-- Tableau des réservations --}}
            <table>

                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom du client</th>
                        <th>Nom du forfait</th>
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
            </table> {{-- Fin tableau des réservations --}}
        @endif

    </section> {{-- Fin section employé --}}
</x-admin>
