@extends('layouts.app')
@section('title','Contenido | Occult FC')

@section('content')
  <div class="container contenido">
    
    {{-- ================== ARTÍCULOS ================== --}}
    <section class="media-section">
      <h2 class="section-title">Artículos recientes</h2>

      <div class="articles-grid">
        <!-- Artículo 1 -->
        <a href="#articulo1" class="article-card">
          <img src="{{ asset('images/articulos/articulo4.jpg') }}" alt="Noticia 1" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Inicio con buen pie</h3>
            <p class="article-excerpt">Victoria del Occult en su inicio liguero</p>
          </div>
        </a>

        <!-- Artículo 2 -->
        <a href="#articulo2" class="article-card">
          <img src="{{ asset('images/articulos/nuevaequipacion.jpg') }}" alt="Noticia 2" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Nueva equipación oficial 2025</h3>
            <p class="article-excerpt">Esta es la segunda equipación del Occult para la nueva temporada</p>
          </div>
        </a>

        <!-- Artículo 3 -->
        <a href="#articulo3" class="article-card">
          <img src="{{ asset('images/articulos/articulo1.jpg') }}" alt="Noticia 3" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Victoria ante Soltería FC</h3>
            <p class="article-excerpt">Victoria ante uno de los equipos más fuertes de la categoría</p>
          </div>
        </a>
      </div>
    </section>

    {{-- ================== MODALES ARTÍCULOS ================== --}}
    <div id="articulo1" class="article-modal">
      <a href="#" class="modal-close">×</a>
      <div class="modal-content">
        <img src="{{ asset('images/articulos/articulo4.jpg') }}" alt="Occult FC vs Nueva Unión - Primera victoria en liga">
        <h2>Occult FC logra su primera victoria en liga con un 3-1 ante Nueva Unión</h2>
        <p>
          El <strong>Occult FC</strong> consiguió su <strong>primera victoria en liga</strong> tras imponerse por 
          <strong>3-1</strong> frente a <strong>Nueva Unión</strong>, en un encuentro lleno de intensidad y buen
          fútbol que hizo vibrar a la afición.
        </p>
        <p>
          El equipo se adelantó en el marcador con un tanto tempranero que dio confianza y permitió manejar 
          los tiempos del partido. Con un juego rápido y efectivo en ataque, llegaron el <strong>segundo</strong> 
          y <strong>tercer gol</strong>, que prácticamente encarrilaron el triunfo.
        </p>
        <p>
          Nueva Unión logró descontar en los minutos finales con un gol que puso el <strong>3-1 definitivo</strong>, 
          pero la victoria ya estaba asegurada. El choque dejó claro que el grupo está unido y cada vez más 
          sólido en todas sus líneas.
        </p>
        <p>
          Tras el partido, el técnico del Occult valoró el esfuerzo del equipo:  
          <em>"Era fundamental sumar la primera victoria para reforzar la moral. Los chicos han trabajado duro 
          y se lo merecen. Ahora toca seguir creciendo partido a partido"</em>.
        </p>
        <p>
          Con este resultado, el Occult FC suma sus tres primeros puntos de la temporada y afronta los próximos 
          compromisos con ilusión renovada y la confianza de haber estrenado el casillero de victorias.
        </p>
      </div>
    </div>



    <div id="articulo2" class="article-modal">
      <a href="#" class="modal-close">×</a>
      <div class="modal-content">
        <img src="{{ asset('images/articulos/nuevaequipacion.jpg') }}" alt="Nueva equipación blanca y dorada">
        <h2>Nueva equipación oficial 2025</h2>
        <p>
          El <strong>Occult FC</strong> presenta su nueva piel para la temporada 2025: una camiseta que
          fusiona la pureza del <strong>blanco</strong> con la distinción del <strong>dorado</strong>.  
        </p>
        <p>
          El blanco se erige como el lienzo principal, símbolo de unidad, frescura y confianza en el
          equipo. Sobre él, los detalles dorados iluminan cada costura con un toque de grandeza,
          reflejando la ambición y el espíritu competitivo que caracterizan al club.
        </p>
        <p>
          Más que una prenda deportiva, esta equipación representa un compromiso con la afición,
          con la ciudad y con la historia del Occult, que se viste ahora de blanco y oro para
          escribir nuevas páginas de gloria.
        </p>
        <p>
          La camiseta blanca y dorada ya está lista para acompañar cada gol, cada ovación y cada
          sueño compartido. Una piel que trasciende el fútbol y une a todos bajo los mismos colores.
        </p>
      </div>
    </div>


    <div id="articulo3" class="article-modal">
      <a href="#" class="modal-close">×</a>
      <div class="modal-content">
        <img src="{{ asset('images/articulos/articulo1.jpg') }}" alt="Victoria ante Soltería FC">
        <h2>Occult sigue intratable: segunda victoria en liga</h2>
        <p>
          El <strong>Occult FC</strong> prolongó su gran inicio de temporada con una nueva victoria en la segunda jornada
          de liga, imponiéndose por <strong>6-4</strong> a <strong>Soltería FC</strong> en un duelo cargado de emoción y goles.
          Con este triunfo, el equipo suma su <strong>segunda victoria consecutiva</strong> y confirma su buen momento.
        </p>
        <p>
          Uno de los momentos más celebrados llegó con el <strong>golazo de Unai</strong>, un disparo espectacular desde fuera
          del área que se coló directo en la escuadra, desatando la ovación de la grada y marcando el ritmo del partido.
        </p>
        <p>
          En defensa, <strong>Bonilla</strong> volvió a brillar con una actuación impecable. Su capacidad de anticipación,
          liderazgo en la zaga y firmeza en los duelos fueron determinantes para contener las acometidas de Soltería FC,
          aportando seguridad al equipo en los momentos más críticos.
        </p>
        <p>
          Con dos victorias en dos partidos, el Occult FC se coloca en la parte alta de la clasificación y mantiene intactas
          sus aspiraciones. La plantilla respira confianza y la afición sueña con que esta racha sea solo el comienzo de una
          temporada memorable.
        </p>
      </div>
    </div>



    {{-- ================== VÍDEOS ================== --}}
    <section class="media-section">
      <h2 class="section-title">Últimos vídeos</h2>

      <div class="videos-grid">
        <article class="video-card">
          <div class="ratio ratio-16x9">
            <video controls preload="metadata" poster="{{ asset('images/manumuro.jpg') }}">
              <source src="{{ asset('videos/paradasmanu.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">El muro del Occult</h3>
        </article>

        <article class="video-card">
          <div class="ratio ratio-16x9">
            <video controls preload="metadata" poster="{{ asset('images/hugogoals.png') }}">
              <source src="{{ asset('videos/goleshugo2.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">Goles Hugo vs Nueva Unión</h3>
        </article>

        <article class="video-card">
          <div class="ratio ratio-16x9">
            <video controls preload="metadata" poster="{{ asset('images/unai.png') }}">
              <source src="{{ asset('videos/unaigol.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">Golazo de Unai ante Soltería</h3>
        </article>
      </div>
    </section>

    {{-- ================== FOTOS ================== --}}
    <section class="media-section">
      <h2 class="section-title">Galería de fotos</h2>

      <div class="photo-grid">
        {{-- Cada foto abre un lightbox CSS (:target) --}}
        <a href="#foto1" class="photo">
          <img src="{{ asset('images/camiseta2.jpg') }}" alt="Celebración gol" loading="lazy">
        </a>
        <a href="#foto2" class="photo">
          <img src="{{ asset('images/camiseta1.jpg') }}" alt="Calentamiento" loading="lazy">
        </a>
        <a href="#foto3" class="photo">
          <img src="{{ asset('images/dorsales2.jpg') }}" alt="Afición" loading="lazy">
        </a>
        <a href="#foto4" class="photo">
          <img src="{{ asset('images/f1.jpg') }}" alt="Entrada al área" loading="lazy">
        </a>
        <a href="#foto5" class="photo">
          <img src="{{ asset('images/f2.jpg') }}" alt="Parada del portero" loading="lazy">
        </a>
        <a href="#foto6" class="photo">
          <img src="{{ asset('images/f3.jpg') }}" alt="Once inicial" loading="lazy">
        </a>
        <a href="#foto7" class="photo">
          <img src="{{ asset('images/f4.jpg') }}" alt="Once inicial" loading="lazy">
        </a>
        <a href="#foto8" class="photo">
          <img src="{{ asset('images/f5.jpg') }}" alt="Once inicial" loading="lazy">
        </a>
      </div>

      {{-- Lightboxs (uno por foto). Cerrar clicando fuera o en × --}}
      <div id="foto1" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/camiseta2.jpg') }}" alt="">
      </div>
      <div id="foto2" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/camiseta1.jpg') }}" alt="">
      </div>
      <div id="foto3" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/dorsales2.jpg') }}" alt="">
      </div>
      <div id="foto4" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/f1.jpg') }}" alt="">
      </div>
      <div id="foto5" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/f2.jpg') }}" alt="">
      </div>
      <div id="foto6" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/f3.jpg') }}" alt="">
      </div>
      <div id="foto7" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/f4.jpg') }}" alt="">
      </div>
      <div id="foto8" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ asset('images/f5.jpg') }}" alt="">
      </div>
    </section>

  </div>
@endsection