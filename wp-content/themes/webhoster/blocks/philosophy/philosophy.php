<?php
/**
 * Philosophy Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = $args == 'second-section' ? get_field('second_philosophy_title') : get_field('philosophy_title');
$text = $args == 'second-section' ? get_field('second_philosophy_text') : get_field('philosophy_text');
$buttonText = $args == 'second-section' ? get_field('second_philosophy_button_text') : get_field('philosophy_button_text');
$buttonLink = $args == 'second-section' ? get_field('second_philosophy_button_link') : get_field('philosophy_button_link');
$image = $args == 'second-section' ? get_field('second_philosophy_image') : get_field('philosophy_image');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'philosophy';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="philosophy__container">
    <?php if (!empty($title)): ?>
      <h2 class="philosophy-title section-title"><?= $title ?></h2>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="philosophy-content">
        <div class="philosophy-text"><?= $text ?></div>
        <?php if (!empty($buttonText)): ?>
          <a class="philosophy-button" href="<?= $buttonLink ?>"><?= $buttonText ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($image)): ?>
      <img
          class="philosophy-image"
          src="<?= $image['url'] ?>"
          alt="<?= $image['alt'] ?>"
          loading="lazy"
      >
    <?php endif; ?>
  </div>
</div>

