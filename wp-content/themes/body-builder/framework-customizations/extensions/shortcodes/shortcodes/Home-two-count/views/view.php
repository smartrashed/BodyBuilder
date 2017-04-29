<?php 
if (!defined('FW')) die('Forbidden');


$title1 = $atts['title1'];
$count1 = $atts['count1'];
$title2 = $atts['title2'];
$count2 = $atts['count2'];
$title3 = $atts['title3'];
$count3 = $atts['count3'];
$title4 = $atts['title4'];
$count4 = $atts['count4'];


?>
  <!--Gallery start here -->
     <!--Fun facts start here -->
    <section class="fun-facts">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-12">
              <div class="fun-item">
                <span class="counter"><?php echo esc_html__($count1); ?></span><span>+</span>
                <p><?php echo esc_html__($title1); ?></p>
              </div><!-- fun item -->
            </div>
            <div class="col-md-3 col-sm-3 col-12">
              <div class="fun-item">
                  <span class="counter"><?php echo esc_html__($count2); ?></span>
                <p><?php echo esc_html__($title2); ?></p>
              </div><!-- fun item -->
            </div>
            <div class="col-md-3 col-sm-3 col-12">
              <div class="fun-item">
                <span class="counter"><?php echo esc_html__($count3); ?></span><span>+</span>
                <p><?php echo esc_html__($title3); ?></p>
              </div><!-- fun item -->
            </div>
            <div class="col-md-3 col-sm-3 col-12">
              <div class="fun-item">
                  <span class="counter"><?php echo esc_html__($count4); ?></span>
                <p><?php echo esc_html__($title4); ?></p>
              </div><!-- fun item -->
            </div>
          </div><!-- row -->
        </div><!-- container -->
      </div><!-- overlay -->
    </section><!-- fun facts -->
    <!--Fun facts end here -->
    