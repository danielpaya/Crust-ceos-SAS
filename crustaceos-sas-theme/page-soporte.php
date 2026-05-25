<?php
/**
 * Template Name: Soporte
 * page-soporte.php — Crustáceos SAS Theme
 * Página de Mesa de Ayuda Marítima (migrada de soporte.html).
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">🎫 Soporte con actitud marítima</span>
          <h1 class="hero__title">Mesa de Ayuda <span class="hero__title-accent">Marítima</span></h1>
          <p class="hero__subtitle">¿Su camarón llegó triste? ¿La langosta no responde? Abra un ticket con nuestro departamento de soporte.</p>
          <p class="hero__tagline">"Dirigida por Patricia Percebes — seis semestres de Finanzas Acuáticas."</p>
        </div>
      </div>
      <div class="hero__decoration" aria-hidden="true">🎫</div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <!-- Intro -->
    <section class="section section--sand">
      <div class="container">
        <div class="soporte-intro">
          <div class="soporte-intro__questions">
            <span>¿Su camarón llegó triste? 🦐</span>
            <span>¿La langosta no responde? 🦞</span>
            <span>¿El pedido presenta comportamiento sospechoso? 📦</span>
          </div>
          <p class="mt-4 text-light">Abra un ticket con nuestro departamento de soporte marítimo. Patricia Percebes gestionará su crisis emocional crustácea.</p>
        </div>

        <!-- Categorías -->
        <div class="section__header">
          <h2>Categorías de Ticket</h2>
        </div>
        <div class="soporte-categories">
          <div class="soporte-category"><span class="soporte-category__icon">🔎</span> Camarón extraviado</div>
          <div class="soporte-category"><span class="soporte-category__icon">😤</span> Langosta con actitud desafiante</div>
          <div class="soporte-category"><span class="soporte-category__icon">📦</span> Pedido con olor a lunes</div>
          <div class="soporte-category"><span class="soporte-category__icon">🌊</span> Problema de conectividad con el océano</div>
          <div class="soporte-category"><span class="soporte-category__icon">🦀</span> Reclamo por pinza pasivo-agresiva</div>
          <div class="soporte-category"><span class="soporte-category__icon">📠</span> Fax recibido con mala energía</div>
          <div class="soporte-category"><span class="soporte-category__icon">👯</span> Sospecha de crustáceo duplicado</div>
          <div class="soporte-category"><span class="soporte-category__icon">⚠️</span> Incidente de pinza no autorizada</div>
        </div>

        <!-- Prioridades -->
        <div class="section__header mt-8">
          <h2>Niveles de Prioridad</h2>
        </div>
        <div class="soporte-priorities">
          <div class="soporte-priority soporte-priority--baja">🟢 <strong>Baja:</strong>&nbsp;El camarón está pensativo.</div>
          <div class="soporte-priority soporte-priority--media">🟡 <strong>Media:</strong>&nbsp;La langosta ignora instrucciones.</div>
          <div class="soporte-priority soporte-priority--alta">🟠 <strong>Alta:</strong>&nbsp;El pedido se mueve solo.</div>
          <div class="soporte-priority soporte-priority--critica">🔴 <strong>Crítica:</strong>&nbsp;El cangrejo de soporte renunció.</div>
        </div>
      </div>
    </section>

    <!-- Formulario de ticket -->
    <section class="section section--white">
      <div class="container">
        <div class="soporte-form">
          <h3 class="fax-form__title">🎫 Abrir Ticket Marítimo</h3>
          <p class="fax-form__subtitle">Complete el formulario y Patricia Percebes atenderá su caso.</p>

          <form id="soporte-form">
            <div class="form-group">
              <label class="form-label" for="soporte-nombre">Nombre</label>
              <input type="text" class="form-input" id="soporte-nombre" name="nombre" placeholder="Su nombre completo" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="soporte-correo">Correo</label>
              <input type="email" class="form-input" id="soporte-correo" name="correo" placeholder="correo@arrecife.com" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="soporte-categoria">Categoría</label>
              <select class="form-select" id="soporte-categoria" name="category" required>
                <option value="">Seleccione categoría...</option>
                <option value="Camarón extraviado">🔎 Camarón extraviado</option>
                <option value="Langosta con actitud desafiante">😤 Langosta con actitud desafiante</option>
                <option value="Pedido con olor a lunes">📦 Pedido con olor a lunes</option>
                <option value="Problema de conectividad con el océano">🌊 Problema de conectividad con el océano</option>
                <option value="Reclamo por pinza pasivo-agresiva">🦀 Reclamo por pinza pasivo-agresiva</option>
                <option value="Fax recibido con mala energía">📠 Fax recibido con mala energía</option>
                <option value="Sospecha de crustáceo duplicado">👯 Sospecha de crustáceo duplicado</option>
                <option value="Incidente de pinza no autorizada">⚠️ Incidente de pinza no autorizada</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="soporte-prioridad">Prioridad</label>
              <select class="form-select" id="soporte-prioridad" name="priority" required>
                <option value="">Seleccione prioridad...</option>
                <option value="Baja">🟢 Baja — El camarón está pensativo</option>
                <option value="Media">🟡 Media — La langosta ignora instrucciones</option>
                <option value="Alta">🟠 Alta — El pedido se mueve solo</option>
                <option value="Crítica">🔴 Crítica — El cangrejo de soporte renunció</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="soporte-descripcion">Descripción del incidente</label>
              <textarea class="form-textarea" id="soporte-descripcion" name="descripcion" placeholder="Describa el incidente con todo el detalle emocional necesario..." required></textarea>
            </div>

            <button type="submit" class="btn btn--primary btn--lg btn--block">🎫 Enviar ticket marítimo</button>
          </form>

          <div id="ticket-result" class="mt-6"></div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
