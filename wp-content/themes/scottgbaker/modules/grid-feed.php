<?php 
  global $field; 
  $grid_columns = $field['grid_columns'];

  $section_header = $field['section_header'];
  $post_type = $field['post_type'];
  $posts_per_page = $field['posts_per_page'];
  $more_posts_link_type = $field['more_posts_link_type'];

  if($grid_columns == 'three-col-bordered') {
    $grid_columns = 'three-col bordered';
  } else if($grid_columns == 'two-col-bordered') {
    $grid_columns = 'two-col bordered';
  } else {
    $grid_columns = $field['grid_columns'];
  }

 
  $feedArgs = array(
    'post_type' => $post_type, 
    'posts_per_page' => $posts_per_page,
  );

  if($post_type == 'events') {
    $feedArgs['meta_key'] = 'event_date';
    $feedArgs['orderby'] = 'meta_value_num';
    $feedArgs['order'] = 'ASC';
    $feedArgs['meta_query'] = array(
      array(
        'meta_key' => 'event_date', 
        'compare' => '>=',
        'value' => date('Ymd'),
        'type' => 'DATETIME'
      )
    );
  } 
  $feed = new WP_Query($feedArgs); 

  if(!empty($section_header)) { ?>
    <section class="section-header">
      <h2><?php echo $section_header; ?></h2><?php 
  }
?>
  
  <div class="scrolled-item basic-grid <?php echo $grid_columns; ?>"><?php 
    while($feed->have_posts())  : $feed->the_post(); 
      if($grid_columns == 'three-col' || $grid_columns == 'two-col' || $grid_columns == 'one-col') {
        $content_type = 'full';
      } ?>
    <div>
      <article class="text-block">
        <h3 class="with-rule"><?php the_title(); ?></h3><?php 
        if($post_type == 'events') { ?>
        <h5 class="event-details">
          <?php the_field('event_location'); ?>
          <br /><?php the_field('event_date'); ?>
        </h5>
        <a class="btn btn-outline-primary" href="<?php the_field('event_link'); ?>">RSVP</a><?php
        } else { 
          the_excerpt();
          echo ' <a href="'. get_the_permalink() .'" class="btn btn-outline-primary">Learn More</a>';
        } ?>
      </article>
    </div><?php 
    endwhile; ?>
  </div><?php 
  if(!empty($section_header)) { ?>
    </section><?php 
    } ?>  
  