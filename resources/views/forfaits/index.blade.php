<x-client titre="Nos forfaits">
    {{-- Message de confirmaiton --}}
    <x-parts.alertes cle="succes" />
    <section id="forfaits">
        <div class="intro">
            <h2>
                Bienvenue dans le Monde des Forfaits Asian Quest
            </h2>
            <p class="tx-md">
                Plongez dans l'univers envoûtant d'Asian Quest avec nos forfaits soigneusement conçus pour vous offrir
                une expérience inoubliable. Que vous soyez un passionné d'Otaku ou simplement curieux de découvrir la
                culture asiatique à son meilleur, nos forfaits ont été créés pour répondre à toutes vos envies.
            </p>
            <p class="tx-md">
                Découvrez ci-dessous nos différents forfaits, leurs avantages uniques et choisissez celui qui correspond
                le mieux à vos désirs. Préparez-vous à vivre Asian Quest comme jamais auparavant. Faites votre choix et
                préparez-vous à l'aventure !
            </p>
        </div>
        <ul>
            @foreach ($forfaits as $forfait)
                <li>
                    <div class="conteneur">
                        <div class="details">
                            <h3>
                                {{ $forfait->nom }}
                            </h3>
                            <p class="tx-md">
                                <span>
                                    Prix:
                                </span>
                                {{ $forfait->prix }} $
                            </p>
                            <p class="tx-md">
                                <span>
                                    Durée:
                                </span>
                                {{ $forfait->duree }}
                            </p>
                            <p class="tx-md">
                                {{ $forfait->description }}
                            </p>
                        </div>
                        <img src="images/img-forfaits1.png" alt="image forfait 1">
                    </div>
                    {{-- RÉSERVATION --}}
                    <x-parts.bouton-primaire route="{{ route('reservations.create', ['id' => $forfait]) }}"
                        texte="Commander" />
                </li>
            @endforeach
        </ul>
    </section>
</x-client>
