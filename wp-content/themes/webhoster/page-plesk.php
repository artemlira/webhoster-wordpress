<?php
/*
Template Name: Plesk page
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>

<?php the_content(); ?>
  <div class="section-blog__container">
    <h2>Plesk Anleitungen und Funktionen</h2>
    <ul class="section-blog-list">
      <?php
      global $post;

      $query = new WP_Query([
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'plesk-administration'
          )
        )
      ]);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          ?>
          <li class="section-blog-item">
            <?php if (is_category()): ?>
              <span class="section-blog-item-category"><?php echo get_queried_object()->name; ?></span>
            <?php endif; ?>
            <?php if (has_post_thumbnail()) : ?>
              <a class="section-blog-item-image-wrapper" href="<?php the_permalink(); ?>"
                 title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
            <?php else: ?>
              <img class="section-blog-item-image"
                   src="
        <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/No_image_available-de.svg.webp"
                   alt="No image available"
                   loading="lazy"
              >
            <?php endif; ?>

            <div class="section-blog-item-content">
              <a class="section-blog-item-title" href="<?= get_the_permalink(); ?>">
                <?php the_title(); ?></a>
              <div class="section-blog-item-excerpt"><?php the_excerpt(); ?></div>
            </div>
          </li>
          <?php
        }
      }
      wp_reset_postdata();
      ?>
    </ul>
  </div>
<?php if (!dynamic_sidebar('error-404')) : dynamic_sidebar('error-404');endif; ?>


<?php get_footer(); ?>