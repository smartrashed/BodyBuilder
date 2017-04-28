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
          <?php while($video_info->have_posts()): $video_info->the_post() ?>
          <div class="gallery-top">
            <div class="gallery-item">
              <div>
                <?php   if( has_post_thumbnail() ) : ?>
                   <?php the_post_thumbnail('body-builder-vedio-gallery-full'); ?>
                <?php endif; ?>
                <div class="overlay"></div>
                <a href="<?php echo esc_url($videos = fw_get_db_post_option(get_the_ID(), 'videos')); ?>" class="gvideo-icon" data-rel="lightcase"><img src="<?php echo esc_url($video_thumbnail = fw_get_db_post_option(get_the_ID(), 'video_thumbnail["url"]')); ?>" alt="video icon" class="img-reaponsive"></a>
              </div>
            </div><!-- gallery-item -->
          </div><!-- gallery-top -->
          <?php endwhile; ?>
          <div class="gallery-images">
            <div class="gallery-item">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery_07.jpg" alt="gallery image" class="img-responsive">
                <div class="overlay"></div><!-- overlay -->
                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery_07_bg.jpg" class="image-icon" data-rel="lightcase:myCollection"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/image-icon.png" alt="gallery image" class="img-responsive"></a>
              </div>
            </div><!-- gallery-item -->
          </div><!-- gallery-images -->

        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- gallery-two -->
    <!--Gallery end here -->
    