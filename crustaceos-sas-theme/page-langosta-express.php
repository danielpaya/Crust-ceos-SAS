<?php
/**
 * Template Name: Langosta Express
 * page-langosta-express.php — Crustáceos SAS Theme
 * Página de Langosta Express (migrada de langosta-express.html).
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">🦞 Servicio premium de entrega crustácea</span>
          <h1 class="hero__title">Langosta <span class="hero__title-accent">Express</span></h1>
          <p class="hero__subtitle">Porque una langosta también merece llegar con dignidad.</p>
          <p class="hero__tagline">"Entrega premium, actitud superior y riesgo de pinza controlado."</p>
          <div class="hero__actions">
            <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="btn btn--primary btn--lg">🦞 Solicitar langosta</a>
            <a href="<?php echo esc_url( home_url( '/rastreo/' ) ); ?>" class="btn btn--secondary btn--lg">📍 Rastrear mi crustáceo</a>
          </div>
        </div>
      </div>
      <div class="hero__decoration" aria-hidden="true">🦞</div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <!-- Descripción -->
    <section class="section section--sand">
      <div class="container">
        <div class="section__header">
          <h2>El servicio de entrega que su langosta merece</h2>
          <p>Nuestro servicio de langostas a domicilio garantiza entregas seguras, elegantes y ocasionalmente intimidantes. Cada langosta viaja con trazabilidad, control térmico y una breve charla motivacional.</p>
        </div>

        <div class="langosta-info">
          <div class="langosta-phrase">🦞 Una langosta puede llegar tarde, pero jamás sin presencia ejecutiva.</div>
          <div class="langosta-phrase">🛡️ Riesgo de ataque de pinza: medio. Protocolo de contención activado.</div>
          <div class="langosta-phrase">📋 Cada entrega incluye certificado de actitud y trazabilidad marítima.</div>
        </div>

        <!-- Medidor de riesgo de pinza -->
        <div class="langosta-risk">
          <div class="pinza-meter">
            <div class="pinza-meter__label">🦀 Riesgo de ataque de pinza</div>
            <div class="pinza-meter__bar">
              <div class="pinza-meter__fill" style="width: 0%;"></div>
            </div>
            <div class="pinza-meter__level pinza-meter__level--medium">Nivel: MEDIO</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Planes -->
    <section class="section section--white">
      <div class="container">
        <div class="section__header">
          <h2>Planes de Langosta a Domicilio</h2>
          <p>Desde emergencias gastronómicas hasta entregas VIP con escolta de camarones.</p>
        </div>
        <div class="grid grid--4" id="langosta-plans"></div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
