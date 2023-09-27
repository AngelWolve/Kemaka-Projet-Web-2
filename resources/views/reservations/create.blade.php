{{-- <x-client titre="Réservez ici!">
    <section id="reservation">
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
    </section> --}}

{{-- <section id="reservation-form">
        <form action="{{ route('reservations.store') }}" method="post">
            @csrf
            <input type="hidden" name="forfait_id" value="{{ $forfait->id }}">
            <label for="date_arrivee">Date d'arrivée :</label>
            <input type="date" name="date_arrivee" required>
            <label for="date_depart">Date de départ :</label>
            <input type="date" name="date_depart" required>
            <button type="submit">Réserver</button>
        </form>
    </section> --}}

<x-client titre="Réservez ici!">
    <section id="reservations">

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
            <button class="btn-primaire" type="submit">Réserver</button>
        </form>
    </section>
</x-client>
