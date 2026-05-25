/**
 * header.js — Crustáceos SAS (WordPress Theme)
 * Genera el header con navegación y menú hamburguesa
 * Adaptado para WordPress: usa rutas relativas a home_url
 */

const navLinks = [
  { href: '/',                  label: 'Inicio',          icon: '🏠' },
  { href: '/faxshrimp/',        label: 'FaxShrimp™',      icon: '📠' },
  { href: '/langosta-express/', label: 'Langosta Express', icon: '🦞' },
  { href: '/soporte/',          label: 'Soporte',         icon: '🎫' },
  { href: '/rastreo/',          label: 'Rastreo',         icon: '📍' },
  { href: '/equipo/',           label: 'Equipo',          icon: '👥' },
  { href: '/crustabank/',       label: 'CrustaBank',      icon: '🏦' },
  { href: '/contacto/',         label: 'Contacto',        icon: '✉️' }
];

/**
 * Detecta la página activa comparando el href con la URL actual
 */
function getActivePage() {
  const path = window.location.pathname;
  // Normalizar: eliminar trailing slash para comparación
  const normalizedPath = path.replace(/\/+$/, '') || '/';
  return normalizedPath;
}

/**
 * Obtiene la URL base del sitio WordPress
 */
function getBaseUrl() {
  if (typeof crustaceosTheme !== 'undefined' && crustaceosTheme.homeUrl) {
    return crustaceosTheme.homeUrl.replace(/\/+$/, '');
  }
  return '';
}

/**
 * Renderiza el header en el elemento con id="site-header"
 */
export function renderHeader() {
  const container = document.getElementById('site-header');
  if (!container) return;

  const activePath = getActivePage();
  const baseUrl = getBaseUrl();

  const desktopLinks = navLinks.map(link => {
    const linkPath = link.href.replace(/\/+$/, '') || '/';
    const isActive = activePath === linkPath;
    const fullHref = baseUrl + link.href;
    return `<a href="${fullHref}" class="header__nav-link${isActive ? ' header__nav-link--active' : ''}">${link.label}</a>`;
  }).join('');

  const mobileLinks = navLinks.map(link => {
    const linkPath = link.href.replace(/\/+$/, '') || '/';
    const isActive = activePath === linkPath;
    const fullHref = baseUrl + link.href;
    return `<a href="${fullHref}" class="header__mobile-nav-link${isActive ? ' header__mobile-nav-link--active' : ''}">${link.icon} ${link.label}</a>`;
  }).join('');

  const logoHref = baseUrl + '/';

  container.innerHTML = `
    <header class="site-header" role="banner">
      <div class="header__inner">
        <a href="${logoHref}" class="header__logo" aria-label="Crustáceos SAS - Inicio">
          <span class="header__logo-icon">🦐</span>
          <span>Crustáceos SAS</span>
        </a>

        <nav class="header__nav" role="navigation" aria-label="Navegación principal">
          ${desktopLinks}
        </nav>

        <button class="header__hamburger" id="hamburger-btn" aria-label="Abrir menú" aria-expanded="false">
          <span class="header__hamburger-line"></span>
          <span class="header__hamburger-line"></span>
          <span class="header__hamburger-line"></span>
        </button>
      </div>

      <nav class="header__mobile-nav" id="mobile-nav" role="navigation" aria-label="Navegación móvil">
        ${mobileLinks}
      </nav>
    </header>
  `;
}
