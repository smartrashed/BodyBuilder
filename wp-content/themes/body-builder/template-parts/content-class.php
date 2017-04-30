<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */

$class_time  = fw_get_db_post_option(get_the_ID(), 'class_time');
$class_end_time  = fw_get_db_post_option(get_the_ID(), 'class_end_time');
$trainer_name  = fw_get_db_post_option(get_the_ID(), 'trainer_name');
$course_duration  = fw_get_db_post_option(get_the_ID(), 'course_duration');
$benifit_title  = fw_get_db_post_option(get_the_ID(), 'benifit_title');
$class_benifits  = fw_get_db_post_option(get_the_ID(), 'class_benifits');
$join_now  = fw_get_db_post_option(get_the_ID(), 'join_now');


/*class Cocial Share /*Social Link Info*/
$class_facebook  = fw_get_db_post_option(get_the_ID(), 'class_facebook');
$class_twitter  = fw_get_db_post_option(get_the_ID(), 'class_twitter');
$class_linkedin  = fw_get_db_post_option(get_the_ID(), 'class_linkedin');
$class_behance  = fw_get_db_post_option(get_the_ID(), 'class_behance');
$class_dribble  = fw_get_db_post_option(get_the_ID(), 'class_dribble');

?>


<div class="col-md-8 col-sm-12 col-xs-12">
<div class="class-single-item">
  <div class="image">
         <?php
          if( has_post_thumbnail() ) :
            the_post_thumbnail('body-builder-blog-full-single');
          endif; ?>
  </div>
  <div class="content">
    <h2><?php the_title(); ?></h2>
    <ul>
      <?php if(!empty($class_time)) : ?>
      <li><?php _e('Class Time :','body-builder') ?> <?php echo esc_html__( $class_time, 'body-builder' ); ?></li>
      <?php endif; ?>
      <li><span>/</span></li>
        <?php if(!empty($trainer_name)) : ?>
      <li><?php _e('Trainer :','body-builder') ?>  <a href="<?php the_permalink(); ?>"><?php echo esc_html__( $trainer_name, 'body-builder' ); ?></a></li>
        <?php endif; ?>
      <li><span>/</span></li>
        <?php if(!empty($course_duration)) : ?>
      <li><?php _e('Duration :','body-builder'); ?><?php echo esc_html__( $course_duration, 'body-builder' ); ?></li>
        <?php endif; ?>
    </ul>
    <p><?php the_content(); ?></p>
    <div class="bottom">
      <input type="submit" name="join-now" value="Join Now">
      <ul class="gym-share">
        <li><span>Share:</span></li>
        <?php if( ! empty( $class_facebook ) ) :
          echo '<li><a href="'. esc_url( $class_facebook ) .'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
          endif; ?>
         <?php if( ! empty( $class_twitter ) ) :
          echo '<li><a href="'. esc_url( $class_twitter ) .'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
          endif; ?>
        <?php if( ! empty( $class_linkedin ) ) :
          echo '<li><a href="'. esc_url( $class_linkedin ) .'"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
          endif; ?>
        <?php if( ! empty( $class_behance ) ) :
          echo '<li><a href="'. esc_url( $class_behance ) .'"><i class="fa fa-behance" aria-hidden="true"></i></a></li>';
          endif; ?>
        <?php if( ! empty( $class_dribble ) ) :
          echo '<li><a href="'. esc_url( $class_dribble ) .'"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>';
          endif; ?>
         </ul>
    </div>
  </div>
</div><!-- class-single-item -->
<div class="class-benifits">
  <h3><?php echo $benifit_title ?></h3>
  <p><?php echo wp_kses_post($class_benifits); ?></p>
</div><!-- class-benifits -->
<?php
$related_posts = new WP_Query( array(
        'post_type'         => 'body_Class',
        'posts_per_page'    => 2,
        'post__not_in'      => array( $post_id ) ) 
    );

    if( $related_posts->have_posts() ) : ?>

        <div class="related-class">
            <h3><?php esc_html_e( 'Related Post', 'body-builder' ); ?></h3>
        
            <?php 
            while( $related_posts->have_posts() ) : $related_posts->the_post(); ?>

                
                    <div class="class-item">
                            <div class="image">
                              <?php
                              if( has_post_thumbnail() ) :
                                the_post_thumbnail('body-builder-class-grid');
                              endif; ?>
                            </div><!-- image -->
                            <div class="content">
                              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                              <?php if(!empty($class_time)):?>
                              <span><?php echo esc_html__($class_time , 'body-builder'); ?></span>
                              <?php endif; ?>
                              <p><?php echo wp_trim_words( get_the_content(), 15, false ); ?></p>
                              
                            </div><!-- content -->
                        </div><!-- post item -->
            <?php endwhile; ?>
       
        </div><!-- /.ccr-section related-post -->

    <?php 
        wp_reset_postdata();
endif;