<x-admin>

    {{-- <a href="{{ route('#') }}" class="btn btn-primary">la liste des administateurs</a>
    <a href="{{ route('#') }}" class="btn btn-primary">la liste des clients</a> --}}
    <a href="{{ route('admin/activites.index') }}" class="btn btn-primary">la liste des activités</a>
    <a href="{{ route('admin/actualites.index') }}" class="btn btn-primary">la liste des actualités</a>

</x-admin>
