<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','Occult FC')</title>

  {{-- Iconos Remix --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

  {{-- Vite (CSS/JS) --}}
  @vite(['resources/css/inicio.css','resources/js/inicio.js'])
</head>
<body>
  <header class="site-header">
    {{-- Fila superior: logo (izq) + redes (dcha) --}}
    <div class="topbar">
      <a class="brand" href="{{ route('home') }}">
        <img src="{{ Vite::asset('resources/images/logo2.png') }}" alt="Logo del club" class="logo" />
        <span class="club-name">Occult FC</span>
      </a>

      <div class="header-right">
        <nav class="social">
          <a href="#" class="social-link" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
          <a href="#" class="social-link" aria-label="X"><i class="ri-twitter-x-line"></i></a>
          <a href="#" class="social-link" aria-label="Facebook"><i class="ri-twitch-line"></i></a>
        </nav>
      </div>
    </div>

    {{-- Fila inferior: menú debajo del logo (alineado a la izquierda) --}}
    <nav class="menu">
      <a href="{{ route('contenido') }}"    class="menu-link {{ request()->routeIs('contenido') ? 'active' : '' }}">Contenido</a>
      <a href="{{ route('calendario') }}"   class="menu-link {{ request()->routeIs('calendario') ? 'active' : '' }}">Calendario</a>
      <a href="{{ route('clasificacion') }}" class="menu-link {{ request()->routeIs('clasificacion') ? 'active' : '' }}">Clasificación</a>
    </nav>
  </header>

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
        <img src="/images/hero2.jpg" alt="..." />
        <figcaption class="hero-caption">
          <span class="kicker">PRIMER EQUIPO</span>
          <h2>Sesión matinal en el campo 2</h2>
        </figcaption>
      </figure>

      <figure class="hero-slide">
        <img src="/images/hero3.jpg" alt="..." />
        <figcaption class="hero-caption">
          <span class="kicker">CANTERA</span>
          <h2>Gran papel en el torneo de verano</h2>
        </figcaption>
      </figure>
    </div>

    <!-- Las barras se generan solas si no las pones -->
    <div class="hero-bars"></div>
    </section>

    <section class="squad-section container">
      <h2 class="squad-title">PLANTILLA</h2>
      <div class="squad-grid">
        @foreach ($players as $player)
          @include('partials.player-card', ['player' => $player])
        @endforeach
      </div>
    </section>

  <main class="container">
    @yield('content')
  </main>
</body>
</html>
