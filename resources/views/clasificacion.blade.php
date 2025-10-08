@extends('layouts.app')
@section('title','Clasificación | Occult FC')

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
              <td>3</td>
              <td class="team-cell">
                <img class="team-logo" src="{{ asset('images/escudos/logo.png') }}" alt="Occult">
                <span>Occult FC</span>
              </td>
              <td>9</td><td>3</td><td>3</td><td>0</td><td>0</td><td>13</td><td>8</td><td>5</td>
            </tr>

            <tr>
              <td>4</td>
              <td class="team-cell">
                <img class="team-logo" src="{{ asset('images/escudos/avanti.png') }}" alt="avanti">
                <span>New Avanti FC</span>
              </td>
              <td>9</td><td>4</td><td>3</td><td>0</td><td>1</td><td>20</td><td>16</td><td>4</td>
            </tr>

            <tr>
              <td>5</td>
              <td class="team-cell">
                <img class="team-logo" src="{{ asset('images/escudos/gorineta.png') }}" alt="gorineta">
                <span>Gorineta</span>
              </td>
              <td>6</td><td>3</td><td>2</td><td>0</td><td>1</td><td>8</td><td>4</td><td>4</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="nota">* Tabla con la posición aproximada del Occult, puede no estar actualizada, para confirmar consulte en la página oficial de la liga.</p>
    </section>
  </div>
@endsection
