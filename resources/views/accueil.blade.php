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

            <!-- Slider main container -->
<div class="swiper-container" style="position: relative;">
    <div class="swiper" style="width:80%;">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          @foreach ($actualites as $actualite)
            <div class="swiper-slide">
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
            </div>
          @endforeach

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
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
    <script type="module">
        const swiper = new Swiper('.swiper', {
            spaceBetween: 75,
            slidesPerView: 3,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        })
      </script>
</x-client>
