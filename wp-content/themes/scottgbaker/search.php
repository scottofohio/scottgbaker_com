<?php
/**
 * The template for displaying Search pages
 *	
 * Template Name: Search Page
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
get_header(); 

?> 
<div class="page-content search-results">
  <?php 
    if (have_posts()) { ?>
    <section class="page-hero"><?php 
      echo '<h1>Results for: ' . get_search_query() . '</h1>'; ?>
  </section><?php 
  echo get_template_part('parts/loop');
  
  } else { ?>
    <section class="page-hero">
      <h1>Well there is nothing on my website that includes: <em><?php echo get_search_query(); ?></em></h1>
      <p>Maybe search for something not so dumb, eh?</p>
    </section>
    <form action="<?php bloginfo('url') ?>">
      <label for="search">
        Search
      </label>
      <input type="text" id="search" name="s">
      <button class="button">Search</button>
    </form>
<?php  }
    ?>
  </div>

<?php
get_footer(); 
