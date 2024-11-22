<?php

/**
 * Hero block on the Technik page template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
//$quote = !empty(get_field('quote')) ? get_field('quote') : 'Your quote here...';
$title    = get_field( 'title' );
$subtitle = get_field( 'subtitle' );
// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'technik-hero';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
?>

<section <?php echo esc_attr( $anchor ); ?> class="<?php echo esc_attr( $class_name ); ?>">
  <div class="technik-hero__container">
    <div class="technik-hero-content">
		<?php if ( ! empty( $title ) ): ?>
          <h1 class="technik-hero-title"><?= $title ?></h1>
		<?php endif; ?>
		<?php if ( ! empty( $subtitle ) ): ?>
          <div class="technik-hero-text"><?= $subtitle ?></div>
		<?php endif; ?>
    </div>
  </div>
</section>
