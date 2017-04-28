<?php 
if (!defined('FW')) die('Forbidden');

$section_title = $atts['section_title'];



 global $post;

    /*if (!$post || $post->post_type != 'post') {
        return;
    }*/
//$trainer_designation  = fw_get_db_post_option(get_the_ID(), 'trainer_designation');

$trainer_info = new Wp_Query(array(
    'post_type'=>'body_trainer',
    'posts_per_page' => 8 ,
    
  ));
?>

 <!--Trainers start here -->
    <section class="trainers">
      <div class="overlay">
        <div class="container">
          <h2 class="section-header"><?php echo esc_html__($section_title); ?></h2>
        <div class="trainer-items">
      <div class="trainer-slider swiper-container">
        <div class="swiper-wrapper">
        <?php  while ($trainer_info->have_posts()) : $trainer_info->the_post()   ?>

        <div class="trainer-item swiper-slide">
          <div class="trainer-image">
             <?php   if( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('body-builder-trainer-thumb'); ?>
             <?php endif; ?>
          <div class="overlay"></div>
              <div class="trainer-social">
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </div>
          </div><!-- trainer image -->
              <div class="trainer-details">
                   <h4><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h4>
                   <p><?php echo $trainer_designation  = fw_get_db_post_option(get_the_ID(), 'trainer_designation'); ?></p>
              </div><!-- trainer-details -->
        </div><!-- trainer-item -->
       <?php wp_reset_postdata(); endwhile; ?>       
      
              <div class="trainer-slide-icon">
                <div class="trainer-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                <div class="trainer-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
              </div>
        </div><!-- trainer-items -->
      </div><!-- container -->
   </div><!-- overlay -->
</section><!-- trainers -->
    <!--Trainers end here -->
