<?php
/**
 * Main Philosophy Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('title');
$subtitle = get_field('subtitle');
$text = get_field('text');
$buttonText = get_field('button_text');
$buttonLink = get_field('button_link');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'main-philosophy';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="main-philosophy__container">
    <h2 class="main-philosophy-title"><?= $title ?></h2>
    <p class="main-philosophy-subtitle"><?= $subtitle ?></p>
    <div class="main-philosophy-content">
      <p class="main-philosophy-text"><?= $text ?></p>
      <a class="main-philosophy-button" href="<?= $buttonLink ?>"><?= $buttonText ?></a>
    </div>
    <img
        class="main-philosophy-image"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-page/philosophie/decor.png"
        alt="decor icon"
        loading="lazy"
    >
  </div>
</div>

