<?php 
if (!defined('FW')) die('Forbidden');


$about_title = $atts['about_title'];
$about_image = $atts['about_image'];
$content_title = $atts['content_title'];
$content_description = $atts['content_description'];



?>
<!--About start here -->
<div class="about">
  <div class="container">
    <?php if(!empty($about_title)): ?>
    <h2 class="section-header"><?php echo esc_html($about_title); ?></h2>
    <?php endif; ?>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="about-image">
          <img src="<?php echo esc_url($about_image['url'],'body-builder-about-page-full'); ?>" alt="about image" class="img-responsive">
        </div><!-- about image -->
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="about-content">
         <?php if(!empty($about_title)): ?>
          <h4><?php echo esc_html__($content_title); ?></h4>
         <?php endif; ?>
         <?php
          if(!empty($content_description)):?> 
           <?php echo wp_kses_post($content_description); ?>
          <?php endif;  ?>
        </div><!-- about-content -->
      </div>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- about -->
<!--About end here -->
    