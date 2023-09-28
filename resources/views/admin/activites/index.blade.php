<x-admin>

    {{-- Message de confirmaiton d'ajout d'une activité --}}
    <x-parts.alertes cle="succes" />

    <section id="admin-activites">
        <h1>Toutes les activités</h1>
        {{-- Liste des activités --}}
        <div class="conteneur-create">
            {{-- CRÉATION --}}
            <a class="btn-create" href="{{ route('admin/activites.create') }}">
                <span>
                    créer
                </span>
            </a>
            {{-- RETOUR --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                <span>
                    Retour
                </span>
            </a>
        </div>

        @if ($activites->isEmpty())
            <p>
                Aucune activités actuellement
            </p>
        @else

            <ul>
                @foreach ($activites as $activite)
                    <li>
                        <h2>
                            {{ $activite->nom }}
                        </h2>

                        <div class="conteneur-activites">
                            <p>
                                {{ $activite->description }}
                            </p>

                            <img src="{{ $activite->image }}" alt="image de activité" width="400" height="220">
                        </div>

                        <div class="conteneur-boutons">
                            {{-- MODIFICATION --}}
                            <a href="{{ route('admin/activites.edit', ['id' => $activite->id]) }}">
                                <span>
                                    modifier
                                </span>
                            </a>

                            {{-- SUPPRESSION --}}
                            <form action="{{ route('admin/activites.destroy') }}" method="POST">
                                @csrf

                                <input type="hidden" name="id" value="{{ $activite->id }}">
                                <button type="submit">
                                    <span>
                                        supprimer
                                    </span>
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </section>
</x-admin>
