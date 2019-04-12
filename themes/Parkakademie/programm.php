<?php
/*
Template Name: Programm
*/
?>

<?php get_header();?>

<div class="container">

  <?php echo do_shortcode('[event-list initial_date=all filterbar_items=daterange_hlist]') ?>

</div>

<?php get_footer();?>