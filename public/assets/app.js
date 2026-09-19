/* ==========================================================
   NÉVÉ — interacciones del sitio
   ----------------------------------------------------------
   1. Enlaces de WhatsApp
   2. Carrusel reutilizable (fábrica única)
   3. Carrusel informativo (quick info)
   4. Galería de sabores
   5. Carrusel de logos
   6. Selector de sabores
   ========================================================== */
(() => {
  'use strict';

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ==========================================================
     1. ENLACES DINÁMICOS DE WHATSAPP
     ========================================================== */
  const { whatsapp = '', message = '' } = document.body.dataset;

  if (whatsapp) {
    const whatsappUrl = `https://wa.me/${whatsapp}?text=${encodeURIComponent(message)}`;
    document.querySelectorAll('.wa-link').forEach((link) => {
      link.href = whatsappUrl;
      link.target = '_blank';
      link.rel = 'noopener';
    });
  }

  /* ==========================================================
     2. CARRUSEL REUTILIZABLE
     Una sola implementación para los tres carruseles del sitio.
     Todo se consulta dentro de `root`, así que puede haber
     varios carruseles en la misma página sin que se pisen.
     ========================================================== */
  function createCarousel({
    root,                 // contenedor que envuelve diapositivas + controles
    slideSelector,
    dotSelector,
    arrowSelector,
    directionAttribute,   // atributo data-* que indica 'next' / 'previous'
    track = null,         // si se pasa, se desplaza con translateX
    interval = 0,         // 0 = sin reproducción automática
    onChange = null,
  }) {
    if (!root) return null;

    const slides = [...root.querySelectorAll(slideSelector)];
    if (slides.length === 0) return null;

    const dots = dotSelector ? [...root.querySelectorAll(dotSelector)] : [];
    const arrows = arrowSelector ? [...root.querySelectorAll(arrowSelector)] : [];

    let index = 0;
    let timer = null;

    function show(next) {
      index = (next % slides.length + slides.length) % slides.length;

      if (track) {
        track.style.transform = `translateX(-${index * 100}%)`;
      }

      slides.forEach((slide, position) => {
        const isActive = position === index;
        slide.classList.toggle('active', isActive);
        slide.setAttribute('aria-hidden', String(!isActive));
      });

      dots.forEach((dot, position) => {
        const isActive = position === index;
        dot.classList.toggle('active', isActive);
        dot.setAttribute('aria-selected', String(isActive));
        dot.tabIndex = isActive ? 0 : -1;
      });

      if (typeof onChange === 'function') onChange(index);
    }

    function stop() {
      if (timer) {
        clearInterval(timer);
        timer = null;
      }
    }

    function start() {
      stop();
      if (!interval || reduceMotion || slides.length < 2) return;
      timer = setInterval(() => show(index + 1), interval);
    }

    function goTo(next) {
      show(next);
      start(); // reinicia el temporizador tras una acción del usuario
    }

    arrows.forEach((arrow) => {
      arrow.addEventListener('click', () => {
        const step = arrow.dataset[directionAttribute] === 'next' ? 1 : -1;
        goTo(index + step);
      });
    });

    dots.forEach((dot, position) => {
      dot.addEventListener('click', () => goTo(position));
    });

    // Teclado: flechas izquierda / derecha dentro del carrusel
    root.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowRight') {
        goTo(index + 1);
      } else if (event.key === 'ArrowLeft') {
        goTo(index - 1);
      } else {
        return;
      }
      event.preventDefault();
    });

    // Pausa con ratón, con foco de teclado y al cambiar de pestaña
    root.addEventListener('mouseenter', stop);
    root.addEventListener('mouseleave', start);
    root.addEventListener('focusin', stop);
    root.addEventListener('focusout', start);
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) stop();
      else start();
    });

    // Deslizar en pantallas táctiles
    let touchStartX = 0;
    root.addEventListener('touchstart', (event) => {
      touchStartX = event.changedTouches[0].screenX;
    }, { passive: true });

    root.addEventListener('touchend', (event) => {
      const distance = touchStartX - event.changedTouches[0].screenX;
      if (Math.abs(distance) < 50) return;
      goTo(index + (distance > 0 ? 1 : -1));
    }, { passive: true });

    show(0);
    start();

    return { show: goTo, stop, start };
  }

  /* ==========================================================
     3. CARRUSEL INFORMATIVO (QUICK INFO)
     ========================================================== */
  createCarousel({
    root: document.querySelector('.quick-info'),
    slideSelector: '.quick-info-slide',
    dotSelector: '.quick-info-dots button',
    arrowSelector: '.quick-info-arrow',
    directionAttribute: 'direction',
    interval: 4500,
  });

  /* ==========================================================
     4. GALERÍA DE SABORES
     ========================================================== */
  createCarousel({
    root: document.querySelector('.flavor-gallery'),
    slideSelector: '.flavor-gallery-slide',
    dotSelector: '.flavor-gallery-dots button',
    arrowSelector: '.flavor-gallery-arrow',
    directionAttribute: 'galleryDirection',
    interval: 5500,
  });

  /* ==========================================================
     5. CARRUSEL DE LOGOS
     Las flechas viven dentro de .logos-carousel y los puntos
     fuera, por eso la raíz es .experience-logos: así ambos
     quedan dentro del mismo ámbito.
     ========================================================== */
  const logosRoot = document.querySelector('.experience-logos');

  createCarousel({
    root: logosRoot,
    slideSelector: '.logo-slide',
    dotSelector: '.carousel-dot',
    arrowSelector: '.carousel-arrow',
    directionAttribute: 'carouselDirection',
    track: logosRoot?.querySelector('.logos-track') ?? null,
    interval: 6000,
  });

  /* ==========================================================
     6. SELECTOR INTERACTIVO DE SABORES
     ========================================================== */
  const feature = document.querySelector('.flavor-feature');
  const flavorButtons = [...document.querySelectorAll('.flavor-option')];

  if (feature && flavorButtons.length) {
    const total = flavorButtons.length;

    // Se resuelven los nodos una sola vez, no en cada clic.
    const fields = {
      number: document.getElementById('flavorNumber'),
      name: document.getElementById('flavorName'),
      labelFlavor: document.getElementById('labelFlavor'),
      labelNote: document.getElementById('labelNote'),
      tag: document.getElementById('flavorTag'),
      description: document.getElementById('flavorDescription'),
      price: document.getElementById('flavorPrice'),
      symbol: document.getElementById('artFruit'),
    };

    const setText = (node, value) => {
      if (node) node.textContent = value ?? '';
    };

    const pad = (value) => String(value).padStart(2, '0');

    function selectFlavor(index, { focus = false } = {}) {
      const button = flavorButtons[index];
      if (!button) return;

      let product;
      try {
        product = JSON.parse(button.dataset.product || '{}');
      } catch (error) {
        console.error('No se pudo leer el sabor seleccionado:', error);
        return;
      }

      flavorButtons.forEach((item, position) => {
        const isActive = position === index;
        item.classList.toggle('active', isActive);
        item.setAttribute('aria-selected', String(isActive));
        item.tabIndex = isActive ? 0 : -1;
      });

      setText(fields.number, `${pad(index + 1)} / ${pad(total)}`);
      setText(fields.name, product.name);
      setText(fields.labelFlavor, (product.name || '').toUpperCase());
      setText(fields.labelNote, product.note);
      setText(fields.tag, product.tag);
      setText(fields.description, product.description);
      setText(fields.price, product.price);
      setText(fields.symbol, product.symbol);

      if (product.color) feature.style.setProperty('--flavor-bg', product.color);
      if (product.accent) feature.style.setProperty('--flavor-accent', product.accent);

      if (focus) button.focus();
    }

    flavorButtons.forEach((button, index) => {
      button.tabIndex = index === 0 ? 0 : -1;
      button.addEventListener('click', () => selectFlavor(index));

      button.addEventListener('keydown', (event) => {
        const step = event.key === 'ArrowDown' || event.key === 'ArrowRight' ? 1
          : event.key === 'ArrowUp' || event.key === 'ArrowLeft' ? -1
          : 0;
        if (!step) return;
        event.preventDefault();
        selectFlavor((index + step + total) % total, { focus: true });
      });
    });
  }
})();
