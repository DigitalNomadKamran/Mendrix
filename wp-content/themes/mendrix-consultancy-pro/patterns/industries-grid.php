<?php
/**
 * Title: Industries Grid
 * Slug: mendrix-consultancy-pro/industries-grid
 * Categories: mcp-sections
 * Keywords: industries, sectors
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"4.5rem","bottom":"4.5rem"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-muted-background-color has-background" id="industries">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Industry impact</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center","className":"container-narrow"} -->
  <p class="has-text-align-center container-narrow">Cross-sector experience ensures we transfer proven playbooks and adapt them to your context.</p>
  <!-- /wp:paragraph -->
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"className":"industries-grid"} -->
  <div class="wp-block-columns alignwide industries-grid">
    <!-- repeated columns -->
    <?php
    $industries = array(
      'Higher Education',
      'Professional Learning',
      'Corporate L&D',
      'Public Sector Innovation',
      'Healthcare Training',
      'Technology & SaaS'
    );
    foreach ( $industries as $industry ) :
    ?>
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"}},"border":{"radius":"16px","width":"1px","color":"#e0e3e4"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="border-radius:16px;border-color:#e0e3e4;border-width:1px;padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
        <!-- wp:heading {"level":3,"fontSize":"xl"} -->
        <h3 class="has-xl-font-size"><?php echo esc_html( $industry ); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"fontSize":"sm"} -->
        <p class="has-sm-font-size">Change management, talent upskilling, and intelligent automation tailored to this sector.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    <?php endforeach; ?>
  </div>
  <!-- /wp:columns -->
</section>
<!-- /wp:group -->
