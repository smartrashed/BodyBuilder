<?php 
if (!defined('FW')) die('Forbidden');

$section_title = $atts['section_title'];
$extraclass = $atts['extra_body_class'];
?>

 <!--Testimonial-two start here -->
<div class="testimonial-two <?php echo esc_attr($extraclass) ?>">
  <div class="overlay">
    <div class="container">
        <?php if(!empty($section_title)) : ?>
      <h2 class="section-header"><?php echo esc_html($section_title); ?></h2>
        <?php endif; ?>
      <div class="testimonial-items">
        <div class="testimonial-slider swiper-container">
          <div class="swiper-wrapper">

             <?php  $testimonial_info = new Wp_Query(array(
                'post_type'=>'body_testmonial',
                'posts_per_page' => 4 ,
                
              )); 
              while ($testimonial_info->have_posts()): $testimonial_info->the_post() ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="image">
                    <?php the_post_thumbnail('body-builder-all-testimonial-thumb'); ?>
                </div><!-- image -->
                <div class="content">
                  <p><?php the_content(); ?></p>
                  <h4><?php the_title(); ?></h4>
                  <span><?php echo esc_html__($designation = fw_get_db_post_option(get_the_ID(), 'designation'));  ?></span>
                </div><!-- content -->
              </div><!-- testimonial-item -->
            </div><!-- swiper-slide -->

           <?php endwhile; ?>

          </div><!-- swiper-wrapper -->
        </div><!-- testimonial-slider swiper-container -->
        <div class="testimonial-pagination"></div>
      </div><!-- testimonial-items -->

    </div><!-- container -->
  </div><!-- overlay -->
</div><!-- testimonial-two -->
<!--Testimonial-two end here -->
