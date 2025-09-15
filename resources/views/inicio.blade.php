@extends('layouts.app')

@section('title','Occult FC | Web Oficial')

@section('content')
  {{-- Carrusel: ocupa todo el ancho y se pega al header --}}
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
  </style>

  {{-- Resto de contenido dentro de container sin margen arriba --}}
  <div class="container-no-top">
    @include('partials.squad')
  </div>

  <div class="eterno-occult">¡ETERNO OCCULT!</div>
@endsection
