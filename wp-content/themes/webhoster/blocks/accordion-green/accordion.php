<?php
/**
 * Domains Cards Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('green_title');
$subtitle = get_field('green_subtitle');
$accordions = get_field('green_accordions');
$text = get_field('green_text');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'accordion-section';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="accordion-section__container">
    <?php if (!empty($title)): ?>
      <h2 class="accordion-section-title section-title"><?= $title ?><?php if (!empty($subtitle)): ?>
          <span><?= $subtitle ?></span><?php endif; ?></h2>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="accordion-section-text"><?= $text ?></div>
    <?php endif; ?>
    <?php if ($accordions): ?>
      <?php foreach ($accordions as $accordion): ?>
        <div class="accordion">
          <button class="accordion-control" aria-expanded="false" type="button">
            <span class="accordion-title"><?= $accordion['title'] ?></span>
            <span class="accordion-icon"></span>
          </button>
          <div class="accordion-content" aria-hidden="true">
            <div class="accordion-content-text"><?= $accordion['text'] ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>

