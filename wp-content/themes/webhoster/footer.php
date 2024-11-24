<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webhoster
 */
$footerLogo = get_field('logotype_footer', 'option');
?>

<footer id="colophon" class="site-footer">
  <div class="site-info footer__container">
    <div class="footer-content">
      <div class="footer-contacts-wrapper">
        <div class="footer-logo-wrapper">
          <?php if ($footerLogo) : ?>
            <a class="logo-footer" href="<?php echo get_home_url(); ?>">
              <img src="<?= $footerLogo['url'] ?>" alt="<?= $footerLogo['alt'] ?>">
            </a>
          <?php else : ?>
            <?php the_custom_logo(); ?>
          <?php endif; ?>
        </div>
        <div class="footer-address">
          <?php
          $footerSettings = get_field('footer_settings', 'options');
          if ($footerSettings['address']) {
            echo $footerSettings['address'];
          }
          ?>
        </div>
        <div class="footer-support">
          <h3 class="footer-support-title">Support</h3>
          <ul class="footer-support-list">
            <?php
            $footerSettings = get_field('footer_settings', 'options');
            $rows = $footerSettings['support'];
            if ($rows) {
              $str = preg_replace("/[^0-9]/", '', $rows['telephone']);
              echo '
              <li class="footer-support-item">
               <a class="footer-support-link" href="' . $rows['link'] . '">' . $rows['title'] . '</a>
              </li>
              <li class="footer-support-item">
                <a class="footer-support-link" href="tel:' . $str . '">' . $rows['telephone'] . '</a>
              </li>
              <li class="footer-support-item">
                <a class="footer-support-link" href="mailto:' . $rows['email'] . '">' . $rows['email'] . '</a>
              </li>
                   ';
            }
            ?>
          </ul>
        </div>
        <div class="footer-inquiries">
          <h3 class="footer-inquiries-title">Anfragen</h3>
          <ul class="footer-inquiries-list">
            <?php
            $footerSettings = get_field('footer_settings', 'options');
            $rows = $footerSettings['anfragen'];
            if ($rows) {
              $str = preg_replace("/[^0-9]/", '', $rows['telephone']);
              echo '
                <li class="footer-inquiries-item">
                  <a href="tel:' . $str . '" class="footer-inquiries-link">' . $rows['telephone'] . '</a>
                </li>
                <li class="footer-inquiries-item">
                  <a href="mailto:' . $rows['email'] . '" class="footer-inquiries-link">' . $rows['email'] . '</a>
                </li>
            ';
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="footer-menu-wrapper">
        <div class="footer-main-menu">
          <h3 class="footer-main-menu-title">Unsere Angebote</h3>
          <?php
          if (has_nav_menu('menu-footer'))
            wp_nav_menu(
              array(
                'theme_location' => 'menu-footer',
                'menu_id' => 'footer-menu',
                'container' => 'ul',
              )
            );
          ?>
        </div>
        <div class="footer-media media">
          <h3 class="footer-media-title">Soziale Netzwerke</h3>
          <div class="footer-media-icons"> <?php if (get_field('social_media', 'options')) : ?>
              <?php while (has_sub_field('social_media', 'options')) : ?>
                <a class="footer-media-icon media-icon" href="<?php the_sub_field('social_media_link'); ?>">
                  <img src="<?php the_sub_field('social_media_icon') ?>" alt="social network icon"/>
                </a>
              <?php endwhile; ?>
            <?php endif; ?></div>
        </div>
        <div class="footer-dsgvo">
          <h3 class="footer-dsgvo-title">DATEIN</h3>
          <ul class="footer-dsgvo-list">
            <?php
            $footerSettings = get_field('footer_settings', 'options');
            $rows = $footerSettings['dsgvo'];
            if ($rows) {
              foreach ($rows as $row) {
                echo ' <li class="footer-dsgvo-item"><a href="' . $row['link'] . '" class="footer-dsgvo-link">' . $row['text'] . '</a></li>';
              }
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="footer-magazine">
        <h3 class="footer-magazine-title">Aus unserem Magazin</h3>
        <ul class="footer-magazine-list">
          <?php
          $footerSettings = get_field('footer_settings', 'options');
          $rows = $footerSettings['aus_unserem_magazin'];
          if ($rows) {
            foreach ($rows as $row) {
              echo '
                    <li class="footer-magazine-item">
                      <a href="' . $row['link'] . '" class="footer-magazine-link">' . $row['text'] . '</a>
                    </li>';
            }
          }
          ?>
        </ul>
      </div>

    </div>
    <hr>
    <div class="copyright-wrapper">
      <p class="copyright-text">© <?php echo current_time('Y'); ?> webhoster.de</p>
      <ul class="copyright-list">
        <li class="copyright-item"><a href="#" class="copyright-link">Impressum</a></li>
        <li class="copyright-item"><a href="#" class="copyright-link">Datenschutz</a></li>
        <li class="copyright-item"><a href="/privacy-policy/" class="copyright-link">AGB</a></li>
      </ul>
    </div>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>