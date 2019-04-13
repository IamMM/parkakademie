<?php
/*
Template Name: Programm
*/
?>

<?php get_header();?>

<div class="container">

  <?php echo do_shortcode('[event-list initial_date=all initial_order=date_desc content_length=300 filterbar_items=daterange_hlist;;months_dropdown(show_all=true),cats_dropdown(show_all=true),reset_link
 show_filterbar=event_list_only]') ?>

</div>

<?php get_footer();?>