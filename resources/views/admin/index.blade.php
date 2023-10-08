<x-admin>
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />
    <section id="admin">
        <div class="container">
            <a class="item" href="{{ route('admin/utilisateurs.index') }}">
                Liste des utilisateurs
            </a>
            <a class="item" href="{{ route('admin/activites.index') }}">
                Liste des activités
            </a>
            <a class="item" href="{{ route('admin/actualites.index') }}">
                Liste des actualités
            </a>
            <a class="item" href="{{ route('reservations.index') }}">
                Liste des réservations
            </a>
            <a class="item" href="{{ route('accueil') }}">
                Accueil
            </a>
        </div>
    </section>
</x-admin>
