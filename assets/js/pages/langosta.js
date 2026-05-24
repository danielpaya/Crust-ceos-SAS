/**
 * langosta.js — Crustáceos SAS
 * Lógica de la página Langosta Express: planes y medidor de pinza
 */

import { langosstaPlans } from '../data/products.js';
import { renderPricingCards } from '../components/productCard.js';

document.addEventListener('DOMContentLoaded', () => {
  // Renderizar planes
  renderPricingCards('langosta-plans', langosstaPlans);

  // Animar el medidor de riesgo de pinza
  const pinzaFill = document.querySelector('.pinza-meter__fill');
  if (pinzaFill) {
    setTimeout(() => {
      pinzaFill.style.width = '55%';
    }, 500);
  }
});
