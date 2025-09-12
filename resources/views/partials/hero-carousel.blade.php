<section class="hero-carousel" aria-label="Galería" data-interval="6">
  <button class="hero-nav prev" aria-label="Anterior">‹</button>
  <button class="hero-nav next" aria-label="Siguiente">›</button>

  <div class="hero-track">
    <figure class="hero-slide is-active">
      <img src="{{ Vite::asset('resources/images/camisetas.jpg') }}" alt="..." />
      <figcaption class="hero-caption">
        <span class="kicker">CAMISETAS</span>
        <h2>Esta es la nueva piel para la temporada 2025/26</h2>
      </figcaption>
    </figure>

    <figure class="hero-slide">
      <img src="{{ Vite::asset('resources/images/hero2.jpg') }}" alt="..." />
      <figcaption class="hero-caption">
        <span class="kicker">PRIMER EQUIPO</span>
        <h2>Sesión matinal en el campo 2</h2>
      </figcaption>
    </figure>

    <figure class="hero-slide">
      <img src="{{ Vite::asset('resources/images/hero3.jpg') }}" alt="..." />
      <figcaption class="hero-caption">
        <span class="kicker">CANTERA</span>
        <h2>Gran papel en el torneo de verano</h2>
      </figcaption>
    </figure>
  </div>
</section>
