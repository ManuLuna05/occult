<article class="player-card">
  <div class="pc-head">
    <span class="pc-number">{{ $player['number'] }}</span>
  </div>

  <div class="pc-photo-wrap">
    <img class="pc-photo"
         src="{{ asset('images/players/' . $player['photo']) }}"
         alt="{{ $player['name'] }}">
  </div>

  <div class="pc-body">
    <p class="pc-role">{{ $player['role'] }}</p>
    <h3 class="pc-name">{{ $player['name'] }}</h3>

    <div class="pc-stats">
      <div class="pc-stat">
        <span class="pc-stat-label">Min jugados</span>
        <span class="pc-stat-value">{{ $player['minutes'] }}</span>
      </div>
      <div class="pc-stat">
        <span class="pc-stat-label">Goles</span>
        <span class="pc-stat-value">{{ $player['goals'] }}</span>
      </div>
      <div class="pc-stat">
        <span class="pc-stat-label">Partidos</span>
        <span class="pc-stat-value">{{ $player['matches'] }}</span>
      </div>
    </div>
  </div>
</article>