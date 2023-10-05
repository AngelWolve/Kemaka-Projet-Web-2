<x-client titre="Réservez ici!">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="echec" />
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
            <form action="{{ route('reservations.store') }}" method="post">
                @csrf
                <div class="date">
                    <label for="date_arrivee">Date d'arrivée :</label>
                    <select name="date_arrivee" id="date_arrivee">
                        @foreach ($datesDisponibleArrivee as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="date">
                    <label for="date_depart">Date de départ :</label>
                    <select name="date_depart" id="date_depart">
                        @foreach ($datesDisponibleDepart as $date)
                            <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="forfait_id" value="{{ $forfait->id }}">
                <button class="btn-primaire" type="submit">Réserver</button>
            </form>
        </div>
    </section>
</x-client>
