<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webhoster
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="robots" content="noarchive">
  <link rel="canonical" href="<?php echo get_permalink(); ?>"/>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'webhoster'); ?></a>

  <header id="masthead" class="site-header">
    <div class="header__container">
      <div class="site-branding">
        <a href="<?= home_url('/') ?>" class="custom-logo-link"
           aria-label="Go to the home page by clicking on the logo">
          <svg width="120" height="64">
            <use
                xlink:href="<?php bloginfo('template_url'); ?>/assets/images/logo_header_original.svg#custom-logo-header"></use>
          </svg>
        </a>
      </div><!-- .site-branding -->
      <div class="header-media">
        <?php if (get_field('social_media', 'options')) : ?>
          <?php while (has_sub_field('social_media', 'options')) : ?>
            <a class="header-media-icon media-icon" href="<?php the_sub_field('social_media_link'); ?>">
              <img src="<?php the_sub_field('social_media_icon') ?>" alt="social network icon"/>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <nav id="site-navigation" class="main-navigation header-navigation">
        <?php
        if (has_nav_menu('menu-header'))
          wp_nav_menu(
            array(
              'theme_location' => 'menu-header',
              'menu_id' => 'primary-menu',
              'container' => 'ul',
            )
          );
        ?>
      </nav><!-- #site-navigation -->
      <div class="header-search">
        <form class="header-search-form" action="<?= home_url('/') ?>" method="get" role="search">
          <label for="header-search"></label>
          <input
              class="header-search-input"
              name="header-search"
              id="header-search"
              value=""
              type="search"
              data-swplive="true"
              placeholder="suche …">
          <button class="visually-hidden" type="submit"
                  aria-label="search for information on the site"><?php _e($textButton, 'mytextdomain'); ?></button>
        </form>
      </div>
      <a href="tel:02924879560" class="header-support" aria-label="phone number to call support">
        <svg class="header-support-img" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="none">
          <path stroke="#4CA941" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14.05 5A5 5 0 0 1 18 8.95M14.05 1A9 9 0 0 1 22 8.94m-11.773 3.923a14.604 14.604 0 0 1-2.847-4.01 1.698 1.698 0 0 1-.113-.266 1.046 1.046 0 0 1 .147-.862 2.02 2.02 0 0 1 .22-.238c.35-.35.524-.524.638-.7a2 2 0 0 0 0-2.18c-.114-.176-.289-.351-.638-.7l-.195-.196c-.532-.531-.797-.797-1.083-.941a2 2 0 0 0-1.805 0c-.285.144-.551.41-1.083.941l-.157.158c-.53.53-.795.794-.997 1.154-.224.4-.386 1.02-.384 1.479 0 .413.081.695.241 1.26a19.038 19.038 0 0 0 4.874 8.283 19.039 19.039 0 0 0 8.283 4.873c.565.16.847.24 1.26.242a3.377 3.377 0 0 0 1.478-.384c.36-.203.625-.468 1.155-.997l.157-.158c.532-.531.797-.797.942-1.082a2 2 0 0 0 0-1.806c-.145-.285-.41-.55-.942-1.082l-.195-.195c-.35-.35-.524-.524-.7-.639a2 2 0 0 0-2.18 0c-.176.114-.35.29-.7.639-.115.114-.172.171-.239.22-.237.17-.581.228-.862.146a1.695 1.695 0 0 1-.266-.113 14.605 14.605 0 0 1-4.01-2.846Z"/>
        </svg>
        <span class="header-support-text">Support</span>
      </a>
      <!-- burger button -->
      <button class="burger" aria-label="mobile menu">
        <span></span>
        <span></span>
      </button>
    </div>
  </header><!-- #masthead -->