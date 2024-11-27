<?php
/**
 * Products Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('products_title');
$products = get_field('products_table');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'products';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<section <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="products__container">
    <?php if (!empty($title)): ?>
      <h2 class="products-title section-title"><?= $title ?></h2>
    <?php endif; ?>
    <?php if (!empty($products)): ?>
      <div class="products-content">
        <ul class="products-list">
          <?php foreach ($products as $product):
            $col_1 = $product['col_1'];
            $col_2 = $product['col_2'];
            $col_3 = $product['col_3'];

            ?>
            <li class="products-item">
              <div class="products-item-name products-item-col" data-title="<?= $product['tooltip'] ?>">
                <p><?= $product['name'] ?></p>
              </div>

              <div class="products-item-col products-item-col-2">
                <?php if (!empty($col_1['text'])): ?>
                  <p><?= $col_1['text'] ?></p>
                <?php endif; ?>
                <?php if (!empty($col_1['icon'])): ?>
                  <img
                      src="<?= $col_1['icon'] ?>"
                      alt="selection icon"
                      width="14"
                      height="14"
                      loading="lazy"
                  >
                <?php endif; ?>
              </div>

              <div class="products-item-col products-item-col-3">
                <?php if (!empty($col_2['text'])): ?>
                  <p><?= $col_2['text'] ?></p>
                <?php endif; ?>
                <?php if (!empty($col_2['icon'])): ?>
                  <img
                      src="<?= $col_2['icon'] ?>"
                      alt="selection icon"
                      width="14"
                      height="14"
                      loading="lazy"
                  >
                <?php endif; ?>
              </div>

              <div class="products-item-col products-item-col-4">
                <?php if (!empty($col_3['text'])): ?>
                  <p><?= $col_3['text'] ?></p>
                <?php endif; ?>
                <?php if (!empty($col_3['icon'])): ?>
                  <img
                      src="<?= $col_3['icon'] ?>"
                      alt="selection icon"
                      width="14"
                      height="14"
                      loading="lazy"
                  >
                <?php endif; ?>
              </div>

            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</section>


