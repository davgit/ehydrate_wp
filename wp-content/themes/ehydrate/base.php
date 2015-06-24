<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap wrap-main" role="document">
      
      <div class="main-hero">
        <div class="hero" style="background-image:url(<?php echo dist_path('images/bgs/field-runners-comp-1300x866.jpg');?>);">
          <div class="promo-copy container">
            <span>BASE TEMPLATE</span>
            <hr class="copysep sep-half">
            <a class="btn btn-blue btn-xlg" href="https://e-hydrate.com/product/e-hydrate-drink-mix-sample-pack/">Try E-Hydrate for Free</a>
          </div>
          <!-- <div class="promo-copy container"></div> -->
        </div>
        <!-- https://e-hydrate.com/wp/wp-content/uploads/2015/04/fruit-water-splash-banner_1584x528-C.jpg -->
      </div><!-- end main-hero -->
      

      <div class="container">
        <div class="content row">
          <main class="main" role="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Config\display_sidebar()) : ?>
            <aside class="sidebar" role="complementary">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div>
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>