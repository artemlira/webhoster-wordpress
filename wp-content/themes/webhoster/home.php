<?php get_header();

//if (!dynamic_sidebar('sidebar-1')) : dynamic_sidebar('sidebar-1');endif;

?>

<section class="section-blog">
  <header class="section-blog-header">
    <div class="section-blog-header__container">
      <h1 class="section-blog-title">Blog</h1>
      <ul>
        <?php wp_list_categories(); ?>
      </ul>
    </div>
  </header>
  <div class="section-blog__container">
    <ul class="section-blog-list">
      <?php if (have_posts()) : while (have_posts()) : the_post();
        $categories = get_the_category(); ?>
        <li class="section-blog-item">
          <?php if (has_category()): ?>
            <span class="section-blog-item-category"><?php echo $categories[0]->name; ?></span>
          <?php endif; ?>
          <?php if (has_post_thumbnail()) : ?>
            <a class="section-blog-item-image-wrapper" href="<?php the_permalink(); ?>"
               title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          <?php else: ?>
            <img
                class="section-blog-item-image"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/No_image_available-de.svg.webp"
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
    <?php
    $args = array(
      'show_all' => false, // показаны все страницы участвующие в пагинации
      'end_size' => 1,     // количество страниц на концах
      'mid_size' => 1,     // количество страниц вокруг текущей
      'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
      'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>'),
      'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>'),
      'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
      'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
      'screen_reader_text' => __('Posts navigation'),
      'class' => 'pagination', // CSS класс, добавлено в 5.5.0.
    );
    the_posts_pagination($args); ?>
  </div>
</section>

<?php get_footer(); ?>
