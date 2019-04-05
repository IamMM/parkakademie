<?php
/*
Template Name: Aktivitäten
*/
?>

<?php get_header();?>

<!-- The Content -->
<div class="container mt-3">
  <?php 
  $post_object = get_post( get_the_ID() );
  echo $post_object->post_content;
  ?>
</div>

<!-- AKTIVITÄTEN Post Lop-->
<?php // Display blog posts on any page @ https://m0n.co/l
$temp = $wp_query; $wp_query= null;
$wp_query = new WP_Query(); $wp_query->query('posts_per_page=20' . '&paged='.$paged);?>


<div class="container">
 
  <div class="row">
   <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>   
    
    <div class="col-md-4">
       <div class="swiper-slide">
        <a href="<?php the_permalink() ?>">
          <div class="swiper-img" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>"></div>
          <h3 class="mt-2"><?php the_title(); ?></h3>
          <?php the_excerpt('20'); ?></a>
      </div><!-- .swiper-slide --></div>
    
    <?php endwhile; ?>
    <?php endif; ?>  </div>
</div>

<?php get_footer();?>