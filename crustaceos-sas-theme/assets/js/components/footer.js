/**
 * footer.js — Crustáceos SAS (WordPress Theme)
 * Genera el footer con columnas, links y frase aleatoria del día
 * Adaptado para WordPress: usa rutas relativas a home_url
 */

const footerPhrases = [
  'Calidad que nace del agua… y se confirma por fax.',
  'Riesgo de ataque de pinza: medio.',
  'El fax no miente. Solo huele raro.',
  'Nuestro algoritmo recomienda: más camarón.',
  'En caso de duda, siga al camarón blanco.',
  'Que la pinza te acompañe.',
  'Houston, tenemos un crustáceo.',
  'Una langosta para gobernarlas a todas.',
  'Error 404: camarón no encontrado.',
  'No somos una startup. Somos una corriente marina con página web.'
];

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
 * Renderiza el footer en el elemento con id="site-footer"
 */
export function renderFooter() {
  const container = document.getElementById('site-footer');
  if (!container) return;

  const randomPhrase = footerPhrases[Math.floor(Math.random() * footerPhrases.length)];
  const year = new Date().getFullYear();
  const baseUrl = getBaseUrl();

  container.innerHTML = `
    <footer class="site-footer" role="contentinfo">
      <div class="footer__grid">
        <div class="footer__brand">
          <div class="footer__brand-name">🦐 Crustáceos SAS</div>
          <div class="footer__brand-tagline">"Calidad que nace del agua… y se confirma por fax."</div>
          <p class="footer__brand-desc">
            Camarones por fax, langostas a domicilio y soporte marítimo para empresas 
            que ya lo intentaron todo. Desde el arrecife hasta su escritorio.
          </p>
        </div>

        <div class="footer__column">
          <h4 class="footer__column-title">Servicios</h4>
          <a href="${baseUrl}/faxshrimp/" class="footer__link">📠 FaxShrimp™</a>
          <a href="${baseUrl}/langosta-express/" class="footer__link">🦞 Langosta Express</a>
          <a href="${baseUrl}/soporte/" class="footer__link">🎫 Mesa de Ayuda</a>
          <a href="${baseUrl}/rastreo/" class="footer__link">📍 Rastreo</a>
        </div>

        <div class="footer__column">
          <h4 class="footer__column-title">Empresa</h4>
          <a href="${baseUrl}/equipo/" class="footer__link">👥 Nuestro Equipo</a>
          <a href="${baseUrl}/crustabank/" class="footer__link">🏦 CrustaBank</a>
          <a href="${baseUrl}/contacto/" class="footer__link">✉️ Contacto</a>
        </div>

        <div class="footer__column">
          <h4 class="footer__column-title">Legal-ish</h4>
          <span class="footer__link">📋 Términos y Mareas</span>
          <span class="footer__link">🔒 Política de Pinzas</span>
          <span class="footer__link">🍤 Aviso de Frescura</span>
          <span class="footer__link">⚖️ Ley del Arrecife</span>
        </div>
      </div>

      <div class="footer__bottom">
        <p>© ${year} Crustáceos SAS. Todos los derechos reservados (incluyendo los de pinza).</p>
        <p>Riesgo de ataque de pinza: medio. No nos hacemos responsables por langostas con actitud.</p>
        <span class="footer__random-phrase">🦐 ${randomPhrase}</span>
      </div>
    </footer>
  `;
}
