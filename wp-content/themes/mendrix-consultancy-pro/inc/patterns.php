<?php
/**
 * Register pattern categories and include pattern files.
 */

function mcp_register_pattern_categories() {
  $categories = array(
    'mcp-hero'      => __( 'Mendrix Hero', 'mendrix-consultancy-pro' ),
    'mcp-services'  => __( 'Mendrix Services', 'mendrix-consultancy-pro' ),
    'mcp-sections'  => __( 'Mendrix Sections', 'mendrix-consultancy-pro' ),
    'mcp-cta'       => __( 'Mendrix Call to Action', 'mendrix-consultancy-pro' ),
    'mcp-blog'      => __( 'Mendrix Blog', 'mendrix-consultancy-pro' ),
    'mcp-footer'    => __( 'Mendrix Footers', 'mendrix-consultancy-pro' )
  );

  foreach ( $categories as $slug => $label ) {
    register_block_pattern_category( $slug, array( 'label' => $label ) );
  }
}
add_action( 'init', 'mcp_register_pattern_categories' );

function mcp_load_block_patterns() {
  $pattern_dir = MCP_THEME_PATH . 'patterns/';
  $pattern_files = glob( $pattern_dir . '*.php' );

  if ( ! empty( $pattern_files ) ) {
    foreach ( $pattern_files as $file ) {
      require_once $file;
    }
  }
}
add_action( 'init', 'mcp_load_block_patterns', 12 );
