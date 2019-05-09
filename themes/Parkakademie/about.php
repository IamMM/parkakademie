<?php
/*
Template Name: Über Uns
*/
?>

<?php get_header();?>

<div id="main-container" class="container pt-4">

  <?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>   
  <?php the_content(); ?>  
  <?php endwhile; ?>
  <?php endif; ?>  


  <!-- FEATURETTE-BLOCK  -->

  <?php if( have_rows('featurettes-block') ): ?>
  <?php while( have_rows('featurettes-block') ): the_row(); ?>
  <hr>
  <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
  <h2 class="text-center"><?php the_sub_field('heading'); ?></h2>

  <div class="container slim"><?php if( have_rows('featurettes') ): ?>

    <?php $index = 0; ?> 

    <?php while( have_rows('featurettes') ): the_row(); ?>

    <?php if( $index % 2 == 0 ): ?>

    <div class="row featurette">
      <div class="col-md-6">
        <img src="<?php the_sub_field('img'); ?>" class="img-fluid">
      </div>
      <div class="col-md-6">
        <?php the_sub_field('text');?>    
      </div>
    </div>

    <?php else : ?>

    <div class="row featurette">
      <div class="col-md-6 order-md-last">
        <img src="<?php the_sub_field('img'); ?>" class="img-fluid">
      </div>
      <div class="col-md-6 order-md-first">
        <?php the_sub_field('text');?>    
      </div>
    </div>

    <?php endif; ?>

    <?php $index = $index + 1; ?>

    <?php endwhile; ?>

    <?php endif; ?></div>

  <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>

  <?php the_sub_field('final-text'); ?>
  <?php endwhile; ?>
  <?php endif; ?>

</div>

<?php get_footer();?>