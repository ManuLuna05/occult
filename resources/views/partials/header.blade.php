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
        <a href="#" class="social-link" aria-label="TikTok"><i class="ri-tiktok-line"></i></a>
      </nav>
    </div>
  </div>

  {{-- Fila inferior: menú debajo del logo (alineado a la izquierda) --}}
  <nav class="menu">
    <a href="{{ route('contenido') }}"     class="menu-link {{ request()->routeIs('contenido') ? 'active' : '' }}">Contenido</a>
    <a href="{{ route('calendario') }}"    class="menu-link {{ request()->routeIs('calendario') ? 'active' : '' }}">Calendario</a>
    <a href="{{ route('clasificacion') }}" class="menu-link {{ request()->routeIs('clasificacion') ? 'active' : '' }}">Clasificación</a>
  </nav>
</header>
