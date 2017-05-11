<?php 
if (!defined('FW')) die('Forbidden');

$section_title = $atts['section_title'];

$trainer_facebook =$atts['trainer_facebook'];
$trainer_twitter =$atts['trainer_twitter'];
$trainer_linkedin =$atts['trainer_linkedin'];

$extraclass = $atts['extra_body_class'];

?>

 <!--Trainers start here -->
<div class="trainers <?php echo esc_attr($extraclass) ?>">
  <div class="overlay">
    <div class="container">
        <h2 class="section-header"><?php echo  esc_html($section_title); ?></h2>
            <div class="trainer-items">
                  <div class="trainer-slider swiper-container">
                    <div class="swiper-wrapper">
                     <?php  
                      $trainer_info = new Wp_Query(array(
                        'post_type'=>'body_trainer',
                        'posts_per_page' => 8 ,
                        
                      ));

                     while ($trainer_info->have_posts()) : $trainer_info->the_post()   ?>
                    <div class="trainer-item swiper-slide">
                          <div class="trainer-image">
                            <?php   if( has_post_thumbnail() ) : ?>
                             <?php the_post_thumbnail('body-builder-trainer-thumb'); ?>
                             <?php endif; ?>
                            <div class="overlay"></div>
                            <div class="trainer-social">
                              <div class="trainer-social">
                                <a href="<?php echo esc_url($trainer_twitter); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="<?php esc_url($trainer_facebook); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php esc_url($trainer_linkedin); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                              </div>
                            </div>
                          </div><!-- trainer image -->
                            <div class="trainer-details">
                                <h4><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h4>
                                  <p><?php echo $trainer_designation  = fw_get_db_post_option(get_the_ID(),'trainer_designation'); ?></p>
                            </div><!-- trainer-details -->
                    </div><!-- trainer-item -->
                    <?php  wp_reset_postdata(); endwhile; ?>
                     </div><!-- swiper-wrapper -->
                  </div><!-- swiper-container -->
  <div class="trainer-slide-icon">
    <div class="trainer-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    <div class="trainer-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
  </div>
            </div><!-- trainer-items -->
    </div><!-- container -->
  </div><!-- overlay -->
</div><!-- trainers -->
    <!--Trainers end here -->