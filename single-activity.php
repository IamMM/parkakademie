<?php
/*
 * Template Name: Aktivität
 * Template Post Type: post
 */

get_header();  ?>

<style>
  .swiper-slide {
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
    padding: 0;
  }

  .video-container video,
  .video-container iframe,
  .video-container object,
  .video-container embed { 
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
</style>

<div class="container">

  <div class="tab-content" id="Medien-Board">
    <div class="tab-pane fade show active" id="bilder" role="tabpanel" aria-labelledby="bilder-tab">

      <!-- Slider main container -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <?php 

          $images = get_field('bilder');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)

          if( $images ): ?>
          <?php foreach( $images as $image ): ?>
          <div class="swiper-slide" style="background-image:url(<?php echo $image['url']; ?>)">
          </div><!-- .swiper-slide -->
          <?php endforeach; ?>
          <?php endif; ?>

        </div><!-- .swiper-wrapper -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div><!-- .swiper-container -->


    </div>


    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">

      <!-- Slider main container -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

          <?php
          // check if the flexible content field has rows of data
          if( have_rows('videos') ):

          // loop through the rows of data
          while ( have_rows('videos') ) : the_row(); ?>

          <div class="swiper-slide">
            <div class="video-container">
              <?php if( get_row_layout() == 'video' ): ?>
                <video src="<?php  the_sub_field('video');?>" controls></video>
              <?php elseif( get_row_layout() == 'embed' ): ?>
                <?php the_sub_field('embed'); ?>
              <?php endif; ?>
            </div>
          </div><!-- .swiper-slide -->
          <?php endwhile;
          else :
          // no rows found
          endif;
          ?>
        </div><!-- .swiper-wrapper -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div><!-- .swiper-container -->

    </div>
  </div>

  <ul class="nav media-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="bilder-tab" data-toggle="tab" href="#bilder" role="tab" aria-controls="bilder" aria-selected="true">Bilder</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Videos</a>
    </li>
  </ul>

</div>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class ="container mt-4">
  <h2 class="text-center"><?php the_title(); ?></h2>

  <div><?php the_content(); ?></div>

  <?php endwhile; ?>
  <?php else : ?>
  <p><?php__('Keinen Beitrag gefunden'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer();?>

<script>

  var mySwiper = new Swiper('.swiper-container', {
    loop: false,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    var paneTarget = $(e.target).attr('href');
    var $thePane = $('.tab-pane' + paneTarget);
    var paneIndex = $thePane.index();
    if ($thePane.find('.swiper-container').length > 0 && 0 === $thePane.find('.swiper-slide-active').length) {
      mySwiper[paneIndex].update();
    }
  });
</script>