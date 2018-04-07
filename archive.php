<?php
get_header(); ?>
  <?php if (have_posts()) : ?>

  <div class="hero description" id="title-header">
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h2 class="pagetitle">
      <?php single_cat_title(); ?>
    </h2>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h2 class="pagetitle">Posts Tagged &#8216;
      <?php single_tag_title(); ?>&#8217;</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2 class="pagetitle">Archive for
      <?php the_time('F jS, Y'); ?>
    </h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 class="pagetitle">Archive for
      <?php the_time('F, Y'); ?>
    </h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="pagetitle">Archive for
      <?php the_time('Y'); ?>
    </h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="pagetitle">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2 class="pagetitle">Blog Archives</h2>
    <?php } ?>
    <div class="title-description">
      <?php echo category_description(); ?> </div>
  </div>
  <div id="main" role="main">
    <section>

      <nav>
        <div>
          <?php next_posts_link('&laquo; Older Entries') ?>
        </div>
        <div>
          <?php previous_posts_link('Newer Entries &raquo;') ?>
        </div>
      </nav>

      <div class="loop-container">
        <div class="row align-stretch loop">
          <?php while (have_posts()) : the_post(); ?>
          <article class="cell three" style="display:flex;">
            <div class="card " style=" " <?php post_class() ?>>
              <div class="card-image">
                <?php the_post_thumbnail('archive'); ?>
              </div>
              <div class="card-content">
                <span class="card-title">
                  <?php the_title(); ?>
                </span>
                <p>
                  <?php the_excerpt() ?>
                </p>

              </div>
              <div class="card-actions text-right">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>">Read More</a>
              </div>
          </article>

          <?php endwhile; ?>
          </div>
          <nav>
            <div>
              <?php next_posts_link('&laquo; Older Entries') ?>
            </div>
            <div>
              <?php previous_posts_link('Newer Entries &raquo;') ?>
            </div>
          </nav>
    </section>
    </div>
    <?php else :

  if ( is_category() ) { // If this is a category archive
    printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
  } else if ( is_date() ) { // If this is a date archive
    echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
  } else if ( is_author() ) { // If this is a category archive
    $userdata = get_userdatabylogin(get_query_var('author_name'));
    printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
  } else {
    echo("<h2>No posts found.</h2>");
  }
  get_search_form();

  endif;
  ?>



    <?php get_sidebar(); ?>

    <?php get_footer(); ?>