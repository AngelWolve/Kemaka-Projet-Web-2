<x-admin titre="Administration">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />

    {{-- Section administration --}}
    <section id="admin">
        <div class="container">

            <div>
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
            </div>

            <div>
                {{-- Retour à l'accueil --}}
                <a class="item" href="{{ route('accueil') }}">
                    Accueil
                </a>

                <form action="{{ route('deconnexion') }}" method="POST">
                    @csrf

                    <button type="submit" class="item">
                        Déconnexion
                    </button>
                </form>
            </div>

        </div>
    </section> {{-- Fin de la section administration --}}
</x-admin>
