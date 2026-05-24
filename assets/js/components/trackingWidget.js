/**
 * trackingWidget.js — Crustáceos SAS
 * Timeline visual de rastreo con estados aleatorios
 */

import { trackingSteps, trackingMessages } from '../data/trackingStates.js';

/**
 * Genera una línea de tiempo con estados aleatorios
 * @param {string} code - Código de rastreo ingresado
 * @returns {string} HTML del timeline + mensaje
 */
export function generateTrackingTimeline(code) {
  // Determina cuántos pasos mostrar (entre 2 y todos)
  const numSteps = Math.floor(Math.random() * (trackingSteps.length - 1)) + 2;
  const activeIndex = numSteps - 1;

  const stepsHtml = trackingSteps.slice(0, numSteps).map((step, index) => {
    let statusClass = 'timeline__item--completed';
    if (index === activeIndex) statusClass = 'timeline__item--active';
    if (index > activeIndex) statusClass = 'timeline__item--pending';

    return `
      <div class="timeline__item ${statusClass}" style="animation-delay: ${index * 0.15}s">
        <div class="timeline__dot"></div>
        <div class="timeline__content">
          <div class="timeline__title">${step.icon} ${step.title}</div>
          <p class="timeline__desc">${step.description}</p>
          <span class="timeline__time">${step.time}</span>
        </div>
      </div>
    `;
  }).join('');

  const randomMessage = trackingMessages[Math.floor(Math.random() * trackingMessages.length)];

  return `
    <div class="rastreo-results animate-fade-in-up">
      <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: var(--space-6);">
        <h3 style="margin: 0;">📦 Pedido: <span class="text-ocean">${code.toUpperCase()}</span></h3>
        <span class="badge badge--green">En progreso</span>
      </div>

      <div class="timeline">
        ${stepsHtml}
      </div>

      <div class="rastreo-message">
        <p style="margin: 0;">💬 ${randomMessage}</p>
      </div>
    </div>
  `;
}

/**
 * Inicializa el widget de rastreo
 * @param {string} formId - ID del formulario/botón
 * @param {string} inputId - ID del input de código
 * @param {string} resultsId - ID del contenedor de resultados
 */
export function initTrackingWidget(formId, inputId, resultsId) {
  const form = document.getElementById(formId);
  const input = document.getElementById(inputId);
  const results = document.getElementById(resultsId);

  if (!form || !input || !results) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const code = input.value.trim();
    if (!code) return;

    results.innerHTML = generateTrackingTimeline(code);
  });

  // Hacer que los ejemplos sean clickeables
  document.querySelectorAll('.rastreo-example').forEach(el => {
    el.addEventListener('click', () => {
      input.value = el.textContent;
      form.dispatchEvent(new Event('submit'));
    });
  });
}
