<?php
/**
 * Template Name: Rastreo
 * page-rastreo.php — Crustáceos SAS Theme
 * Página de Rastreo de Pedidos (migrada de rastreo.html).
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">📍 Sistema de rastreo crustáceo en tiempo real</span>
          <h1 class="hero__title">Rastree su <span class="hero__title-accent">langosta</span> en tiempo real</h1>
          <p class="hero__subtitle">Ingrese el código de rastreo crustáceo y consulte el estado emocional, logístico y marítimo de su pedido.</p>
        </div>
      </div>
      <div class="hero__decoration" aria-hidden="true">📍</div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <!-- Buscador de rastreo -->
    <section class="section section--sand">
      <div class="container">
        <div class="rastreo-search">
          <h2>🔍 Ingrese su código de rastreo</h2>
          <p class="text-light">Escriba el código que recibió por fax, señal de humo o presentimiento marítimo.</p>

          <form id="rastreo-form">
            <div class="rastreo-input-group">
              <input type="text" class="form-input" id="rastreo-input" placeholder="Ej: LNG-404-PINZA" required>
              <button type="submit" class="btn btn--primary">📍 Rastrear</button>
            </div>
          </form>

          <div class="rastreo-examples">
            <span>Prueba con:</span>
            <span class="rastreo-example">LNG-404-PINZA</span>
            <span class="rastreo-example">CMR-FAX-1998</span>
            <span class="rastreo-example">CRB-SOPORTE-007</span>
          </div>
        </div>

        <!-- Resultados (se llenan dinámicamente) -->
        <div id="rastreo-results"></div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
