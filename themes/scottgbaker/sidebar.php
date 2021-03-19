<?php
/**
 * Sidebar
 * 
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
 **************************************************************** 
 ****************************************************************/
$args = array(
	'type'            => 'monthly',
	'limit'           => '4',
	'format'          => 'custom', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC',
  'post_type'     => 'post'
);
$cats = get_categories();  
?>
<aside role="banner" class="sidebar">
      
    <nav class="cats">
    <h6 class="subheader">Categories</h6><?php 
      foreach($cats as $cat) : ?>
        <a href="/category/<?php echo $cat->slug; ?>">
          <?php echo $cat->name; ?>
        </a><?php 
       endforeach; ?>
    </nav>
    
    <nav class="archives">
    <h6 class="subheader">Archives</h6><?php 
      wp_get_archives( $args ); ?>
    </nav>
       
  

  </aside>
