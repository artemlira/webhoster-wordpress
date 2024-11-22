<?php
/**
 * Domains Hero Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('title');
$subtitle = get_field('subtitle');
$text = get_field('text');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'domains-hero';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="domains-hero__container">
    <h1 class="domains-hero-title"><?= $title ?><span><?= $subtitle ?></span></h1>
    <div class="domains-hero-text"><?= $text ?></div>
  </div>
</div>

