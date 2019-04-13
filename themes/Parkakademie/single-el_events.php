<!-- Template for single post from the plugin even-list -->

<?php get_header();?>

<div class="container">

  <?php if(has_post_thumbnail()) : ?>
  <!-- The Featured Image -->
  <div class="wp-block-cover" style="background-image:url( <?php the_post_thumbnail_url('full'); ?>)"></div>
  <?php endif; ?>  
  
  <!-- The Content -->
  <div class="mt-3">
    <h2 class="text-center"><?php echo get_the_title( get_the_ID() );?></h2>
    <?php 
    $post_object = get_post( get_the_ID() );
    echo $post_object->post_content;
    ?>

    <p>Das ist die Event Singel Page</p>
  </div>
</div>

<?php get_footer();?>