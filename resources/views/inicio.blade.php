@extends('layouts.app')

@section('title','Occult FC')

@section('content')
  {{-- Carrusel: ocupa todo el ancho y se pega al header --}}
  @include('partials.hero-carousel')

  {{-- Resto de contenido dentro de container sin margen arriba --}}
  <div class="container-no-top">
    @include('partials.squad')
  </div>
@endsection
