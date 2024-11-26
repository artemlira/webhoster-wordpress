<?php
/*
Template Name: Form
Template Post Type: post, page, product
*/
?>


<?php get_header();

//if (!dynamic_sidebar('sidebar-1')) : dynamic_sidebar('sidebar-1');endif;
?>

<section class="section-form">
  <header class="section-form-header">
    <div class="section-form-header__container">
      <h1 class="section-form-title"><?php the_title(); ?></h1>
    </div>
  </header>

  <?php the_content(); ?>
  <!--    --><?php //echo apply_shortcodes('[contact-form-7 id="7b71f36" title="form"]'); ?>

</section>

<?php get_footer(); ?>

