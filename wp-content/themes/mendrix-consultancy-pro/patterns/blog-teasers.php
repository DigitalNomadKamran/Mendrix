<?php
/**
 * Title: Blog Teasers
 * Slug: mendrix-consultancy-pro/blog-teasers
 * Categories: mcp-blog
 * Keywords: blog, posts
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" id="insights">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Insights &amp; frameworks</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center","className":"container-narrow"} -->
  <p class="has-text-align-center container-narrow">Stay ahead with research-backed articles covering market shifts, enablement tactics, and AI governance best practice.</p>
  <!-- /wp:paragraph -->
  <!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderby":"date"},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained"}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
      <!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"border":{"radius":"16px","width":"1px","color":"#ececec"},"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}},"className":"mc-card"} -->
      <div class="wp-block-group mc-card" style="border-radius:16px;border-width:1px;border-color:#ececec;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
        <!-- wp:post-featured-image {"isLink":true,"height":"200px"} /-->
        <!-- wp:post-title {"isLink":true,"level":3} /-->
        <!-- wp:post-excerpt {"moreText":"Read more"} /-->
        <!-- wp:post-date /-->
      </div>
      <!-- /wp:group -->
    <!-- /wp:post-template -->
    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Publish blog posts to showcase your expertise here.</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
  </div>
  <!-- /wp:query -->
</section>
<!-- /wp:group -->
