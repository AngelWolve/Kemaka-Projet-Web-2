<x-client titre="Nos activités">
    <section id="activites">
        <ul class="activites">
            @foreach ($activites as $activite)
                <li class="activite">
                    <div class="image">
                        <img src="{{ $activite->image }}" alt="image">
                    </div>
                    <div class="texte">
                        <h2>
                            {{ $activite->nom }}
                        </h2>
                        <p class="tx-lg">
                            {{ $activite->description }}
                        </p>
                    </div>
                </li>
            @endforeach
            </ul>
            <x-parts.bouton-primaire route="forfaits.index" texte="Voir nos forfaits" />
    </section>
</x-client>
