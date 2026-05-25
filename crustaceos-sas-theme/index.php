<?php
/**
 * index.php — Crustáceos SAS Theme
 * Fallback template (requerido por WordPress).
 * En la práctica, front-page.php y page-*.php manejan todo el contenido.
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <span class="hero__badge">🦐 Empresa Corporativa Marina desde 1998</span>
          <h1 class="hero__title">
            Crustáceos <span class="hero__title-accent">SAS</span>
          </h1>
          <p class="hero__subtitle">
            Camarones por fax, langostas a domicilio y soporte marítimo con actitud.
          </p>
          <p class="hero__tagline">
            "Calidad que nace del agua… y se confirma por fax."
          </p>
        </div>
      </div>
      <div class="hero__wave">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
          <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120 Z" fill="var(--color-sand-light)"/>
        </svg>
      </div>
    </section>

    <section class="section section--sand">
      <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
        ?>
                <article class="card mb-6">
                  <h2 class="card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="card__desc"><?php the_excerpt(); ?></div>
                </article>
        <?php
            endwhile;
        else :
        ?>
            <p>No se encontró contenido. Pero el arrecife sigue funcionando. 🦐</p>
        <?php
        endif;
        ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
