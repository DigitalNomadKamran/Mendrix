<?php
/**
 * Mendrix Consultancy Pro functions and definitions
 */

define( 'MCP_THEME_VERSION', '1.0.0' );
define( 'MCP_THEME_PATH', trailingslashit( get_template_directory() ) );
define( 'MCP_THEME_URL', trailingslashit( get_template_directory_uri() ) );

require_once MCP_THEME_PATH . 'inc/setup.php';
require_once MCP_THEME_PATH . 'inc/patterns.php';
require_once MCP_THEME_PATH . 'inc/schema.php';

/**
 * Enqueue fonts and styles.
 */
function mcp_enqueue_assets() {
  $local_fonts = MCP_THEME_URL . 'assets/css/local-fonts.css';
  $local_fonts_path = MCP_THEME_PATH . 'assets/css/local-fonts.css';

  if ( file_exists( $local_fonts_path ) && filesize( $local_fonts_path ) > 0 ) {
    wp_enqueue_style( 'mcp-local-fonts', $local_fonts, array(), MCP_THEME_VERSION );
  } else {
    wp_enqueue_style(
      'mcp-remote-fonts',
      'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@600;700&display=swap',
      array(),
      null
    );
  }

  wp_enqueue_style( 'mcp-style', get_stylesheet_uri(), array(), MCP_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'mcp_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'mcp_enqueue_assets' );

/**
 * Enqueue preloads if local fonts exist.
 */
function mcp_preload_local_fonts() {
  $fonts = array(
    'assets/fonts/inter-400.woff2',
    'assets/fonts/inter-600.woff2',
    'assets/fonts/inter-700.woff2',
    'assets/fonts/playfair-600.woff2',
    'assets/fonts/playfair-700.woff2',
  );

  foreach ( $fonts as $font ) {
    $path = MCP_THEME_PATH . $font;
    if ( file_exists( $path ) ) {
      printf(
        '<link rel="preload" href="%1$s" as="font" type="font/woff2" crossorigin />' . "\n",
        esc_url( MCP_THEME_URL . $font )
      );
    }
  }
}
add_action( 'wp_head', 'mcp_preload_local_fonts' );
