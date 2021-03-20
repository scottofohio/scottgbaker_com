<?php 
$post_cats = get_the_category($post->ID); ?>
<article id="post-<?php the_ID(); ?>" class="card" >

  <section>
    <h5 class="date-tag"><?php the_date(); ?></h5>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
      <nav class="categories">
        <h5 class="accent label ">Categories</h5><?php 
        foreach( $post_cats as $cat) :  
          echo '<a href="/category/' . $cat->slug . '">' . $cat->name . '</a>';
        endforeach; ?>
      </nav>

  </section>
 
  <footer>
    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
  </footer>

</article>
