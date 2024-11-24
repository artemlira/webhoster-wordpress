<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webhoster
 *
 * <?php webhoster_post_thumbnail(); ?>  изображение записи
 */


$post_id = get_queried_object_id();
$cat = get_the_category($post_id);
get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


  <div class="entry-content single-post__container">
    <header class="post-header">
      <h1 class="post-title section-title"><?php the_title_attribute(); ?></h1>
      <p class="post-subtitle"><?= $cat[0]->name; ?></p>
    </header>

    <?php
    the_content(
      sprintf(
        wp_kses(
        /* translators: %s: Name of current post. Only visible to screen readers */
          __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'webhoster'),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post(get_the_title())
      )
    );
    get_template_part('blocks/accordion-white/accordion', '', 'section');
    get_template_part('blocks/philosophy/philosophy');
    //    if (!dynamic_sidebar('single-post')) : dynamic_sidebar('single-post');
    //    endif;
    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', 'webhoster'),
        'after' => '</div>',
      )
    );
    ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>
