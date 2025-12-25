{{-- partial: tabla-clasificacion --}}
<section class="tabla-local">
  <h2>Resumen de la Liga</h2>

  <div class="tabla-scroll">
    <table class="tabla">
      <thead>
        <tr>
          <th>Pos</th>
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
          <td>1</td>
          <td class="team-cell">
            <img class="team-logo" src="{{ asset('images/escudos/logo.png') }}" alt="Occult">
            <span>Occult FC</span>
          </td>
          <td>30</td><td>12</td><td>10</td><td>0</td><td>2</td><td>69</td><td>28</td><td>41</td>
        </tr>

        <tr>
          <td>2</td>
          <td class="team-cell">
            <img class="team-logo" src="{{ asset('images/escudos/cachorros.png') }}" alt="cachorros">
            <span>Cachorros</span>
          </td>
          <td>29</td><td>11</td><td>9</td><td>2</td><td>0</td><td>54</td><td>26</td><td>28</td>
        </tr>

        <tr>
          <td>3</td>
          <td class="team-cell">
            <img class="team-logo" src="{{ asset('images/escudos/gorineta.png') }}" alt="gorineta">
            <span>Goryneta</span>
          </td>
          <td>25</td><td>12</td><td>8</td><td>1</td><td>3</td><td>61</td><td>32</td><td>29</td>
        </tr>
      </tbody>
    </table>
  </div>

  <p class="nota">
    * Tabla con la posición aproximada del Occult. Puede no estar actualizada, para más información consulte la web oficial de la liga.
  </p>
</section>
