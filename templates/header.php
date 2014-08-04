<div class="container collapse" id="site-search">
  <div class="row">
    <div class="col-sm-6 col-xs-15 pull-right">
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="container" id="header-wrap">
  <div class="row">
    <div class="col-sm-8 col-xs-12"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/uc-su-logotype.png" alt="<?php bloginfo( 'name' ); ?>" /> </a> </div>
    <div class="col-sm-7 col-xs-4" id="utility-wrap">
      <div class="row">
        <div class="col-sm-9"><ul class="list-inline list-social">
          <li><a href="https://www.facebook.com/UniversityCollegeSU" target="_blank"><i class="fa fa-facebook"></i><span class="sr-only">Facebook</span></a></li>
          <li><a href="https://twitter.com/gosuparttime/" target="_blank"><i class="fa fa-twitter"></i><span class="sr-only">Twitter</span></a></li>
          <li><a href="https://www.linkedin.com/groups?home=&gid=1957763" target="_blank"><i class="fa fa-linkedin"></i><span class="sr-only">LinkedIn</span></a></li>
          <li><a href="https://www.youtube.com/user/SUUniversityCollege" target="_blank"><i class="fa fa-youtube"></i><span class="sr-only">YouTube</span></a></li>
        </ul></div>
        <div class="col-sm-5">
        <button type="button" class="btn btn-clear" data-toggle="collapse" data-target="#site-search">Search <i class="fa fa-search"></i></button>
        </div>
      </div>
      <div class="row">
        <nav class="utility-nav" role="navigation">
          <?php
        if (has_nav_menu('utility_navigation')) :
          wp_nav_menu(array('theme_location' => 'utility_navigation', 'menu_class' => 'nav'));
        endif;
      ?>
        </nav>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="banner navbar navbar-default" role="banner">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <nav class="collapse navbar-collapse" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      </nav>
    </div>
  </div>
</div>
