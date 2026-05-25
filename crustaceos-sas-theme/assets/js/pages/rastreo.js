/**
 * rastreo.js — Crustáceos SAS
 * Lógica de la página de rastreo de pedidos
 */

import { initTrackingWidget } from '../components/trackingWidget.js';

document.addEventListener('DOMContentLoaded', () => {
  initTrackingWidget('rastreo-form', 'rastreo-input', 'rastreo-results');
});
