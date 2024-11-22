<?php
/**
 * Domains Cards Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('title');
$subtitle = get_field('subtitle');
$cards = get_field('cards');
$text = get_field('text');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'domains-cards';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="domains-cards__container">
    <h2 class="domains-cards-title section-title"><?= $title ?><?php if (!empty($subtitle)): ?>
        <span><?= $subtitle ?></span><?php endif; ?></h2>
    <ul class="domains-cards-list">
      <?php if ($cards): ?>
        <?php foreach ($cards as $card):
          $image = $card['image'];
          ?>
          <li class="domains-cards-item">
            <img
                src="<?= $image['url'] ?>"
                alt="<?= $image['alt'] ?>"
                width="64"
                height="64"
                loading="lazy"
                class="domains-cards-image">
            <h3 class="domains-cards-item-title"><?= $card['title'] ?></h3>
            <div class="domains-cards-item-text"><?= $card['text'] ?></div>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
    <?php if (!empty($text)): ?>
      <div class="domains-cards-text"><?= $text ?></div>
    <?php endif; ?>
  </div>
</div>

