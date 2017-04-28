<?php 
if (!defined('FW')) die('Forbidden');


$testimonial_info = new Wp_Query(array(
    'post_type'=>'body_testmonial',
    'posts_per_page' => 1 ,
    
  ));
?>

<!--Testimonial start here -->
<section class="testimonial">
  <div class="overlay">
    <div class="container">
      <div class="testimonilas">
        <ul class="testimonial-images" role="tablist">
          <li role="presentation" class="active"><a href="#review-01" aria-controls="review-01" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial_02.jpg" alt="client image" class="img-responsive"><span></span></a></li>
          <li role="presentation"><a href="#review-02" aria-controls="review-02" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial_02.jpg" alt="client image" class="img-responsive"><span></span></a></li>
          <li role="presentation"><a href="#review-03" aria-controls="review-03" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial_03.jpg" alt="client image" class="img-responsive"><span></span></a></li>
          <li role="presentation"><a href="#review-04" aria-controls="review-04" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial_04.jpg" alt="client image" class="img-responsive"><span></span></a></li>
        </ul><!-- testimonial-images -->

        <div class="testimonial-items tab-content">
          <?php while ($testimonial_info->have_posts()) : $testimonial_info->the_post() ?>
            
          <div role="tabpanel" class="testimonial-item tab-pane active" id="review-01">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-icon.png" alt="client icon" class="img-responsive">
            <h4><?php the_title(); ?>, <span><?php echo esc_html__($designation = fw_get_db_post_option(get_the_ID(), 'designation'));  ?></span></h4>
            <p><?php the_content(); ?></p>
          </div>

         <?php endwhile; ?>
        </div><!-- testimonial-items -->
      </div><!-- testimonial -->
    </div><!-- container -->
  </div><!-- overlay -->
</section><!-- testimonial -->
<!--Testimonial end here -->
