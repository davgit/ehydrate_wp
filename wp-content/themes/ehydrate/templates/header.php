<header class="banner absolute" role="banner">
  
    <nav class="navbar navbar-lg navbar-transparent navbar-green">
      <div class="container">    
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary_nav_collapse_1">
            <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand color-white" href="<?php echo get_bloginfo('url');?>">
            <img alt="E-Hydrate" src="<?php echo dist_path('images/brand/logo/svg/ehydrate-logo-r-ffffff.svg');?>">
          </a>
        </div><!-- end .navbar-header -->
        <div class="collapse navbar-collapse" id="primary_nav_collapse_1">
          
          <div class="navbar-nav-wrap">
            
            <div class="made-in-usa"><img alt="Made In USA" src="<?php echo dist_path('images/misc/made-in-usa-wht-text.svg');?>"></div>

            <ul id="menu-header-main-socials" class="nav navbar-nav navbar-nav-socials navbar-subnav-trans-on-fixed navbar-blue navbar-right rounded">
              <li class="menu-item">
                <a href="https://www.facebook.com/ehydrate" target="_blank"><i class="fa fa-facebook-square"></i></a>
              </li>
              <li class="menu-item">
                <a href="https://twitter.com/E_hydrate" target="_blank" class="link"><i class="fa fa-twitter-square"></i></a>
              </li>
              <li class="menu-item">
                <a href="https://instagram.com/ehydratenutrition/" target="_blank" class="link"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="menu-item">
                <a href="https://www.pinterest.com/ehydrate/" target="_blank" class="link"><i class="fa fa-pinterest"></i></a>
              </li>
              <li class="menu-item">
                <a href="https://www.youtube.com/channel/UCgPWBj7cdjj1v6-5UN0k_gg" target="_blank" class="link"><i class="fa fa-youtube"></i></a>
              </li>
            </ul>
          </div>

          
          <div class="navbar-nav-wrap">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'nav navbar-nav navbar-right',
                'walker' => new wp_bootstrap_navwalker(),
              ]);
            endif;
            ?>
          </div>


          

        </div>
      </div><!-- end .container -->
    </nav><!-- end .navbar -->
</header>
