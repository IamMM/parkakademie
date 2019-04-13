<?php get_header(); ?>


<div class="column span-9 first" id="maincontent">

  <div class="container mt-5">

    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <div>

      <h3 class="text-center"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
      <?php the_excerpt(); ?>
      <p class="text-center">
        <?php the_date() ?>
      </p>

    </div>

    <hr>
    <?php endwhile; ?>
    <?php else : ?>

    <h2 class="text-center">Keine Inhalte gefunden.</h2>

    <?php endif; ?>

  </div> <!-- /content -->
</div> <!-- /maincontent-->

<?php get_footer(); ?>
