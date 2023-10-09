<x-client titre="Accueil">
    {{-- Message de confirmation --}}
    <x-parts.alertes cle="succes" />
    <x-parts.alertes cle="echec" />

    {{-- Section accueil --}}
    <div class="conteneur-accueil">
        <h1>
            Accueil
        </h1>

        {{-- Carrousel d'images --}}
        <section id="carrousel-images">
            <h2>
                Notre galerie Instagram
            </h2>

            <div class="imgBoite">
                <img src="images/insta_img1.png" alt="Image">
            </div>

            {{-- Liste des images miniatures --}}
            <ul class="miniatures">
                <li>
                    <a href="images/insta_img1.png" target="imgBoite">
                        <img src="images/insta_img1.png" alt="Image">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img2.png" target="imgBoite">
                        <img src="images/insta_img2.png" alt="Image">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img3.png" target="imgBoite">
                        <img src="images/insta_img3.png" alt="Image">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img4.png" target="imgBoite">
                        <img src="images/insta_img4.png" alt="Image">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img5.png" target="imgBoite">
                        <img src="images/insta_img5.png" alt="Image">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img6.png" target="imgBoite">
                        <img src="images/insta_img6.png" alt="Image">
                    </a>
                </li>
            </ul>

        </section> {{-- Fin carrousel d'images --}}

        {{-- Carrousel d'actualités --}}
        <section id="carrousel-actualites">
            <h2>
                Les dernières actualités
            </h2>

            {{-- Swiper --}}
            <div class="swiper-container">
                <div class="swiper">
                    <div class="swiper-wrapper">

                        <!-- Slides -->
                        @foreach ($actualites as $actualite)
                            <div class="swiper-slide">
                                <h3>
                                    {{ $actualite->titre }}
                                </h3>
                                <p class="date">
                                    {{ $actualite->created_at->diffForHumans() }}
                                </p>
                                <div class="separation"></div>
                                <p class="description">
                                    {{ $actualite->description }}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
                {{-- Flèches de Swiper --}}
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div> {{-- Fin Swiper --}}

        </section> {{-- Fin carrousel d'actualités --}}

        {{-- Section partenaires --}}
        <section id="partenaires">
            <h2>
                Merci à nos partenaires
            </h2>

            <div class="partenaires">
                <img src="{{ asset('images/logo-pipablogs.png') }}" alt="Logo PipaBlogs">
                <img src="{{ asset('images/logo-freeair.png') }}" alt="Logo FreeAir">
                <img src="{{ asset('images/logo-chicogames.png') }}" alt="Logo ChicoGames">
            </div>

        </section> {{-- Fin section partenaires --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</x-client>
