<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package body-builder
 * @author CodexCoder
 *
 */

function body_builder_widget_init() {

	register_sidebar( array(
		'name'			=> esc_html__( 'Right Sidebar', 'body-builder' ),
		'id'			=> 'body-builder-right-widget',
		'description'	=> esc_html__( 'Add widget here to customize the Right Sidebar', 'body-builder' ),
		'before_widget'	=> '<div class="sidebar-item">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="sidebar-title">',
		'after_title'	=> '</h3>'
	) );
	
	register_sidebar( array(
		'name'			=> esc_html__( 'Footer Sidebar', 'body-builder' ),
		'id'			=> 'body-builder-footer-widget',
		'description'	=> esc_html__( 'Add widget here to customize the footer', 'body-builder' ),
		'before_widget'	=> '<div class="col-md-4 col-sm-6 col-xs-12"><div class="footer-widget">',
		'after_widget'	=> '</div></div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>'
	) );
	
	register_sidebar( array(
		'name'			=> esc_html__( 'Footer Newslwtter', 'body-builder' ),
		'id'			=> 'body-builder-footer-newsletter',
		'description'	=> esc_html__( 'Add widget here to customize the footer', 'body-builder' ),
		'before_widget'	=> '<div class="col-md-4 col-sm-6 col-xs-12"><div class="footer-about">',
		'after_widget'	=> '</div></div>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>'
	) );



}

add_action( 'widgets_init', 'body_builder_widget_init' );