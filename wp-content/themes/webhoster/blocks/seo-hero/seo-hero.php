<?php

/**
 * Hero block on the SEO page template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
//$quote = !empty(get_field('quote')) ? get_field('quote') : 'Your quote here...';
$title = get_field('title');
$subtitle = get_field('subtitle');
$card = get_field('card');
// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'seo-hero';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="seo-hero__container">
    <div class="seo-hero-content">
      <?php if (!empty($title)): ?>
        <h1 class="seo-hero-title"><?= $title ?></h1>
      <?php endif; ?>
      <?php if (!empty($subtitle)): ?>
        <div class="seo-hero-text"><?= $subtitle ?></div>
      <?php endif; ?>
    </div>
    <div class="seo-hero-card">
      <?php if (!empty($card)): ?>
        <?php if (!empty($card['title'])): ?>
          <h3 class="seo-hero-card-title"><?= $card['title'] ?></h3>
        <?php endif; ?>
        <div class="seo-hero-card-price-wrapper">
          <?php if (!empty($card['sum'])): ?>
            <p class="seo-hero-card-price"><span><?= $card['sum'] ?></span> <?= $card['currency'] ?></p>
          <?php endif; ?>
          <?php if (!empty($card['period'])): ?>
            <p class="seo-hero-card-period"><?= $card['period'] ?></p>
          <?php endif; ?>
        </div>
        <?php if (!empty($card['text'])): ?>
          <div class="seo-hero-card-text"><?= $card['text'] ?></div>
        <?php endif; ?>
        <?php if (!empty($card['button_text']) && !empty($card['button_link'])): ?>
          <a class="seo-hero-card-button" href="<?= $card['button_link'] ?>"><?= $card['button_text'] ?></a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</div>