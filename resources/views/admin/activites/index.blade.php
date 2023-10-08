<x-admin>
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />

    {{-- Section admin activité --}}
    <section id="admin-activites">
        <h1>Toutes les activités</h1>

        <div class="conteneur-create">

            {{-- Création --}}
            <a class="btn-create" href="{{ route('admin/activites.create') }}">
                <span>
                    créer
                </span>
            </a>

            {{-- Retour --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                <span>
                    Retour
                </span>
            </a>
        </div>

        {{-- Aucune activité --}}
        @if ($activites->isEmpty())
            <p>
                Aucune activités actuellement
            </p>
        @else
            {{-- Liste des activités --}}
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

                            {{-- Modification --}}
                            <a href="{{ route('admin/activites.edit', ['id' => $activite->id]) }}">
                                <span>
                                    modifier
                                </span>
                            </a>

                            {{-- Suppression --}}
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
            </ul> {{-- Fin de la liste des activités --}}
        @endif
    </section> {{-- Fin de la section admin activité --}}
</x-admin>
