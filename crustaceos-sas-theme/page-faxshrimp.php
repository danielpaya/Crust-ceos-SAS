<?php
/**
 * Template Name: FaxShrimp
 * page-faxshrimp.php — Crustáceos SAS Theme
 * Página de FaxShrimp™ (migrada de faxshrimp.html).
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">📠 Tecnología patentada desde 1998</span>
          <h1 class="hero__title">FaxShrimp<span class="hero__title-accent">™</span></h1>
          <p class="hero__subtitle">La plataforma patentada de transmisión documental de camarones.</p>
          <p class="hero__tagline">"No enviamos camarones por internet porque confiamos en tecnologías probadas por abuelos."</p>
        </div>
      </div>
      <div class="hero__decoration" aria-hidden="true">📠</div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <!-- Descripción + Frases -->
    <section class="section section--sand">
      <div class="container">
        <div class="section__header">
          <h2>¿Cómo funciona FaxShrimp™?</h2>
          <p>Usted envía una solicitud por fax, nosotros interpretamos el antojo, auditamos la frescura y activamos el protocolo de despacho.</p>
        </div>

        <div class="fax-phrases">
          <div class="fax-phrase">
            <span class="fax-phrase__icon">📄</span>
            <span>Cada fax es revisado por nuestro Departamento de Interpretación de Antojos.</span>
          </div>
          <div class="fax-phrase">
            <span class="fax-phrase__icon">🔍</span>
            <span>Si el fax entra borroso, el camarón sale con dudas.</span>
          </div>
          <div class="fax-phrase">
            <span class="fax-phrase__icon">⏳</span>
            <span>Tecnología marina de punta… de los años noventa.</span>
          </div>
          <div class="fax-phrase">
            <span class="fax-phrase__icon">🦐</span>
            <span>El fax no miente. Solo huele raro.</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Planes -->
    <section class="section section--white">
      <div class="container">
        <div class="section__header">
          <h2>Planes FaxShrimp™</h2>
          <p>Elija el plan que mejor se adapte a sus necesidades de transmisión crustácea.</p>
        </div>
        <div class="grid grid--4" id="fax-plans"></div>
      </div>
    </section>

    <!-- Formulario -->
    <section class="section section--sand">
      <div class="container">
        <div class="fax-form">
          <h3 class="fax-form__title">📠 Enviar fax imaginario</h3>
          <p class="fax-form__subtitle">Complete el formulario y su camarón entrará en cola de impresión.</p>

          <form id="fax-form">
            <div class="form-group">
              <label class="form-label" for="fax-nombre">Nombre del solicitante</label>
              <input type="text" class="form-input" id="fax-nombre" placeholder="Ej: Armando Camarones" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="fax-tipo">Tipo de camarón</label>
              <select class="form-select" id="fax-tipo" required>
                <option value="">Seleccione...</option>
                <option value="Camarón pensativo">Camarón pensativo</option>
                <option value="Camarón ejecutivo">Camarón ejecutivo</option>
                <option value="Camarón de urgencia">Camarón de urgencia</option>
                <option value="Camarón sorpresa">Camarón sorpresa (sin garantía)</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="fax-urgencia">Nivel de urgencia</label>
              <select class="form-select" id="fax-urgencia" required>
                <option value="">Seleccione...</option>
                <option value="baja">Baja — Puedo esperar una marea</option>
                <option value="media">Media — Lo necesito esta semana</option>
                <option value="alta">Alta — Es una emergencia gastronómica</option>
                <option value="critica">Crítica — Ya debería estar aquí</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="fax-numero">Número de fax</label>
              <input type="text" class="form-input" id="fax-numero" placeholder="Ej: +57 FAX-CAMARÓN-001">
              <span class="form-hint">Si no tiene fax, no se preocupe. Nadie tiene.</span>
            </div>

            <div class="form-group">
              <label class="form-label" for="fax-comentario">Comentario</label>
              <textarea class="form-textarea" id="fax-comentario" placeholder="Describa su antojo con detalle emocional..."></textarea>
            </div>

            <button type="submit" class="btn btn--primary btn--lg btn--block">📠 Enviar fax imaginario</button>
          </form>

          <div id="fax-result" class="mt-6"></div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
