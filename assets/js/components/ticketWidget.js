/**
 * ticketWidget.js — Crustáceos SAS
 * Genera tickets falsos con ID y respuesta de Patricia Percebes
 */

import { generateTicketId, patriciaResponses } from '../data/tickets.js';

/**
 * Crea el mensaje de confirmación de ticket
 * @param {string} ticketId - ID generado
 * @param {string} category - Categoría seleccionada
 * @param {string} priority - Prioridad seleccionada
 * @returns {string} HTML del mensaje de confirmación
 */
function createTicketConfirmation(ticketId, category, priority) {
  const response = patriciaResponses[Math.floor(Math.random() * patriciaResponses.length)];

  return `
    <div class="alert alert--success animate-fade-in-up" id="ticket-confirmation">
      <span class="alert__icon">🎫</span>
      <div>
        <strong>Ticket creado exitosamente</strong>
        <p style="margin: var(--space-2) 0;">
          Número de ticket: <strong style="font-family: var(--font-heading); font-size: var(--text-xl); color: var(--color-ocean);">${ticketId}</strong>
        </p>
        <p style="margin: var(--space-2) 0; font-size: var(--text-sm);">
          <strong>Categoría:</strong> ${category}<br>
          <strong>Prioridad:</strong> ${priority}
        </p>
        <p style="margin: var(--space-2) 0; font-style: italic; color: var(--color-gray-light);">
          ${response}
        </p>
      </div>
    </div>
  `;
}

/**
 * Inicializa el widget de tickets
 * @param {string} formId - ID del formulario
 * @param {string} resultsId - ID del contenedor de resultados
 */
export function initTicketWidget(formId, resultsId) {
  const form = document.getElementById(formId);
  const results = document.getElementById(resultsId);

  if (!form || !results) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const category = formData.get('category') || 'Sin categoría';
    const priority = formData.get('priority') || 'Media';

    const ticketId = generateTicketId();
    results.innerHTML = createTicketConfirmation(ticketId, category, priority);

    // Scroll al resultado
    results.scrollIntoView({ behavior: 'smooth', block: 'center' });

    // Reset form
    form.reset();
  });
}
