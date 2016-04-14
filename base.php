<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
    ?>
    <div class="wrap container row" role="document">
      <div class="banner">
        <?php
          get_template_part('templates/header');
        ?>
      </div>
      <div class="content cf">
          <div class="small-12 medium-8 column">
              <main class="main">
                  <?php include Wrapper\template_path(); ?>
              </main><!-- /.main -->
          </div>
          <div class="small-12 medium-4 column">
              <?php if (Setup\display_sidebar()) : ?>
                  <aside class="sidebar">
                      <?php include Wrapper\sidebar_path(); ?>
                  </aside><!-- /.sidebar -->
              <?php endif; ?>
          </div>
      </div><!-- /.content -->
      <?php
        get_template_part('templates/footer');
        do_action('get_footer');
        wp_footer();
      ?>
    </div><!-- /.wrap -->
  </body>
</html>
