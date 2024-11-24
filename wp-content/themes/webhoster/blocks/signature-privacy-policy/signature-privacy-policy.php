<?php
/**
 * Signature in the privacy policy Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$text = get_field('signature_privacy_policy_text');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'signature-privacy-policy';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="signature__container">
    <?= $text ?>
  </div>
</div>

