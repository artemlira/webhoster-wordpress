<?php
/*
Template Name: Privacy Policy
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
<main class="privacy-policy">
  <header class="privacy-policy-header">
    <h1 class="privacy-policy-header-title"><?php the_title() ?></h1>
  </header>
  <div class="entry-content">
    <div class="entry-content__container"> <?php the_content() ?></div>
  </div>
</main>

<?php get_footer(); ?>
