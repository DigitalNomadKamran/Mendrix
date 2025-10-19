<?php
/**
 * Title: FAQ Accordion
 * Slug: mendrix-consultancy-pro/faq-accordion
 * Categories: mcp-sections
 * Keywords: faq, accordion
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-muted-background-color has-background" id="faq">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Frequently asked questions</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center","className":"container-narrow"} -->
  <p class="has-text-align-center container-narrow">Clarity upfront keeps your stakeholders aligned. Expand each question to learn how we partner.</p>
  <!-- /wp:paragraph -->
  <!-- wp:group {"className":"details-accordion","layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"1rem","margin":{"top":"2rem"}}}} -->
  <div class="wp-block-group details-accordion">
    <?php
    $faqs = array(
      array(
        'question' => 'How quickly can we begin an engagement?',
        'answer'   => 'Discovery sprints can be scheduled within two weeks. Longer programs include a runway for stakeholder alignment and data access.'
      ),
      array(
        'question' => 'Do you work alongside internal teams?',
        'answer'   => 'Yes. We embed Mendrix strategists with your operators, co-design rituals, and transfer capability so teams maintain momentum post-engagement.'
      ),
      array(
        'question' => 'What does success measurement look like?',
        'answer'   => 'Each engagement defines KPIs across growth, learner or customer outcomes, and operational excellence with dashboards surfaced weekly.'
      ),
      array(
        'question' => 'Can you integrate with our AI governance policies?',
        'answer'   => 'We partner with legal and compliance to align responsible AI frameworks, ensuring data residency, transparency, and human-in-the-loop guardrails.'
      ),
    );
    foreach ( $faqs as $faq ) :
    ?>
    <!-- wp:html -->
    <details>
      <summary><?php echo esc_html( $faq['question'] ); ?></summary>
      <div>
        <p><?php echo esc_html( $faq['answer'] ); ?></p>
      </div>
    </details>
    <!-- /wp:html -->
    <?php endforeach; ?>
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
