<?php

/**
 * Title and text block on the Technik page template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
//$quote = !empty(get_field('quote')) ? get_field('quote') : 'Your quote here...';
$title = get_field('title');
$text = get_field('text');
$listLeft = get_field('list_left');
$listRight = get_field('list_right');
// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'technik-text-block';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<section <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="technik-text-block__container">
    <?php if (!empty($title)): ?>
      <h2 class="technik-text-block-title"><?= $title ?></h2>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="technik-text-block-text"><?= $text ?></div>
    <?php endif; ?>
    <?php if (!empty($listLeft) || !empty($listRight)): ?>
      <div class="technik-text-block-content">

        <?php if (!empty($listLeft)): ?>
          <ul class="technik-text-block-list">
            <?php foreach ($listLeft as $list):
              $image = $list['image'];
              ?>
              <li class="technik-text-block-item">
                <?php if (!empty($image)): ?>
                  <img
                      class="technik-text-block-item-icon"
                      src="<?= $image['url'] ?>"
                      alt="<?= $image['alt'] ?>"
                      width="24"
                      height="24"
                      loading="lazy">
                <?php endif; ?>
                <?php if (!empty($list['text'])): ?>
                  <p class="technik-text-block-text-item-text"><?= $list['text'] ?></p>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
        <?php if (!empty($listRight)): ?>
          <ul class="technik-text-block-list">
            <?php foreach ($listRight as $list):
              $image = $list['image'];
              ?>
              <li class="technik-text-block-item">
                <?php if (!empty($image)): ?>
                  <img
                      class="technik-text-block-item-icon"
                      src="<?= $image['url'] ?>"
                      alt="<?= $image['alt'] ?>"
                      width="24"
                      height="24"
                      loading="lazy">
                <?php endif; ?>
                <?php if (!empty($list['text'])): ?>
                  <p class="technik-text-block-text-item-text"><?= $list['text'] ?></p>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

