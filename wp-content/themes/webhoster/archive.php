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
    </div>
  </header>
  <?php if (!dynamic_sidebar('error-404')) : dynamic_sidebar('error-404');endif; ?>
  <div class="section-blog__container">
    <ul class="section-blog-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li class="section-blog-item">
          <?php if (has_category()): ?>
            <span class="section-blog-item-category"><?php the_category($post->ID); ?></span>
          <?php endif; ?>
          <?php if (has_post_thumbnail()) : ?>
            <a class="section-blog-item-image-wrapper" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          <?php else: ?>
            <img
                class="section-blog-item-image"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/No-image-available-2.webp"
                alt="No image available"
                loading="lazy"
            >
          <?php endif; ?>

          <div class="section-blog-item-content">
            <a class="section-blog-item-title" href="<?= get_the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="section-blog-item-excerpt"><?php the_excerpt(); ?></div>
          </div>
        </li>
      <?php endwhile; ?>

      <?php endif; ?>
    </ul>
  </div>
</section>

<?php get_footer(); ?>
