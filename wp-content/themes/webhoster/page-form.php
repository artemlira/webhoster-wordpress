<?php get_header();

//if (!dynamic_sidebar('sidebar-1')) : dynamic_sidebar('sidebar-1');endif;
?>

<section class="section-form">
  <header class="section-form-header">
    <div class="section-form-header__container">
      <h1 class="section-form-title">Kündigung</h1>
    </div>
  </header>
  <div class="section-form__container">
    <?php echo apply_shortcodes('[contact-form-7 id="7b71f36" title="form"]'); ?>
  </div>
</section>

<?php get_footer(); ?>

