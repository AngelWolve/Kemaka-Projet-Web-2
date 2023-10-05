<x-admin>
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />
    <section id="admin-administrateurs">
        <h2>Administrateurs</h2>
        {{-- Liste des administrateurs --}}
        <div class="conteneur-create">
            {{-- CRÉATION --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
                créer
            </a>
            {{-- RETOUR --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                Retour
            </a>
        </div>

        @if ($administrateurs->isEmpty())
            <p>
                Aucune administrateurs actuellement
            </p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Courriel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($administrateurs as $administrateur)
                        <tr>
                            <td>{{ $administrateur->prenom }}</td>
                            <td>{{ $administrateur->nom }}</td>
                            <td>{{ $administrateur->email }}</td>
                            <td>
                                <div class="conteneur-boutons">

                                    <a href="{{ route('admin/utilisateurs.edit', ['id' => $administrateur->id]) }}">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ route('admin/utilisateurs.destroy') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $administrateur->id }}">

                                        <button type="submit">

                                            <i class="fas fa-trash-alt"></i>

                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>

    <section id="admin-employes">
        <h2>Employés</h2>
        {{-- Liste des employes --}}
        <div class="conteneur-create">
            {{-- CRÉATION --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
                créer
            </a>
            {{-- RETOUR --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                Retour
            </a>
        </div>

        @if ($employes->isEmpty())
            <p>
                Aucune employés actuellement
            </p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Courriel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employes as $employe)
                        <tr>
                            <td>{{ $employe->prenom }}</td>
                            <td>{{ $employe->nom }}</td>
                            <td>{{ $employe->email }}</td>
                            <td>
                                <div class="conteneur-boutons">

                                    <a href="{{ route('admin/utilisateurs.edit', ['id' => $employe->id]) }}">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ route('admin/utilisateurs.destroy') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $employe->id }}">

                                        <button type="submit">

                                            <i class="fas fa-trash-alt"></i>

                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>

    <section id="admin-clients">
        <h2>Clients</h2>
        {{-- Liste des clients --}}
        <div class="conteneur-create">
            {{-- CRÉATION --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
                créer
            </a>
            {{-- RETOUR --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                Retour
            </a>
        </div>

        @if ($clients->isEmpty())
            <p>
                Aucune clients actuellement
            </p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Courriel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->prenom }}</td>
                            <td>{{ $client->nom }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <div class="conteneur-boutons">

                                    <a href="{{ route('admin/utilisateurs.edit', ['id' => $client->id]) }}">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ route('admin/utilisateurs.destroy') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $client->id }}">

                                        <button type="submit">

                                            <i class="fas fa-trash-alt"></i>

                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
</x-admin>
