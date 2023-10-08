<x-admin titre="Liste d'utilisateurs">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />

    {{-- Section administrateur --}}
    <section id="admin-administrateurs">
        <h2>Administrateurs</h2>

        <div class="conteneur-create">

            {{-- Création --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
                créer
            </a>

            {{-- Retour --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                Retour
            </a>
        </div>

        {{-- Aucun administrateur --}}
        @if ($administrateurs->isEmpty())
            <p>
                Aucun administrateur actuellement
            </p>
        @else
            {{-- Tableau des administrateurs --}}
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

                                    {{-- Modification --}}
                                    <a href="{{ route('admin/utilisateurs.edit', ['id' => $administrateur->id]) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- Suppression --}}
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
            </table> {{-- Fin du tableau des administrateurs --}}
        @endif
    </section> {{-- Fin de la section administrateurs --}}

    {{-- Section employés --}}
    <section id="admin-employes">
        <h2>Employés</h2>

        <div class="conteneur-create">

            {{-- Création --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
                créer
            </a>

            {{-- Retour --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                Retour
            </a>
        </div>

        {{-- Aucun employé --}}
        @if ($employes->isEmpty())
            <p>
                Aucun employé actuellement
            </p>
        @else
            {{-- Tableau des employés --}}
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

                                    {{-- Modification --}}
                                    <a href="{{ route('admin/utilisateurs.edit', ['id' => $employe->id]) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- Suppression --}}
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
            </table> {{-- Fin du tableau des employés --}}
        @endif
    </section> {{-- Fin de la section employés --}}

    {{-- Section clients --}}
    <section id="admin-clients">
        <h2>Clients</h2>

        <div class="conteneur-create">

            {{-- Création --}}
            <a class="btn-create" href="{{ route('enregistrement.create') }}">
                créer
            </a>

            {{-- Retour --}}
            <a class="btn-retour" href="{{ route('admin.index') }}">
                Retour
            </a>
        </div>

        {{-- Aucun client --}}
        @if ($clients->isEmpty())
            <p>
                Aucun client actuellement
            </p>
        @else
            {{-- Tableau des clients --}}
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

                                    {{-- Modification --}}
                                    <a href="{{ route('admin/utilisateurs.edit', ['id' => $client->id]) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- Suppression --}}
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
            </table> {{-- Fin du tableau des clients --}}
        @endif
    </section> {{-- Fin de la section clients --}}
</x-admin>
