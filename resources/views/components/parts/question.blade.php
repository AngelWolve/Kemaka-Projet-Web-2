<section id="question">
    <h2>
        Vous avez des questions?
    </h2>
    <div class="formulaire-question">
        <form action="{{ route('question.store') }}" method="POST">
            @csrf
            <x-forms.input name="nom" autocomplete required max_length="255" placeholder="Entrez votre nom" />
            <x-forms.input name="email" type="email" autocomplete required max_length="255"
                placeholder="Entrez votre courriel" />
            <textarea class="tx-md" name="question" cols="30" rows="10" placeholder="Entrez votre question"></textarea>
            <div class="btn-question">
                <button type="submit" class="btn-primaire">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</section>
