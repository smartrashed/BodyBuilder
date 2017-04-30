<?php 
if (!defined('FW')) die('Forbidden');


$section_title = $atts['section_title'];

?>
   <!--Gallery start here -->
    <section class="gallery-two">
      <div class="overlay">
        <div class="container">
          <?php if(!empty($section_title)): ?>
          <h2 class="section-header"><?php echo esc_html__( $section_title ); ?></h2>
          <?php endif; ?>
          <?php
              $video_info = new WP_Query(array(
                'post_type'=>'body_Video',
                'posts_per_page'=>2
                ));
          ?>
          
          <div class="gallery-top">
            <?php while($video_info->have_posts()): $video_info->the_post() ?>
            <div class="gallery-item">
              <div>
                <?php   if( has_post_thumbnail() ) : ?>
                   <?php the_post_thumbnail('body-builder-vedio-gallery-full'); ?>
                <?php endif; ?>
                <div class="overlay"></div>
                <?php $video_thumbnail = fw_get_db_post_option(get_the_ID(), 'video_thumbnail'); ?>
                <a href="" class="gvideo-icon" data-rel="lightcase"><img src="<?php echo esc_url($video_thumbnail['url'])?>" alt="video icon" class="img-reaponsive"></a>
              </div>
            </div><!-- gallery-item -->
            <?php endwhile; ?>
          </div><!-- gallery-top -->
          <?php
              $image_info = new WP_Query(array(
                'post_type'=>'body_Images',
                'posts_per_page'=> 8

                ));
          ?>
            <div class="gallery-images">
              <?php while($image_info->have_posts()): $image_info->the_post() ?>
              <div class="gallery-item">
                <div>
                  <?php the_post_thumbnail('body-builder-img-gallery'); ?>
                  <?php $Overlay_image = fw_get_db_post_option(get_the_ID(), 'Overlay_image'); ?>
                  <div class="overlay"></div><!-- overlay -->
                  <a href="<?php echo esc_url(get_the_post_thumbnail()); ?>" class="image-icon" data-rel="lightcase:myCollection"><img src="<?php echo esc_url($Overlay_image['url']); ?>" alt="video icon" class="img-reaponsive"></a>
                </div>
              </div><!-- gallery-item -->
              <?php endwhile; ?>
            </div><!-- gallery-images -->

        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- gallery-two -->
    <!--Gallery end here -->
    