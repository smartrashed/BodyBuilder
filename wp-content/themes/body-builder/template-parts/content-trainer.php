<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */
/*Personal  Info*/
$trainer_designation  = fw_get_db_post_option(get_the_ID(), 'trainer_designation');
$trainer_exprience  = fw_get_db_post_option(get_the_ID(), 'trainer_exprience');
$trainer_mobile  = fw_get_db_post_option(get_the_ID(), 'trainer_mobile');
$trainer_email  = fw_get_db_post_option(get_the_ID(), 'trainer_email');


/*Social Link Info*/
$trainer_facebook  = fw_get_db_post_option(get_the_ID(), 'trainer_facebook');
$trainer_twitter  = fw_get_db_post_option(get_the_ID(), 'trainer_twitter');
$trainer_linkedin  = fw_get_db_post_option(get_the_ID(), 'trainer_linkedin');
$trainer_behance  = fw_get_db_post_option(get_the_ID(), 'trainer_behance');
$trainer_dribble  = fw_get_db_post_option(get_the_ID(), 'trainer_dribble');

/*Training  Info*/
$course_title  = fw_get_db_post_option(get_the_ID(), 'course_title');
$course_description  = fw_get_db_post_option(get_the_ID(), 'course_description');
$course_duration  = fw_get_db_post_option(get_the_ID(), 'course_duration');
$course_fee  = fw_get_db_post_option(get_the_ID(), 'course_fee');
$trainer_Contact  = fw_get_db_post_option(get_the_ID(), 'trainer_Contact');


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
             	 <span><?php echo esc_html__($trainer_designation); ?></span>
				<?php  endif; ?>
              <p><?php the_content(); ?></p>
              <ul>
                <li><p>Experience<span>:</span></p>
                	<?php if (! empty ($trainer_exprience)): ?>
                	<p><?php echo esc_html__($trainer_exprience); ?></p>
                	<?php  endif; ?>
                </li>
                <li><p>Mobile<span>:</span></p>
					<?php if (! empty ($trainer_mobile)): ?>
                	<p><?php echo esc_html__($trainer_mobile); ?></p>
					<?php endif; ?>
                </li>
                <li><p>Email<span>:</span></p>
                	<?php if (! empty ($trainer_email)): ?>
                	<p><?php echo esc_html__($trainer_email); ?></p>
					<?php endif; ?>
                </li>
                <li>
                  <p>Social<span>:</span></p>
                    <ul>
                      <?php if( ! empty( $trainer_facebook ) ) :
                        echo '<li><a href="'. esc_url( $trainer_facebook ) .'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
                        endif; ?>
                       <?php if( ! empty( $trainer_twitter ) ) :
                        echo '<li><a href="'. esc_url( $trainer_twitter ) .'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
                        endif; ?>
                      <?php if( ! empty( $trainer_linkedin ) ) :
                        echo '<li><a href="'. esc_url( $trainer_linkedin ) .'"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
                        endif; ?>
                      <?php if( ! empty( $trainer_behance ) ) :
                        echo '<li><a href="'. esc_url( $trainer_behance ) .'"><i class="fa fa-behance" aria-hidden="true"></i></a></li>';
                        endif; ?>
                  	  <?php if( ! empty( $trainer_dribble ) ) :
                        echo '<li><a href="'. esc_url( $trainer_dribble ) .'"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>';
                        endif; ?>
                    </ul>
                </li>
              </ul>
              <div class="personal">
				<?php if (!empty($course_title)) :?>
                <h4><?php echo esc_html__($course_title); ?></h4>
				<?php endif; ?>
				<?php if (!empty($course_description)) :?>
                <p><?php echo esc_html__($course_description); ?></p>
                <?php endif; ?>
                <ul>
                  <li><p>Duration<span>:</span></p><?php if (!empty($course_duration)) :?><p><?php echo esc_html__($course_duration); ?></p><?php endif; ?></li>
                  <li><p>Course Fee<span>:</span></p><?php if (!empty($course_fee)) :?><p><?php echo esc_html__($course_fee); ?></p><?php endif; ?></li>
                </ul>

                  <a href="#" class="default-button">Contact Trainer</a>
              </div><!-- personal -->
            </div><!-- details -->
          </div>