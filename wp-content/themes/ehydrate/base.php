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
    <div class="wrap" role="document">
      
      <div class="main-hero">
        <div class="hero" style="background-image:url(<?php echo dist_path('images/bgs/field-runners-comp-1300x866.jpg');?>);">
          <div class="promo-copy container">
            <span>Flavor By Nature.<br>Nutrition By Design.</span>
            <hr class="copysep sep-half">
            <a class="btn btn-blue btn-xlg" href="https://e-hydrate.com/product/e-hydrate-drink-mix-sample-pack/">Try E-Hydrate for Free</a>
          </div>
          <!-- <div class="promo-copy container"></div> -->
        </div>
        <!-- https://e-hydrate.com/wp/wp-content/uploads/2015/04/fruit-water-splash-banner_1584x528-C.jpg -->
        <!-- http://previews.123rf.com/images/maridav/maridav1402/maridav140200091/26000085-People-jogging-for-fitness-running-in-beautiful-landscape-nature-outdoors-Woman-and-man-sports-athle-Stock-Photo.jpg -->
      </div>
      

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
