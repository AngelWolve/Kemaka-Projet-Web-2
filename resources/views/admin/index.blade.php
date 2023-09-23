<x-admin>

    {{-- <a href="{{ route('#') }}" class="btn btn-primary">la liste des administateurs</a>
    <a href="{{ route('#') }}" class="btn btn-primary">la liste des clients</a> --}}
    <a href="{{ route('admin/employes.index') }}">la liste des employés</a>
    <a href="{{ route('admin/activites.index') }}">la liste des activités</a>
    <a href="{{ route('admin/actualites.index') }}">la liste des actualités</a>

</x-admin>
