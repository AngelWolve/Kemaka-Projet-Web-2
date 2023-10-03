<x-client>
    <div class="conteneur-accueil">
        <h1>
            Accueil
        </h1>


    <section id="accueil">

        <div id="countdown">
            <div>
                <span id="jours">00</span>
                <p>Jours</p>
            </div>
            <div>
                <span id="heures">00</span>
                <p>Heures</p>
            </div>
            <div>
                <span id="minutes">00</span>
                <p>Minutes</p>
            </div>
            <div>
                <span id="secondes">00</span>
                <p>Secondes</p>
            </div>
        </div>

        <h2>Notre galerie Instagram</h2>

        <div class="imgBoite"><img src="images/insta_img1.png" alt=""></div>

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
            <swiper-container navigation="true" slides-per-view="3" speed="500" css-mode="true">
                @foreach ($actualites as $actualite)
                    <swiper-slide>
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
                    </swiper-slide>
                @endforeach
            </swiper-container>
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
