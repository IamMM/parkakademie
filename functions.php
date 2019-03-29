<?php require_once('wp-bootstrap-navwalker.php');
    
function theme_setup(){
    add_theme_support('post-thumbnails');
  
    //Nav Menu
    register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));
} 
  
?>