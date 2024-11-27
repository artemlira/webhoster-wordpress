<?php

/**
 * webhoster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webhoster
 */

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function webhoster_setup()
{
  /*
      * Make theme available for translation.
      * Translations can be filed in the /languages/ directory.
      * If you're building a theme based on webhoster, use a find and replace
      * to change 'webhoster' to the name of your theme in all the template files.
      */
  load_theme_textdomain('webhoster', get_template_directory() . '/languages');

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  /*
      * Let WordPress manage the document title.
      * By adding theme support, we declare that this theme does not use a
      * hard-coded <title> tag in the document head, and expect WordPress to
      * provide it for us.
      */
  add_theme_support('title-tag');

  /*
      * Enable support for Post Thumbnails on posts and pages.
      *
      * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
      */
  add_theme_support('post-thumbnails');

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    array(
      'menu-header' => esc_html__('Header', 'webhoster'),
      'menu-footer' => esc_html__('Footer', 'webhoster'),
    )
  );

  /*
      * Switch default core markup for search form, comment form, and comments
      * to output valid HTML5.
      */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  // Set up the WordPress core custom background feature.
  add_theme_support(
    'custom-background',
    apply_filters(
      'webhoster_custom_background_args',
      array(
        'default-color' => 'ffffff',
        'default-image' => '',
      )
    )
  );

  // Add theme support for selective refresh for widgets.
  add_theme_support('customize-selective-refresh-widgets');

  /**
   * Add support for core custom logo.
   *
   * @link https://codex.wordpress.org/Theme_Logo
   */
  add_theme_support(
    'custom-logo',
    array(
      'height' => 250,
      'width' => 250,
      'flex-width' => true,
      'flex-height' => true,
    )
  );
}

