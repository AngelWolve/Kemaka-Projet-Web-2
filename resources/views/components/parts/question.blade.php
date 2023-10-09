<section id="question">
    <h2>
        Vous avez des questions?
    </h2>
    <div class="formulaire-question">

        {{-- Formulaire de question --}}
        <form action="{{ route('question.store') }}" method="POST">
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

            {{-- Question/Message --}}
            <div class="textarea">
                <label for="question">
                    Question
                </label>
                <div>
                    <x-forms.erreur champ="question" />
                    <textarea id="question" name="question" rows="15" maxlength="750" required></textarea>
                </div>
            </div>
            <div class="btn-question">
                <button type="submit" class="btn-primaire">
                    Envoyer
                </button>
            </div>
        </form> {{-- Fin formulaire de question --}}

    </div>
</section>
