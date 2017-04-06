<?php
/**
 * The archive  template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */

get_header(); ?>

	<section <?php post_class('blog-posts padding-130') ?> >
		<div class="container">
			<div class="row">
          		<div class="col-md-8 col-sm-12 col-xs-12">
          			
		             
						<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>

								<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'blog' );

								endwhile;

								the_posts_navigation(); ?>
								<div class="pagination">
					              <ul>
					                <li><a href=""><i class="fa fa-angle-double-left" aria-hidden="true"></i> Prev</a></li>
					                <li><a href="">1</a></li>
					                <li><a href="">2</a></li>
					                <li>...</li>
					                <li><a href="">8</a></li>
					                <li><a href="">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
					              </ul>
					              <span>Page 1 of 8</span>
		            			</div>
							<?php 
							else :

								get_template_part( 'template-parts/content', 'none' );

						endif; ?>
						
					
				</div>
					
					<?php // get_sidebar(); ?>
			</div>
		</div><!-- #container -->
	</section><!-- #section -->

<?php
get_footer();
