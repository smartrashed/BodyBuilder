<?php 
if (!defined('FW')) die('Forbidden');


$testimonial_info = new Wp_Query(array(
    'post_type'=>'body_testmonial',
    'posts_per_page' => 4 ,
    
  ));
?>

<!--Testimonial start here -->
<div class="testimonial">
  <div class="overlay">
    <div class="container">
      <div class="testimonilas">
         
        <ul class="testimonial-images" role="tablist">
          <?php 
            $i = 1;
            while ($testimonial_info->have_posts()) : $testimonial_info->the_post() ?>
              <li role="presentation"<?php echo ( $i == 1 ) ? esc_attr( ' class=active' ) : ''; ?>><a href="#review-0<?php echo esc_attr($i); ?>" aria-controls="review-01" role="tab" data-toggle="tab"><?php the_post_thumbnail(); ?><span></span></a></li>
            <?php $i++; endwhile; ?>
         
        </ul><!-- testimonial;-images -->

        <div class="testimonial-items tab-content">
             
          <?php
          $i = 1;
          while ($testimonial_info->have_posts()) : $testimonial_info->the_post() ?>
          <div role="tabpanel" class="testimonial-item tab-pane<?php echo ( $i == 1 ) ? esc_attr( ' active' ) : ''; ?>" id="review-0<?php echo esc_attr($i); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-icon.png" alt="client icon" class="img-responsive">
            <h4><?php the_title(); ?>, <span><?php echo esc_html__($designation = fw_get_db_post_option(get_the_ID(), 'designation'));  ?></span></h4>
            <p><?php the_content(); ?></p>
          </div>
          

        <?php $i++; endwhile; ?>
        </div><!-- testimonial-items -->
         
      </div><!-- testimonial -->
    </div><!-- container -->
  </div><!-- overlay -->
</div><!-- testimonial -->
<!--Testimonial end here -->
