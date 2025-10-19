<?php
/**
 * Title: Pricing / Engagement Cards
 * Slug: mendrix-consultancy-pro/pricing-engagement-cards
 * Categories: mcp-sections
 * Keywords: pricing, engagement
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<section class="wp-block-group" id="pricing">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Engage with Mendrix</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center","className":"container-narrow"} -->
  <p class="has-text-align-center container-narrow">Flexible partnership models designed to meet you where you are and compound value across strategy, activation, and enablement.</p>
  <!-- /wp:paragraph -->
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
  <div class="wp-block-columns alignwide">
    <?php
    $plans = array(
      array(
        'title'       => 'Discovery Sprint',
        'price'       => 'From $12K',
        'description' => 'Two-week diagnostic with leadership workshops, rapid assessments, and prioritised roadmap.',
        'bullets'     => array( 'Executive interviews', 'Operating model audit', 'Roadmap & investment thesis' ),
        'highlight'   => false
      ),
      array(
        'title'       => 'Strategy Residency',
        'price'       => 'From $38K',
        'description' => 'Embedded strategists aligning teams, orchestrating pilots, and establishing OKR cadence.',
        'bullets'     => array( 'Quarterly OKR orchestration', 'Revenue & learner dashboards', 'Change management playbooks' ),
        'highlight'   => true
      ),
      array(
        'title'       => 'Delivery Partner',
        'price'       => 'Custom',
        'description' => 'Full-stack pod for execution across product, GTM, and enablement with measurable KPIs.',
        'bullets'     => array( 'Dedicated cross-functional squad', 'Weekly executive reviews', 'Impact measurement & iteration' ),
        'highlight'   => false
      ),
    );
    foreach ( $plans as $plan ) :
      $class = $plan['highlight'] ? 'mc-card is-highlight' : 'mc-card';
      $button_attrs = $plan['highlight']
        ? '"className":"is-style-outline","backgroundColor":"background","textColor":"primary"'
        : '"backgroundColor":"primary","textColor":"background"';
    ?>
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"className":"<?php echo esc_attr( $class ); ?>","layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"1rem"}}} -->
      <div class="wp-block-group <?php echo esc_attr( $class ); ?>">
        <!-- wp:heading {"level":3} -->
        <h3><?php echo esc_html( $plan['title'] ); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"fontSize":"lg"} -->
        <p class="has-lg-font-size"><?php echo esc_html( $plan['price'] ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p><?php echo esc_html( $plan['description'] ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:list -->
        <ul>
          <?php foreach ( $plan['bullets'] as $bullet ) : ?>
            <li><?php echo esc_html( $bullet ); ?></li>
          <?php endforeach; ?>
        </ul>
        <!-- /wp:list -->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {<?php echo $button_attrs; ?>} -->
          <div class="wp-block-button"><a class="wp-block-button__link" href="#contact">Start Now</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    <?php endforeach; ?>
  </div>
  <!-- /wp:columns -->
</section>
<!-- /wp:group -->
