<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','Occult FC | Web Oficial')</title>

  {{-- Favicons / PWA desde public/images --}}
  <link rel="icon" type="image/png" href="{{ asset('images/escudos/logo.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('images/safari-pinned-tab.svg') }}" color="#41009d">
  <meta name="theme-color" content="#41009d">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

  {{-- CSS planos desde public/css --}}
  <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/hero.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/squad.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/player-card.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/contenido.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/clasificacion.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/calendario.css') }}">
</head>
<body>
  @include('partials.header')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  {{-- JS plano desde public/js --}}
  <script src="{{ asset('/js/carrusel.js') }}" defer></script>
</body>
</html>
