@extends('layouts.app')
@section('title','Clasificación | Occult FC')

@section('content')

  {{-- ========= CABECERA ========= --}}
  <div class="container">
    <header class="tabla-head">
      <h1>Clasificación — Segunda División</h1>
      <p>Tabla oficial publicada en Seven League Córdoba (CopaFácil).</p>

      <div class="tabla-actions">
        <a class="btn btn-primary"
           href="https://copafacil.com/sevenleaguecordoba"
           target="_blank" rel="noopener">
          Ver en sitio oficial
        </a>
      </div>
    </header>
  </div>

  {{-- ========= IFRAME FULL-BLEED (SOLO EL IFRAME) ========= --}}
  <section class="iframe-wrap full-bleed">
    <iframe
      class="tabla-iframe"
      src="https://copafacil.com/sevenleaguecordoba"
      title="Clasificación oficial - Seven League Córdoba"
      loading="lazy"></iframe>

    <div class="iframe-fallback">
      <p>No se pudo cargar la clasificación dentro de la web (bloqueada por el sitio de origen).</p>
      <p>
        Puedes abrirla en la página oficial o consultar la tabla resumida más abajo.
        <a class="btn btn-secondary"
           href="https://copafacil.com/sevenleaguecordoba"
           target="_blank" rel="noopener">
           Abrir oficial
        </a>
      </p>
    </div>
  </section>

  {{-- ========= RESUMEN DE LA LIGA (FUERA DEL FULL-BLEED) ========= --}}
  <div class="container" style="margin-top:40px;">
      @include('partials.ligaresum')
  </div>

@endsection
