<?php

/**
 * Brands block on the Technik page template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
//$quote = !empty(get_field('quote')) ? get_field('quote') : 'Your quote here...';
$title = get_field('title');
$subtitle = get_field('subtitle');
$brands = get_field('brands');
$text = get_field('text');
// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'technik-brands';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<section <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="technik-brands__container">
    <?php if (!empty($title)): ?>
      <h2 class="technik-brands-title section-title"><?= $title ?></h2>
    <?php endif; ?>
    <?php if (!empty($subtitle)): ?>
      <div class="technik-brands-subtitle"><?= $subtitle ?></div>
    <?php endif; ?>
    <?php if (!empty($brands)): ?>
      <ul class="technik-brands-list">
        <?php foreach ($brands as $brand):
          $logo = $brand['image'];
          ?>
          <li class="technik-brands-item">
            <?php if (!empty($logo)): ?>
              <img
                  class="technik-brands-item-logo"
                  src="<?= $logo['url'] ?>"
                  alt="<?= $logo['alt'] ?>"
                  loading="lazy">
            <?php endif; ?>
            <?php if (!empty($brand['text'])): ?>
              <div class="technik-brands-item-text"><?= $brand['text'] ?></div>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="technik-brands-text"><?= $text ?></div>
    <?php endif; ?>
  </div>
</section>


