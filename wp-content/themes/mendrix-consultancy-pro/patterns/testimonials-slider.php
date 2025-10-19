<?php
/**
 * Title: Testimonials Slider
 * Slug: mendrix-consultancy-pro/testimonials-slider
 * Categories: mcp-sections
 * Keywords: testimonials, slider
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" id="testimonials">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Leaders who trust Mendrix</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center","className":"container-narrow"} -->
  <p class="has-text-align-center container-narrow">Scroll horizontally to explore client stories from higher education, enterprise, and public sector teams.</p>
  <!-- /wp:paragraph -->
  <!-- wp:group {"className":"testimonial-slider","layout":{"type":"flex"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
  <div class="wp-block-group testimonial-slider">
    <?php
    $quotes = array(
      array(
        'quote' => 'Their change roadmap united eight faculties and accelerated our accreditation by a full year.',
        'name'  => 'Provost, Meridian University'
      ),
      array(
        'quote' => 'Mendrix reframed our GTM motions and enabled a 42% uplift in enterprise expansion revenue.',
        'name'  => 'VP Revenue, NexaTech Learning'
      ),
      array(
        'quote' => 'Our workforce AI initiative now runs with strong governance and measurable ROI in every division.',
        'name'  => 'Chief Transformation Officer, City of Northhaven'
      ),
      array(
        'quote' => 'From curriculum redesign to digital retention, their team operates like an extension of ours.',
        'name'  => 'Executive Director, Apex Professional'
      ),
    );
    foreach ( $quotes as $quote ) :
    ?>
    <!-- wp:group {"className":"mc-card","layout":{"type":"constrained"}} -->
    <div class="wp-block-group mc-card">
      <!-- wp:paragraph {"fontSize":"lg"} -->
      <p class="has-lg-font-size">“<?php echo esc_html( $quote['quote'] ); ?>”</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph {"fontSize":"sm"} -->
      <p class="has-sm-font-size"><strong><?php echo esc_html( $quote['name'] ); ?></strong></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <?php endforeach; ?>
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
