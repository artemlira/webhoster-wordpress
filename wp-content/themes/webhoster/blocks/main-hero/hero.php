<?php
/**
 * Main Hero Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$title = !empty(get_field('title')) ? get_field('title') : 'title';
$text = !empty(get_field('text')) ? get_field('text') : 'text';
$placeholder = !empty(get_field('placeholder')) ? get_field('placeholder') : 'placeholder';
$textButton = !empty(get_field('text_button')) ? get_field('text_button') : 'text in the button';
$linkButton = !empty(get_field('link_button')) ? get_field('link_button') : 'link in the button';
// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'main-hero';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="main-hero__container">
    <img
        class="main-hero-img-man"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-page/hero/hero-man.webp"
        alt="astronaut with laptop"
        loading="lazy"
    >
    <img
        class="main-hero-img-decor"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-page/hero/hero-decor.webp"
        alt="decor"
        loading="lazy"
    >
    <img
        class="main-hero-img-decor-red"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-page/hero/hero-decor2.webp"
        alt="decor"
        loading="lazy"
    >
    <h1 class="main-hero-title"><?= $title ?></h1>
    <p class="main-hero-text"><?= $text ?></p>
    <form class="main-hero-form" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
      <input class="main-hero-input" placeholder="<?= $placeholder ?>" type="search"
             value="<?php echo get_search_query() ?>" name="s" id="s">
      <button class="main-hero-button" type="submit" id="searchsubmit"><?= $textButton ?></button>
    </form>
  </div>
</div>
