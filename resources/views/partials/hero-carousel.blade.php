<section class="hero-carousel full-bleed" aria-label="Galería" data-interval="6">
  <button class="hero-nav prev" aria-label="Anterior">‹</button>
  <button class="hero-nav next" aria-label="Siguiente">›</button>

  <div class="hero-track">
    <figure class="hero-slide is-active">
      <a href="/contenido">
        <img src="{{ Vite::asset('resources/images/camisetas.jpg') }}" alt="Camisetas" />
        <figcaption class="hero-caption">
          <span class="kicker">CAMISETAS</span>
          <h2>Esta es la nueva piel para la temporada 2025/26</h2>
        </figcaption>
      </a>
    </figure>

    <figure class="hero-slide">
      <a href="https://www.twitch.tv/occultfc">
        <img src="{{ Vite::asset('resources/images/twitch.jpg') }}" alt="Twitch" />
        <figcaption class="hero-caption">
          <span class="kicker">SOCIAL</span>
          <h2>Partidos del Occult retransmitidos en Twitch</h2>
        </figcaption>
      </a>
    </figure>

    <figure class="hero-slide">
      <a href="http://127.0.0.1:8000/">
        <img src="{{ Vite::asset('resources/images/dorsales.jpg') }}" alt="Dorsales" />
        <figcaption class="hero-caption">
          <span class="kicker">DORSALES</span>
          <h2>Estos son los dorsales que vestiran los nuestros en la temporada 25/26</h2>
        </figcaption>
      </a>
    </figure>
  </div>
</section>
