{{-- Infolettre --}}
<section id="infolettre">
    <h2>
        Abonnes-toi à notre infolettre
    </h2>

    <div class="texte-infolettre">
        <p class="tx-md">
            Pour rester informé de toutes les actualités, y compris les dates de prévente et d'autres surprises
            exclusives,
            inscrivez-vous à notre infolettre et courrez la chance de gagner une paire de billets.
        </p>
    </div>

    <div class="formulaire-infolettre">
        <img src="{{ asset('images/img-infolettre.png') }}" alt="Image infolettre">

        {{-- Formulaire infolettre --}}
        <form action="{{ route('infolettre.store') }}" method="POST">
            @csrf

            {{-- Nom --}}
            <div class="input">
                <label for="nom">
                    Nom
                </label>
                <div>
                    <x-forms.erreur champ="nom" />
                    <input id="nom" name="nom" type="text" maxlength="255" placeholder="Entrez votre nom"
                        required>
                </div>
            </div>

            {{-- Courriel --}}
            <div class="input">
                <label for="email">
                    Courriel
                </label>
                <div>
                    <x-forms.erreur champ="email" />
                    <input id="email" name="email" type="email" maxlength="255"
                        placeholder="Entrez votre courriel" required>
                </div>
            </div>

            {{-- Soumission --}}
            <div>
                <button type="submit" class="btn-primaire">
                    S'abonner
                </button>
            </div>

        </form> {{-- Fin du formulaire infolettre --}}

    </div>
</section> {{-- Fin de la section infolettre --}}
