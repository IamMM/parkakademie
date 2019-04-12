<?php get_header();?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class ="container">
  <h1><?php the_title(); ?></h1> <br>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php else : ?>
  <p><?php__('Keinen Beitrag gefunden'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer();?>