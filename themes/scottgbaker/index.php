<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Baker Design Theme 1.0
 * @subpackage theme2
 */

get_header(); ?>

<div class="page-content">
  <section class="page-hero">
    <h1><?php echo get_field('header', 8) ?></h1>
  </section><?php 
    echo get_template_part('parts/loop'); ?>
</div>
<?php
get_footer();
