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
      <h1>{{ $seasonMeta[$season]['title'] }}</h1>
      <p class="mc-sub">{{ $seasonMeta[$season]['subtitle'] }}</p>

      <div class="mc-season-filter">
        <a
          href="{{ url()->current() }}?season=current"
          class="mc-chip {{ $season === 'current' ? 'is-active' : '' }}"
        >
          2º Split
        </a>

        <a
          href="{{ url()->current() }}?season=previous"
          class="mc-chip {{ $season === 'previous' ? 'is-active' : '' }}"
        >
          1º Split
        </a>
      </div>
    </header>
      <div class="mc-grid2">
        {{-- Tarjeta: Anterior --}}
        <article class="mc-card mc-card--light is-previous">
          <div class="mc-card__head">
            <h3>Anterior</h3>
            <div class="mc-card__tags">
              <span class="mc-chip">SEVEN LEAGUE</span>
              <span class="mc-bullet">J12</span>
            </div>
          </div>

          <div class="mc-card__body">
            <div class="mc-meta-line">
              <span class="mc-status">Jugado</span>
            </div>

            <div class="mc-card__teams">
              <div class="mc-team">
                <img class="mc-team__crest" src="{{ asset('images/escudos/avanti.png') }}" alt="New Avanti">
                <span class="mc-team__name">New Avanti</span>
              </div>

              <div class="mc-card__center">
                <div class="mc-card__score">0 <i>-</i> 1</div>
                <span class="mc-card__date">dom, 21 dic · 19:00 · Estadio: El Carmen</span>
              </div>

              <div class="mc-team mc-team--away">
                <img class="mc-team__crest" src="{{ asset('images/escudos/logo.png') }}" alt="Occult FC">
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
              <span class="mc-chip">SEVEN LEAGUE</span>
              <span class="mc-bullet">J1 (2º Split)</span>
            </div>
          </div>

          <div class="mc-card__body">
            <div class="mc-meta-line mc-meta-line--invert">
              <span class="mc-status">En juego el domingo</span>
            </div>

            <div class="mc-card__teams">
              <div class="mc-team">
                <img class="mc-team__crest" src="{{ asset('images/escudos/logo.png') }}" alt="James Webb">
                <span class="mc-team__name">Occult FC</span>
              </div>

              <div class="mc-card__center">
                <div class="mc-card__score mc-center__score--pending">— <i>-</i> —</div>
                <span class="mc-card__date">dom, 18 ene · 12:00 · Estadio: Vistalegre</span>
              </div>

              <div class="mc-team mc-team--away">
                <img class="mc-team__crest" src="{{ asset('images/escudos/cachorros.png') }}" alt="Cachorros">
                <span class="mc-team__name">Cachorros</span>
              </div>
            </div>
          </div>

          <div class="mc-card__foot">
            <a class="mc-live-btn" href="https://www.twitch.tv/occultfc">Seguir en directo</a>
          </div>
        </article>
      </div>
    </section>

    @foreach ($matchesByMonth as $month => $matches)
      <section class="mc-month">
        <h2 class="mc-month__title">{{ $month }}</h2>

        @foreach ($matches as $match)
          @include('partials.partido', ['match' => $match])
        @endforeach

      </section>
    @endforeach

    <footer style="height:48px"></footer>

  </div>

</body>
</html>

@endsection