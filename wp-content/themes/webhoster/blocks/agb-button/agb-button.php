<?php
/**
 * Button in the privacy policy Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$text = get_field('privacy_policy_button_text');
$link = get_field('privacy_policy_button_link');
$image = get_field('privacy_policy_button_image');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'privacy-policy-button';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="privacy-policy-button__container">
    <a href="<?= $link; ?>" target="_blank"><?php if (!empty($image)): ?>
        <img
            src="<?= $image['url'] ?>"
            alt="<?= $image['alt'] ?>"
            width="24"
            height="24"
            loading="lazy"
        > <?php endif; ?><?= $text; ?></a>
  </div>
</div>


