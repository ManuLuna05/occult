<header class="site-header">
  <div class="topbar">
    {{-- IZQUIERDA: logo --}}
    <a class="brand" href="{{ route('home') }}">
      <img src="{{ Vite::asset('resources/images/logo2.png') }}" alt="Logo del club" class="logo" />
      <span class="club-name">Occult FC</span>
    </a>

    {{-- CENTRO: menú principal --}}
    <nav class="main-nav">
      <a href="{{ route('contenido') }}"     class="menu-link {{ request()->routeIs('contenido') ? 'active' : '' }}">Contenido</a>
      <a href="{{ route('calendario') }}"    class="menu-link {{ request()->routeIs('calendario') ? 'active' : '' }}">Calendario</a>
      <a href="{{ route('clasificacion') }}" class="menu-link {{ request()->routeIs('clasificacion') ? 'active' : '' }}">Clasificación</a>
    </nav>

    {{-- DERECHA: redes sociales --}}
    <nav class="social">
      <a href="https://www.instagram.com/occultfc_" class="social-link" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
      <a href="https://x.com/OccultFc" class="social-link" aria-label="X"><i class="ri-twitter-x-line"></i></a>
      <a href="https://www.twitch.tv/occultfc" class="social-link" aria-label="Twitch"><i class="ri-twitch-line"></i></a>
    </nav>
  </div>
</header>
