<?php 
if (!defined('FW')) die('Forbidden');


$about_title = $atts['about_title'];
$about_image = $atts['about_image'];
$content_title = $atts['content_title'];
$content_description = $atts['content_description'];



?>
  <!--About start here -->
    <section class="about">
      <div class="container">
        <?php if(!empty($about_title)): ?>
        <h2 class="section-header"><?php echo esc_html__($about_title,'body-builder') ?></h2>
        <?php endif; ?>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-image">
              <img src="<?php echo esc_url($about_image['url']); ?>" alt="about image" class="img-responsive">
            </div><!-- about image -->
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-content">
              <h4><?php echo esc_html__($content_title,'body-builder'); ?></h4>
             
              <p><?php echo wp_kses_post($content_description); ?></p>
            </div><!-- about-content -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- about -->
    <!--About end here -->
    