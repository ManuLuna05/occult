<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','Occult FC')</title>

  {{-- Iconos Remix --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

  {{-- Vite (CSS/JS) --}}
  @vite(['resources/css/inicio.css','resources/js/carrusel.js'])
</head>
<body>
  @include('partials.header')

  <main class="container">
    @yield('content')
  </main>
</body>
</html>
