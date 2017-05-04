<?php 
/**
 * Enqueue all theme scripts and styles
 *
 * @package body-builder
 * @author CodexCoder
 */

/**
 * Enqueue scripts and styles.
 */

function body_builder_scripts() {

    wp_enqueue_style('body-builder-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', BODYBUILDER_ASSETS . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', BODYBUILDER_ASSETS . '/css/font-awesome.min.css');
    wp_enqueue_style('flexslider', BODYBUILDER_ASSETS . '/css/flexslider.css');
    wp_enqueue_style('swiper', BODYBUILDER_ASSETS . '/css/swiper.min.css');
    wp_enqueue_style('lightcase', BODYBUILDER_ASSETS . '/css/lightcase.css.css');
    //wp_enqueue_style('reset-css', BODYBUILDER_ASSETS . '/css/wp-reset.css');
    wp_enqueue_style('body-builder-style', BODYBUILDER_ASSETS . '/css/style.css');
    wp_enqueue_style('body-builder-responsive', BODYBUILDER_ASSETS . '/css/responsive.css');       

    //wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key='.$gmap_api, null, null, true);
    //wp_enqueue_script('gmap', BODYBUILDER_ASSETS . '/assets/js/gmaps.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap', BODYBUILDER_ASSETS . '/js/bootstrap.js', array('jquery'), false, true);
    wp_enqueue_script('lightcase', BODYBUILDER_ASSETS . '/js/lightcase.js', array('jquery'), false, true);
    wp_enqueue_script('cloud-fair', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery') ,false, true);
    wp_enqueue_script('counterup', BODYBUILDER_ASSETS . '/js/jquery.counterup.min.js', array('jquery'), '1.0.0', false, true);
    wp_enqueue_script('swiper', BODYBUILDER_ASSETS . '/js/swiper.jquery.min.js', array('jquery'), false, true);
    wp_enqueue_script('flexslider', BODYBUILDER_ASSETS . '/js/jquery.flexslider-min.js', array('jquery'), false, true); 
    wp_enqueue_script('custom', BODYBUILDER_ASSETS . '/js/custom.js', array('jquery'), false, true);
   
}

add_action( 'wp_enqueue_scripts', 'body_builder_scripts', 90);