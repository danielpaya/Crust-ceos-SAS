/**
 * crustabank.js — Crustáceos SAS
 * Lógica de CrustaBank: productos y calculadora de patrimonio
 */

import { crustaBankProducts } from '../data/products.js';
import { renderProductCards } from '../components/productCard.js';

document.addEventListener('DOMContentLoaded', () => {
  // Renderizar productos financieros
  renderProductCards('crustabank-products', crustaBankProducts);

  // Calculadora de patrimonio crustáceo
  const form = document.getElementById('crustabank-calc');
  const result = document.getElementById('crustabank-result');

  if (form && result) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const camarones = parseInt(form.querySelector('#calc-camarones').value) || 0;
      const salinidad = parseInt(form.querySelector('#calc-salinidad').value) || 50;

      // Cálculo absurdo
      const langostas = (camarones * salinidad / 137).toFixed(1);
      const jaibas = Math.floor(camarones / 12);
      const riesgo = salinidad > 70 ? 'alto' : salinidad > 40 ? 'medio' : 'bajo';

      const results = [
        `Su patrimonio equivale a ${langostas} langostas y una mirada de desaprobación de Daniel Jaiba.`,
        `Usted posee ${camarones} camarones, ${langostas} langostas equivalentes y ${jaibas} jaibas de reserva. Riesgo de pinza: ${riesgo}.`,
        `Con ${camarones} camarones y salinidad ${salinidad}%, su fortuna marina es de ${langostas} langostas. Armando Camarones lo envidiaría.`,
        `Patrimonio valorado en ${langostas} langostas. CrustaBank recomienda no invertir los martes.`
      ];

      const msg = results[Math.floor(Math.random() * results.length)];

      result.innerHTML = `
        <div class="crustabank-result animate-fade-in-up">
          <div class="crustabank-result__value">🦞 ${langostas} langostas</div>
          <p style="margin: 0; font-size: var(--text-sm); color: var(--color-gray-light);">${msg}</p>
          <div style="margin-top: var(--space-3); display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap;">
            <span class="badge badge--ocean">🦐 ${camarones} camarones</span>
            <span class="badge badge--green">🦀 ${jaibas} jaibas</span>
            <span class="badge badge--${riesgo === 'alto' ? 'danger' : riesgo === 'medio' ? 'yellow' : 'green'}">⚠️ Riesgo: ${riesgo}</span>
          </div>
        </div>
      `;

      result.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  }
});
