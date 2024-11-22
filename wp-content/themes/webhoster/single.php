<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package webhoster
 */

get_header();
?>

  <main id="primary" class="site-main">
    <div class="main__container">

      <?php
      while (have_posts()) :
        the_post();
//        if (!dynamic_sidebar('single-post')) : dynamic_sidebar('single-post');endif;

        get_template_part('template-parts/content.php', get_post_type());

      endwhile; // End of the loop.
      ?>

    </div>
  </main><!-- #main -->

<?php

get_footer();
?>