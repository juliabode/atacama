<header>
  <?php $options = get_option('plugin_options');?>
  <div class="container column">
    <div class="brand">
        <a class="logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <?php if ($options['atacama_tagline_one']) :
            echo '<p class="tagline-one">' . $options["atacama_tagline_one"] . '</p>';
        endif;?>
        <?php if ($options['atacama_tagline_two']) :
            echo '<p class="tagline-two">' . $options["atacama_tagline_two"] . '</p>';
        endif;?>
    </div>
    <nav class="nav-primary">
      <?php
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      ?>
    </nav>
    <div class="header-image">
        <?php get_template_part('templates/teaser-element'); ?>
    </div>

  </div>
</header>
