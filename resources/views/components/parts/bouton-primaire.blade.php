@props(['route', 'texte'])

<a class="btn-primaire" href="{{ route('$route') }}" class="bouton-primaire">
    {{ $texte }}
</a>
