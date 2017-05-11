<?php 
if (!defined('FW')) die('Forbidden');

$section_title = $atts['section_title'];
$image_galleries = $atts['image_gallery'];
$overlay_icon = $atts['overlay_icon'];
$extraclass = $atts['extra_body_class'];
?>
<!--Gallery start here -->
<div class="image-gellary padding-130 <?php echo esc_attr($extraclass) ?>">
    <div class="container">
      <?php if(!empty($section_title)): ?>
      <h2 class="section-header"><?php echo esc_html__( $section_title ); ?></h2>
      <?php endif; ?>
     
     
        <div class="gallery-images">
         <?php foreach ($image_galleries as $gallery ): ?>
          <div class="gallery-item">
            <div>
              <img src="<?php echo esc_url($gallery['url']); ?>" alt="gallery image" class="img-responsive">
              <div class="overlay"></div><!-- overlay -->
              <a href="<?php echo esc_url($gallery['url']); ?>" class="image-icon" data-rel="lightcase:myCollection"><img src="<?php echo esc_url($overlay_icon['url']); ?>" alt="gallery image" class="img-responsive"></a>
            </div>
          </div><!-- gallery-item -->
          <?php endforeach; ?>
        </div><!-- gallery-images -->

    </div><!-- container -->
</div><!--Gallery end here -->
    