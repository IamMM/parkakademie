<?php 

// Bootstrap using Wordpress Menu
require_once('wp-bootstrap-navwalker.php');

// Add Features Image
add_theme_support('post-thumbnails');
  
// Nav Menu
register_nav_menus(array('primary' => __('Primary Menu')));

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/* Custom Background */

add_theme_support( 'custom-background' );

?>