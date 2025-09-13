@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/calendario.css') }}"/>

<main class="mc-fixtures">
  <div class="mc-container">

    <!-- Page title -->
    <header class="mc-page-head">
      <h1>Partidos</h1>
    </header>

    <!-- ===== Agosto ===== -->
    <section class="mc-month">
      <h2 class="mc-month__title">Agosto</h2>

      <!-- fila -->
      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">Amistoso</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <span class="mc-team__name">Málaga CF</span>
            <img class="mc-team__crest" src="/img/occult.png" alt="Occult FC">
          </div>

          <div class="mc-center">
            <span class="mc-center__date">dom, 17 ago</span>
            <span class="mc-center__score"><b>4</b><i>-</i><b>7</b></span>
          </div>

          <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="/img/nueva-union.png" alt="Nueva Unión">
            <span class="mc-team__name">Nueva Unión</span>
          </div>
        </div>
      </article>
      <!-- /fila -->
    </section>

    <!-- ===== Septiembre ===== -->
    <section class="mc-month">
      <h2 class="mc-month__title">Septiembre</h2>

      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">Amistoso</span>
          <span class="mc-bullet">J1</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <span class="mc-team__name">Occult FC</span>
            <img class="mc-team__crest" src="/img/occult.png" alt="Occult FC">
          </div>

          <div class="mc-center">
            <span class="mc-center__date">sab, 13 sept · 20:00</span>
            <span class="mc-center__score mc-center__score--pending">—</span>
          </div>

          <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="/img/mexicano.png" alt="Mexicano">
            <span class="mc-team__name">Mexicano</span>
          </div>
        </div>
      </article>

      <article class="mc-row">
        <div class="mc-row__meta">
          <span class="mc-chip">Seven League</span>
          <span class="mc-bullet">J1</span>
        </div>

        <div class="mc-row__content">
          <div class="mc-team">
            <span class="mc-team__name">Occult FC</span>
            <img class="mc-team__crest" src="/img/occult.png" alt="Occult FC">
          </div>

          <div class="mc-center">
            <span class="mc-center__date">Por determinar</span>
            <span class="mc-center__pill">Sin fecha</span>
          </div>

          <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="/img/tbd.png" alt="Por determinar">
            <span class="mc-team__name">Por determinar</span>
          </div>
        </div>
      </article>
    </section>

    <!-- ===== Anterior / Siguiente ===== -->
    <section class="mc-grid2">
      <!-- Anterior -->
      <div class="mc-card mc-card--light">
        <header class="mc-card__head">
          <h3>Anterior</h3>
          <div class="mc-card__tags">
            <span class="mc-chip">Amistoso</span>
          </div>
        </header>

        <div class="mc-card__body">
          <div class="mc-meta-line">
            <span class="mc-meta__league">J4</span>
            <span class="mc-meta__venue">Open Arena · Córdoba</span>
          </div>

          <div class="mc-card__teams">
            <div class="mc-team">
              <span class="mc-team__name">Occult FC</span>
              <img class="mc-team__crest" src="/img/occult.png" alt="Occult FC">
            </div>

            <div class="mc-card__center">
              <span class="mc-card__score">2<i>-</i>1</span>
              <span class="mc-card__date">sab, 13 sept</span>
            </div>

            <div class="mc-team mc-team--away">
              <img class="mc-team__crest" src="/img/mexicano.png" alt="Mexicano">
              <span class="mc-team__name">Mexicano</span>
            </div>
          </div>

          <div class="mc-card__foot">
            <span class="mc-status mc-status--ok">Partido completado</span>
          </div>
        </div>
      </div>

      <!-- Siguiente -->
      <div class="mc-card mc-card--dark">
        <header class="mc-card__head">
          <h3>Siguiente</h3>
          <div class="mc-card__tags">
            <span class="mc-chip mc-chip--invert">Seven League</span>
            <span class="mc-bullet mc-bullet--invert">J1</span>
          </div>
        </header>

        <div class="mc-card__body">
          <div class="mc-meta-line mc-meta-line--invert">
            <span class="mc-meta__league">—</span>
            <span class="mc-meta__venue">Por determinar</span>
          </div>

          <div class="mc-card__teams">
            <div class="mc-team">
              <span class="mc-team__name">Por determinar</span>
              <img class="mc-team__crest" src="/img/tbd.png" alt="Por determinar">
            </div>

            <div class="mc-card__center">
              <span class="mc-pill">Sin fecha</span>
              <span class="mc-card__date">Por determinar</span>
            </div>

            <div class="mc-team mc-team--away">
              <img class="mc-team__crest" src="/img/occult.png" alt="Occult FC">
              <span class="mc-team__name">Occult FC</span>
            </div>
          </div>

          <div class="mc-card__foot">
            <a class="mc-live-btn" href="#">Ver en vivo</a>
          </div>
        </div>
      </div>
    </section>

  </div>
</main>
@endsection
