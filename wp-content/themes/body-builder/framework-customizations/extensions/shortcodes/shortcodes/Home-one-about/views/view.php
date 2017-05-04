<?php 
if (!defined('FW')) die('Forbidden');


$gallery_image = $atts['gallery_image'];
$gallery_image_title = $atts['gallery_image_title'];
$gallery_image_link = $atts['gallery_image_link'];
$third_image = $atts['third_image'];
$third_image_icon = $atts['third_image_icon'];
$fourth_image = $atts['fourth_image'];


?>
  <!--Gallery start here -->
    <section class="gallery">

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
          <img src="<?php echo esc_url($third_image['url']); ?>" alt="gallery image" class="img-responsive">
          <div class="video_overlay"></div>
          <a href="video-gallery.html" class="gvideo-icon"><img src="<?php echo esc_url($third_image_icon['url']); ?>" alt="video icon" class="img-reaponsive"></a>
        </div><!-- gallery-item -->
        <div class="gallery-item">
          <a href="#" data-rel="lightcase"><img src="<?php echo esc_url($fourth_image['url']); ?>" alt="gallery image" class="img-responsive"></a>
        </div><!-- gallery-item -->
      </div><!-- gallery bottom -->
    </section><!-- gallery -->
    <!--Gallery end here -->
    