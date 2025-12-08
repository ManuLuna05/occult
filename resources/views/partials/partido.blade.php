<article class="mc-row">

    <div class="mc-row__meta">
        <span class="mc-chip">{{ $match['competition'] }}</span>

        @if (!empty($match['round']))
            <span class="mc-bullet">{{ $match['round'] }}</span>
        @endif
    </div>

    <div class="mc-row__content">

        {{-- EQUIPO LOCAL --}}
        <div class="mc-team">
            <img class="mc-team__crest" src="{{ asset($match['home']['logo']) }}" alt="{{ $match['home']['name'] }}">
            <span class="mc-team__name">{{ $match['home']['name'] }}</span>
        </div>

        {{-- CENTRO --}}
        <div class="mc-center">
            <span class="mc-center__date">
                @if (empty($match['date_text']) || $match['date_text'] === '—')
                    Por determinar
                @else
                    {{ $match['date_text'] }}
                @endif
            </span>
            <div class="mc-center__score">
                @if($match['score'])
                    <strong>{{ $match['score'][0] }}</strong>
                    <i>-</i>
                    <strong>{{ $match['score'][1] }}</strong>
                @else
                    <strong>— <i>-</i> —</strong>
                @endif
            </div>
        </div>

        {{-- EQUIPO VISITANTE --}}
        <div class="mc-team mc-team--away">
            <img class="mc-team__crest" src="{{ asset($match['away']['logo']) }}" alt="{{ $match['away']['name'] }}">
            <span class="mc-team__name">{{ $match['away']['name'] }}</span>
        </div>

    </div>

</article>
