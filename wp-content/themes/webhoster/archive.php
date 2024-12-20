<?php get_header();

//if (!dynamic_sidebar('sidebar-1')) : dynamic_sidebar('sidebar-1');endif;
?>

<section class="section-blog">
  <header class="section-blog-header">
    <div class="section-blog-header__container">
      <h1 class="section-blog-title">
        <?php if (is_category()) {
          echo get_queried_object()->name;
        }

        ?>
      </h1>
      <ul>
        <?php wp_list_categories(); ?>
      </ul>
    </div>
  </header>
  <div class="section-blog__container">
    <ul class="section-blog-list">
      <?php
      global $post;

      $query = new WP_Query([
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => get_queried_object()->slug
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
</section>

<?php get_footer(); ?>
