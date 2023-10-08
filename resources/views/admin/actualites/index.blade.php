    <x-admin>
        {{-- Message de confirmation --}}
        <x-parts.alertes cle="succes" />

        {{-- Section admin actualités --}}
        <section id="admin-actualites">
            <h1>Toutes les actualités</h1>

            <div class="conteneur-create">

                {{-- Création --}}
                <a class="btn-create" href="{{ route('admin/actualites.create') }}">
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

            {{-- Aucune actualité --}}
            @if ($actualites->isEmpty())
                <p>
                    Aucune actualités actuellement
                </p>
            @else
                {{-- Liste des actualités --}}
                <ul>

                    @foreach ($actualites as $actualite)
                        <li>
                            <h2>
                                {{ $actualite->titre }}
                            </h2>

                            <p>
                                {{ $actualite->description }}
                            </p>

                            <div class="conteneur-boutons">

                                {{-- Modification --}}
                                <a href="{{ route('admin/actualites.edit', ['id' => $actualite->id]) }}">
                                    <span>
                                        modifier
                                    </span>
                                </a>

                                {{-- Suppression --}}
                                <form action="{{ route('admin/actualites.destroy') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $actualite->id }}" required>
                                    <button type="submit">
                                        <span>
                                            supprimer
                                        </span>
                                    </button>
                                </form>

                            </div>
                        </li>
                    @endforeach
                </ul> {{-- Fin de la liste des actualités --}}
            @endif
        </section> {{-- Fin de la section admin actualités --}}
    </x-admin>
