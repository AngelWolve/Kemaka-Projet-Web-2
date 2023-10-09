<x-client titre="Nos activités">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />

    {{-- Section activités --}}
    <section id="activites">
        <ul>

            {{-- Boucles des activités --}}
            @foreach ($activites as $activite)
                <li>
                    <img src="{{ $activite->image }}" alt="image d'activité">
                    <div>
                        <h2>
                            {{ $activite->nom }}
                        </h2>
                        <p class="tx-md">
                            {{ $activite->description }}
                        </p>
                    </div>
                </li>
            @endforeach

        </ul>

        {{-- Bouton pour voir les forfaits --}}
        <x-parts.bouton-primaire route="{{ route('forfaits.index') }}" texte="Voir nos forfaits" />

    </section> {{-- Fin de la section activités --}}
</x-client>
