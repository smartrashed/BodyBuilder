<?php 
if (!defined('FW')) die('Forbidden');


$partner_logos = $atts['partner_logos'];

?>
<!--Client start here -->
<section class="client">
  <div class="container">
    <div class="client-slider swiper-container">
      <div class="swiper-wrapper">
       <?php foreach ($partner_logos as $logo) :  ?>
        <div class="swiper-slide">
          <div class="client-item">
            <img src="<?php echo esc_url($logo['url']); ?>" alt="client image" class="img-responsive">
          </div><!-- client-item -->
        </div><!-- swiper-slide -->
       <?php endforeach; ?>
      </div>
    </div>
  </div><!-- container -->
</section><!-- client -->
<!--Client end here -->
    