<?php
if (!defined('FW')) die('Forbidden');


$cfg = array(
    'page_builder' => array(
        'title'         => esc_html__('Image Gallery', 'body-builder'),
        'description'   => esc_html__('This Shortcode will Gallery Page', 'body-builder'),
        'tab'           => esc_html__('Body Builder', 'body-builder'),
        'popup_size'    => 'medium' // can be large, medium or small
    )
);