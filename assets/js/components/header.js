/**
 * header.js — Crustáceos SAS
 * Genera el header con navegación y menú hamburguesa
 */

const navLinks = [
  { href: 'index.html',            label: 'Inicio',          icon: '🏠' },
  { href: 'faxshrimp.html',        label: 'FaxShrimp™',      icon: '📠' },
  { href: 'langosta-express.html',  label: 'Langosta Express', icon: '🦞' },
  { href: 'soporte.html',          label: 'Soporte',         icon: '🎫' },
  { href: 'rastreo.html',          label: 'Rastreo',         icon: '📍' },
  { href: 'equipo.html',           label: 'Equipo',          icon: '👥' },
  { href: 'crustabank.html',       label: 'CrustaBank',      icon: '🏦' },
  { href: 'contacto.html',         label: 'Contacto',        icon: '✉️' }
];

/**
 * Detecta la página activa comparando el href con la URL actual
 */
function getActivePage() {
  const path = window.location.pathname;
  const currentFile = path.substring(path.lastIndexOf('/') + 1) || 'index.html';
  return currentFile;
}

/**
 * Renderiza el header en el elemento con id="site-header"
 */
export function renderHeader() {
  const container = document.getElementById('site-header');
  if (!container) return;

  const activePage = getActivePage();

  const desktopLinks = navLinks.map(link => {
    const isActive = activePage === link.href;
    return `<a href="${link.href}" class="header__nav-link${isActive ? ' header__nav-link--active' : ''}">${link.label}</a>`;
  }).join('');

  const mobileLinks = navLinks.map(link => {
    const isActive = activePage === link.href;
    return `<a href="${link.href}" class="header__mobile-nav-link${isActive ? ' header__mobile-nav-link--active' : ''}">${link.icon} ${link.label}</a>`;
  }).join('');

  container.innerHTML = `
    <header class="site-header" role="banner">
      <div class="header__inner">
        <a href="index.html" class="header__logo" aria-label="Crustáceos SAS - Inicio">
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
