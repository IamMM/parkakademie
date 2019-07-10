<?php
/*
Template Name: Programm
*/
?>

<?php get_header();?>

<div id="main-container" class="container">

  <!-- The Content -->
  <div class="mb-5">
    <h1 class="text-center"><?php the_title(); ?></h1>
    <hr>
    <?php 
    $post_object = get_post( get_the_ID() );
    echo $post_object->post_content;
    ?>
  </div>

  <?php echo do_shortcode('[event-list initial_date=all initial_order=date_desc content_length=300 filterbar_items=daterange_hlist;;months_dropdown(show_all=true),cats_dropdown(show_all=true),reset_link
 show_filterbar=event_list_only]') ?>

</div>

<?php get_footer();?>