add_action('after_setup_theme', 'webhoster_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webhoster_content_width()
{
  $GLOBALS['content_width'] = apply_filters('webhoster_content_width', 640);
}

add_action('after_setup_theme', 'webhoster_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webhoster_widgets_init()
{
  register_sidebar(
    array(
      'name' => esc_html__('Sidebar', 'webhoster'),
      'id' => 'sidebar-1',
      'description' => esc_html__('Add widgets here.', 'webhoster'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__('Sidebar for Single post', 'webhoster'),
      'id' => 'single-post',
      'description' => esc_html__('Add widgets here.', 'webhoster'),
      'before_widget' => '<section id="%1$s" class="single-post %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="single-post-title">',
      'after_title' => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__('Sidebar for error 404', 'webhoster'),
      'id' => 'error-404',
      'description' => esc_html__('Add widgets here.', 'webhoster'),
      'before_widget' => '<section id="%1$s" class="error-404 %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="error-404-title">',
      'after_title' => '</h2>',
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__('Sidebar for Header search', 'webhoster'),
      'id' => 'header-search',
      'description' => esc_html__('Add widgets here.', 'webhoster'),
      'before_widget' => '<section id="%1$s" class="header-search %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="header-search-title">',
      'after_title' => '</h2>',
    )
  );
}

add_action('widgets_init', 'webhoster_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function webhoster_scripts()
{
  wp_enqueue_style('webhoster-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_enqueue_style('splide', get_template_directory_uri() . '/assets/css/splide.min.css', array(), '4.1.3');
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array(), '1.0.0');
  wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

  wp_enqueue_script('webhoster-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
  wp_enqueue_script('splide', get_template_directory_uri() . '/assets/js/splide.min.js', array(), '4.1.3', true);
  wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), '3.12.5', true);
  wp_enqueue_script('scrollTrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array(), '3.12.5', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'webhoster_scripts');
add_action('admin_enqueue_scripts', 'webhoster_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}

//Adding an Options Page
if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}
function register_acf_blocks()
{
  register_block_type(__DIR__ . '/blocks/subscription');
  register_block_type(__DIR__ . '/blocks/main-hero');
  register_block_type(__DIR__ . '/blocks/main-services');
  register_block_type(__DIR__ . '/blocks/main-advantages');
  register_block_type(__DIR__ . '/blocks/tariffs');
  register_block_type(__DIR__ . '/blocks/main-about-us');
  register_block_type(__DIR__ . '/blocks/main-philosophy');
  register_block_type(__DIR__ . '/blocks/tabs');
  register_block_type(__DIR__ . '/blocks/domains-hero');
  register_block_type(__DIR__ . '/blocks/domains-services');
  register_block_type(__DIR__ . '/blocks/domains-cards');
  register_block_type(__DIR__ . '/blocks/accordion-green');
  register_block_type(__DIR__ . '/blocks/wordpress-advantages');
  register_block_type(__DIR__ . '/blocks/accordion-white');
  register_block_type(__DIR__ . '/blocks/wordpress-admin-walking');
  register_block_type(__DIR__ . '/blocks/philosophy');
  register_block_type(__DIR__ . '/blocks/tabs-table');
  register_block_type(__DIR__ . '/blocks/accordion-table');
  register_block_type(__DIR__ . '/blocks/section-with-video');
  register_block_type(__DIR__ . '/blocks/seo-hero');
  register_block_type(__DIR__ . '/blocks/technik-hero');
  register_block_type(__DIR__ . '/blocks/technik-title-and-text');
  register_block_type(__DIR__ . '/blocks/technik-brands');
  register_block_type(__DIR__ . '/blocks/possibilities-wordpress');
  register_block_type(__DIR__ . '/blocks/signature-privacy-policy');
  register_block_type(__DIR__ . '/blocks/agb-button');
  register_block_type(__DIR__ . '/blocks/products');
}

add_action('init', 'register_acf_blocks');


//Регистрация нового типа записей - News
add_action('init', 'my_custom_init_possibilities');
function my_custom_init_possibilities()
{
  register_taxonomy('possibilities_type', 'possibilities', array(
    'labels' => array(
      'name' => 'Possibilities', // основное название во множественном числе
      'singular_name' => 'Possibility', // название единичного элемента таксономии
      'menu_name' => 'Possibilities', // Название в меню. По умолчанию: name.
      'all_items' => 'Possibilities',
      'edit_item' => 'Edit Possibility',
      'view_item' => 'View Possibility', // текст кнопки просмотра записи на сайте (если поддерживается типом)
      'update_item' => 'Update Possibility',
      'add_new_item' => 'Add New Possibility',
      'new_item_name' => 'New Name Possibility',
      'search_items' => 'Search Possibilities',
      'popular_items' => 'Popular Possibilities', // для таксономий без иерархий
      'not_found' => 'Not found Possibilities',
      'back_to_items' => '← Back to Possibilities',
    ),
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'has_archive' => false,

//    'rewrite' => ['slug' => '%post_tag%', 'with_front' => false],
  ));

  register_post_type('possibilities', array(
    'labels' => array(
      'name' => 'Possibilities', // Основное название типа записи
      'singular_name' => 'possibility', // отдельное название записи типа services
      'add_new' => 'Add possibility',
      'add_new_item' => 'Add possibility',
      'edit_item' => 'Edit possibilities',
      'new_item' => 'New possibility',
      'view_item' => 'View possibility',
      'search_items' => 'Search possibilities',
      'not_found' => 'Possibilities not found',
      'not_found_in_trash' => 'Possibility not_found_in_trash',
      'parent_item_colon' => '',
      'menu_name' => 'Possibilities'

    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-list-view',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
    'rewrite' => array('slug' => 'produkt', 'with_front' => false),
//    'taxonomies' => array('category'),
  ));
}

$categories = get_terms(array('taxonomy' => 'possibilities_type'));
//add_filter('post_type_link', 'products_permalink', 1, 2);
//
//function products_permalink($permalink, $post)
//{
//  // выходим если это не наш тип записи: без холдера %products%
//  if (strpos($permalink, '%possibilities_type%') === FALSE)
//    return $permalink;
//
//  // Получаем элементы таксы
//  $terms = get_the_terms($post, 'possibilities_type');
//  // если есть элемент заменим холдер
//  if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
//    $taxonomy_slug = $terms[0]->slug;
//
//  return str_replace('%possibilities_type%', $taxonomy_slug, $permalink);
//}


//Обрезаем длину краткого описания новостей
add_filter('excerpt_length', function () {
  return 20;
});

// Удаление обертки тегом з в плагине Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Убрать ненужные теги у Contact Form
add_filter('wpcf7_form_elements', function ($content) {
  // Убрать обёртку в виде <span>
//  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  // Убрать атрибуты size, rows, cols
  $content = preg_replace('/(size|rows|cols)="\d+"/i', '', $content);

  return $content;
});

// custom search redirect
function custom_search_redirect()
{
  global $wp_rewrite;
  if (!isset($wp_rewrite) || !is_object($wp_rewrite) || !$wp_rewrite->using_permalinks()) {
    return;
  }
  $search_base = $wp_rewrite->search_base;
  if (is_search() && !is_admin() && strpos($_SERVER['REQUEST_URI'], "/{$search_base}/") === false) {
    wp_redirect("https://webhoster.cloud/order.php?spage=domain&action=register&a=add&query=" . urlencode(get_query_var('s')));
    exit();
  }
}

add_action('template_redirect', 'custom_search_redirect');


