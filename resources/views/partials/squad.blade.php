<section class="squad-section container">
  <h2 class="squad-title">PLANTILLA</h2>

  <div class="squad-grid">
    @foreach ($players as $player)
      @include('partials.player-card', ['player' => $player])
      {{-- O: @each('partials.player-card', $players, 'player') --}}
    @endforeach
  </div>
</section>
