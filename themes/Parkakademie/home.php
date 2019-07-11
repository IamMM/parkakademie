<?php
/*
Template Name: Startseite
*/
?>

<?php get_header();?>

<!-- The Featured Image Slide -->
<div class="container">

  <!-- Slider main container -->
  <div class="swiper-container welcome-swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('welcome_slider') ):

      // loop through the rows of data
      while ( have_rows('welcome_slider') ) : the_row(); ?>

       <div class="swiper-slide ratio-16_9 cover" style="background-image:url(<?php echo the_sub_field('image'); ?>);">

        <a class="welcome-text" href="<?php echo the_sub_field('link'); ?>">
          <h2><?php echo the_sub_field('title'); ?></h2>
          <p><?php echo the_sub_field('sub-title'); ?></p>
        </a>

      </div><!-- .swiper-slide -->
     
      <?php endwhile;

      else :

      // no rows found

      endif;

      ?>

    </div><!-- .swiper-wrapper -->
  </div><!-- .swiper-container -->  
</div>

<div class ="container">

  <!-- The Content -->
  <div class="mt-3">
    <?php 
    $post_object = get_post( get_the_ID() );
    echo $post_object->post_content;
    ?>
  </div>

  <!-- AKTIVITÄTEN Post Lop-->
  <?php // Display blog posts on any page @ https://m0n.co/l
  $temp = $wp_query; $wp_query= null;
  $wp_query = new WP_Query(); $wp_query->query('posts_per_page=20' . '&paged='.$paged);?>


  <!-- Slider main container -->
  <div class="swiper-container activity-swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <!-- Slides -->
      <div class="swiper-slide">
        <a href="<?php the_permalink() ?>">
          <div class="activity-img-container" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>"></div>
          <h3 class="mt-2"><?php the_title(); ?></h3>
          <?php echo the_excerpt(); ?></a>
      </div><!-- .swiper-slide -->

      <?php endwhile; ?>
      <?php else : ?>
      <p><?php__('Keine aktuellen Beiträge'); ?></p>
      <?php endif; ?>
    </div><!-- .swiper-wrapper -->
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div><!-- .swiper-container -->

  <!-- Events -->
  <?php query_posts('post_type=event'); ?>
  <?php echo do_shortcode('[event-list show_filterbar=false initial_date=upcoming initial_order=date_asc content_length=300]') ?>


</div>

<?php get_footer();?>


<script>
  /*----- WELCOME Swiper functions ------*/
  var welcomeSwiper = new Swiper ('.welcome-swiper', {
    slidesPerView: 1,
    loop: true,
    allowTouchMove: false,
    autoplay: {
      delay: 7000,
      disableOnInteraction: true,
    },
  });

  /*----- AKTIVITÄTEN Swiper functions ------*/
  var activitySwiper = new Swiper ('.activity-swiper', {
    slidesPerView: 3,
    spaceBetween: 15,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      767: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 15,
      },
      576: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 10,
      }
    }
  });
</script>