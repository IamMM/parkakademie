<?php get_header();?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div id="main-container" class ="container pt-4 mb-5">
  <h2 class="text-center"><?php the_title(); ?></h2>
  <hr>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php else : ?>
  <p><?php__('Keinen Beitrag gefunden'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer();?>