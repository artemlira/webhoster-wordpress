<?php
/**
 *  Accordion-White Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = $args == 'section' ? get_field('white_title') : get_field('title');
$subtitle = $args == 'section' ? get_field('white_subtitle') : get_field('subtitle');
$accordions = $args == 'section' ? get_field('white_accordions') : get_field('accordions');
$text = $args == 'section' ? get_field('white_text') : get_field('text');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'accordion-white-section';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="accordion-white-section__container">
    <?php if (!empty($title)): ?>
      <h2 class="accordion-white-section-title section-title"><?= $title ?><?php if (!empty($subtitle)): ?>
          <span><?= $subtitle ?></span><?php endif; ?></h2>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="accordion-white-section-text"><?= $text ?></div>
    <?php endif; ?>
    <?php if ($accordions): ?>
      <?php foreach ($accordions as $accordion): ?>
        <div class="accordion-white">
          <button class="accordion-white-control" aria-expanded="false" type="button">
            <span class="accordion-white-title"><?= $accordion['title'] ?></span>
            <span class="accordion-white-icon"></span>
          </button>
          <div class="accordion-white-content" aria-hidden="true">
            <div class="accordion-white-content-text"><?= $accordion['text'] ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>

