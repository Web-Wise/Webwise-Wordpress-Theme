<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

    
    <div class="hero description"  id="title-header">
     <h2 class="pagetitle"><?php the_title(); ?></a></h2>
    <div class="title-description"> <?php echo category_description(); ?> </div>
    </div>
<div id="main" role="main" class="post">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
