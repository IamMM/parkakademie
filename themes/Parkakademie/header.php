<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('author'); ?>">

    <title><?php bloginfo('name'); ?> | 
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
      
    <!-- Bootstrap 4.0.0 -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap/bootstrap.min.css">

    <!-- Swiper 4.5.0 -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head();?>

  </head>

  <body class="custom-background">

    <nav class="navbar navbar-expand-sm">

      <div class="head text-center align-items-center row">
        <div class="logo col-2">
          <a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo_grafik-pink.png" alt="Logo"></a>
        </div>

        <div class="col-8">
          <a href="/"><p class="title "><?php bloginfo('name'); ?></p>
            <p class="sub-title"><?php bloginfo('description'); ?></p></a>
        </div>

        <div class="icons col-2">
          <div class="icon d-none d-sm-inline">
            <a id="search-button" class="btn "></a>
          </div>
          <div class="icon d-none d-md-inline">
            <a id="facebook-button" class="btn" href="https://www.facebook.com/parkakademie/" target="_blank"></a>
          </div>
          <div class="icon d-none d-md-inline">
            <a id="instagram-button" class="btn" href="https://www.instagram.com/explore/locations/295354281145717/parkakademie/" target="_blank"></a>
          </div>
          
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
        </div>

        <!-- OVERLAY -->
        <div id="search" class="menu-search search-active" style="display: none;">
          <div class="search-close">
            <span class="icon-cancel close"></span>
          </div>
          <div class="search-inner">
            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
          </div>
        </div>


      </div>

      <?php
      wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse justify-content-sm-center',
        'container_id'      => 'main-nav',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker())
                 );
      ?>
    </nav>