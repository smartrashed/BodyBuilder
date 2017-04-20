<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */
?>


<div <?php post_class('single-post'); ?>>
 	<div class="image">
 			<?php
			if( has_post_thumbnail() ) :
				the_post_thumbnail('body-builder-blog-full-single');
			endif; ?>
	 </div><!-- image -->
		 <div class="content">
			<?php
			if ( is_single() ) :
				the_title( '<h2>', '</h2>' );
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<ul class="post-meta">
              <?php body_builder_posted_on(); ?>
            </u><!-- .entry-meta -->
			<?php
			endif; ?>
			<!-- .entry-header -->

	
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'body-builder' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'body-builder' ),
					'after'  => '</div>',
				) );
			?>
			<div class="bottom">
              <?php body_builder_entry_footer(); ?> 

              <?php body_builder_social_share($post->ID); ?>
        	</div>
		
		</div>	<!-- .entry-content -->
</div><!--end single -->
	
<?php body_builder_related_posts( $post->ID ); ?>