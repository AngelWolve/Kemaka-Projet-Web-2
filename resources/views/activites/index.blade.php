<x-client titre="Nos activités">
    <section id="activites">
        <ul>
            @foreach ($activites as $activite)
                <li>
                    <img src="{{ $activite->image }}" alt="image">
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
        <x-parts.bouton-primaire route="{{ route('forfaits.index') }}" texte="Voir nos forfaits" />
    </section>
</x-client>
