<?php
/**
 * Title: Stats Band
 * Slug: mendrix-consultancy-pro/stats-band
 * Categories: mcp-sections
 * Keywords: statistics, metrics
 */
?>
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"background","style":{"spacing":{"padding":{"top":"3.5rem","bottom":"3.5rem"}}}} -->
<section class="wp-block-group alignfull has-background-color has-background" id="stats">
  <!-- wp:columns {"align":"wide","className":"container-wide"} -->
  <div class="wp-block-columns alignwide container-wide">
    <?php
    $stats = array(
      array( 'value' => '120+', 'label' => 'Transformation roadmaps delivered' ),
      array( 'value' => '38%', 'label' => 'Average revenue growth within 12 months' ),
      array( 'value' => '94%', 'label' => 'Executive satisfaction score' ),
      array( 'value' => '25', 'label' => 'Markets launched with Mendrix playbooks' ),
    );
    foreach ( $stats as $stat ) :
    ?>
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2.5rem,6vw,4rem)"}}} -->
      <h2><?php echo esc_html( $stat['value'] ); ?></h2>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"fontSize":"sm"} -->
      <p class="has-sm-font-size"><?php echo esc_html( $stat['label'] ); ?></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
    <?php endforeach; ?>
  </div>
  <!-- /wp:columns -->
</section>
<!-- /wp:group -->
