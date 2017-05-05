<?php
/**
 * @package body-builder
 * @author CodexCoder 
 */

/**
 * Remove WooCommerce Breadcrumbs
 */
add_action( 'init', 'body_builder_remove_wc_breadcrumbs' );

function body_builder_remove_wc_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}


/*
* Romoving Result Count
*/
add_action( 'init', 'remove_woocommerce_before_shop_loop_item' );

function remove_woocommerce_before_shop_loop_item() {
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}


/*
* Romoving Ordering
*/
add_action( 'init', 'remove_woocommerce_before_shop_loop_title' );

function remove_woocommerce_before_shop_loop_title() {
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}

/*
* Romoving Ordering
*/
add_action( 'init', 'remove_woocommerce_add_to_cart' );

function remove_woocommerce_add_to_cart() {
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}

/*
* Adding a New Class before thumbnail
*/
add_action( 'init', 'adding_images_class_before_thumbnail' );

function adding_images_class_before_thumbnail() {
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
}

