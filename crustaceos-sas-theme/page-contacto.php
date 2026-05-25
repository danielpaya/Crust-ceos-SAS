<?php
/**
 * Template Name: Contacto
 * page-contacto.php — Crustáceos SAS Theme
 * Página de Contacto (migrada de contacto.html).
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">✉️ Atención al cliente crustácea</span>
          <h1 class="hero__title"><span class="hero__title-accent">Contacto</span></h1>
          <p class="hero__subtitle">¿Desea enviar un fax de camarón, solicitar una langosta a domicilio o reportar un crustáceo emocionalmente inestable? Nuestro equipo está listo.</p>
        </div>
      </div>
      <div class="hero__decoration" aria-hidden="true">✉️</div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <!-- Contacto -->
    <section class="section section--sand">
      <div class="container">
        <div class="contacto-wrapper">

          <!-- Info de contacto -->
          <div class="contacto-info">
            <h2 class="mb-6">Canales de Comunicación Marina</h2>
            
            <div class="contacto-info__item">
              <div class="contacto-info__icon">📠</div>
              <div>
                <div class="contacto-info__label">Fax corporativo</div>
                <div class="contacto-info__value">+57 FAX-CAMARÓN-001</div>
              </div>
            </div>

            <div class="contacto-info__item">
              <div class="contacto-info__icon">📧</div>
              <div>
                <div class="contacto-info__label">Correo electrónico</div>
                <div class="contacto-info__value">soporte@crustaceos-sas.arrecife</div>
              </div>
            </div>

            <div class="contacto-info__item">
              <div class="contacto-info__icon">📍</div>
              <div>
                <div class="contacto-info__label">Sede principal</div>
                <div class="contacto-info__value">Arrecife Central, Sector Fax, Oficina 404</div>
              </div>
            </div>

            <div class="contacto-info__item">
              <div class="contacto-info__icon">🕐</div>
              <div>
                <div class="contacto-info__label">Horario de atención</div>
                <div class="contacto-info__value">Lunes a viernes, según la marea. Martes: camarones ilimitados.</div>
              </div>
            </div>

            <div class="contacto-info__item">
              <div class="contacto-info__icon">🦀</div>
              <div>
                <div class="contacto-info__label">Chat con soporte</div>
                <div class="contacto-info__value">Disponible cuando el cangrejo no esté en pausa emocional.</div>
              </div>
            </div>

            <div class="mt-4">
              <span class="badge badge--yellow">⚠️ Riesgo de ataque de pinza: medio</span>
            </div>
          </div>

          <!-- Formulario -->
          <div class="contacto-form">
            <h3 class="fax-form__title">✉️ Enviar solicitud</h3>
            <p class="fax-form__subtitle">Un crustáceo autorizado revisará su caso.</p>

            <form id="contacto-form">
              <div class="form-group">
                <label class="form-label" for="contacto-nombre">Nombre</label>
                <input type="text" class="form-input" id="contacto-nombre" placeholder="Su nombre completo" required>
              </div>

              <div class="form-group">
                <label class="form-label" for="contacto-correo">Correo</label>
                <input type="email" class="form-input" id="contacto-correo" placeholder="correo@arrecife.com" required>
              </div>

              <div class="form-group">
                <label class="form-label" for="contacto-tipo">Tipo de solicitud</label>
                <select class="form-select" id="contacto-tipo" required>
                  <option value="">Seleccione...</option>
                  <option value="Comprar camarones por fax">📠 Comprar camarones por fax</option>
                  <option value="Solicitar langosta a domicilio">🦞 Solicitar langosta a domicilio</option>
                  <option value="Abrir ticket marítimo">🎫 Abrir ticket marítimo</option>
                  <option value="Consultar saldo en camarones">🏦 Consultar saldo en camarones</option>
                  <option value="Reportar ataque de pinza">⚠️ Reportar ataque de pinza</option>
                </select>
              </div>

              <div class="form-group">
                <label class="form-label" for="contacto-urgencia">Nivel de urgencia marítima</label>
                <select class="form-select" id="contacto-urgencia" required>
                  <option value="">Seleccione...</option>
                  <option value="baja">🟢 Baja — Cuando pueda</option>
                  <option value="media">🟡 Media — Antes de la próxima marea</option>
                  <option value="alta">🟠 Alta — Es urgente</option>
                  <option value="critica">🔴 Crítica — Necesito un crustáceo ahora</option>
                </select>
              </div>

              <div class="form-group">
                <label class="form-label" for="contacto-mensaje">Mensaje</label>
                <textarea class="form-textarea" id="contacto-mensaje" placeholder="Cuéntenos qué necesita con todo detalle..." required></textarea>
              </div>

              <button type="submit" class="btn btn--primary btn--lg btn--block">✉️ Enviar solicitud</button>
            </form>

            <div id="contacto-result" class="mt-6"></div>
          </div>

        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
