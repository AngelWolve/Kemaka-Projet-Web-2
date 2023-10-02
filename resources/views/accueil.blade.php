<x-client>
    <div class="conteneur-accueil">
        <h1>
            Accueil
        </h1>

        <section id="carrousel-instagram">
            <h2>
                Notre galerie Instagram
            </h2>
            <p>
                Carrousel d'images ICI
            </p>
        </section>
        <section id="carrousel-actualites">
            <h2>
                Les dernières actualités
            </h2>
            <ul>
                <swiper-container navigation="true" slides-per-view="3" speed="500" css-mode="true">
                    @foreach ($actualites as $actualite)
                        <swiper-slide>
                            <li>
                                <h3>
                                    {{ $actualite->titre }}
                                </h3>
                                <p>
                                    {{ $actualite->created_at->diffForHumans() }}
                                </p>
                                <div class="separation"></div>
                                <p>
                                    {{ $actualite->description }}
                                </p>
                            </li>
                        </swiper-slide>
                    @endforeach
                </swiper-container>
            </ul>
        </section>
        <section id="partenaires">
            <h2>
                Merci à nos partenaires
            </h2>
            <div class="partenaires">
                <img src="{{ asset('images/logo-pipablogs.png') }}" alt="Logo PipaBlogs">
                <img src="{{ asset('images/logo-freeair.png') }}" alt="Logo FreeAir">
                <img src="{{ asset('images/logo-chicogames.png') }}" alt="Logo ChicoGames">
            </div>
        </section>
    </div>
</x-client>
