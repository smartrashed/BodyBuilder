div<?php 
if (!defined('FW')) die('Forbidden');


$section_title = $atts['section_title'];
$gallery_items = $atts['gallery'];



?>
<!--Gallery start here -->
<div class="video-gallery padding-130">
  <div class="container">
    
      <?php if(!empty($section_title)): ?>
      <h2 class="section-header"><?php echo esc_html__( $section_title ); ?></h2>
      <?php endif; ?>
     
      <div class="bottom">
        <div class="row">
         <?php
         $i = 1;
         foreach ($gallery_items as $gallery) : ?>
         <div class="<?php echo ( $i >= 2 ) ? 'col-sm-4 col-xs-12' : 'col-md-6' ?>">
              <div class="gallery-item">
                <div>
                <?php if(!empty($gallery['thumb'])): ?>
                <img src="<?php echo esc_url($gallery['thumb']['url']); ?>" alt="gallery image" class="img-responsive">
                <?php endif; ?>
                <a href="<?php echo esc_url($gallery['url']); ?>" class="gvideo-icon" data-rel="lightcase"><img src="<?php echo esc_url($gallery['thumb_icon']['url']); ?>" alt="video icon" class="img-reaponsive"></a>
                </div>
                <?php if(!empty($gallery['title'])): ?>
                <p><?php echo esc_html__($gallery['title'], 'body-builder'); ?></p>
                <?php endif; ?>
              </div><!-- gallery-item -->
          </div>
        <?php $i++; endforeach ?> 
        </div><!-- row -->
      </div><!-- bottom -->
     
  </div><!-- overlay -->
</div><!-- sectio-->


  