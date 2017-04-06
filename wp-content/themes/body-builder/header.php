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
		            <ul class="menu-bar">
		              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
		                <ul class="dropdown-menu">
		                  <li><a href="index.html">Home Style One</a></li>
		                  <li><a href="home-page-02.html">Home Style Two</a></li>
		                </ul>
		              </li>
					  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
		                <ul class="dropdown-menu">
							<li><a href="about.html">About Us</a></li>
							<li class="dropdown-submenu"><a href="#" class="test" data-toggle="dropdown-submenu" role="button" aria-haspopup="true" aria-expanded="false">Trainers</a>
								<ul>
									<li><a href="our-trainers.html">Our Trainers</a></li>
									<li><a href="trainer-profile.html">Trainer Profile</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu"><a href="#" class="test" data-toggle="dropdown-submenu" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
								<ul>
								  <li><a href="video-gallery.html">Video Gallery</a></li>
								  <li><a href="image-gallery.html">Image Gallery</a></li>
								</ul>
							</li>
		                </ul>
		              </li>
		              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Classes</a>
		                <ul class="dropdown-menu">
		                  <li><a href="class-grid.html">Class Grid View</a></li>
		                  <li><a href="class-list.html">Class List View</a></li>
		                  <li><a href="class-single.html">Class Single</a></li>
		                </ul>
		              </li>
		              <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
		                <ul class="dropdown-menu">
		                  <li class="active"><a href="blog-page.html">News List View</a></li>
		                  <li><a href="blog-grid.html">News Grid View</a></li>
		                  <li><a href="blog-large-image.html">News Large Image</a></li>
		                  <li><a href="single.html">News Single</a></li>
		                </ul>
		              </li>
		              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
		                <ul class="dropdown-menu">
		                  <li><a href="shop-page.html">Shop Page</a></li>
		                  <li><a href="product-page.html">Product Page</a></li>
		                  <li><a href="shop-cart.html">Shop Cart</a></li>
		                </ul>
		              </li>
		              <li><a href="contact-us.html">Contact</a></li>
		              <li class="phone"><a href="#"><span><i class="fa fa-phone-square" aria-hidden="true"></i></span> 01234-567890</a></li>

		            </ul>
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
