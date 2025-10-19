<?php
/**
 * Theme setup and editor support.
 */

function mcp_theme_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'editor-styles' );
  add_theme_support( 'appearance-tools' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
  add_theme_support( 'custom-logo', array(
    'height'      => 72,
    'width'       => 240,
    'flex-width'  => true,
    'flex-height' => true,
    'unlink-homepage-logo' => true,
  ) );

  register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'mendrix-consultancy-pro' ),
    'footer'  => __( 'Footer Navigation', 'mendrix-consultancy-pro' ),
    'utility' => __( 'Utility Navigation', 'mendrix-consultancy-pro' ),
  ) );
}
add_action( 'after_setup_theme', 'mcp_theme_setup' );

function mcp_editor_styles() {
  add_editor_style( array( 'style.css', 'assets/css/local-fonts.css' ) );
}
add_action( 'admin_init', 'mcp_editor_styles' );

function mcp_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Footer Widgets', 'mendrix-consultancy-pro' ),
    'id'            => 'footer-widgets',
    'description'   => __( 'Widgets in this area will be shown in the footer.', 'mendrix-consultancy-pro' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'mcp_widgets_init' );

