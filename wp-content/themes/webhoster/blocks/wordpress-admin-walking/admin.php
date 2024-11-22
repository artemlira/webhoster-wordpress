<?php
/**
 * Wordpress Admin walking Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('admin_walking_title');
$subtitle = get_field('admin_walking_subtitle');
$image = get_field('admin_walking_image');
$text = get_field('admin_walking_text');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'wordpress-admin-walking';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="wordpress-admin-walking__container">
    <div class="wordpress-admin-walking-content">
      <?php if (!empty($title)): ?>
        <h2 class="wordpress-admin-walking-title section-title">
          <?= $title ?>
          <?php if (!empty($subtitle)): ?>
            <span><?= $subtitle ?></span>
          <?php endif; ?>
        </h2>
      <?php endif; ?>
      <?php if (!empty($text)): ?>
        <div class="wordpress-admin-walking-text"><?= $text ?></div>
      <?php endif; ?>
    </div>
    <div class="wordpress-admin-walking-img-wrapper"
         style="background:url('<?= $image['url'] ?>') center / cover no-repeat;"></div>
  </div>
</div>

