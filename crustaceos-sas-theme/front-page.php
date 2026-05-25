<?php
/**
 * front-page.php — Crustáceos SAS Theme
 * Página de inicio (equivalente a index.html).
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <!-- ==================== HERO ==================== -->
    <section class="hero home-hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">🦐 Empresa Corporativa Marina desde 1998</span>
          <h1 class="hero__title">
            Crustáceos <span class="hero__title-accent">SAS</span>
          </h1>
          <p class="hero__subtitle">
            Camarones por fax, langostas a domicilio y soporte marítimo para empresas que ya lo intentaron todo.
          </p>
          <p class="hero__tagline">
            "Calidad que nace del agua… y se confirma por fax."
          </p>
          <div class="hero__actions">
            <a href="<?php echo esc_url( home_url( '/faxshrimp/' ) ); ?>" class="btn btn--primary btn--lg">📠 Enviar fax de camarón</a>
            <a href="<?php echo esc_url( home_url( '/rastreo/' ) ); ?>" class="btn btn--secondary btn--lg">📍 Rastrear mi langosta</a>
            <a href="<?php echo esc_url( home_url( '/soporte/' ) ); ?>" class="btn btn--secondary btn--lg">🎫 Abrir ticket marítimo</a>
          </div>
        </div>
      </div>
      <div class="hero__decoration" aria-hidden="true">🦐</div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <!-- ==================== SERVICIOS ==================== -->
    <section class="section section--sand home-services" id="servicios">
      <div class="container">
        <div class="section__header">
          <h2>Nuestros Servicios Marítimos</h2>
          <p>Soluciones crustáceas para cada necesidad empresarial. Desde faxes hasta finanzas, todo con olor a océano.</p>
        </div>

        <div class="grid grid--4 stagger-children">
          <!-- FaxShrimp -->
          <article class="card animate-on-scroll">
            <div class="card__icon">📠</div>
            <h3 class="card__title">FaxShrimp™</h3>
            <p class="card__desc">Camarones por fax con trazabilidad documental. Tecnología marina de punta… de los años noventa.</p>
            <a href="<?php echo esc_url( home_url( '/faxshrimp/' ) ); ?>" class="btn btn--outline mt-4" style="display: inline-flex;">Enviar fax ahora</a>
          </article>

          <!-- Langosta Express -->
          <article class="card animate-on-scroll">
            <div class="card__icon card__icon--coral">🦞</div>
            <h3 class="card__title">Langosta Express</h3>
            <p class="card__desc">Entrega a domicilio con riesgo de pinza medio. Cada langosta viaja con dignidad y charla motivacional.</p>
            <a href="<?php echo esc_url( home_url( '/langosta-express/' ) ); ?>" class="btn btn--outline mt-4" style="display: inline-flex;">Solicitar langosta</a>
          </article>

          <!-- Mesa de Ayuda -->
          <article class="card animate-on-scroll">
            <div class="card__icon card__icon--green">🎫</div>
            <h3 class="card__title">Mesa de Ayuda Marítima</h3>
            <p class="card__desc">Tickets para camarones tristes y langostas desobedientes. Patricia Percebes atenderá su caso.</p>
            <a href="<?php echo esc_url( home_url( '/soporte/' ) ); ?>" class="btn btn--outline mt-4" style="display: inline-flex;">Abrir ticket</a>
          </article>

          <!-- CrustaBank -->
          <article class="card animate-on-scroll">
            <div class="card__icon card__icon--yellow">🏦</div>
            <h3 class="card__title">CrustaBank</h3>
            <p class="card__desc">La única institución financiera donde la moneda son camarones. Su dinero huele ligeramente a mar.</p>
            <a href="<?php echo esc_url( home_url( '/crustabank/' ) ); ?>" class="btn btn--outline mt-4" style="display: inline-flex;">Consultar saldo</a>
          </article>
        </div>
      </div>
    </section>

    <!-- ==================== PROMO BANNER ==================== -->
    <section class="section section--white" style="padding: var(--space-8) 0;">
      <div class="container">
        <div id="promo-banner"></div>
      </div>
    </section>

    <!-- ==================== MINI SECTION ==================== -->
    <section class="section section--sand">
      <div class="container">
        <p class="home-mini-section">
          "No somos una startup. Somos una <span>corriente marina</span> con página web."
        </p>

        <div class="text-center mt-8">
          <a href="<?php echo esc_url( home_url( '/equipo/' ) ); ?>" class="btn btn--ocean btn--lg">👥 Conocer al comité del arrecife</a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
