<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package body-builder
 */

get_header(); ?>

	<section class="trainer-profile padding-130">
      	<div class="container">
       		 <div class="row">
          		

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'trainer' );


							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
						
				

				<?php //get_sidebar(); ?>
			</div>
		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
