/**
 * navigation.js — Crustáceos SAS
 * Lógica del menú hamburguesa y navegación móvil
 */

/**
 * Inicializa el menú hamburguesa
 */
export function initNavigation() {
  const hamburger = document.getElementById('hamburger-btn');
  const mobileNav = document.getElementById('mobile-nav');

  if (!hamburger || !mobileNav) return;

  // Toggle menú
  hamburger.addEventListener('click', () => {
    const isOpen = mobileNav.classList.contains('header__mobile-nav--open');

    if (isOpen) {
      closeMenu(hamburger, mobileNav);
    } else {
      openMenu(hamburger, mobileNav);
    }
  });

  // Cerrar al hacer clic en un link del menú móvil
  mobileNav.querySelectorAll('.header__mobile-nav-link').forEach(link => {
    link.addEventListener('click', () => {
      closeMenu(hamburger, mobileNav);
    });
  });

  // Cerrar al hacer clic fuera
  document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !mobileNav.contains(e.target)) {
      if (mobileNav.classList.contains('header__mobile-nav--open')) {
        closeMenu(hamburger, mobileNav);
      }
    }
  });

  // Cerrar con Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileNav.classList.contains('header__mobile-nav--open')) {
      closeMenu(hamburger, mobileNav);
    }
  });
}

function openMenu(hamburger, mobileNav) {
  hamburger.classList.add('header__hamburger--open');
  hamburger.setAttribute('aria-expanded', 'true');
  hamburger.setAttribute('aria-label', 'Cerrar menú');
  mobileNav.classList.add('header__mobile-nav--open');
  document.body.style.overflow = 'hidden';
}

function closeMenu(hamburger, mobileNav) {
  hamburger.classList.remove('header__hamburger--open');
  hamburger.setAttribute('aria-expanded', 'false');
  hamburger.setAttribute('aria-label', 'Abrir menú');
  mobileNav.classList.remove('header__mobile-nav--open');
  document.body.style.overflow = '';
}
