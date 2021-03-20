<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
 **************************************************************** 
 ****************************************************************/

// Initiate the global variable
global $module;
get_header();
// Get the page data
?>
<div class="blog-feed page-content single-post"><?php 
while ( have_posts() ) : the_post(); 
$post_cats = get_the_category($post->ID); ?>
<article>
    <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>      
  </article><?php 
endwhile; ?>   
</div>
<?php 
get_footer();
