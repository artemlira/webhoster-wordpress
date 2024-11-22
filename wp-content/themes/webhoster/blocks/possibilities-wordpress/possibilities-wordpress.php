<?php
/**
 *  Accordion-Table Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('title');
$subtitle = get_field('subtitle');
$accordions = get_field('accordions');
$button_text = get_field('button_text');
$text = get_field('text');
$service = get_field('select_a_service');
$webhosting_offers = get_field('webhosting_offers');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'accordion-table-section';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="accordion-table-section__container">
    <?php if (!empty($title)): ?>
      <h2 class="accordion-table-section-title section-title"><?= $title ?><?php if (!empty($subtitle)): ?>
          <span><?= $subtitle ?></span><?php endif; ?></h2>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="accordion-table-section-text"><?= $text ?></div>
    <?php endif; ?>
    <!--    ================-->
    <?php
    $args = array(
      'tax_query' => array(
        array(
          'taxonomy' => 'possibilities',
          'field' => 'slug',
          'terms' => $service,

        )
      ),
      'order' => 'DESC', //DESC
      // 'order'     => 'DESC', //DESC
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="accordion-table">
          <button class="accordion-table-control" aria-expanded="false" type="button">
            <span class="accordion-table-title"><?php the_title(); ?></span>
            <span class="accordion-table-icon"></span>
          </button>
          <div class="accordion-table-content" aria-hidden="true">
            <div class="accordion-table-content-text"><?php the_content(); ?></div>
            <a class="accordion-white-content-table-button"
               href="<?php echo get_the_permalink(); ?>"><?= $button_text ?></a>
          </div>
        </div>
      <?php }
    }
    wp_reset_postdata();
    ?>
    <!--    ===========-->
  </div>
</div>


