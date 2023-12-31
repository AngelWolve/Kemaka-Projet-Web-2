<x-admin>
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />
    <x-parts.alertes cle="echec" />

    {{-- Section achats du client --}}
    <section id="panier">
        <h1>Liste des réservations</h1>

        {{-- Retour --}}
        <div>
            <a class="btn-retour" href="{{ route('accueil') }}">
                Retour
            </a>
        </div>

        {{-- Aucune réservation --}}
        @if ($reservations->isEmpty())
            <p class="message">Aucune réservation pour l'instant.</p>
        @else
            {{-- Tableau des réservations --}}
            <table>

                <thead>
                    <tr>
                        <th>Nom de forfait</th>
                        <th>Date_arrivée</th>
                        <th>Date_départ</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->forfait->nom }}</td>
                            <td>{{ $reservation->date_arrivee }}</td>
                            <td>{{ $reservation->date_depart }}</td>
                            <td>
                                {{-- Annuler la réservation --}}
                                <form action="{{ route('reservations.destroy') }}" method="POST"
                                    onclick="return confirm('Êtes-vous certain de vouloir annuler votre réservation?')">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $reservation->id }}" required>
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
            </table> {{-- Fin du tableau des réservations --}}

        @endif

    </section> {{-- Fin de la section achats du client --}}
</x-admin>
