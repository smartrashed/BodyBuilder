<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */

$trainer_designation  = fw_set_db_post_option(get_the_ID(), 'id', $attr );

var_dump($trainer_designation['trainer_designation']);

//$trainer_designation = $atts['trainer_designation'];
?>
		
	   	<div class="col-md-6 col-sm-12 col-xs-12">
            <div class="image">
				<?php
					if( has_post_thumbnail() ) :
						the_post_thumbnail('body-builder-trainer-profile');
					endif; ?>
            </div>
        </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="details">
              <h3><?php the_title(); ?></h3>
				<?php if (! empty ($trainer_designation)): ?>
             	 <span>1<?php echo esc_html__($trainer_designation); ?></span>
				<?php  endif; ?>
              <p><?php the_content(); ?></p>
              <ul>
                <li><p>Experience<span>:</span></p>
                	<?php if (! empty ($trainer_exprience)): ?>
                	<p>1<?php echo esc_html__($trainer_exprience); ?></p>
                	<?php  endif; ?>
                </li>
                <li><p>Mobile<span>:</span></p><p>+880 1234 567890</p></li>
                <li><p>Email<span>:</span></p><p>contact@yourmail.com</p></li>
                <li>
                  <p>Social<span>:</span></p>
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
              </ul>
              <div class="personal">
                <h4>Personal Training</h4>
                <p>Proactively incentivize scenarios market positioning items. Plagiarize competitive value through installed base partnership. Monotonectal coordinate optimal schemas rather top-line initiative.</p>
                <ul>
                  <li><p>Duration<span>:</span></p><p>3 Months</p></li>
                  <li><p>Course Fee<span>:</span></p><p>$ 99.00</p></li>
                </ul>

                  <a href="#" class="default-button">Contact Trainer</a>
              </div><!-- personal -->
            </div><!-- details -->
          </div>