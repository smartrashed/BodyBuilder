<?php 
if (!defined('FW')) die('Forbidden');


$section_title = $atts['section_title'];

?>
<!--Gallery start here -->
<section class="video-gallery padding-130">
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
      
      <div class="top">
        <?php while($video_info->have_posts()): $video_info->the_post() ?>
        <div class="gallery-item">
          <div>
            <?php   if( has_post_thumbnail() ) : ?>
               <?php the_post_thumbnail('body-builder-vedio-gallery-full'); ?>
            <?php endif; ?>
            <div class="overlay"></div>
            <?php $video_thumbnail = fw_get_db_post_option(get_the_ID(), 'video_thumbnail'); ?>
            <a href="http://www.youtube.com/embed/ieyzL5OaPZk" class="gvideo-icon" data-rel="lightcase"><img src="<?php echo esc_url($video_thumbnail['url'])?>" alt="video icon" class="img-reaponsive"></a>
          </div>
        </div><!-- gallery-item -->
        <?php endwhile; ?>
      </div><!-- gallery-top -->
      <?php
        $videos_info = new WP_Query(array(
            'post_type'=>'body_Video',
            'posts_per_page'=>6
            )); ?>
      <div class="bottom">
        <div class="row">
          <?php while($videos_info->have_posts()): $videos_info->the_post() ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="gallery-item">
              <div>
                <?php   if( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('body-builder-class-vedio-thumb'); ?>
                <?php endif; ?>
                <?php $video_thumbnail = fw_get_db_post_option(get_the_ID(), 'video_thumbnail'); ?>
                <a href="http://www.youtube.com/embed/ieyzL5OaPZk" class="gvideo-icon" data-rel="lightcase"><img src="<?php echo esc_url($video_thumbnail['url']);?>" alt="video icon" class="img-reaponsive"></a>
              </div>
              <p><?php the_title(); ?></p>
            </div><!-- gallery-item -->
          </div>
          <?php endwhile; ?>
        </div><!-- row -->
      </div><!-- bottom -->
      
  </div><!-- overlay -->
</section><!-- sectio-->


  