<?php
/*
Template Name: LABs
*/
?>

<?php get_header();?>

<!-- The Content -->
<div id="main-container" class="container">
  <h1 class="text-center"><?php the_title(); ?></h1>
  <hr>
  <?php 
  $post_object = get_post( get_the_ID() );
  echo $post_object->post_content;
  ?>

  <!-- LABs Post Lop-->
  <?php // Display blog posts on any page @ https://m0n.co/l
  $temp = $wp_query; $wp_query= null;
  $wp_query = new WP_Query(); $wp_query->query('posts_per_page=20' . '&paged='.$paged);?>


  <div class="row">
    <?php $query = new WP_Query( array( 'post_type' => 'lab' ) );; ?>
    <?php if($query->have_posts()) : 
    while($query->have_posts()) : $query->the_post(); ?>   

    <div class="col-md-6 col-xs-12 clickable">
      <!-- Activty Box has same style than swiper slide -->
      <div class="swiper-slide">
        <a href="<?php the_permalink() ?>">
          <div class="activity-img-container" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>"></div>
          <h3 class="mt-2"><?php the_title(); ?></h3>

          <!-- List Categories -->
          <small><?php 
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if ( ! empty( $categories ) ) {
              foreach( $categories as $category ) {
                $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
              }
              echo trim( $output, $separator );
            }
            ?>
          </small>
          <?php the_excerpt('20'); ?></a>
      </div><!-- .swiper-slide --></div>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <?php endif; ?>

  </div>
</div>

<?php get_footer();?>