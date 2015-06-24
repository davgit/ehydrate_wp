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
      
      <?php get_template_part('templates/heroes/main-hero');?>
      
      <?php get_template_part('templates/sections/sub-main-hero');?>
      
      <?php
      /*
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
        </div><!-- end .content -->
      </div><!-- end .container -->
      */
      ?>
      
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
