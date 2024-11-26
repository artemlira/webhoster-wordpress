<?php
/**
 * Subscription Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
//$quote = !empty(get_field('quote')) ? get_field('quote') : 'Your quote here...';

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'subscription';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<?php if (have_rows('subscription')) : ?>
  <?php while (have_rows('subscription')) : the_row();
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $placeholder = get_sub_field('placeholder');
    $textButton = get_sub_field('text_button');
    $linkButton = get_sub_field('link_button');
    ?>
    <section <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
      <div class="subscription__container">
        <?php if (!empty($title)): ?>
          <h2 class="subscription-title"><?= $title ?></h2>
        <?php endif; ?>
        <?php if (!empty($text)): ?>
          <div class="subscription-text"><?= $text ?></div>
        <?php endif; ?>
        <form class="subscription-form" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
          <input class="subscription-input" type="search"
                 value="<?php echo get_search_query() ?>" name="s" id="s"
                 placeholder="<?= $placeholder ?>">
          <button class="subscription-button" type="submit" id="searchsubmit"><?= $textButton; ?></button>
        </form>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
