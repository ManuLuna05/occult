@extends('layouts.app')
@section('title','Contenido')

@section('content')
  <div class="container contenido">
    
    {{-- ================== ARTÍCULOS ================== --}}
    <section class="media-section">
      <h2 class="section-title">Artículos recientes</h2>

      <div class="articles-grid">
        <!-- Artículo 1 -->
        <a href="#articulo1" class="article-card">
          <img src="{{ Vite::asset('resources/images/articulos/art1.jpg') }}" alt="Noticia 1" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Occult FC inicia la temporada con victoria</h3>
            <p class="article-excerpt">El equipo se impuso en su primer amistoso de pretemporada...</p>
          </div>
        </a>

        <!-- Artículo 2 -->
        <a href="#articulo2" class="article-card">
          <img src="{{ Vite::asset('resources/images/articulos/art2.jpg') }}" alt="Noticia 2" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Nueva equipación oficial 2025</h3>
            <p class="article-excerpt">Presentamos la camiseta morada que vestirá Occult FC...</p>
          </div>
        </a>

        <!-- Artículo 3 -->
        <a href="#articulo3" class="article-card">
          <img src="{{ Vite::asset('resources/images/articulos/art3.jpg') }}" alt="Noticia 3" loading="lazy">
          <div class="article-body">
            <h3 class="article-title">Entrevista al capitán del equipo</h3>
            <p class="article-excerpt">El capitán analiza los retos de la temporada...</p>
          </div>
        </a>
      </div>
    </section>

    {{-- ================== MODALES ARTÍCULOS ================== --}}
    <div id="articulo1" class="article-modal">
      <a href="#" class="modal-close">×</a>
      <div class="modal-content">
        <img src="{{ Vite::asset('resources/images/articulos/art1.jpg') }}" alt="Noticia 1">
        <h2>Occult FC inicia la temporada con victoria</h2>
        <p>Texto completo del artículo 1. Aquí puedes extender la noticia con más detalle...</p>
      </div>
    </div>

    <div id="articulo2" class="article-modal">
      <a href="#" class="modal-close">×</a>
      <div class="modal-content">
        <img src="{{ Vite::asset('resources/images/articulos/art2.jpg') }}" alt="Noticia 2">
        <h2>Nueva equipación oficial 2025</h2>
        <p>Texto completo del artículo 2. Detalles de la presentación y fotos de la equipación...</p>
      </div>
    </div>

    <div id="articulo3" class="article-modal">
      <a href="#" class="modal-close">×</a>
      <div class="modal-content">
        <img src="{{ Vite::asset('resources/images/articulos/art3.jpg') }}" alt="Noticia 3">
        <h2>Entrevista al capitán del equipo</h2>
        <p>Texto completo del artículo 3. Reflexiones del capitán sobre la temporada...</p>
      </div>
    </div>

    {{-- ================== VÍDEOS ================== --}}
    <section class="media-section">
      <h2 class="section-title">Últimos vídeos</h2>

      <div class="videos-grid">
        <article class="video-card">
          <div class="ratio ratio-16x9">
            <video controls preload="metadata" poster="{{ Vite::asset('resources/images/amistoso1.jpg') }}">
              <source src="{{ Vite::asset('resources/videos/golmarcos.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">2-1 Occult vs Mexicano</h3>
        </article>

        <article class="video-card">
          <div class="ratio ratio-16x9">
            <video controls preload="metadata" poster="{{ Vite::asset('resources/images/amistoso1.jpg') }}">
              <source src="{{ Vite::asset('resources/videos/golmarcos.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">2-1 Occult vs Mexicano</h3>
        </article>

        <article class="video-card">
          <div class="ratio ratio-16x9">
            <video controls preload="metadata" poster="{{ Vite::asset('resources/images/amistoso1.jpg') }}">
              <source src="{{ Vite::asset('resources/videos/golmarcos.mp4') }}" type="video/mp4">
              Tu navegador no soporta la etiqueta de vídeo.
            </video>
          </div>
          <h3 class="video-title">2-1 Occult vs Mexicano</h3>
        </article>
      </div>
    </section>

    {{-- ================== FOTOS ================== --}}
    <section class="media-section">
      <h2 class="section-title">Galería de fotos</h2>

      <div class="photo-grid">
        {{-- Cada foto abre un lightbox CSS (:target) --}}
        <a href="#foto1" class="photo">
          <img src="{{ Vite::asset('resources/images/camiseta2.jpg') }}" alt="Celebración gol" loading="lazy">
        </a>
        <a href="#foto2" class="photo">
          <img src="{{ Vite::asset('resources/images/camiseta1.jpg') }}" alt="Calentamiento" loading="lazy">
        </a>
        <a href="#foto3" class="photo">
          <img src="{{ Vite::asset('resources/images/dorsales2.jpg') }}" alt="Afición" loading="lazy">
        </a>
        <a href="#foto4" class="photo">
          <img src="{{ Vite::asset('resources/images/f1.jpg') }}" alt="Entrada al área" loading="lazy">
        </a>
        <a href="#foto5" class="photo">
          <img src="{{ Vite::asset('resources/images/f2.jpg') }}" alt="Parada del portero" loading="lazy">
        </a>
        <a href="#foto6" class="photo">
          <img src="{{ Vite::asset('resources/images/f3.jpg') }}" alt="Once inicial" loading="lazy">
        </a>
      </div>

      {{-- Lightboxs (uno por foto). Cerrar clicando fuera o en × --}}
      <div id="foto1" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ Vite::asset('resources/images/camiseta2.jpg') }}" alt="">
      </div>
      <div id="foto2" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ Vite::asset('resources/images/camiseta1.jpg') }}" alt="">
      </div>
      <div id="foto3" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ Vite::asset('resources/images/dorsales2.jpg') }}" alt="">
      </div>
      <div id="foto4" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ Vite::asset('resources/images/f1.jpg') }}" alt="">
      </div>
      <div id="foto5" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ Vite::asset('resources/images/f2.jpg') }}" alt="">
      </div>
      <div id="foto6" class="lightbox">
        <a href="#" class="lightbox__close" aria-label="Cerrar">×</a>
        <img src="{{ Vite::asset('resources/images/f3.jpg') }}" alt="">
      </div>
    </section>

  </div>
@endsection
