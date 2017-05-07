<?php
/**
 * @package body-builder
 * @author CodexCoder 
 */
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 8;' ), 20 );
/**
 * Remove WooCommerce Breadcrumbs
 */
add_action( 'init', 'body_builder_remove_wc_breadcrumbs' );

function body_builder_remove_wc_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}
/*
* Removing Sale flash Shop Page
*/

add_action('init','remove_woocommerce_sale_flash');

function remove_woocommerce_sale_flash(){
	remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
}
/*
* Removing Sale flash Single Page
*/

add_action('init','remove_woocommerce_single_sale_flash');

function remove_woocommerce_single_sale_flash(){
	remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash',10);
}

/*
* Removing Product Ratings on shop page
*/

add_action('init','remove_woocommerce_shop_page_product_ratings');

function remove_woocommerce_shop_page_product_ratings(){
	remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
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

/**
 * Remove woocommerce_template_loop_product_title 
 */
add_action( 'init', 'body_builder_remove_woocommerce_template_loop_product_title' );
function body_builder_remove_woocommerce_template_loop_product_title() {
	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
}

/**
 * Insert woocommerce_template_loop_product_title 
 */
add_action( 'woocommerce_shop_loop_item_title', 'body_builder_woocommerce_shop_loop_item_title', 10 );
if( ! function_exists( 'body_builder_woocommerce_shop_loop_item_title' ) ) {
	function body_builder_woocommerce_shop_loop_item_title() {
		echo '<h4><a href="' . esc_url( get_the_permalink() ) . '">' . get_the_title() . '</a></h4>';
	}
}

/*
* Romoving Ordering
*/
add_action( 'init', 'remove_woocommerce_related_product' );

function remove_woocommerce_related_product() {
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}