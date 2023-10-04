<x-admin>
    <section id="admin">
        <div class="container">
            <div class="item"> <a href="{{ route('admin/utilisateurs.index') }}">Liste des utilisateurs</a> </div>
            <div class="item"> <a href="{{ route('admin/activites.index') }}">Liste des activités</a> </div>
            <div class="item"> <a href="{{ route('admin/actualites.index') }}">Liste des actualités</a> </div>
            <div class="item"> <a href="{{ route('accueil') }}">Accueil</a> </div>
        </div>
    </section>
</x-admin>
