<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
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
                                <a href="{{ route('actualites.edit', ['id' => $actualite->id]) }}">
                                    <span>
                                        edit
                                    </span>
                                </a>
                                 {{-- CRÉATION --}}
                                 <a href="{{ route('actualites.create')}}">
                                    <span>
                                        créer
                                    </span>
                                </a>
                                 {{-- SUPPRESSION --}}
                                 <form action="{{ route('actualites.destroy') }}" method="POST">
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
</body>

</html>