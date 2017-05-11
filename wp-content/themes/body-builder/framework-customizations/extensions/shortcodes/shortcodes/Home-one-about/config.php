<?php

if (!defined('FW')) die('Forbidden');

$cfg = array(
    'page_builder' => array(
        'title'         => esc_html__('Home Page One About', 'body-builder'),
        'description'   => esc_html__('This Shortcode will use Homepage', 'body-builder'),
        'tab'           => esc_html__('Body Builder', 'body-builder'),
        'popup_size'    => 'medium' // can be large, medium or small
    )
);