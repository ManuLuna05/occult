@extends('layouts.app')
@section('title','Clasificación')

@section('content')
  {{-- Cabecera simple --}}
  <div class="container">
    <header class="tabla-head">
      <h1>Clasificación — Segunda División</h1>
      <p>Tabla oficial publicada en Seven League Córdoba (CopaFácil).</p>

      <div class="tabla-actions">
        {{-- Abre la página oficial en nueva pestaña (por si el iframe está bloqueado) --}}
        <a class="btn btn-primary" href="https://copafacil.com/sevenleaguecordoba" target="_blank" rel="noopener">
          Ver en sitio oficial
        </a>
      </div>
    </header>
  </div>

  {{-- ====== IFRAME FULL-BLEED ====== --}}
  {{-- Intenta embeber la clasificación. Si el sitio no permite iframes, verás un vacío. --}}
  <section class="iframe-wrap full-bleed">
    <iframe
      class="tabla-iframe"
      src="https://copafacil.com/sevenleaguecordoba"
      title="Clasificación oficial - Seven League Córdoba"
      loading="lazy"></iframe>

    {{-- Mensaje superpuesto si el iframe no carga o está bloqueado --}}
    <div class="iframe-fallback">
      <p>No se pudo cargar la clasificación dentro de la web (bloqueada por el sitio de origen).</p>
      <p>
        Puedes abrirla en la página oficial o consultar la tabla resumida más abajo.
        <a class="btn btn-secondary" href="https://copafacil.com/sevenleaguecordoba" target="_blank" rel="noopener">Abrir oficial</a>
      </p>
    </div>
  </section>

  {{-- ====== FALLBACK LOCAL (rellena si el iframe no se muestra) ====== --}}
  <div class="container">
    <section class="tabla-local">
      <h2>Clasificación (resumen)</h2>
      <div class="tabla-scroll">
        <table class="tabla">
          <thead>
            <tr>
              <th>#</th>
              <th>Equipo</th>
              <th>Pts</th>
              <th>PJ</th>
              <th>PG</th>
              <th>PE</th>
              <th>PP</th>
              <th>GF</th>
              <th>GC</th>
              <th>DG</th>
            </tr>
          </thead>
          <tbody>
            <tr class="is-our-team">
              <td>10</td>
              <td class="team-cell">
                <img class="team-logo" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Escudo Occult FC">
                <span>Occult FC</span>
              </td>
              <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
            </tr>

            <tr>
              <td>12</td>
              <td class="team-cell">
                <img class="team-logo" src="{{ Vite::asset('resources/images/escudos/cachorros.jpg') }}" alt="Escudo Rivales FC">
                <span>Rayo Mezquita</span>
              </td>
              <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
            </tr>

            <tr>
              <td>13</td>
              <td class="team-cell">
                <img class="team-logo" src="{{ Vite::asset('resources/images/escudos/solteria.jpg') }}" alt="Escudo Rivales FC">
                <span>Soltería FC</span>
              </td>
              <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="nota">* Tabla con la posición aproximada del Occult, puede no estar actualizada, para confirmar consulte en la página oficial de la liga.</p>
    </section>
  </div>
@endsection
