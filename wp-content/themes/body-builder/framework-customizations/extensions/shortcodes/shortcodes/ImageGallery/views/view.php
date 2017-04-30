<?php 
if (!defined('FW')) die('Forbidden');


$section_title = $atts['section_title'];

?>
<!--Gallery start here -->
<section class="image-gellary padding-130">
    <div class="container">
      <?php if(!empty($section_title)): ?>
      <h2 class="section-header"><?php echo esc_html__( $section_title ); ?></h2>
      <?php endif; ?>
     
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
              <?php if(has_post_thumbnail()): ?>
                   <?php the_post_thumbnail('body-builder-img-gallery'); ?>
              <?php endif; ?>
              <?php $Overlay_image = fw_get_db_post_option(get_the_ID(), 'Overlay_image'); ?>
              <div class="overlay"></div><!-- overlay -->
              <a href="<?php echo get_the_post_thumbnail('body-builder-img-gallery'); ?>" class="image-icon" data-rel="lightcase:myCollection"><img src="<?php echo esc_url($Overlay_image['url']); ?>" alt="video icon" class="img-reaponsive"></a>
            </div>
          </div><!-- gallery-item -->
          <?php endwhile; ?>
        </div><!-- gallery-images -->

    </div><!-- container -->
</section><!--Gallery end here -->
    