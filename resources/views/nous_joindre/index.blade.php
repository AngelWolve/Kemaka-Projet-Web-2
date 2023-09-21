<x-client>
    <div class="contact">
        <h2>Heures d'ouverture</h2>
        <div class="date">
            <div>
                <p>19 juillet</p>
                <p>Admissions</p>
            </div>
            <div>
                <p>20 juillet</p>
                <p>Admissions</p>
            </div>
            <div>
                <p>21 juillet</p>
                <p>Admissions</p>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('nous_joindre.store') }}">
        @csrf
        <div class="form-group">
            <label for="nom">Nom Complet</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Courriel</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</x-client>
