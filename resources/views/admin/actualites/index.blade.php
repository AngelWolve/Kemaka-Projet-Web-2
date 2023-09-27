    <x-admin>
        {{-- Message de confirmaiton d'ajout d'une activité --}}
        <x-parts.alertes cle="succes" />

        <section id="admin-actualites">
            <h1>Toutes les actualités</h1>
            {{-- Liste des actualités --}}
            <div class="conteneur-create">
                {{-- CRÉATION --}}
                <a href="{{ route('admin/actualites.create') }}">
                    <span>
                        créer
                    </span>
                </a>
                {{-- RETOUR --}}
                <a href="{{ route('admin.index') }}">
                    <span>
                        Retour
                    </span>
                </a>
            </div>

            @if ($actualites->isEmpty())
                <p>
                    Aucune actualités actuellement
                </p>
            @else
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
                                {{-- MODIFICATION --}}
                                <a href="{{ route('admin/actualites.edit', ['id' => $actualite->id]) }}">
                                    <span>
                                        edit
                                    </span>
                                </a>

                                {{-- SUPPRESSION --}}
                                <form action="{{ route('admin/actualites.destroy') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $actualite->id }}">
                                    <button type="submit">
                                        <span>
                                            delete
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
