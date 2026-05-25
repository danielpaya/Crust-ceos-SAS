<?php
/**
 * Crustáceos SAS Theme — functions.php
 * Carga de assets (CSS/JS), soporte del tema y menú de navegación.
 *
 * @package CrustaceosSAS
 */

// ── Soporte del tema ────────────────────────────────────────────
function crustaceos_theme_setup() {
    // Título dinámico en <title>
    add_theme_support( 'title-tag' );

    // Miniaturas de entradas
    add_theme_support( 'post-thumbnails' );

    // HTML5 semántico
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Registrar ubicación de menú
    register_nav_menus( array(
        'primary' => __( 'Navegación Principal', 'crustaceos-sas' ),
    ) );
}
add_action( 'after_setup_theme', 'crustaceos_theme_setup' );

// ── Enqueue CSS ─────────────────────────────────────────────────
function crustaceos_enqueue_styles() {
    $theme_uri = get_template_directory_uri();
    $version   = wp_get_theme()->get( 'Version' );

    // Hoja principal del tema (requerida por WP, solo tiene el header)
    wp_enqueue_style( 'crustaceos-theme-style', get_stylesheet_uri(), array(), $version );

    // CSS modulares
    wp_enqueue_style( 'crustaceos-base',       $theme_uri . '/assets/css/base.css',       array(), $version );
    wp_enqueue_style( 'crustaceos-layout',     $theme_uri . '/assets/css/layout.css',     array( 'crustaceos-base' ), $version );
    wp_enqueue_style( 'crustaceos-components', $theme_uri . '/assets/css/components.css', array( 'crustaceos-layout' ), $version );
    wp_enqueue_style( 'crustaceos-pages',      $theme_uri . '/assets/css/pages.css',      array( 'crustaceos-components' ), $version );
    wp_enqueue_style( 'crustaceos-responsive', $theme_uri . '/assets/css/responsive.css', array( 'crustaceos-pages' ), $version );
}
add_action( 'wp_enqueue_scripts', 'crustaceos_enqueue_styles' );

