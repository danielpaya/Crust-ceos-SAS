/**
 * productCard.js — Crustáceos SAS
 * Renderiza tarjetas de plan/producto con badge, precio, features y CTA
 */

/**
 * Genera HTML para una tarjeta de plan de precios
 * @param {Object} plan - Objeto de plan de products.js
 * @returns {string} HTML de la tarjeta
 */
export function createPricingCard(plan) {
  const featuredClass = plan.featured ? ' card--featured' : '';
  const features = plan.features.map(f => `
    <div class="card__feature-item">${f}</div>
  `).join('');

  return `
    <article class="card card--pricing${featuredClass}" id="plan-${plan.id}">
      <div class="card__icon" style="margin: 0 auto var(--space-4); font-size: var(--text-3xl); background: none;">
        ${plan.icon}
      </div>
      <h3 class="card__title">${plan.name}</h3>
      <p class="card__desc">${plan.description}</p>
      <div class="card__price">${plan.price}</div>
      <div class="card__features">
        ${features}
      </div>
      <button class="btn btn--primary btn--block">Solicitar plan</button>
    </article>
  `;
}

/**
 * Renderiza un grid de planes en un contenedor
 * @param {string} containerId - ID del contenedor
 * @param {Array} plans - Array de planes
 */
export function renderPricingCards(containerId, plans) {
  const container = document.getElementById(containerId);
  if (!container) return;

  container.innerHTML = plans.map(plan => createPricingCard(plan)).join('');
}

/**
 * Genera HTML para un producto simple (CrustaBank)
 * @param {Object} product - Objeto de producto
 * @returns {string} HTML del producto
 */
export function createProductCard(product) {
  return `
    <div class="crustabank-product" id="product-${product.id}">
      <div class="crustabank-product__icon">${product.icon}</div>
      <h4 class="crustabank-product__name">${product.name}</h4>
      <p class="crustabank-product__desc">${product.description}</p>
    </div>
  `;
}

/**
 * Renderiza productos CrustaBank en un contenedor
 * @param {string} containerId - ID del contenedor
 * @param {Array} products - Array de productos
 */
export function renderProductCards(containerId, products) {
  const container = document.getElementById(containerId);
  if (!container) return;

  container.innerHTML = products.map(p => createProductCard(p)).join('');
}
