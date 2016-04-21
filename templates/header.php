<header>
  <div class="container column">
    <div class="brand">
        <a class="logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <p><?php echo get_bloginfo("description"); ?></p>
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
