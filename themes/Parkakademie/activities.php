<?php
/*
Template Name: Aktivitäten
*/
?>

<?php get_header();?>

<!-- The Content -->
<div id="main-container" class="container pt-4">
  <?php 
  $post_object = get_post( get_the_ID() );
  echo $post_object->post_content;
  ?>

<!-- AKTIVITÄTEN Post Lop-->
<?php // Display blog posts on any page @ https://m0n.co/l
$temp = $wp_query; $wp_query= null;
$wp_query = new WP_Query(); $wp_query->query('posts_per_page=20' . '&paged='.$paged);?>

  <div id= "ajax" class="row">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>   

    <div class="col-md-4 col-sm-6 col-xs-12">
      <!-- Activty Box has same style than swiper slide -->
      <div class="swiper-slide">
        <a href="<?php the_permalink() ?>">
          <div class="activity-img-container" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>"></div>
          <h3 class="mt-2"><?php the_title(); ?></h3>
          <?php the_excerpt('20'); ?></a>
      </div><!-- .swiper-slide --></div>

    <?php endwhile; ?>
    <?php endif; ?>  
  </div>

  <?php load_more_button(); ?>
</div>

<?php get_footer();?>