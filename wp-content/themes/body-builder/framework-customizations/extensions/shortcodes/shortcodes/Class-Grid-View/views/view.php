<?php 
if (!defined('FW')) die('Forbidden');


$section_title = $atts['section_title'];


?>

    
<!--Class Grid start here -->
<section class="class-grid">
  <div class="container">
     <?php if(!empty ($section_title) ) : ?>
      <h2 class="section-header"><?php echo esc_html__($section_title,'body-builder'); ?></h2>
    <?php endif; ?>
    <div class="row">
       <?php $class_info = new Wp_Query(array(
              'post_type'=>'body_Class',
              'posts_per_page' => 8 ,
              
            ));
        ?>
        <?php while ($class_info->have_posts()): $class_info->the_post() ?>            
       <div class="col-md-3 col-sm-4 col-xs-12">
       <div class="class-item">
           <div class="image">
             <?php if(has_post_thumbnail() ): ?>
                  <?php the_post_thumbnail('body-builder-class-grid'); ?>
             <?php endif; ?>
           </div><!--image-->
           <div class="content">
             <h3><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h3>
             <?php $class_time  = fw_get_db_post_option(get_the_ID(), 'class_time'); ?>
             <span><?php  echo $class_time; ?></span>
           </div><!--content-->
         </div><!--class-item-->
     </div> 
      <?php wp_reset_postdata() ;  endwhile; ?>

    </div><!-- row -->
  </div><!-- container -->
</section><!-- class-grid -->
<!--Class Grid end here -->