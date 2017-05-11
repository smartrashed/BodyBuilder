<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'bg_image'   => array(
        'label'   => esc_html__('Background Images', 'body-builder'),
        'desc'    => esc_html__('Home Page One Count Down Title', 'body-builder'),
        'type'    => 'upload'
    ),
    'section_title'   => array(
        'label'   => esc_html__('Title', 'body-builder'),
        'desc'    => esc_html__('Home Page One Count Down Title', 'body-builder'),
        'type'    => 'text'
    ),
    'see_more'   => array(
        'label'   => esc_html__('See More', 'body-builder'),
        'desc'    => esc_html__('Add see more custom link', 'body-builder'),
        'type'    => 'text'
    ),
    
);