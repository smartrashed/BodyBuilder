<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package body-builder
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function body_builder_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'body_builder_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function body_builder_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'body_builder_pingback_header' );

function body_builder_social_share( $post_id ){ ?>
    <ul class="gym-share">
        <?php $pinterest_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' ); ?>
        <li><span><?php esc_html_e('Share:','body-builder'); ?></span></li>
        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink( $post_id ) ); ?>"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/home?status=<?php the_title() ?> <?php echo urlencode( get_permalink( $post_id ) ); ?>"><i class="fa fa-twitter"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink( $post_id ) ); ?>&title=<?php the_title(); ?>"><i class="fa fa-linkedin"></i></a></li>
        <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink( $post_id ) ); ?>"><i class="fa fa-google-plus"></i></a></li>
        <li><a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink() ); ?>&media=<?php echo $pinterest_img[0] ?>&description=<?php the_title(); ?>"><i class="fa fa-camera"></i></a></li>
        
    </ul>
<?php }


/**
 * Event Hub related posts
 */
function body_builder_related_posts( $post_id ) {
    $related_posts = new WP_Query( array( 
        'category__in'      => wp_get_post_categories( $post_id ),
        'posts_per_page'    => 2,
        'post__not_in'      => array( $post_id ) ) 
    );

    if( $related_posts->have_posts() ) : ?>

        <div class="related-post">
            <h3><?php esc_html_e( 'Related Post', 'body-builder' ); ?></h3>
           

            <?php 
            while( $related_posts->have_posts() ) : $related_posts->the_post(); ?>

                
                    <div class="post-item">
                            <div class="image">
                              <?php
                              if( has_post_thumbnail() ) :
                                the_post_thumbnail('body-builder-blog-grid');
                              endif; ?>
                            </div><!-- image -->
                            <div class="content">
                              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                              <ul class="post-meta">
                                <?php body_builder_posted_on(); ?>
                              </ul>
                              <p><?php echo wp_trim_words( get_the_content(), 15, false ); ?></p>
                              <a href="<?php the_permalink();?>" class="default-button"><?php echo  esc_html__('Read More','body-builder'); ?></a>
                            </div><!-- content -->
                        </div><!-- post item -->
            <?php endwhile; ?>
       
        </div><!-- /.ccr-section related-post -->

    <?php 
        wp_reset_postdata();

    endif;
}