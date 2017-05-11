<?php 
if (!defined('FW')) die('Forbidden');



$extraclass = $atts['extra_body_class'];
$post_limit = $atts['post_limit'];


?>
  <!--Gallery start here -->
<div class="gallery <?php echo esc_attr($extraclass) ?>">

      <?php $blog_post = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $post_limit

      )); ?>

      <?php while ( $blog_post->have_posts() ) : $blog_post->the_post() ?>

      <div class="gallery-top">
        <div class="image">
          <?php   if( has_post_thumbnail() ) : ?> 
          <a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail(); ?></a>
          <?php endif; ?>
        </div>
        <div class="content">
          <h2><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_content();  ?></p>
          <a href="<?php esc_url(the_permalink()); ?>"><?php _e('Read More','body-builder')?></a>
        </div>
      </div><!-- gallery top -->
    <?php   wp_reset_postdata(); endwhile;   ?>

     

</div><!-- gallery -->
    <!--Gallery end here -->
    