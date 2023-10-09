<x-admin titre="Réservations">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />
    <x-parts.alertes cle="echec" />

    {{-- Section réservations --}}
    <section id="admin-reservations">
        <h1>Liste des réservations</h1>

        {{-- Retour --}}
        <div>
            <a class="btn-retour" href="{{ route('admin.index') }}">
                Retour
            </a>
        </div>

        {{-- Aucune réservation --}}
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
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->created_at->format('Y-m-d') }}</td>
                            <td>{{ $reservation->user->nom_complet }}</td>
                            <td>{{ $reservation->forfait->nom }}</td>
                            <td>

                                {{-- Annuler la réservation --}}
                                <form action="{{ route('reservations.destroy') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $reservation->id }}">
                                    <button class="btn-annuler" type="submit">
                                        <span>
                                            Annuler
                                        </span>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table> {{-- Fin tableau des réservations --}}
        @endif

    </section> {{-- Fin section réservations --}}
</x-admin>
