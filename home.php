<?php
/*
Template Name: Startseite
*/
?>

<?php get_header();?>

<div class ="container">

  <!-- The Featured Image -->
  <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>

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
  <div class="swiper-container news">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <!-- Slides -->
      <div class="swiper-slide">
        <a href="<?php the_permalink() ?>">
          <div class="swiper-img" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>"></div>
          <h3 class="mt-2"><?php the_title(); ?></h3>
          <?php the_excerpt('20'); ?></a>
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

</div>

<?php get_footer();?>


<script>
  /*----- Swiper functions ------*/
  var mySwiper = new Swiper ('.swiper-container', {
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
  });
</script>