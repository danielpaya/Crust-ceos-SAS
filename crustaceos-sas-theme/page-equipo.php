<?php
/**
 * Template Name: Equipo
 * page-equipo.php — Crustáceos SAS Theme
 * Página del Comité Ejecutivo del Arrecife (migrada de equipo.html).
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">👥 El equipo detrás del arrecife</span>
          <h1 class="hero__title">El Comité Ejecutivo del <span class="hero__title-accent">Arrecife</span></h1>
          <p class="hero__subtitle">Conozca al equipo que hace posible lo imposible: transmitir camarones por fax, entregar langostas con dignidad y mantener bajo control el riesgo de ataque de pinza.</p>
        </div>
      </div>
      <div class="hero__decoration" aria-hidden="true">👥</div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <!-- Grid de personajes -->
    <section class="section section--sand">
      <div class="container">
        <div class="equipo-grid stagger-children" id="equipo-grid">
          <!-- Renderizado por equipo.js -->
        </div>

        <!-- Drama corporativo -->
        <div class="equipo-drama animate-on-scroll">
          <span class="equipo-drama__title-icon">🎭</span>
          <h3 class="equipo-drama__title">Drama corporativo en altamar</h3>
          <p>
            Mientras <strong>Armando Camarones</strong> insiste en expandir FaxShrimp™ a nivel internacional, 
            <strong>Marcela Valencia del Mar</strong> intenta salvar la reputación de la empresa, 
            <strong>Daniel Jaiba</strong> calcula el riesgo financiero de los martes ilimitados, 
            <strong>Betty la Langosta</strong> audita cada pedido con paciencia infinita y 
            <strong>Patricia Percebes</strong> asegura que todo problema se resuelve con actitud, 
            brillo labial y seis semestres de Finanzas Acuáticas.
          </p>
          <p class="mt-4" style="color: var(--color-ocean); font-style: italic;">
            "Houston, tenemos un crustáceo." — Hannibal Camarón, reunión del lunes.
          </p>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
