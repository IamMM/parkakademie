<?php
/*
Template Name: Archiv
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

  <!-- List All Categories to be done -->
  <!--
<span class="inline">Kategorien: </span>
<ul class="list-inline" style="display: inline-block;">
<?php wp_list_categories( array(
  'orderby' => 'name',
  'title_li' => '',
  'separator' => ', ',
) ); ?> 
</ul>
-->

  <!-- AKTIVITÄTEN Post Lop-->
  <?php // Display blog posts on any page @ https://m0n.co/l
  $temp = $wp_query; $wp_query= null;
  $wp_query = new WP_Query(); $wp_query->query('posts_per_page=-1' . '&paged='.$paged);?>

  <div class="row">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>       


    <div class="col-md-4 col-sm-6 col-xs-12 clickable">
      <a href="<?php the_permalink() ?>">
        <!-- Activty Box has same style than swiper slide -->
        <div class="swiper-slide">

          <div class="activity-img-container" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>"></div>
          <h3 class="mt-2"><?php the_title(); ?></h3>

          <!-- List Categories -->
          <small><?php 
            $categories = get_the_category();
            $separator = ' | ';
            $output = '';
            if ( ! empty( $categories ) ) {
              foreach( $categories as $category ) {
                $output .= esc_html( $category->name ) . $separator;
              }
              echo trim( $output, $separator );
            }
            ?>
          </small>
          <?php the_excerpt('20'); ?>
        </div><!-- .swiper-slide -->
      </a>
    </div>


    <?php endwhile; ?>
    <?php endif; ?> 
  </div>
</div>

<?php get_footer();?>