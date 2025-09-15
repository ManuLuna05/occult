<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','Occult F | Web Oficial')</title>

  <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/escudos/logo.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ Vite::asset('resources/images/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ Vite::asset('resources/images/safari-pinned-tab.svg') }}" color="#41009d">
  <meta name="theme-color" content="#41009d">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
  @vite([
    'resources/css/base.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/hero.css',
    'resources/css/squad.css',
    'resources/css/player-card.css',
    'resources/js/carrusel.js',
    'resources/css/contenido.css',
    'resources/css/clasificacion.css',
    'resources/css/calendario.css'
  ])
</head>
<body>
  @include('partials.header')

  {{-- IMPORTANTE: sin clase container aquí --}}
  <main>
    @yield('content')
  </main>

  @include('partials.footer')
</body>
</html>
