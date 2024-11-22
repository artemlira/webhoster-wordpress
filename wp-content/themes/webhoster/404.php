<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package webhoster
 *
 * <?php esc_html_e('Oops! That page can&rsquo;t be found.', 'webhoster'); ?> заголовок в хедере
 * <?php get_search_form(); the_widget('WP_Widget_Recent_Posts'); ?> форма поиска
 *
 *<ul>
 * <?php
 * wp_list_categories(
 * array(
 * 'orderby' => 'count',
 * 'order' => 'DESC',
 * 'show_count' => 1,
 * 'title_li' => '',
 * 'number' => 10,
 * )
 * );
 * ?>
 * </ul>
 *
 *
 */

get_header();
?>

  <main id="primary" class="site-main">

    <section class="error-404 not-found">
      <div class="error-404__container">
        <header class="page-header">
          <h1 class="page-title"><span>4</span><img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/vmware/philosophy-decor.webp"
                alt="decor icon"
                loading="lazy"
            ><span>4</span></h1>
        </header><!-- .page-header -->

        <div class="page-content">
          <div class="widget widget_categories">
            <h2 class="widget-title">Seite nicht gefunden</h2>
            <p>Möglicherweise gibt es eine solche Seite nicht</p>
          </div><!-- .widget -->
          <a class="not-found-button" href="/">zur Startseite</a>
        </div><!-- .page-content -->
      </div>
    </section><!-- .error-404 -->
    <?php if (!dynamic_sidebar('error-404')) : dynamic_sidebar('error-404'); endif; ?>

  </main><!-- #main -->

<?php
get_footer();
?>