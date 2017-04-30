<?php if (!defined('FW')) die('Forbidden');

// find the uri to the shortcode folder
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/home-1-About');
wp_enqueue_style(
    'fw-shortcode-home-1-About-shortcode',
    $uri . '/static/css/styles.css'
);
wp_enqueue_script(
    'fw-shortcode-home-1-About-shortcode',
    $uri . '/static/js/scripts.js'
);