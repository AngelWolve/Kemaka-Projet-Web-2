<x-admin>

    {{-- Message de confirmaiton d'ajout d'une actualité --}}
    <x-parts.alertes cle="succes" />

    <main class="actualite">

        @if ($actualites->isEmpty())
            <h1>
                Aucune actualités actuellement
            </h1>
        @else
            {{-- Liste des actualités --}}
            <section>
                <ul>
                    <h2>Toutes les actualités</h2>
                    <div>
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

                    <div>
                        @foreach ($actualites as $actualite)
                            <li>
                                <div>
                                    <h3>
                                        {{ $actualite->titre }}
                                    </h3>
                                    <p>
                                        {{ $actualite->description }}
                                    </p>

                                    <p>
                                        {{ $actualite->created_at }}
                                    </p>

                                    <div>

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

                                </div>

                            </li>
                        @endforeach
                    </div>

                </ul>
            </section>

        @endif
    </main>
</x-admin>