// ── Enqueue JS ──────────────────────────────────────────────────
function crustaceos_enqueue_scripts() {
    $theme_uri = get_template_directory_uri();
    $version   = wp_get_theme()->get( 'Version' );

    // Navegación (hamburger menu)
    wp_enqueue_script(
        'crustaceos-navigation',
        $theme_uri . '/assets/js/navigation.js',
        array(),
        $version,
        true
    );

    // Main (scroll animations, inicialización global)
    wp_enqueue_script(
        'crustaceos-main',
        $theme_uri . '/assets/js/main.js',
        array( 'crustaceos-navigation' ),
        $version,
        true
    );

    // ── Data scripts ────────────────────────────────────────────
    wp_enqueue_script(
        'crustaceos-data-products',
        $theme_uri . '/assets/js/data/products.js',
        array(),
        $version,
        true
    );

    wp_enqueue_script(
        'crustaceos-data-characters',
        $theme_uri . '/assets/js/data/characters.js',
        array(),
        $version,
        true
    );

    wp_enqueue_script(
        'crustaceos-data-tickets',
        $theme_uri . '/assets/js/data/tickets.js',
        array(),
        $version,
        true
    );

    wp_enqueue_script(
        'crustaceos-data-tracking',
        $theme_uri . '/assets/js/data/trackingStates.js',
        array(),
        $version,
        true
    );

    // ── Component scripts ───────────────────────────────────────
    wp_enqueue_script(
        'crustaceos-component-productcard',
        $theme_uri . '/assets/js/components/productCard.js',
        array( 'crustaceos-data-products' ),
        $version,
        true
    );

    wp_enqueue_script(
        'crustaceos-component-charactercard',
        $theme_uri . '/assets/js/components/characterCard.js',
        array( 'crustaceos-data-characters' ),
        $version,
        true
    );

    wp_enqueue_script(
        'crustaceos-component-promobanner',
        $theme_uri . '/assets/js/components/promoBanner.js',
        array(),
        $version,
        true
    );

    wp_enqueue_script(
        'crustaceos-component-ticketwidget',
        $theme_uri . '/assets/js/components/ticketWidget.js',
        array( 'crustaceos-data-tickets' ),
        $version,
        true
    );

    wp_enqueue_script(
        'crustaceos-component-trackingwidget',
        $theme_uri . '/assets/js/components/trackingWidget.js',
        array( 'crustaceos-data-tracking' ),
        $version,
        true
    );

    // ── Page-specific scripts (solo se cargan en su página) ─────
    if ( is_front_page() ) {
        wp_enqueue_script(
            'crustaceos-page-home',
            $theme_uri . '/assets/js/pages/home.js',
            array( 'crustaceos-main', 'crustaceos-component-promobanner' ),
            $version,
            true
        );
    }

    if ( is_page( 'faxshrimp' ) ) {
        wp_enqueue_script(
            'crustaceos-page-faxshrimp',
            $theme_uri . '/assets/js/pages/faxshrimp.js',
            array( 'crustaceos-main', 'crustaceos-component-productcard' ),
            $version,
            true
        );
    }

    if ( is_page( 'langosta-express' ) ) {
        wp_enqueue_script(
            'crustaceos-page-langosta',
            $theme_uri . '/assets/js/pages/langosta.js',
            array( 'crustaceos-main', 'crustaceos-component-productcard' ),
            $version,
            true
        );
    }

    if ( is_page( 'soporte' ) ) {
        wp_enqueue_script(
            'crustaceos-page-soporte',
            $theme_uri . '/assets/js/pages/soporte.js',
            array( 'crustaceos-main', 'crustaceos-component-ticketwidget' ),
            $version,
            true
        );
    }

    if ( is_page( 'rastreo' ) ) {
        wp_enqueue_script(
            'crustaceos-page-rastreo',
            $theme_uri . '/assets/js/pages/rastreo.js',
            array( 'crustaceos-main', 'crustaceos-component-trackingwidget' ),
            $version,
            true
        );
    }

    if ( is_page( 'equipo' ) ) {
        wp_enqueue_script(
            'crustaceos-page-equipo',
            $theme_uri . '/assets/js/pages/equipo.js',
            array( 'crustaceos-main', 'crustaceos-component-charactercard' ),
            $version,
            true
        );
    }

    if ( is_page( 'crustabank' ) ) {
        wp_enqueue_script(
            'crustaceos-page-crustabank',
            $theme_uri . '/assets/js/pages/crustabank.js',
            array( 'crustaceos-main', 'crustaceos-component-productcard' ),
            $version,
            true
        );
    }

    if ( is_page( 'contacto' ) ) {
        wp_enqueue_script(
            'crustaceos-page-contacto',
            $theme_uri . '/assets/js/pages/contacto.js',
            array( 'crustaceos-main' ),
            $version,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'crustaceos_enqueue_scripts' );

// ── Agregar type="module" a los scripts ES Module ───────────────
function crustaceos_script_type_module( $tag, $handle, $src ) {
    $module_handles = array(
        'crustaceos-main',
        'crustaceos-navigation',
        'crustaceos-data-products',
        'crustaceos-data-characters',
        'crustaceos-data-tickets',
        'crustaceos-data-tracking',
        'crustaceos-component-productcard',
        'crustaceos-component-charactercard',
        'crustaceos-component-promobanner',
        'crustaceos-component-ticketwidget',
        'crustaceos-component-trackingwidget',
        'crustaceos-page-home',
        'crustaceos-page-faxshrimp',
        'crustaceos-page-langosta',
        'crustaceos-page-soporte',
        'crustaceos-page-rastreo',
        'crustaceos-page-equipo',
        'crustaceos-page-crustabank',
        'crustaceos-page-contacto',
    );

    if ( in_array( $handle, $module_handles, true ) ) {
        $tag = str_replace( ' src=', ' type="module" src=', $tag );
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'crustaceos_script_type_module', 10, 3 );

// ── Pasar la URI del tema a JS ──────────────────────────────────
function crustaceos_localize_theme_uri() {
    wp_localize_script( 'crustaceos-main', 'crustaceosTheme', array(
        'themeUri' => get_template_directory_uri(),
        'homeUrl'  => home_url( '/' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'crustaceos_localize_theme_uri' );
