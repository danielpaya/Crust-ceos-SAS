/**
 * main.js — Crustáceos SAS
 * Punto de entrada global: inicializa header, footer y navegación
 */

import { renderHeader } from './components/header.js';
import { renderFooter } from './components/footer.js';
import { initNavigation } from './navigation.js';

/**
 * Inicialización global del sitio
 */
document.addEventListener('DOMContentLoaded', () => {
  // Renderizar componentes globales
  renderHeader();
  renderFooter();

  // Inicializar navegación (hamburger menu)
  initNavigation();

  // Animaciones de scroll (Intersection Observer)
  initScrollAnimations();
});

/**
 * Anima elementos cuando entran en el viewport
 */
function initScrollAnimations() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade-in-up');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  // Observar elementos con la clase .animate-on-scroll
  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    el.style.opacity = '0';
    observer.observe(el);
  });
}
