<x-admin>
    <h1>Toutes les actualités</h1>
    <main>
        @if ($actualites->isEmpty())
            <h2>
                Aucune actualités actuellement
            </h2>
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

                        <p>
                            {{ $actualite->created_at }}
                        </p>

                        <div>
                            <div>
                                {{-- MODIFICATION --}}
                                <a href="{{ route('admin/actualites.edit', ['id' => $actualite->id]) }}">
                                    <span>
                                        edit
                                    </span>
                                </a>
                                {{-- CRÉATION --}}
                                <a href="{{ route('admin/actualites.create') }}">
                                    <span>
                                        créer
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
            </ul>
        @endif
    </main>
</x-admin>
