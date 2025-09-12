// resources/js/heroCarousel.js

/**
 * Inicializa uno o varios carruseles tipo "hero".
 * @param {string} selector - CSS selector del/los carrusel(es).
 */
export function initHeroCarousel(selector = '.hero-carousel') {
  const roots = document.querySelectorAll(selector);
  if (!roots.length) return;

  roots.forEach(setupCarousel);
}

function setupCarousel(hero) {
  const track = hero.querySelector('.hero-track');
  const slides = Array.from(hero.querySelectorAll('.hero-slide'));
  if (!track || !slides.length) return;

  // Controles (opcionales si no existen)
  const prevBtn = hero.querySelector('.hero-nav.prev');
  const nextBtn = hero.querySelector('.hero-nav.next');

  // Paginación/barras (si no existen, se crean)
  let barsWrap = hero.querySelector('.hero-bars');
  if (!barsWrap) {
    barsWrap = document.createElement('div');
    barsWrap.className = 'hero-bars';
    hero.appendChild(barsWrap);
  }
  if (!barsWrap.children.length) {
    barsWrap.innerHTML = slides
      .map(() => `<button class="bar" aria-label="Ir a la diapositiva"></button>`)
      .join('');
  }
  const bars = Array.from(barsWrap.querySelectorAll('.bar'));

  // Duración por slide (prioridad: data-interval > CSS var --hero-timing > 6s)
  const durAttr = hero.getAttribute('data-interval'); // en segundos (ej: "7")
  const rootStyles = getComputedStyle(document.documentElement);
  const cssDur = Number((rootStyles.getPropertyValue('--hero-timing') || '').trim().replace('s', ''));
  const DURATION = Number(durAttr || cssDur || 6);

  let i = 0;
  let timer = null;

  function goTo(idx) {
    i = (idx + slides.length) % slides.length;
    track.style.transform = `translateX(-${i * 100}%)`;
    bars.forEach(b => b.classList.remove('is-active'));
    if (bars[i]) bars[i].classList.add('is-active');
    restartAuto();
  }

  function startAuto() {
    stopAuto();
    timer = setInterval(() => goTo(i + 1), DURATION * 1000);
  }
  function stopAuto() {
    if (timer) clearInterval(timer);
    timer = null;
  }
  function restartAuto() {
    stopAuto();
    startAuto();
  }

  // Controles
  nextBtn?.addEventListener('click', () => goTo(i + 1));
  prevBtn?.addEventListener('click', () => goTo(i - 1));
  bars.forEach((b, idx) => b.addEventListener('click', () => goTo(idx)));

  // Pausa al interactuar
  hero.addEventListener('mouseenter', stopAuto);
  hero.addEventListener('mouseleave', startAuto);
  hero.addEventListener('focusin', stopAuto);
  hero.addEventListener('focusout', startAuto);

  // Swipe táctil básico
  let x0 = null;
  hero.addEventListener('touchstart', e => (x0 = e.touches[0].clientX), { passive: true });
  hero.addEventListener('touchend', e => {
    if (x0 === null) return;
    const dx = e.changedTouches[0].clientX - x0;
    if (Math.abs(dx) > 40) goTo(i + (dx < 0 ? 1 : -1));
    x0 = null;
  });

  // Inicia
  goTo(0);
  startAuto();
}

// Auto-inicializa si lo importas directamente sin llamar a la función
if (document.currentScript && document.readyState !== 'loading') {
  initHeroCarousel();
} else {
  document.addEventListener('DOMContentLoaded', () => initHeroCarousel());
}
