<x-admin>
    <section id="admin">
        <div class="container">
            <div class="item"> <a href="{{ route('admin/employes.index') }}"> la liste des utilisateurs </a> </div>
            <div class="item"> <a href="{{ route('admin/activites.index') }}"> la liste des activités </a> </div>
            <div class="item"> <a href="{{ route('admin/actualites.index') }}"> la liste des actualités </a> </div>
        </div>
    </section>
</x-admin>
