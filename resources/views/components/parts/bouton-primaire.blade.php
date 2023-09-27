@props(['route', 'texte'])

<a class="btn-primaire" href="{{ route($route) }}">
    {{ $texte }}
</a>
