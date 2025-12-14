<section class="squad-section container">
  <h2 class="squad-title">PLANTILLA</h2>

  @php
    // Si el controller no lo manda por lo que sea, lo calculamos aquí sin romper nada
    $playersByRole = $playersByRole ?? collect($players)->groupBy('role');
  @endphp

  @foreach ($playersByRole as $role => $rolePlayers)
    <div class="squad-role-block">
      <div class="squad-role-head">
        @php
          $roleLabels = [
            'Portero'      => 'PORTEROS',
            'Defensa'      => 'DEFENSAS',
            'Lateral'      => 'LATERALES',
            'Mediocentro'  => 'MEDIOCENTROS',
            'Delantero'    => 'DELANTEROS',
           ];
        @endphp

          <h3 class="squad-role-title">
            {{ $roleLabels[$role] ?? strtoupper($role).'S' }}
          </h3>

      </div>

      <div class="squad-grid">
        @foreach ($rolePlayers as $player)
          @include('partials.player-card', ['player' => $player])
        @endforeach
      </div>
    </div>
  @endforeach
</section>
