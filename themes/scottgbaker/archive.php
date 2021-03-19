<?php
/**
 * Archive
 *	
 *
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
 **************************************************************** 
 ****************************************************************/

get_header();
if ( is_category() ) {
  /* translators: Category archive title. %s: Category name */
  $title = sprintf( __( 'Category: %s' ), single_cat_title( '', false ) );
} elseif ( is_tag() ) {
  /* translators: Tag archive title. %s: Tag name */
  $title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
} elseif ( is_author() ) {
  /* translators: Author archive title. %s: Author name */
  $title = sprintf( __( 'Author: %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
} elseif ( is_year() ) {
  /* translators: Yearly archive title. %s: Year */
  $title = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
} elseif ( is_month() ) {
  /* translators: Monthly archive title. %s: Month name and year */
  $title = sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
} elseif ( is_day() ) {
  /* translators: Daily archive title. %s: Date */
  $title = sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
} elseif ( is_tax( 'post_format' ) ) {
  if ( is_tax( 'post_format', 'post-format-aside' ) ) {
      $title = _x( 'Asides', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
      $title = _x( 'Galleries', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
      $title = _x( 'Images', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
      $title = _x( 'Videos', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
      $title = _x( 'Quotes', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
      $title = _x( 'Links', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
      $title = _x( 'Statuses', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
      $title = _x( 'Audio', 'post format archive title' );
  } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
      $title = _x( 'Chats', 'post format archive title' );
  }
} elseif ( is_post_type_archive() ) {
  /* translators: Post type archive title. %s: Post type name */
  $title = sprintf( __( 'Archives: %s' ), post_type_archive_title( '', false ) );
} elseif ( is_tax() ) {
  $tax = get_taxonomy( get_queried_object()->taxonomy );
  /* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
  $title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
} else {
  $title = __( 'Archives' );
}


?>

<div class="page-content">
  <section class="page-hero">
    <h1><?php echo $title; ?></h1>
  </section>
  <?php echo get_template_part('parts/loop'); ?>
</div>
<?php get_footer(); ?>