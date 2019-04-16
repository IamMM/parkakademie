<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('author'); ?>">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo('name'); ?> | 
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head();?>

  </head>
  <body>


    <nav class="navbar navbar-expand-sm navbar-light">

      <div class="head text-center d-flex justify-content-between">
        <div class="d-flex align-items-center" style="min-width: 49px;"> <!-- min-width for justify content (width = search-button) -->
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="d-flex align-items-center">
          <a href="/"><p class="title "><?php bloginfo('name'); ?></p>
            <p class="sub-title"><?php bloginfo('description'); ?></p></a>
        </div>
        
        <button id="search-button">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16.67 16.76"><defs><style>.cls-1,.cls-5{fill:none;}.cls-2{opacity:0.8;}.cls-3{clip-path:url(#clip-path);}.cls-4{fill:#fff;}.cls-5{stroke:#1d1d1b;}.cls-6{clip-path:url(#clip-path-2);}</style><clipPath id="clip-path" transform="translate(-1 -1)"><rect class="cls-1" x="3.94" width="14.72" height="14.72"/></clipPath><clipPath id="clip-path-2" transform="translate(-1 -1)"><rect class="cls-1" y="9.82" width="8.94" height="8.94"/></clipPath></defs><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g class="cls-2"><g class="cls-3"><path class="cls-4" d="M11.3,13.22A5.86,5.86,0,1,0,5.45,7.36a5.86,5.86,0,0,0,5.86,5.86" transform="translate(-1 -1)"/><circle class="cls-5" cx="10.31" cy="6.36" r="5.86"/></g></g><g class="cls-2"><g class="cls-6"><line class="cls-5" x1="6.59" y1="10.17" x2="0.35" y2="16.41"/></g></g></g></g></svg>
      </button>

       
        <div id="search" class="menu-search search-active" style="display: none;">
          <div class="container">
            <div class="search-close">
              <span class="icon-cancel close">Zurück</span>
            </div>
            <div class="search-inner">
              <?php include (TEMPLATEPATH . '/searchform.php'); ?>
            </div>
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