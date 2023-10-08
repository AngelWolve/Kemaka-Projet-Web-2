<x-admin>
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />

    {{-- Section administration --}}
    <section id="admin">
        <div class="container">
            {{-- Utilisateurs --}}
            <a class="item" href="{{ route('admin/utilisateurs.index') }}">
                Liste des utilisateurs
            </a>
            {{-- Activités --}}
            <a class="item" href="{{ route('admin/activites.index') }}">
                Liste des activités
            </a>
            {{-- Actualités --}}
            <a class="item" href="{{ route('admin/actualites.index') }}">
                Liste des actualités
            </a>
            {{-- Réservations --}}
            <a class="item" href="{{ route('reservations.index') }}">
                Liste des réservations
            </a>
            {{-- Retour à l'accueil --}}
            <a class="item" href="{{ route('accueil') }}">
                Accueil
            </a>
        </div>
    </section> {{-- Fin de la section administration --}}
</x-admin>
