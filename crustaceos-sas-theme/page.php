<?php
/**
 * page.php — Crustáceos SAS Theme
 * Template genérico para páginas que no tienen template propio.
 *
 * @package CrustaceosSAS
 */

get_header(); ?>

  <main class="main-content">

    <section class="hero">
      <div class="container">
        <div class="hero__content">
          <h1 class="hero__title"><?php the_title(); ?></h1>
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
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
