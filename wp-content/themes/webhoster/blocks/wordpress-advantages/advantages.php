<?php
/**
 * Wordpress Advantages Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('advantages_title');
$subtitle = get_field('advantages_subtitle');
$advantages = get_field('advantages');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'wordpress-advantages';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="wordpress-advantages__container">
    <?php if (!empty($title)): ?>
      <h2 class="wordpress-advantages-title section-title">
        <?= $title ?>
        <?php if (!empty($subtitle)): ?>
          <span><?= $subtitle ?></span>
        <?php endif; ?>
      </h2>
    <?php endif; ?>
    <ul class="wordpress-advantages-list">
      <?php if ($advantages): ?>
        <?php foreach ($advantages as $card):
          $image = $card['image'];
          ?>
          <li class="wordpress-advantages-item">
            <img
                src="<?= $image['url'] ?>"
                alt="<?= $image['alt'] ?>"
                width="64"
                height="64"
                loading="lazy"
                class="wordpress-advantages-image">
            <h3 class="wordpress-advantages-item-title"><?= $card['title'] ?></h3>
            <div class="wordpress-advantages-item-text"><?= $card['text'] ?></div>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>

