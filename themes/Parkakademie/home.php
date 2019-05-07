<?php
/*
Template Name: Startseite
*/
?>

<?php get_header();?>

<!-- The Featured Image -->
<div class="container">
  <div class="wp-block-cover" style="background-image:url( <?php the_post_thumbnail_url('full'); ?>)"></div>
</div>

<div id="main-container" class ="container mt-4 pt-4">

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
  <?php echo do_shortcode('[event-list num_events=10 initial_date=all initial_order=date_desc show_filterbar=false content_length=300]') ?>

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