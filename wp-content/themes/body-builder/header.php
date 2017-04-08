<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package body-builder
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">	
		 <nav class="main-menu">
		        <div class="container">
		          <!-- Brand and toggle get grouped for better mobile display -->
			          <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				              <span class="sr-only">Toggle navigation</span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				            </button>
				            <?php
							if ( is_front_page() && is_home() ) : ?>
				            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo" class="img-responsive"></a>
				        	 <?php endif; ?>
			          </div>
		          <!-- Collect the nav links, forms, and other content for toggling -->
			          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			            <?php
							if( has_nav_menu( 'primary-menu' ) ) :
								wp_nav_menu( array(
									'menu_class'	=> 'menu-bar',
									'container'		=> false,
									'walker'		=> new BB_Walker_Nav_Menu()
								) );
							endif;
						
							?>
			          </div><!-- navbar-collapse -->
		        </div><!-- container -->
      	</nav>
	</header><!-- #masthead -->
 <!--Page Header start here -->
    <section class="page-header">
      <div class="container">
        <h3>Blog Page</h3>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><span>/</span></li>
          <li class="active">Blog Page</li>
        </ul>
      </div><!-- container -->
    </section><!-- page-header -->
    <!--Page Header end here -->
