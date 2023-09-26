<x-admin>

    {{-- Message de confirmaiton d'ajout d'une activité --}}
    <x-parts.alertes cle="succes" />

    <main class="activite">

        @if ($activites->isEmpty())
            <h1>
                Aucune activités actuellement
            </h1>
        @else
            {{-- Liste des activités --}}
            <section>
                <ul>
                    <h3>Toutes les activités</h3>
                    <div>
                        {{-- CRÉATION --}}
                        <a href="{{ route('admin/activites.create') }}">
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
                        @foreach ($activites as $activite)
                            <li>
                                <div>
                                    <h4>
                                        {{ $activite->nom }}
                                    </h4>

                                    <p>
                                        {{ $activite->description }}
                                    </p>


                                    <img src="{{ $activite->image }}" alt="image de activité" width="400" height="250">

                                    <div>

                                        {{-- MODIFICATION --}}
                                        <a href="{{ route('admin/activites.edit', ['id' => $activite->id]) }}">
                                            <span>
                                                edit
                                            </span>
                                        </a>

                                        {{-- SUPPRESSION --}}
                                        <form action="{{ route('admin/activites.destroy') }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $activite->id }}">
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
