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
      
      <?php if (Config\display_sidebar()) : ?>

        <div class="container container-default">
          <div class="content row">
            
            <div class="col-md-8">
              <main class="main-content" role="main">
                <?php include Wrapper\template_path(); ?>
              </main><!-- /.main -->
            </div>
            
            <div class="col-md-4">
              <aside class="sidebar sidebar-main" role="complementary">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- /.sidebar -->
            </div>

          </div><!-- end .content -->
        </div><!-- end .container -->
      
      <?php else : ?>
      
      

      <?php endif; ?>

    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
