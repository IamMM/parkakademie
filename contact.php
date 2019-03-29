<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header();?>

<!-- Heading und Subheading-->

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class ="container main-container">
  <h1><?php the_title(); ?></h1>

  <?php the_content(); ?>

  <?php endwhile; ?>
  <?php else : ?>
  <p><?php__('Keinen Beitrag gefunden'); ?></p>

</div>
<?php endif; ?>

<!-- Map -->


<?php get_footer();?>