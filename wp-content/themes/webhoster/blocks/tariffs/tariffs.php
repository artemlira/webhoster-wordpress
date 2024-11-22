<?php
/**
 * Tariffs Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = $args == 'second-section-tariffs' ? get_field('second_tariffs_title') : get_field('tariffs_title');
$subtitle = $args == 'second-section-tariffs' ? get_field('second_tariffs_subtitle') : get_field('tariffs_subtitle');
$tariffs = $args == 'second-section-tariffs' ? get_field('second_tariffs') : get_field('tariffs');


// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'tariffs' . ' ' . $args;
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="tariffs__container">
    <?php if (!empty($title)): ?>
      <h2 class="tariffs-title"><?= $title ?></h2>
    <?php endif; ?>
    <?php if (!empty($title)): ?>
      <div class="tariffs-subtitle"><?= $subtitle ?></div>
    <?php endif; ?>
    <?php if ($tariffs): ?>
      <ul class="tariffs-list">

        <?php foreach ($tariffs as $key => $tariff):
          $services = $tariff['services'];
          $price = $tariff['price'];
          ?>
          <li class="tariffs-item <?php if ($key == 1): ?>isHovered<?php endif; ?>">
            <?php if (!empty($tariff['title'])): ?>
              <h3 class="tariffs-item-title" data-title="Auswahl"><?= $tariff['title'] ?></h3>
            <?php endif; ?>
            <?php if ($price): ?>
              <div class="tariffs-item-price">
                <p class="tariffs-price-text"><span><?= $price['sum'] ?></span><?= $price['currency'] ?></p>
                <p class="tariffs-price-period"><?= $tariff['period'] ?></p>
              </div>
            <?php endif; ?>
            <?php if (!empty($tariff['text'])): ?>
              <div class="tariffs-text"><?= $tariff['text'] ?></div>
            <?php endif; ?>

            <?php if ($services): ?>
              <div class="tariffs-services">
                <ul class="tariffs-services-list">
                  <?php foreach ($services as $service):
                    $color = $service['onoff'] ? '#4CA941' : '#C1272D';
                    ?>
                    <li class="tariffs-services-item">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none">
                        <path stroke="<?= $color ?>" stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M6.5 3.5a2.5 2.5 0 0 1 5 0V5h1c1.398 0 2.097 0 2.648.228a3 3 0 0 1 1.624 1.624C17 7.403 17 8.102 17 9.5h1.5a2.5 2.5 0 0 1 0 5H17v1.7c0 1.68 0 2.52-.327 3.162a3 3 0 0 1-1.311 1.311C14.72 21 13.88 21 12.2 21h-.7v-1.75a2.25 2.25 0 0 0-4.5 0V21H5.8c-1.68 0-2.52 0-3.162-.327a3 3 0 0 1-1.311-1.311C1 18.72 1 17.88 1 16.2v-1.7h1.5a2.5 2.5 0 0 0 0-5H1c0-1.398 0-2.097.228-2.648a3 3 0 0 1 1.624-1.624C3.403 5 4.102 5 5.5 5h1V3.5Z"/>
                      </svg>
                      <p class="tariffs-services-item-text"><?= $service['text'] ?></p>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
            <?php if (!empty($tariff['button'])): ?>
              <a class="tariffs-price-button" href="<?= $tariff['button_link'] ?>"><?= $tariff['button'] ?></a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="splide" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list tariffs-lists">
            <?php foreach ($tariffs as $key => $tariff):
              $services = $tariff['services'];
              $price = $tariff['price'];
              ?>
              <li class="splide__slide tariffs-item">
                <?php if (!empty($tariff['title'])): ?>
                  <h3 class="tariffs-item-title" data-title="Auswahl"><?= $tariff['title'] ?></h3>
                <?php endif; ?>
                <?php if ($price): ?>
                  <div class="tariffs-item-price">
                    <p class="tariffs-price-text"><span><?= $price['sum'] ?></span><?= $price['currency'] ?></p>
                    <p class="tariffs-price-period"><?= $tariff['period'] ?></p>
                  </div>
                <?php endif; ?>
                <?php if (!empty($tariff['text'])): ?>
                  <div class="tariffs-text"><?= $tariff['text'] ?></div>
                <?php endif; ?>
                <?php if (!empty($tariff['button'])): ?>
                  <a class="tariffs-price-button" href="<?= $tariff['button_link'] ?>"><?= $tariff['button'] ?></a>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
