<?php get_header();?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class ="container mt-3 mb-5">
  <h1 class="text-center"><?php the_title(); ?></h1>
  <hr>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php else : ?>
  <p><?php__('Keinen Beitrag gefunden'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer();?>