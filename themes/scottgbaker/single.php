<?php
/**
* The template for displaying all single posts
*
*
* @package WordPress
* @subpackage Baker Design Theme 1.0
* @since 2.0
**************************************************************** 
****************************************************************/
// Initiate the global variable
get_header();  ?>
<?php 
while ( have_posts() ) : the_post(); 
$post_cats = get_the_category($post->ID);
$other_posts = new WP_Query(array('posts_per_page'=>5, 'post__not_in' =>array($post->ID)));
?>
<article class="single-blog">
    <header>
      <h5 class="date-tag"><?php the_date(); ?></h5>
      <h1><?php the_title(); ?></h1>
      <nav class="categories"><?php 
        foreach( $post_cats as $cat) :  
          echo '<a href="/category/' . $cat->slug . '">' . $cat->name . '</a>';
        endforeach; ?>
      </nav>
    </header>
    <div class="post-content">
      <?php the_content(); 
      if ( comments_open() || get_comments_number() ) { ?>
        <div class="comments-wrap"><?php 
            comments_template(); ?>
        </div><?php  
        } ?>       
    </div>
    <aside>
      <h4>Other Posts</h4>
      <nav>
      <ul>
      <?php 
        while($other_posts->have_posts()) :$other_posts->the_post();
          echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';   
        endwhile; wp_reset_query(); ?>
      </ul>
      </nav>
    </aside>
    <?php 
  endwhile; ?>
</article>

<nav class="post-nav">
<?php previous_post_link(); ?> 
<?php next_post_link(); ?>

</nav>


<?php get_footer(); ?>
