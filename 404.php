<?php get_header(); ?>

  <header id="title-header" class="hero title">
    <h2 class="pagetitle">Page not found</h2>

  </header>
  <div id="main" class="align-center justify-center" style="text-align:center;">

    <h2 class="h3">The page you wanted could not be found</h2>
    The page you are looking for has either been moved or deleted - please try searching below:
    <div class="search">
      <?php get_search_form($echo = true); ?>
    </div>
  </div>

  <?php get_sidebar(); ?>

  <?php get_footer(); ?>