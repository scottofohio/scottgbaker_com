<?php
/***********************************************************************

Baker Design Theme 1.0
All Navigation Settings

/***********************************************************************/

/**
 * Main navigation menu functions
 *
 * @return str
 */

$menuParameters = array(
  'container'       => false,
  'echo'            => false,
  'items_wrap'      => '%3$s',
  'depth'           => 0,
);



if ( ! function_exists( 'primary_navigation' ) ) {
    function primary_navigation() {
      $menu_param = array(
        'theme_location' => 'primary-nav',
        'depth' => 2,
        'container' => false,
        'echo' => false,
        'items_wrap' => '%3$s'
      );
      return strip_tags(wp_nav_menu( $menu_param ), '<a>' );
    }
}
if ( ! function_exists( 'footer_navigation' ) ) {
    function footer_navigation() {
        wp_nav_menu(array(
            'container' => false,
            'items_wrap' => '%3$s',
            'theme_location' => 'footer-nav'
        ));
    }
}

/**
 * Drop-in numeric pagination for archives, search results, etc.
 *
 * @return str
 */
function my_get_pagination() {
  global $wp_query;

    $big = 999999999; // Codex-sanctioned hack for search/archive pagination
    $args = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var( 'paged' ) ),
        'format' => '?paged=%#%',
        'end_size' => 3,
        'mid_size' => 2,
        'next_text' => __( '<span>Next</span>&raquo;', '%Text_Domain%' ),
        'prev_text' => __( '&laquo;<span>Previous</span>', '%Text_Domain%' ),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => sprintf( '<span class="screen-reader-text">%s </span>', __( 'Page', '%Text_Domain%' ) ),
        'type' => 'list'
    );
    return paginate_links( $args );
}

/**
* Create previous/next post links
*
* @return str
*
* @uses get_previous_posts_link()
* @uses get_next_posts_link()
*/
function my_post_nav_links() {
    $nav = '';
    if ( $next = get_next_posts_link( __( '&laquo; Older Posts', '%Text_Domain%' ) ) ) {
        $nav .= sprintf( '<div class="next alignright">%s</div>', $next );
    }
    if ( $prev = get_previous_posts_link( __( 'Newer Posts &raquo;', '%Text_Domain%' ) ) ) {
        $nav .= sprintf( '<div class="prev alignleft">%s</div>', $prev );
    }
    return ( $nav ? sprintf( '<nav class="post-nav">%s</nav>', str_replace('/page/', '/', $nav) ) : '' );
}


add_filter('next_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="button"';
}


function load_more_posts_link() {
  $nav = '';
  if ( $next = get_next_posts_link( __( 'Load More' ) ) ) {
    $nav .= sprintf( '%s', $next );
  }
  return ( $nav ? sprintf( '<nav class="load-more-posts">%s</nav>', $nav ) : '' );
}

/**
 * Register site nav menus
 *
 * @return str
 */
register_nav_menus(array(
    'primary-nav' => 'Primary Navigation',
    'footer-nav' => 'Footer Navigation'
));

function breadcrumbs() {
  global $post;
  if (!is_front_page()) {
    echo '<nav class="breadcrumb">';

    echo '<a class="breadcrumb-item" href="'. get_bloginfo('url') .'">Home</a>';
    if ($ancestors = get_ancestors($post->ID, 'page', 'post_type')) {
        foreach ($ancestors as $ancestor) {
            echo '<a class="breadcrumb-item" href="'. get_the_permalink($ancestor) .'">' . get_the_title($ancestor) . '</a>';
        }
    }
    echo '<span class="breadcrumb-item active">' . get_the_title() . '</a>';

    echo '</nav>';
  }
}

