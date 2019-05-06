<!-- Template for single post from the plugin even-list -->

<?php get_header();?>

<div id="main-container" class="container">

  <?php if (have_posts()) :
  while ( have_posts() ) : the_post(); ?>

  <!-- The Featured Image -->
  <?php if(has_post_thumbnail()) : ?>
  <div class="wp-block-cover" style="background-image:url( <?php the_post_thumbnail_url('full'); ?>)"></div>
  <?php endif; ?>  

  <!-- The Content -->
  <div class="mt-3">
    <div class="text-center">
      <h2><?php echo get_the_title();?></h2>
      <h3>
        <strong><?php print get_post_meta($event_id, 'starttime', true); ?></strong>
        <span><?php print get_post_meta($event_id, 'location', true); ?></span>
      </h3>
    </div>

    <div class="text-justify mt-3 mb-5">
      <?php the_content(); ?>
    </div>
    <?php endwhile;
    endif; ?>

  </div>
</div>

<?php get_footer();?>