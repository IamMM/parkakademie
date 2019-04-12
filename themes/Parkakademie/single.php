<?php get_header();?>

<div class="container">
  <!-- The Featured Image -->
    <div class="activity-img-container" style="background-image:url( <?php the_post_thumbnail_url('full'); ?>)"></div>
    <!--  <?php the_post_thumbnail_url('full', array('class' => 'img-fluid')); ?>-->
  
  
  
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    
    <?php the_content();?>
     
  <?php endwhile; ?>
  <?php endif; ?>
  
  
  
    <!-- The Content -->
    <div class="mt-3">
     <h3><?php echo get_the_title( get_the_ID() );?></h3>
      <?php 
      $post_object = get_post( get_the_ID() );
      echo $post_object->post_content;
      ?>
    </div>
</div>

<?php get_footer();?>