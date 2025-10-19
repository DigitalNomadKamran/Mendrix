<?php
/**
 * Mendrix Consultancy — functions and setup
 */

if ( ! defined( 'MENDRIX_VERSION' ) ) {
  define( 'MENDRIX_VERSION', '1.0.0' );
}

/**
 * Theme setup
 */
function mendrix_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'editor-styles' );
  add_theme_support( 'html5', array( 'search-form','comment-form','comment-list','gallery','caption','style','script','navigation-widgets' ) );
  add_theme_support( 'custom-logo', array(
    'height' => 64,
    'width' => 220,
    'flex-width' => true,
    'unlink-homepage-logo' => true,
  ) );
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'mendrix-consultancy' ),
    'footer'  => __( 'Footer Menu', 'mendrix-consultancy' ),
  ) );

  // WooCommerce (basic)
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mendrix_setup' );

/**
 * Front + editor styles (Google Fonts)
 */
function mendrix_enqueue_assets() {
  wp_enqueue_style(
    'mendrix-fonts',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@600;700&display=swap',
    array(),
    null
  );
  wp_enqueue_style( 'mendrix-style', get_stylesheet_uri(), array(), MENDRIX_VERSION );
}
add_action( 'wp_enqueue_scripts', 'mendrix_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'mendrix_enqueue_assets' );

/**
 * Pattern categories
 */
function mendrix_register_pattern_categories() {
  register_block_pattern_category( 'mendrix', array( 'label' => __( 'Mendrix', 'mendrix-consultancy' ) ) );
  register_block_pattern_category( 'mendrix-cta', array( 'label' => __( 'Mendrix CTAs', 'mendrix-consultancy' ) ) );
}
add_action( 'init', 'mendrix_register_pattern_categories' );
