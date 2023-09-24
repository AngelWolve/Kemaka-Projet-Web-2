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

        <form action="{{ route('infolettre.store') }}" method="POST">
            @csrf
            <x-forms.input name="nom" autocomplete required max_length="255" placeholder="Entrez votre nom" />
            <x-forms.input name="email" type="email" autocomplete required max_length="255"
                placeholder="Entrez votre courriel" />
            <div>
                <button type="submit" class="btn-primaire">
                    S'abonner
                </button>
            </div>
        </form>
    </div>
</section>
