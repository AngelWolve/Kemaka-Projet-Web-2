<x-client titre="Réservez ici!">
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
    </section>
    <form action="{{ route('reservations.store') }}" method="post">
        @csrf
        <input type="hidden" name="forfait_id" value="{{ $forfait->id }}">

        <label for="date_arrivee">Date d'arrivée :</label>
        <input type="date" name="date_arrivee" required>

        <label for="date_depart">Date de départ :</label>
        <input type="date" name="date_depart" required>

        <button type="submit">Réserver</button>
    </form>

</x-client>
