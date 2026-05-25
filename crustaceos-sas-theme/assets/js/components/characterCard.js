/**
 * characterCard.js — Crustáceos SAS
 * Renderiza tarjetas de personaje con avatar, cargo, bio y citas
 */

/**
 * Genera HTML para una tarjeta de personaje
 * @param {Object} character - Objeto de personaje de characters.js
 * @returns {string} HTML de la tarjeta
 */
export function createCharacterCard(character) {
  const randomQuote = character.quotes[Math.floor(Math.random() * character.quotes.length)];
  const aliasHtml = character.alias 
    ? `<span class="badge badge--coral" style="margin-bottom: var(--space-2); display: inline-block;">Alias: ${character.alias}</span>` 
    : '';

  return `
    <article class="card card--character" id="character-${character.id}">
      <div class="card__avatar">
        <img src="${character.image}" 
             alt="Ilustración de ${character.name}" 
             loading="lazy"
             onerror="this.parentElement.innerHTML='<div style=&quot;width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:3.5rem;background:var(--gradient-sand)&quot;>${character.emoji}</div>'">
      </div>
      ${aliasHtml}
      <h3 class="card__title">${character.name}</h3>
      <p class="card__role">${character.role}</p>
      <p class="card__desc">${character.description}</p>
      <blockquote class="card__quote">
        "${randomQuote}"
      </blockquote>
    </article>
  `;
}

/**
 * Renderiza todas las tarjetas de personaje en un contenedor
 * @param {string} containerId - ID del contenedor
 * @param {Array} characters - Array de personajes
 */
export function renderCharacterCards(containerId, characters) {
  const container = document.getElementById(containerId);
  if (!container) return;

  container.innerHTML = characters.map(char => createCharacterCard(char)).join('');
}
