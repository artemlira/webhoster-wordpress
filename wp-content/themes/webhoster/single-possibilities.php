<?php get_header(); ?>

<?= get_template_part('blocks/tariffs/tariffs', '', 'first-section-tariffs'); ?>
<?= get_template_part('blocks/wordpress-advantages/advantages'); ?>
<?= get_template_part('blocks/wordpress-admin-walking/admin'); ?>
<?= get_template_part('blocks/philosophy/philosophy'); ?>
<div class="possibilities__container">
  <h2 class="accordion-table-section-title section-title">Unsere Webhosting <br>Angebote im Vergleich</h2>
  <?php the_content(); ?>
</div>
<?= get_template_part('blocks/tariffs/tariffs', '', 'second-section-tariffs'); ?>
<?= get_template_part('blocks/accordion-green/accordion'); ?>
<?= get_template_part('blocks/accordion-white/accordion', '', 'section'); ?>
<?= get_template_part('blocks/philosophy/philosophy', '', 'second-section'); ?>
<?= get_template_part('blocks/tabs-table/tabs-table', '', 'section'); ?>
<?= get_template_part('blocks/subscription/subscription'); ?>
<?php get_footer(); ?>
