<?php
/**
 *  Accordion-Table Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('title');
$subtitle = get_field('subtitle');
$accordions = get_field('accordions');
$button = get_field('button');
$text = get_field('text');
$webhosting_offers = get_field('webhosting_offers');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'accordion-table-section';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="accordion-table-section__container">
    <?php if (!empty($title)): ?>
      <h2 class="accordion-table-section-title section-title"><?= $title ?><?php if (!empty($subtitle)): ?>
          <span><?= $subtitle ?></span><?php endif; ?></h2>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="accordion-table-section-text"><?= $text ?></div>
    <?php endif; ?>
    <?php if ($accordions): ?>
      <?php foreach ($accordions as $accordion):
        $post_id = get_field_object('accordion');
        ?>


        <div class="accordion-table">
          <button class="accordion-table-control" aria-expanded="false" type="button">
            <?php print_r($post_id); ?>
            <span class="accordion-table-title"><?= $accordion['title'] ?></span>
            <span class="accordion-table-icon"></span>
          </button>
          <div class="accordion-table-content" aria-hidden="true">
            <?php if (!empty($accordion['text'])): ?>
              <div class="accordion-table-content-text"><?= $accordion['text'] ?></div>
            <?php endif; ?>
            <div class="accordion-table-content-text"></div>
            <?php if (!empty($accordion['table'])):
              $table = $accordion['table'];
              ?>
              <table class="accordion-white-content-table">
                <tbody>
                <?php
                foreach ($table['body'] as $table) {
                  if (isset($table)) {
                    ?>
                    <tr>
                      <td class="accordion-white-content-table-row">
                        <?php echo $table[0]['c']; ?></td>
                      <td class="accordion-white-content-table-row">
                        <?php echo $table[1]['c']; ?> </td>
                      <td class="accordion-white-content-table-row">
                        <?php echo $table[2]['c']; ?></td>
                      <td class="accordion-white-content-table-row">
                        <?php echo $table[3]['c']; ?></td>
                    </tr>
                  <?php }
                } ?>
                </tbody>
              </table>
            <?php endif; ?>
            <?php if (!empty($accordion['button_text']) && !empty($accordion['button_link'])): ?>
              <a class="accordion-white-content-table-button"
                 href="<?= $accordion['button_link'] ?>"><?= $accordion['button_text'] ?></a>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>

