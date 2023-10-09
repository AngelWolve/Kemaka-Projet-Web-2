<x-client titre="Réservez ici!">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="echec" />

    {{-- Section réservation --}}
    <section id="reservations">

        <div class="reservations-bg">
            <div class="details">
                <h3>
                    {{ $forfait->nom }}
                </h3>
                <div class="prix">
                    <p class="prix-p tx-md">
                        <span>
                            Prix:
                        </span>
                        {{ $forfait->prix }} $
                    </p>
                </div>
                <div class="duree">
                    <p class="duree-p tx-md">
                        <span>
                            Durée:
                        </span>
                        {{ $forfait->duree }}
                    </p>
                </div>
            </div>

            {{-- Formulaire de réservation --}}
            <form action="{{ route('reservations.store') }}" method="post">
                @csrf

                {{-- Date d'arrivée --}}
                <div class="date">
                    <label for="date_arrivee">Date d'arrivée :</label>
                    <select name="date_arrivee" id="date_arrivee">
                        @foreach ($dates_disponibles_arrivee as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Date de départ --}}
                <div class="date">
                    <label for="date_depart">Date de départ :</label>
                    <select name="date_depart" id="date_depart">
                        @foreach ($dates_disponibles_arrivee as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Id du forfait caché --}}
                <input type="hidden" name="forfait_id" value="{{ $forfait->id }}">

                {{-- Soumission --}}
                <button class="btn-primaire" type="submit" onclick="return confirm('Êtes-vous certain de vouloir acheter ce forfait?')">
                    Réserver
                </button>
            </form> {{-- Fin formulaire de réservation --}}
        </div>

    </section> {{-- Fin section réservation --}}
</x-client>
