/**
 * promoBanner.js — Crustáceos SAS
 * Banner promocional con frases rotativas y efecto shimmer
 */

const promoMessages = [
  {
    icon: '🦐',
    text: 'Camarones ilimitados los martes',
    small: 'Aplican términos, condiciones y mareas.'
  },
  {
    icon: '📠',
    text: 'Nuevo: FaxShrimp Enterprise',
    small: 'Ahora con soporte 24/7 por chat con un cangrejo.'
  },
  {
    icon: '🦞',
    text: 'Langosta Express — Entrega premium',
    small: 'Riesgo de ataque de pinza: medio.'
  },
  {
    icon: '🏦',
    text: 'CrustaBank: Su dinero huele ligeramente a mar',
    small: 'Abra su cuenta de ahorro en camarones hoy.'
  }
];

/**
 * Renderiza un banner promocional
 * @param {string} containerId - ID del contenedor
 * @param {number} [index] - Índice del mensaje (aleatorio si no se proporciona)
 */
export function renderPromoBanner(containerId, index) {
  const container = document.getElementById(containerId);
  if (!container) return;

  const msgIndex = index !== undefined ? index : Math.floor(Math.random() * promoMessages.length);
  const msg = promoMessages[msgIndex];

  container.innerHTML = `
    <div class="promo-banner">
      <span class="promo-banner__icon">${msg.icon}</span>
      <div class="promo-banner__text">
        ${msg.text}
        <span class="promo-banner__small">${msg.small}</span>
      </div>
    </div>
  `;
}
