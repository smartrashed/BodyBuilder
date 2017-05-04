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