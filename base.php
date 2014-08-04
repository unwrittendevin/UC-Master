<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'ucmaster'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
<div class="white-bg" id="content-wrap">
  <div class="wrap container" role="document">
    <div class="content row">
	<?php if (ucmaster_display_sidebar()) : ?>
        <aside class="sidebar <?php echo ucmaster_sidebar_class(); ?>" role="complementary">
          <?php include ucmaster_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
      <main class="main <?php echo ucmaster_main_class(); ?>" role="main">
        <?php include ucmaster_template_path(); ?>
      </main><!-- /.main -->
      
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  </div><!-- /#content-wrap -->
  <?php get_template_part('templates/footer'); ?>

</body>
</html>
