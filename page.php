<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<? if (! is_front_page()){ ?>
<header id="title-header" class="hero">
  <h2 class="pagetitle"><?php the_title(); ?></h2>
</header>
<?php } ?>
<div id="main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="page" id="page-<?php the_ID(); ?>">
    
  
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
  </article>
  <?php endwhile; endif; ?>
  

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
