<div class="blog-feed"><?php 
  while ( have_posts() ) : the_post(); 
    echo get_template_part('parts/post-block');
  endwhile; 
  echo load_more_posts_link() ; ?>
</div>