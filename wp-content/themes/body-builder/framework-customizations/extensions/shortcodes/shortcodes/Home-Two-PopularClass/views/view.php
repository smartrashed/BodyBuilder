<?php 
if (!defined('FW')) die('Forbidden');


$section_title = $atts['section_title'];



?>
<!--Classes start here -->
<section class="classes">
  <div class="overlay">
    <div class="container">
        <?php if(!empty ($section_title) ) : ?>
          <h2 class="section-header"><?php echo esc_html__($section_title); ?></h2>
        <?php endif; ?>
      <div class="classe-items">
        <div class="classes-slider swiper-container">
          <div class="swiper-wrapper">
            <?php $class_info = new Wp_Query(array(
                  'post_type'=>'body_Class',
                  'posts_per_page' => 8 ,
                  
                ));
            ?>
            <?php while($class_info->have_posts()): $class_info->the_post()  ?>
            <div class="class-item swiper-slide">
              <div class="image">
                <?php the_post_thumbnail('body-builder-class-grid'); ?>
              </div><!-- image -->
              <div class="content">
                <h3><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h3>
                <span><?php echo $class_start_time  = fw_get_db_post_option(get_the_ID(), 'class_start_time'); ?> - <?php echo $class_start_time  = fw_get_db_post_option(get_the_ID(), 'class_end_time'); ?></span>
              </div><!-- content -->
            </div><!-- class-item swiper-slide -->
            <?php endwhile; ?>
          </div><!-- classe-items swiper-wrapper -->
        </div><!-- swiper-container -->
        <!-- If we need navigation buttons -->
        <div class="slider-icons">
          <div class="classes-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
          <div class="classes-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
        </div>
      </div><!-- classe-items -->
    </div><!-- container -->
  </div><!-- overlay -->
</section><!-- classes -->
<!--Classes end here -->
    