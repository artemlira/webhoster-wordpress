<?php get_header(); ?>

<?php $tariffs = get_field('tariffs');
if (!empty($tariffs[0]['title'])): echo get_template_part('blocks/tariffs/tariffs', '', 'first-section-tariffs'); endif; ?>

<?php $advantages = get_field('advantages');
if (!empty($advantages[0]['title'])): echo get_template_part('blocks/wordpress-advantages/advantages'); endif; ?>

<?php $admin_walking_title = get_field('admin_walking_title');
$admin_walking_text = get_field('admin_walking_text');
if (!empty($admin_walking_title) || !empty($admin_walking_text)): echo get_template_part('blocks/wordpress-admin-walking/admin'); endif; ?>

<?php $philosophy_title = get_field('philosophy_title');
$philosophy_text = get_field('philosophy_text');
if (!empty($philosophy_title) || !empty($philosophy_text)): echo get_template_part('blocks/philosophy/philosophy', '', 'section'); endif; ?>

<div class="possibilities__container">
  <h2 class="accordion-table-section-title section-title">Unsere Webhosting <br>Angebote im Vergleich</h2>
  <?php the_content(); ?>
</div>

<?php $second_tariffs = get_field('second_tariffs');
if (!empty($second_tariffs[0]['title'])): echo get_template_part('blocks/tariffs/tariffs', '', 'second-section-tariffs'); endif; ?>

<?php $green_accordions = get_field('green_accordions');
if (!empty($green_accordions[0]['title'])): echo get_template_part('blocks/accordion-green/accordion');endif; ?>

<?php $white_accordions = get_field('white_accordions');
if (!empty($white_accordions[0]['title'])): echo get_template_part('blocks/accordion-white/accordion', '', 'section'); endif; ?>

<?php if (!empty(get_field('second_philosophy_title') || !empty(get_field('second_philosophy_text')))):
  echo get_template_part('blocks/philosophy/philosophy', '', 'second-section'); endif; ?>

<?php $tabs = get_field('tabs_table_tabs');
if (!empty(get_field($tabs[0]['title']))): echo get_template_part('blocks/tabs-table/tabs-table', '', 'section'); endif; ?>

<?php $subscription = get_field('subscription');
if (!empty($subscription['title'])): echo get_template_part('blocks/subscription/subscription'); endif; ?>

<?php get_footer(); ?>
