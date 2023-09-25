<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Employés</title>
</head>

<body>
    <x-admin>

        <main class="employe">

            @if ($employes->isEmpty())
                <h2>
                    Aucune employés actuellement
                </h2>
            @else
                {{-- Liste des employés --}}
                <section>
                    <h3>Toutes les employés</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employes as $employe)
                                <tr>
                                    <td>{{ $employe->prenom }}</td>
                                    <td>{{ $employe->nom }}</td>
                                    <td>{{ $employe->email }}</td>
                                    <td>
                                        {{-- MODIFICATION --}}
                                        <a href="{{ route('admin/employes.edit', ['id' => $employe->id]) }}">
                                            <span>Edit</span>
                                        </a>

                                        {{-- SUPPRESSION --}}
                                        <form action="{{ route('admin/employes.destroy') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $employe->id }}">
                                            <button type="submit">
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            @endif
        </main>
    </x-admin>
</body>

</html>
