<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a href="#" class="navbar-brand"><?php bloginfo('title') ?></a>
    <!-- <?php get_search_form() ?> -->
    <?php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'nav ms-auto', 'container' => 'ul')) ?>
  </div>
</nav>