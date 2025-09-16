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
          <img src="{{ asset('images/articulos/articulo1.jpg') }}" alt="Noticia 1" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Derrota frente a Mexicano</h3>
            <p class="article-excerpt">Declaraciones sobre el partido y el resultado</p>
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
          <img src="{{ asset('images/articulos/articulo3.png') }}" alt="Noticia 3" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Balance de la pretemporada</h3>
            <p class="article-excerpt">Balance sobre los resultados de los amistosos de pretemporada</p>
          </div>
        </a>
      </div>
    </section>

    {{-- ================== MODALES ARTÍCULOS ================== --}}
    <div id="articulo1" class="article-modal">
      <a href="#" class="modal-close">×</a>
      <div class="modal-content">
        <img src="{{ asset('images/articulos/articulo1.jpg') }}" alt="Occult FC vs Mexicano - Amistoso de pretemporada">
        <h2>Occult FC cierra la pretemporada con derrota 5-3 ante Mexicano</h2>
        <p>
          El <strong>Occult FC</strong> cayó por <strong>5-3</strong> frente a <strong>Mexicano</strong> en el que fue el último amistoso
          de la pretemporada, disputado en el estadio de Vistalegre. El encuentro estuvo marcado por la
          intensidad ofensiva y la falta de solidez atrás, factores que acabaron inclinando el marcador a
          favor del rival.
        </p>
        <p>
          Tras el choque, el técnico del Occult analizó el rendimiento del equipo:  
          <em>"Más allá del resultado, este último amistoso nos ha servido para comprobar dónde debemos
          mejorar. Hemos generado ocasiones y marcado tres goles, pero no podemos permitirnos encajar
          cinco. Ahora toca ajustar la defensa y llegar listos al inicio de la liga"</em>.
        </p>
        <p>
          El capitán también hizo balance de la preparación:  
          <em>"No nos gusta perder, pero estos partidos son parte del proceso. Cerramos la pretemporada con
          mucho trabajo por delante, aunque con la confianza de que el grupo está unido y motivado para
          afrontar el arranque oficial"</em>.
        </p>
        <p>
          Con este resultado, el Occult pone punto final a los amistosos de preparación y centra ya todas
          sus energías en el debut liguero de la temporada 2025.
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
        <img src="{{ asset('images/articulos/articulo3.png') }}" alt="Balance de la pretemporada Occult FC">
        <h2>Balance de la pretemporada: un empate y dos derrotas</h2>
        <p>
          El <strong>Occult FC</strong> cerró su fase de preparación con un balance de <strong>un empate</strong> y
          <strong>dos derrotas</strong>. Aunque los resultados no acompañaron, el cuerpo técnico y la plantilla
          destacan el valor de estos encuentros de cara a la puesta a punto para la temporada 2025.
        </p>
        <p>
          El entrenador del Occult hizo balance tras el último amistoso:  
          <em>"No podemos quedarnos solo con los números. Estos partidos nos han permitido probar sistemas,
          dar minutos a todos y detectar qué aspectos debemos mejorar. El equipo ha mostrado carácter en
          ataque, pero debemos reforzar nuestra solidez defensiva"</em>.
        </p>
        <p>
          Desde la plantilla también se respira confianza. El capitán declaró:  
          <em>"Los resultados no fueron los esperados, pero lo importante era rodarnos y crecer como grupo.
          Ahora toca mirar hacia adelante: la liga empieza y queremos llegar con toda la energía"</em>.
        </p>
        <p>
          Con la pretemporada concluida, el Occult FC afronta ya la cuenta atrás para el inicio de la
          competición oficial, con la convicción de que el trabajo realizado servirá de base para
          encarar una exigente campaña.
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
            <video controls preload="metadata" poster="{{ asset('images/amistoso1.jpg') }}">
              <source src="{{ asset('videos/golmarcos.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">2-1 Occult vs Mexicano</h3>
        </article>

        <article class="video-card">
          <div class="ratio ratio-16x9">
            <video controls preload="metadata" poster="{{ asset('images/amistoso1.jpg') }}">
              <source src="{{ asset('videos/golantonio.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">1-0 Occult vs Mexicano</h3>
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
    </section>

  </div>
@endsection
