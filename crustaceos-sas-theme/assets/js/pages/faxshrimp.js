/**
 * faxshrimp.js — Crustáceos SAS
 * Lógica de la página FaxShrimp: planes y formulario de fax
 */

import { faxShrimpPlans } from '../data/products.js';
import { renderPricingCards } from '../components/productCard.js';

document.addEventListener('DOMContentLoaded', () => {
  // Renderizar planes
  renderPricingCards('fax-plans', faxShrimpPlans);

  // Formulario de fax simulado
  const form = document.getElementById('fax-form');
  const result = document.getElementById('fax-result');

  if (form && result) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const nombre = form.querySelector('#fax-nombre').value.trim();
      const tipo = form.querySelector('#fax-tipo').value;
      
      const messages = [
        `Fax recibido. Su camarón tipo "${tipo}" está en cola de impresión.`,
        `El Departamento de Interpretación de Antojos procesó su solicitud, ${nombre}. Espere confirmación por señal de humo.`,
        `Transmisión de fax completada. Betty la Langosta auditará la frescura de su pedido en breve.`,
        `Fax recibido con claridad moderada. El camarón saldrá con leves dudas existenciales.`
      ];

      const msg = messages[Math.floor(Math.random() * messages.length)];

      result.innerHTML = `
        <div class="alert alert--success">
          <span class="alert__icon">📠</span>
          <div>
            <strong>¡Fax enviado exitosamente!</strong>
            <p style="margin: var(--space-2) 0 0;">${msg}</p>
          </div>
        </div>
      `;

      result.scrollIntoView({ behavior: 'smooth', block: 'center' });
      form.reset();
    });
  }
});
