<x-client titre="Nos forfaits">
    <section id="forfaits">
        <div class="forfaits-top">
            <h2>
                Bienvenue dans le Monde des Forfaits Asian Quest
            </h2>
            <p class="p1 tx-md">
                Plongez dans l'univers envoûtant d'Asian Quest avec nos forfaits soigneusement conçus pour vous offrir
                une expérience inoubliable. Que vous soyez un passionné d'Otaku ou simplement curieux de découvrir la
                culture asiatique à son meilleur, nos forfaits ont été créés pour répondre à toutes vos envies.
            </p>
            <p class="p2 tx-md">
                Découvrez ci-dessous nos différents forfaits, leurs avantages uniques et choisissez celui qui correspond
                le mieux à vos désirs. Préparez-vous à vivre Asian Quest comme jamais auparavant. Faites votre choix et
                préparez-vous à l'aventure !
            </p>
        </div>
        <ul class="forfaits">
            @foreach ($forfaits as $forfait)
                <li class="forfait">
                    <div class="details">
                        <h3>
                            {{ $forfait->nom }}
                        </h3>
                        <div class="prix">
                            <p class="prix-p tx-md">
                                <span>
                                    Prix:
                                </span>
                                {{ $forfait->prix }} $
                            </p>
                        </div>
                        <div class="duree">
                            <p class="duree-p tx-md">
                                <span>
                                    Durée:
                                </span>
                                {{ $forfait->duree }}
                            </p>
                        </div>
                        <p class="p-description tx-md">
                            {{ $forfait->description }}
                        </p>
                        {{-- RÉSERVATION --}}
                        <div class="commander">
                            <x-parts.bouton-primaire route="{{ route('reservations.create', ['id' => $forfait]) }}"
                                texte="Commander" />
                        </div>
                    </div>
                    <div class="image">
                        <img src="images/img-forfaits1.png" alt="image forfait 1">
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
</x-client>
