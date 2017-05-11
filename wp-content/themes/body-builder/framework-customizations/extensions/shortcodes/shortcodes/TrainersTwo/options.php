<?php
if (!defined('FW')) die('Forbidden');


$options = array(
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

    'post_limit'   => array(
        'label'   => esc_html__('Trainer Show Limit', 'body-builder'),
        'type'    => 'text',
        'value' => 1
    ),
    'extra_body_class'   => array(
        'label'   => esc_html__('Extra Class', 'body-builder'),
        'type'    => 'text',
        'desc' => esc_html__('This options is for developer to put custom class', 'body-builder'),
    ),
    
);