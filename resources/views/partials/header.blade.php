<header class="site-header">
  <div class="topbar">
    <a class="brand" href="{{ route('home') }}">
      <img src="{{ asset('images/logo2.png') }}" alt="Soltería" class="logo" />
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
      <a href="https://www.tiktok.com/@occultfc?_t=ZN-90myYaKBBzy&_r=1" class="social-link" aria-label="Tiktok"><i class="ri-tiktok-line"></i></a>
    </nav>
  </div>
</header>
