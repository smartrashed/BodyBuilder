<?php 
if (!defined('FW')) die('Forbidden');

$section_title = $atts['section_title'];

?>

 <!--Testimonial-two start here -->
    <section class="testimonial-two">
      <div class="overlay">
        <div class="container">
            <?php if(!empty($section_title)) : ?>
          <h2 class="section-header"><?php echo esc_html__($section_title , 'body-builder'); ?></h2>
            <?php endif; ?>
          <div class="testimonial-items">
            <div class="testimonial-slider swiper-container">
              <div class="swiper-wrapper">

                 <?php  $testimonial_info = new Wp_Query(array(
                    'post_type'=>'body_testmonial',
                    'posts_per_page' => 4 ,
                    
                  )); ?>
                <?php while ($testimonial_info->have_posts()): $testimonial_info->the_post() ?>
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
    </section><!-- testimonial-two -->
    <!--Testimonial-two end here -->
