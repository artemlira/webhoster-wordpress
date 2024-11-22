<?php
/**
 * Main Advantages Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$advantages = get_field('advantages');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'main-advantages';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="main-advantages__container">
    <h2 class="visually-hidden">Advantages</h2>
    <ul class="main-advantages-list">
      <?php if ($advantages): ?>
        <?php foreach ($advantages as $advantage):
          $image = $advantage['image'];
          ?>
          <li class="main-advantages-item">
            <img
                src="<?= $image['url'] ?>"
                alt="<?= $image['alt'] ?>"
                width="64"
                height="64"
                loading="lazy"
                class="main-advantages-image">
            <h3 class="main-advantages-title"><?= $advantage['title'] ?></h3>
            <p class="main-advantages-text"><?= $advantage['text'] ?></p>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>