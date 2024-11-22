<?php
/**
 * Main About Us Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$aboutUs = get_field('about_us');
$title = get_field('about_us_title');
$description = get_field('about_us_description');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'main-about-us';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="main-about-us__container">
    <h2 class="visually-hidden">About us</h2>
    <div class="main-about-us-content">
      <h2 class="main-about-us-content-title"><?= $title ?></h2>
      <div class="main-about-us-content-description"><?= $description ?></div>
    </div>
    <ul class="main-about-us-list">
      <?php if ($aboutUs): ?>
        <?php foreach ($aboutUs as $item):
          $image = $item['image'];
          ?>
          <li class="main-about-us-item">
            <img
                src="<?= $image['url'] ?>"
                alt="<?= $image['alt'] ?>"
                width="64"
                height="64"
                loading="lazy"
                class="main-about-us-image">
            <h3 class="main-about-us-title"><?= $item['title'] ?></h3>
            <div class="main-about-us-text"><?= $item['text'] ?></div>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
