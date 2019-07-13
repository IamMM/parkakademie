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

/**
 * Register a custom post type called "LAB".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_LAB_init() {
    $labels = array(
        'name'                  => _x( 'LABs', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'LAB', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'LABs', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'LAB', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Neu', 'textdomain' ),
        'add_new_item'          => __( 'Neues LAB hinzufügen', 'textdomain' ),
        'new_item'              => __( 'Neues LAB', 'textdomain' ),
        'edit_item'             => __( 'LAB bearbeiten', 'textdomain' ),
        'view_item'             => __( 'LAB anzeigen', 'textdomain' ),
        'all_items'             => __( 'Alle LABs', 'textdomain' ),
        'search_items'          => __( 'LABs suchen', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent LABs:', 'textdomain' ),
        'not_found'             => __( 'Keine LABs gefunden.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Keine LABs im Papierkorb gefunden.', 'textdomain' ),
        'featured_image'        => _x( 'LAB Beitragsbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Beitragsbild festlegen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Beitragsbild entfernen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Als Beitragsbild verwenden', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'LAB Archive', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Zum LAB hinzufügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Zu diesem LAB hochgeladen', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter LABs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'LABs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'LABs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lab' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'lab', $args );
}
 
add_action( 'init', 'wpdocs_codex_LAB_init' );


/**
 * Register a custom post type called "Eintrag".
 *
 * @see get_post_type_labels() for Eintragel keys.
 */
function wpdocs_codex_Blog_init() {
    $labels = array(
        'name'                  => _x( 'Blog', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Eintrag', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Blog', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Eintrag', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Neu', 'textdomain' ),
        'add_new_item'          => __( 'Neuer Eintrag hinzufügen', 'textdomain' ),
        'new_item'              => __( 'Neuer Eintrag', 'textdomain' ),
        'edit_item'             => __( 'Eintrag bearbeiten', 'textdomain' ),
        'view_item'             => __( 'Eintrag anzeigen', 'textdomain' ),
        'all_items'             => __( 'Alle Einträge', 'textdomain' ),
        'search_items'          => __( 'Blog durchsuchen', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Blog:', 'textdomain' ),
        'not_found'             => __( 'Keine Blog gefunden.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Keine Blog im Papierkorb gefunden.', 'textdomain' ),
        'featured_image'        => _x( 'Eintrag Beitragsbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Beitragsbild festlegen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Beitragsbild entfernen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Als Beitragsbild verwenden', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Eintrag Archive', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Zum Eintrag hinzufügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Zu diesem Eintrag hochgeladen', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Blog list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Blog list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Blog list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'blog' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'blog', $args );
}

add_action( 'init', 'wpdocs_codex_Blog_init' );

?>