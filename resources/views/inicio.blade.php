@extends('layouts.app')

@section('title','Occult FC | Web Oficial')

@section('content')
  @include('partials.hero-carousel')

  {{-- Estilos locales para el titular responsive --}}
  <style>
    .eterno-occult{
      text-align:center;
      margin: clamp(16px, 6vw, 48px) 0;
      font-size: clamp(28px, 8vw, 96px); /* fluido: min 28px, escala con viewport, máx 96px */
      font-weight: 900;
      line-height: 1.05;
      letter-spacing: .02em;
      color: #41009d; /* morado club */
      text-wrap: balance;
    }
    /* ===== Bloques de la home ===== */
    .home-section {
        max-width: var(--max);
        margin: 60px auto;
        padding: 0 16px;
    }

    .home-section-title {
        text-align: center;
        font-size: clamp(26px, 3vw, 40px);
        font-weight: 800;
        color: #41009d;
        margin-bottom: 26px;
    }

    /* ===== Botón Ver Más ===== */
    .btn-ver-mas {
        display: block;
        width: fit-content;
        margin: 30px auto 0;
        padding: 12px 26px;
        background: #41009d;
        color: #fff;
        font-weight: 700;
        text-decoration: none;
        border-radius: 12px;
        transition: .2s ease;
    }
    .btn-ver-mas:hover {
        background: #5a16c8;
        transform: translateY(-2px);
    }

    /* ===== Mini Grid para calendario, clasificación, noticias ===== */
    .mini-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }
    @media (max-width: 900px) { .mini-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 620px) { .mini-grid { grid-template-columns: 1fr; } }

    .mini-card {
        background: #fff;
        padding: 22px;
        border-radius: 16px;
        box-shadow: 0 6px 22px rgba(0,0,0,.08);
    }
    .mini-card h4 {
        color: #41009d;
        margin-top: 0;
        font-size: 20px;
        font-weight: 800;
    }
    .mini-card p {
        margin: 8px 0 0;
        opacity: .85;
    }
    /* ===== BANNER RESPONSIVE, FINO, CENTRADO ===== */
    .sponsor-strip-wrapper {
        width: 100%;
        display: flex;
        justify-content: center;   /* imagen siempre centrada */
        margin: 40px 0;            /* separación respecto a secciones */
    }

    .sponsor-strip {
        width: 90%;                /* escala proporcional al viewport */
        max-width: 1050px;         /* límite en pantallas grandes */
        aspect-ratio: 14 / 2;      /* proporción del banner (ajústala si quieres más fino o más alto) */
        object-fit: cover;         /* recorte elegante sin deformar */
        display: block;
        height: auto;              /* se calcula automáticamente */
    }


  </style>

  {{-- Resto de contenido dentro de container sin margen arriba --}}
  <div class="container-no-top">
    @include('partials.squad')
    <a href="{{ route('plantilla') }}" class="btn-ver-mas">Ver más</a>
  </div>

  <section class="home-section">
      <h2 class="home-section-title">Próximos Partidos</h2>

    <div class="mini-margin">
        @foreach (array_slice($matches, 2, 3) as $match)
            @include('partials.partido', ['match' => $match])
        @endforeach
    </div>

    <a class="btn-ver-mas" href="{{ route('calendario') }}">Ver más</a>
  </section>

  {{-- ========================================================
        SECCIÓN 3: RESUMEN DE LA LIGA
  ========================================================= --}}
  <section class="home-section">
      <h2 class="home-section-title">Clasificación</h2>

      @include('partials.ligaresum')

      <a href="{{ route('clasificacion') }}" class="btn-ver-mas">Ver más</a>
  </section>


  {{-- ========================================================
        SECCIÓN 4: ÚLTIMAS NOTICIAS / GALERÍA
  ========================================================= --}}
  <section class="home-section">
      <h2 class="home-section-title">Últimas Noticias</h2>

      <div class="mini-grid">
          <div class="mini-card">
              <h4>Victoria Épica</h4>
              <p>Occult FC remonta con un final espectacular...</p>
          </div>

          <div class="mini-card">
              <h4>Nueva Equipación</h4>
              <p>Presentada la camiseta oficial 25/26...</p>
          </div>

          <div class="mini-card">
              <h4>Galería del Partido</h4>
              <p>Las mejores fotos del último encuentro...</p>
          </div>
      </div>

      <a href="/contenido" class="btn-ver-mas">Ver más</a>
  </section>


  {{-- FOOTER SLOGAN --}}
  <div class="eterno-occult">¡ETERNO OCCULT!</div>
@endsection
