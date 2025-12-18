@extends('layouts.app')
@section('title', $player['name'].' | Occult FC')

@section('content')
@php
  $full = $player['photo_full'] ?? null;
  $src = ($full && file_exists(public_path('images/players/'.$full)))
      ? asset('images/players/'.$full)
      : asset('images/players/default-full.png');
@endphp

<div class="player-page">

  <section class="player-hero">
    <div class="player-hero__inner">

      {{-- COLUMNA IZQUIERDA (nombre + meta) --}}
      <div class="player-hero__left">
        <div class="player-hero__name">{{ strtoupper($player['name']) }}</div>

        <div class="player-hero__meta">
          @if(!empty($player['height']))
            <div class="player-hero__row">
              <span>Altura</span>
              <b>{{ $player['height'] }} cm</b>
            </div>
          @endif

          @if(!empty($player['weight']))
            <div class="player-hero__row">
              <span>Peso</span>
              <b>{{ $player['weight'] }} kg</b>
            </div>
          @endif

          @if(!empty($player['debut']))
            <div class="player-hero__row">
              <span>Debut</span>
              <b>{{ $player['debut'] }}</b>
            </div>
          @endif

          @if(!empty($player['foot']))
            <div class="player-hero__row">
              <span>Pie dominante</span>
              <b>{{ $player['foot'] }}</b>
            </div>
          @endif
        </div>
      </div>

      {{-- CENTRO (solo dorsal + foto) --}}
      <div class="player-hero__center">
        <div class="player-hero__number">{{ $player['number'] ?? '' }}</div>

        <img class="player-hero__photo"
             src="{{ $src }}"
             alt="{{ $player['name'] }}">
      </div>

      {{-- COLUMNA DERECHA (posición + meta) --}}
      <div class="player-hero__right">
        <div class="player-hero__pos">
          <div class="player-hero__pos-label">POSICIÓN</div>
          <div class="player-hero__pos-value">{{ strtoupper($player['role'] ?? '') }}</div>
          <div class="player-hero__pos-line"></div>
        </div>

        <div class="player-hero__meta">
          @if(!empty($player['birth']))
            <div class="player-hero__row">
              <span>Nacimiento</span>
              <b>{{ \Carbon\Carbon::parse($player['birth'])->translatedFormat('d M Y') }}</b>
            </div>
          @endif

          @if(!empty($player['age']))
            <div class="player-hero__row">
              <span>Edad</span>
              <b>{{ $player['age'] }} años</b>
            </div>
          @endif

          @if(!empty($player['country']))
            <div class="player-hero__row">
              <span>País</span>
              <b>{{ $player['country'] }}</b>
            </div>
          @endif

          @if(!empty($player['nationality']))
            <div class="player-hero__row">
              <span>Nacionalidad</span>
              <b>{{ $player['nationality'] }}</b>
            </div>
          @endif
        </div>
      </div>

    </div>

    {{-- KPIs (cruzan morado/blanco) --}}
    @php $st = $player['stats'] ?? []; @endphp
    <div class="player-kpis">
      <div class="kpi">
        <div class="kpi__label">Partidos</div>
        <div class="kpi__value">{{ $st['matches'] ?? 0 }}</div>
      </div>

      @if(($player['role'] ?? '') === 'Portero')
        <div class="kpi">
          <div class="kpi__label">Paradas</div>
          <div class="kpi__value">{{ $st['saves'] ?? 0 }}</div>
        </div>
        <div class="kpi">
          <div class="kpi__label">Porterías a cero</div>
          <div class="kpi__value">{{ $st['clean_sheets'] ?? 0 }}</div>
        </div>
      @else
        <div class="kpi">
          <div class="kpi__label">Minutos</div>
          <div class="kpi__value">{{ $st['minutes'] ?? 0 }}</div>
        </div>
        <div class="kpi">
          <div class="kpi__label">Goles</div>
          <div class="kpi__value">{{ $st['goals'] ?? 0 }}</div>
        </div>
      @endif
    </div>
  </section>

  <section class="player-content">
    <h2 class="player-content__title">Biografía</h2>

    <div class="player-bio">
      <div class="player-bio__card">
        <div class="player-bio__name">{{ $player['name'] }}</div>
        <p class="player-bio__text">
          {{ $player['bio'] ?? 'Sin biografía todavía.' }}
        </p>
      </div>
    </div>
  </section>

</div>
@endsection
