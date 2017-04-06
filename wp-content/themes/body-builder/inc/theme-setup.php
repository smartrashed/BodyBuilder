<?php
/**
 * body-builder functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package body-builder
 */

if ( ! function_exists( 'body_builder_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function body_builder_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on body-builder, use a find and replace
	 * to change 'body-builder' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'body-builder', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'body-builder-logo', 259, 53, true );
        add_image_size( 'body-builder-banner-big-img', 1920, 914, true );
        add_image_size( 'body-builder-header', 252, 190, true );
        add_image_size( 'body-builder-about', 944, 612, true );
        add_image_size( 'body-builder-about-page-full', 670, 350, true );
        add_image_size( 'body-builder-main-page-3-column-img', 624, 400, true );
        add_image_size( 'body-builder-trainer-thumb', 234, 260, true );
        add_image_size( 'body-builder-testimonial-thumb', 150, 140, true );
        add_image_size( 'body-builder-client-item-thumb', 275, 136, true );
        add_image_size( 'body-builder-trainer-profile', 550, 576, true );


        add_image_size( 'body-builder-blog-list-related', 320, 260, true );
        add_image_size( 'body-builder-blog-grid', 370, 280, true );
        add_image_size( 'body-builder-blog-full-single', 750, 420, true );
        

        add_image_size( 'body-builder-vedio-gallery-full', 580, 380, true );
        add_image_size( 'body-builder-vedio-gallery-thumb', 370, 230, true );
        add_image_size( 'body-builder-img-gallery', 290, 200, true );
        add_image_size( 'body-builder-class-grid', 270, 200, true );
        add_image_size( 'body-builder-class-vedio-thumb', 370, 240, true );
        add_image_size( 'body-builder-custom-trainer', 390, 320, true );
        add_image_size( 'body-builder-class-single-fill', 750, 410, true );
        add_image_size( 'body-builder-all-thumb', 80, 80, true );



        add_image_size( 'body-builder-page-hader-bg', 1920, 220, true );
        add_image_size( 'body-builder-class-bg', 1920, 672, true );
        add_image_size( 'body-builder-footer-bg', 1920, 530, true );
        add_image_size( 'body-builder-fun-fact-bg', 1920, 300, true );
        add_image_size( 'body-builder-gallery-two-bg', 1920, 1196, true );
        add_image_size( 'body-builder-pricing-bg', 1920, 828, true );
        add_image_size( 'body-builder-testimonial-bg', 1920, 550, true );
        add_image_size( 'body-builder-trainer-bg', 1920, 684, true );
        add_image_size( 'body-builder-trainer-bg2', 1920, 758, true );

        add_image_size( 'body-builder-shop', 270, 260, true );
        add_image_size( 'body-builder-shop-single', 440, 550, true );
        

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'body-builder' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'body_builder_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'body_builder_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function body_builder_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'body_builder_content_width', 640 );
}
add_action( 'after_setup_theme', 'body_builder_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function body_builder_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'body-builder' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'body-builder' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'body_builder_widgets_init' );

