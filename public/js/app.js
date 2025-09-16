// OJO: si NO tienes bootstrap.js en public/js, NO lo importes.
// import './bootstrap';

import { initHeroCarousel } from './carrusel.js'; // incluye la extensión .js

window.addEventListener('DOMContentLoaded', () => {
  initHeroCarousel(); // por defecto busca .hero-carousel
});
