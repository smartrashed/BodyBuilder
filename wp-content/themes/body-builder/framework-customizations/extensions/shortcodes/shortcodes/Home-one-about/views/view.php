<?php 
if (!defined('FW')) die('Forbidden');


$gallery_image = $atts['gallery_image'];
$gallery_image_title = $atts['gallery_image_title'];
$gallery_image_link = $atts['gallery_image_link'];
$video_image = $atts['video_image'];
$video_popup_icon = $atts['video_popup_icon'];
$video_popup_link = $atts['video_popup_link'];
$popup_image = $atts['popup_image'];



?>
  <!--Gallery start here -->
<div class="gallery">

      <?php $blog_post = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1 ,

      )); ?>

      <?php while ( $blog_post->have_posts() ) : $blog_post->the_post() ?>

      <div class="gallery-top">
        <div class="image">
          <?php   if( has_post_thumbnail() ) : ?> 
          <a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail(); ?></a>
          <?php endif; ?>
        </div>
        <div class="content">
          <h2><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_content();  ?></p>
          <a href="<?php esc_url(the_permalink()); ?>"><?php _e('Read More','body-builder')?></a>
        </div>
      </div><!-- gallery top -->
    <?php   wp_reset_postdata(); endwhile;   ?>

      <div class="gallery-bottom">

        <div class="gallery-item">
          <img src="<?php echo esc_url($gallery_image['url']); ?>" alt="gallery image" class="img-responsive">
          <a href="<?php echo esc_url($gallery_image_link); ?>" class="overlay"><?php echo esc_html__($gallery_image_title); ?></a>
        </div><!-- gallery-item -->

        
         <div class="gallery-item">
            <div>
              <img src="<?php echo esc_url($video_image['url']) ?>" alt="gallery image" class="img-responsive">
              <a href="<?php echo esc_url($video_popup_link) ?>" class="gvideo-icon" data-rel="lightcase"><img src="<?php echo esc_url($video_popup_icon['url']); ?>" alt="video icon" class="img-reaponsive"></a>
            </div>
          </div><!-- gallery-item -->

        <div class="gallery-item">
          <a href="<?php echo esc_url($popup_image['url']); ?>" data-rel="lightcase"><img src="<?php echo esc_url($popup_image['url']); ?>" alt="gallery image" class="img-responsive"></a>
        </div><!-- gallery-item -->
      </div><!-- gallery bottom -->

</div><!-- gallery -->
    <!--Gallery end here -->
    