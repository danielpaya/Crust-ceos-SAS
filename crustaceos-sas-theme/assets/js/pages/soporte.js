/**
 * soporte.js — Crustáceos SAS
 * Lógica de la página de soporte: formulario de tickets
 */

import { initTicketWidget } from '../components/ticketWidget.js';

document.addEventListener('DOMContentLoaded', () => {
  initTicketWidget('soporte-form', 'ticket-result');
});
