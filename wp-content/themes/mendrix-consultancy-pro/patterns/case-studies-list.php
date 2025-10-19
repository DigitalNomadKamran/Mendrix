<?php
/**
 * Title: Case Studies List
 * Slug: mendrix-consultancy-pro/case-studies-list
 * Categories: mcp-sections
 * Keywords: case studies, portfolio
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"4.5rem","bottom":"4.5rem"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" id="case-studies">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Case studies</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center","className":"container-narrow"} -->
  <p class="has-text-align-center container-narrow">Select transformations illustrating how we activate people, processes, and platforms to deliver measurable ROI.</p>
  <!-- /wp:paragraph -->
  <!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderby":"date"},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained"}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
      <!-- wp:group {"className":"mc-card","style":{"spacing":{"blockGap":"1rem"}}} -->
      <div class="wp-block-group mc-card">
        <!-- wp:post-featured-image {"isLink":true,"height":"220px"} /-->
        <!-- wp:post-title {"isLink":true,"level":3} /-->
        <!-- wp:post-excerpt {"moreText":"Read the full story"} /-->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"className":"is-style-outline"} -->
          <div class="wp-block-button is-style-outline"><!-- wp:post-permalink {"label":"Explore","className":"wp-block-button__link"} /--></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    <!-- /wp:post-template -->
    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Publish or assign posts to feature case studies here.</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
  </div>
  <!-- /wp:query -->
</section>
<!-- /wp:group -->
