 <?php


$title  = $atts['banner_title'];
$subtitle  = $atts['banner_sub_title'];

/*Banner Left Data Showing */
$banner_left_image  = $atts['banner_left_image'];
$schedule_title  = $atts['schedule_title'];
$fullday_office  = $atts['fullday_office'];
$half_day_office  = $atts['half_day_office'];
$close_day_office  = $atts['close_day_office'];

/*Banner Right Data Showing */
$banner_right_image  = $atts['banner_right_image'];
//var_dump($banner_right_image);
$right_title  = $atts['right_title'];
$right_side_link  = $atts['right_side_link'];


 ?>
    <!--Banner start here -->
    <section class="banner">
      <div class="container">
        <div class="banner-content">
			<?php if(!empty($title)) : ?>
        	  <h2><?php echo  wp_kses_post($title);  ?></h2>
			<?php endif; ?>
			<?php if(!empty($subtitle)) : ?>
         	  <p><?php echo esc_html__($subtitle); ?></p>
          	<?php endif; ?>
        </div>
      </div><!-- container -->
    </section><!-- banner -->
    <div class="banner-items">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="banner-item">
              <div class="image hvr-bob">
				<?php if(!empty($banner_left_image)) : ?>
                <img src="<?php echo esc_url($banner_left_image['url']); ?>" alt="image" class="img-responsive">
              	<?php endif; ?>
              </div>
              <div class="content">
              	<?php if(!empty($schedule_title)) : ?>
                <h4><?php echo esc_html__($schedule_title); ?></h4>
           		 <?php endif; ?>
                <ul>
                	<?php if(!empty($fullday_office)) : ?>
                  <li><?php echo  wp_kses_post($fullday_office);  ?></li>
                  	<?php endif; ?>
					<?php if(!empty($half_day_office)) : ?>
                  <li><?php echo  wp_kses_post($half_day_office);  ?></li>
                  <?php endif; ?>
                  <?php if(!empty($close_day_office)) : ?>
                  <li><?php echo  wp_kses_post($close_day_office);  ?></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div><!-- banner-item -->
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="banner-item">
              <div class="image hvr-bob">
                <?php if(!empty($banner_right_image)) : ?>
                <img src="<?php echo esc_url($banner_right_image['url']); ?>" alt="image" class="img-responsive">
              	<?php endif; ?>
              </div>
              <div class="content">
               <?php if(!empty($right_title)) : ?>
                <h4><?php echo esc_html__($right_title); ?></h4>
           		 <?php endif; ?>
                <ul>
                  <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Get Started</a></li>
                </ul>
              </div>
            </div><!-- banner-item -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- banner items -->
    <!--Banner end here -->