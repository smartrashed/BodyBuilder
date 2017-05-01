<?php 
if (!defined('FW')) die('Forbidden');


$contact_us = $atts['contact_us'];

/*  Address Info */
$address_title = $atts['address_title'];
$address_description = $atts['address_description'];
$address_icon = $atts['address_icon'];

/*  Phone Info */
$contct_title = $atts['contct_title'];
$contact_description = $atts['contact_description'];
$contact_icon = $atts['contact_icon'];

/*  Phone Info */
$email_title = $atts['email_title'];
$email_description = $atts['email_description'];
$email_icon = $atts['email_icon'];



?>
<!--Contact us start here -->
<section class="contact-us">
  <div class="padding-130">
    <div class="container">
      <div class="contact-info">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="icon">
              <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            </div>
            <div class="content">
              <?php if(!empty($address_title)): ?>
              <h4><?php echo esc_html__($address_title,'body-builder') ?></h4>
              <?php endif; ?>
              <?php if(!empty($address_description)): ?>
              <p><?php echo esc_html__($address_description,'body-builder') ?></p>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="icon">
              <span><i class="fa fa-phone" aria-hidden="true"></i></span>
            </div>
            <div class="content">
              <h4>Phone</h4>
              <p>+880 1741 491457, 02-123456 </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="icon">
              <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
            </div>
            <div class="content">
              <h4>E-mail</h4>
              <p>contact@yourmail.com</p>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- contact-info -->
      <div class="contact-form">
        <h3>Get in Touch</h3>
        <form action="/">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" placeholder="Name" class="contact-input">
              <input type="text" name="email" placeholder="Email" class="contact-input">
              <input type="text" name="phone" placeholder="Phone" class="contact-input">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea name="messege" rows="6" class="contact-input">Messege</textarea>
            </div>
          </div><!-- row -->
          <input type="submit" name="submit" value="Submit" class="contact-submit">
        </form>
      </div><!-- contact-form -->
    </div><!-- container -->
  </div>
  <div class="contact-map" id="map_canvas">
    
  </div><!-- contact-map -->
</section><!-- contact-details -->
    <!--Contact us end here -->