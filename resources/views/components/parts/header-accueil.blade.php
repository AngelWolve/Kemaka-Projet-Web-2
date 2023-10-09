<header id="header-accueil">

    {{-- Image du header --}}
    <img src="{{ asset('images/header-accueil.png') }}" alt="Image header">

    <div class="conteneur-header">
        <h2>
            Vivez la folie otaku à Asian Quest!
        </h2>

        {{-- Compte à rebours --}}
        <section id="countdown">
            {{-- Jours --}}
            <div>
                <div>
                    <span id="jours" class="tx-xxl">-</span>
                </div>
                <p class="tx-md">Jours</p>
            </div>
            {{-- Heures --}}
            <div>
                <div>
                    <span id="heures" class="tx-xxl">-</span>
                </div>
                <p class="tx-md">Heures</p>
            </div>
            {{-- Minutes --}}
            <div>
                <div>
                    <span id="minutes" class="tx-xxl">-</span>
                </div>
                <p class="tx-md">Minutes</p>
            </div>
            {{-- Secondes --}}
            <div>
                <div>
                    <span id="secondes" class="tx-xxl">-</span>
                </div>
                <p class="tx-md">Secondes</p>
            </div>
        </section> {{-- Fin du compte à rebours --}}

        {{-- Bouton pour voir les activités --}}
        <div class="call-to-action">
            <x-parts.bouton-primaire route="{{ route('activites.index') }}" texte="Voir nos activités" />
        </div>

    </div>
</header>
