<?php
/**
 * Output structured data helpers.
 */

function mcp_output_schema() {
  if ( is_admin() ) {
    return;
  }

  $organization = array(
    '@context' => 'https://schema.org',
    '@type'    => 'Organization',
    'name'     => get_bloginfo( 'name' ),
    'url'      => home_url(),
    'logo'     => get_theme_mod( 'custom_logo' ) ? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) : '',
    'sameAs'   => array_filter( array(
      get_theme_mod( 'mcp_linkedin_url' ),
      get_theme_mod( 'mcp_twitter_url' ),
      get_theme_mod( 'mcp_facebook_url' ),
    ) ),
  );

  echo "<!-- Organization Schema -->\n";
  echo '<script type="application/ld+json">' . wp_json_encode( $organization ) . '</script>' . "\n";

  if ( is_singular() ) {
    global $post;
    $breadcrumbs = array(
      '@context'        => 'https://schema.org',
      '@type'           => 'BreadcrumbList',
      'itemListElement' => array(
        array(
          '@type'    => 'ListItem',
          'position' => 1,
          'name'     => get_bloginfo( 'name' ),
          'item'     => home_url(),
        ),
        array(
          '@type'    => 'ListItem',
          'position' => 2,
          'name'     => get_the_title( $post ),
          'item'     => get_permalink( $post ),
        ),
      ),
    );

    echo "<!-- BreadcrumbList Schema -->\n";
    echo '<script type="application/ld+json">' . wp_json_encode( $breadcrumbs ) . '</script>' . "\n";
  }
}
add_action( 'wp_head', 'mcp_output_schema', 5 );
