<?php
/**
 * body-builder functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package body-builder
 */

define( 'BODYBUILDER_ASSETS' , get_template_directory_uri() . '/assets' );

/**
 * Load Core
 */
require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/framework/BootsTrap.php';