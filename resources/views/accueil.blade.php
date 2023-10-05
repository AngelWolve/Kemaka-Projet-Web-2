<x-client titre="Accueil">
    <x-parts.alertes cle="succes" />
    <div class="conteneur-accueil">

        <h1>
            Accueil
        </h1>

        <section id="carrousel-images">
            <h2>
                Notre galerie Instagram
            </h2>

            <div class="imgBoite">
                <img src="images/insta_img1.png" alt="">
            </div>

            <ul class="miniatures">
                <li>
                    <a href="images/insta_img1.png" target="imgBoite">
                        <img src="images/insta_img1.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img2.png" target="imgBoite">
                        <img src="images/insta_img2.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img3.png" target="imgBoite">
                        <img src="images/insta_img3.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img4.png" target="imgBoite">
                        <img src="images/insta_img4.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img5.png" target="imgBoite">
                        <img src="images/insta_img5.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="images/insta_img6.png" target="imgBoite">
                        <img src="images/insta_img6.png" alt="">
                    </a>
                </li>
            </ul>
        </section>
        <section id="carrousel-actualites">
            <h2>
                Les dernières actualités
            </h2>
            <!-- Slider main container -->
            <div class="swiper-container">
                <div class="swiper">
                    <!-- Additional required wrapper -->
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
                {{-- Les flèches de navigation doivent être à l'extérieur du carroussel pour être visible --}}
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</x-client>
