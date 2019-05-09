<?php get_header();?>

<div id="main-container" class="container pt-4">
  <!-- The Featured Image -->
    <div class="wp-block-cover" style="background-image:url( <?php the_post_thumbnail_url('full'); ?>)"></div>
    <!--  <?php the_post_thumbnail_url('full', array('class' => 'img-fluid')); ?>-->
  
    <!-- The Content -->
    <div class="mt-3">
     <h2 class="text-center"><?php echo get_the_title( get_the_ID() );?></h2>
      <?php 
      $post_object = get_post( get_the_ID() );
      echo $post_object->post_content;
      ?>
    </div>
</div>

<?php get_footer();?>