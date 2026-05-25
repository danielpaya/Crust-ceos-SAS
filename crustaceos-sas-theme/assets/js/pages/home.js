/**
 * home.js — Crustáceos SAS
 * Lógica de la página de inicio
 */

import { renderPromoBanner } from '../components/promoBanner.js';

document.addEventListener('DOMContentLoaded', () => {
  // Banner promocional
  renderPromoBanner('promo-banner', 0);
});
