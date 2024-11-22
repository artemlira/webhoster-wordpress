<?php
/**
 * Main Services Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$services = get_field('services');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'main-services';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="main-services__container">
    <ul class="main-services-list">
      <?php if ($services): ?>
        <?php foreach ($services as $service): ?>
          <li class="main-services-item">
            <a href="<?= $service['service_link'] ?>" class="main-services-link"><?= $service['service_text'] ?></a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
