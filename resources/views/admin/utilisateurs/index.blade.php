<x-admin>
    {{-- Message de confirmaiton d'ajout d'une utilisateur --}}
    <x-parts.alertes cle="succes" />
    <section id="admin-administrateurs">
        <h1>Administrateurs</h1>
        {{-- Liste des administrateurs --}}
        <div class="conteneur-create">
            {{-- CRÉATION --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
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
                        <th>Email</th>
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
                                        <span>
                                            modifier
                                        </span>
                                    </a>


                                    <form action="{{ route('admin/utilisateurs.destroy') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $administrateur->id }}">

                                        <button type="submit">
                                            <span>
                                                supprimer
                                            </span>
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

    {{-- Message de confirmaiton d'ajout d'une employé --}}
    <x-parts.alertes cle="succes" />
    <section id="admin-employes">
        <h1>Employes</h1>
        {{-- Liste des employes --}}
        <div class="conteneur-create">
            {{-- CRÉATION --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
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

        @if ($employes->isEmpty())
            <p>
                Aucune employes actuellement
            </p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
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
                                        <span>
                                            modifier
                                        </span>
                                    </a>


                                    <form action="{{ route('admin/utilisateurs.destroy') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $employe->id }}">

                                        <button type="submit">
                                            <span>
                                                supprimer
                                            </span>
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

    {{-- Message de confirmaiton d'ajout d'une client --}}
    <x-parts.alertes cle="succes" />
    <section id="admin-clients">
        <h1>Clients</h1>
        {{-- Liste des clients --}}
        <div class="conteneur-create">
            {{-- CRÉATION --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
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
                        <th>Email</th>
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
                                        <span>
                                            modifier
                                        </span>
                                    </a>


                                    <form action="{{ route('admin/utilisateurs.destroy') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $client->id }}">

                                        <button type="submit">
                                            <span>
                                                supprimer
                                            </span>
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
