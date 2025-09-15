@extends('layouts.app')
@section('title','Calendario | Occult FC')

@section('content')
{{-- resources/views/calendario.blade.php --}}
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calendario · {{ config('app.name') }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/calendario.css') }}">
</head>
<body>

  <div class="mc-container">
    <header class="mc-page-head">
      <h1>Calendario</h1>
      <p class="mc-sub">Temporada 2025/26</p>
    </header>

    {{-- ======= Mes: Agosto ======= --}}
    <section class="mc-month">
      <h2 class="mc-month__title">Agosto</h2>

      {{-- Partido 1 --}}
      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">AMISTOSO</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
            <span class="mc-team__name">Occult FC</span>
          </div>

          <div class="mc-center">
            <span class="mc-center__date">lun, 11 ago</span>
            <div class="mc-center__score">
              <strong>4</strong><i>-</i><strong>4</strong>
            </div>
          </div>

          <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/futbolbarro.png') }}" alt="Fútbol Barro">
            <span class="mc-team__name">Fútbol y Barro</span>
          </div>
        </div>
      </article>

      {{-- Partido 2 --}}
      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">AMISTOSO</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
            <span class="mc-team__name">Occult FC</span>
          </div>

        <div class="mc-center">
            <span class="mc-center__date">dom, 17 ago</span>
            <div class="mc-center__score">
              <strong>4</strong><i>-</i><strong>7</strong>
            </div>
          </div>

          <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/nuevaunion.png') }}" alt="Nueva Unión">
            <span class="mc-team__name">Nueva Unión</span>
          </div>
        </div>
      </article>

    </section>

    {{-- ======= Mes: Septiembre ======= --}}
    <section class="mc-month">
      <h2 class="mc-month__title">Septiembre</h2>

      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">AMISTOSO</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/mexicano.png') }}" alt="Mexicano">
            <span class="mc-team__name">Mexicano</span>
          </div>

          <div class="mc-center">
            <span class="mc-center__date">sáb, 13 sept</span>
            <div class="mc-center__score">
              <strong>5</strong><i>-</i><strong>3</strong>
            </div>
          </div>

          <div class="mc-team mc-team--away">
            
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
            <span class="mc-team__name">Occult FC</span>
          </div>
        </div>
      </article>

      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">SEVEN LEAGUE</span>
          <span class="mc-bullet">J1</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/nuevaunion.png') }}" alt="Nueva Unión">
            <span class="mc-team__name">Nueva Unión</span>
          </div>

        <div class="mc-center">
          <span class="mc-center__date">dom, 21 ago</span>
          <div class="mc-center__score">20:00</div>
        </div>

          <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
            <span class="mc-team__name">Occult FC</span>
          </div>
        </div>
      </article>

      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">SEVEN LEAGUE</span>
          <span class="mc-bullet">J2</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
            <span class="mc-team__name">Occult FC</span>
          </div>

        <div class="mc-center">
          <span class="mc-center__date">Por determinar</span>
          <div class="mc-center__score">— <i>-</i> —</div>
        </div>

          <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/solteria.png') }}" alt="Soltería">
            <span class="mc-team__name">Soltería FC</span>
          </div>
        </div>
      </article>

      <div class="mc-grid2">
        {{-- Tarjeta: Anterior --}}
        <article class="mc-card mc-card--light is-previous">
          <div class="mc-card__head">
            <h3>Anterior</h3>
            <div class="mc-card__tags">
              <span class="mc-chip">AMISTOSO</span>
            </div>
          </div>

          <div class="mc-card__body">
            <div class="mc-meta-line">
              <span class="mc-status">Jugado</span>
            </div>

            <div class="mc-card__teams">
              <div class="mc-team">
                <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/mexicano.png') }}" alt="Mexicano">
                <span class="mc-team__name">Mexicano</span>
              </div>

              <div class="mc-card__center">
                <div class="mc-card__score">5 <i>-</i> 3</div>
                <span class="mc-card__date">sab, 13 sept · 20:00 · Vistalegre</span>
              </div>

              <div class="mc-team mc-team--away">
                <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
                <span class="mc-team__name">Occult FC</span>
              </div>
            </div>
          </div>

          <div class="mc-card__foot">
            <a class="mc-live-btn mc-live-btn--danger" href="https://www.twitch.tv/occultfc">Finalizado</a>
          </div>
        </article>

        {{-- Tarjeta: Siguiente --}}
        <article class="mc-card mc-card--dark">
          <div class="mc-card__head">
            <h3>Siguiente</h3>
            <div class="mc-card__tags">
              {{-- quitadas las clases --invert; el dark theme las estiliza solo --}}
              <span class="mc-chip">LALIGA HYPERMOTION</span>
              <span class="mc-bullet">J1</span>
            </div>
          </div>

          <div class="mc-card__body">
            <div class="mc-meta-line mc-meta-line--invert">
              <span class="mc-status">En juego el domingo</span>
            </div>

            <div class="mc-card__teams">
              <div class="mc-team">
                <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/nuevaunion.png') }}" alt="Nueva Unión">
                <span class="mc-team__name">Nueva Unión</span>
              </div>

              <div class="mc-card__center">
                <div class="mc-card__score mc-center__score--pending">— <i>-</i> —</div>
                <span class="mc-card__date">dom, 21 sept · 20:00 · Estadio: Por determinar</span>
              </div>

              <div class="mc-team mc-team--away">
                <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
                <span class="mc-team__name">Occult FC</span>
              </div>
            </div>
          </div>

          <div class="mc-card__foot">
            <a class="mc-live-btn" href="https://www.twitch.tv/occultfc">Seguir en directo</a>
          </div>
        </article>
      </div>
    </section>

    {{-- ======= Bloque Copa (ejemplo) ======= --}}
    <section class="mc-month">
      <h2 class="mc-month__title">Octubre</h2>
    </section>

      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">SEVEN LEAGUE</span>
          <span class="mc-bullet">J3</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/mexicano.png') }}" alt="Mexicano">
            <span class="mc-team__name">Mexicano</span>
          </div>

          <div class="mc-center">
            <span class="mc-center__date">Por determinar</span>
            <div class="mc-center__score">
              <strong>— <i>-</i> —</strong>
            </div>
          </div>

          <div class="mc-team mc-team--away">
            
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
            <span class="mc-team__name">Occult FC</span>
          </div>
        </div>
      </article>
      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">SEVEN LEAGUE</span>
          <span class="mc-bullet">J4</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/coto.png') }}" alt="Coto">
            <span class="mc-team__name">Coto M.M</span>
          </div>

          <div class="mc-center">
            <span class="mc-center__date">Por determinar</span>
            <div class="mc-center__score">
              <strong>— <i>-</i> —</strong>
            </div>
          </div>

          <div class="mc-team mc-team--away">
            
            <img class="mc-team__crest" src="{{ Vite::asset('resources/images/escudos/logo.png') }}" alt="Occult FC">
            <span class="mc-team__name">Occult FC</span>
          </div>
        </div>
      </article>

    <footer style="height:48px"></footer>
  </div>

</body>
</html>

@endsection
