<?php 
if (!defined('FW')) die('Forbidden');


$bd_image = $atts['bg_image'];
$section_title = $atts['section_title'];

$trainer_facebook =$atts['trainer_facebook'];
$trainer_twitter =$atts['trainer_twitter'];
$trainer_linkedin =$atts['trainer_linkedin'];

$see_more = $atts['see_more'];


?>

<!--Trainers start here -->
<section class="trainers trainers-two">
<div class="overlay">
  <div class="container">
    <?php if(!empty($section_title)): ?>
    <h2 class="section-header"><?php echo esc_html__($section_title , 'body-builder'); ?></h2>
    <?php endif; ?>

    <div class="trainer-items">
      <?php
        $trainer_info = new Wp_Query(array(
         'post_type'=>'body_trainer',
         'posts_per_page' => 3 ,
      
        )); ?>
      <?php while($trainer_info->have_posts()): $trainer_info->the_post(); ?>
      <div class="trainer-item">
        <div class="trainer-image">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('body-builder-custom-trainer'); ?>
             <?php endif; ?>
          <div class="overlay"></div>

              <div class="trainer-social">
                <a href="<?php esc_url($trainer_twitter); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="<?php esc_url($trainer_facebook); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?php esc_url($trainer_linkedin); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </div>

        </div><!-- trainer image -->
        <div class="trainer-details">
          <h4><a href="<?php esc_url(the_permalink());?>"><?php the_title(); ?></a></h4>
          <p><?php echo $trainer_designation  = fw_get_db_post_option(get_the_ID(), 'trainer_designation'); ?></p>
        </div><!-- trainer-details -->
      </div><!-- trainer-item -->
      
      <?php endwhile; ?>
    </div><!-- trainer-items -->
    <div class="trainers-button">
      <a href="#" class="default-button hover-effect-two">See More</a>
    </div><!-- trainers-button -->
  </div><!-- container -->
</div><!-- overlay -->
</section><!-- trainers -->
<!--Trainers end here -->
