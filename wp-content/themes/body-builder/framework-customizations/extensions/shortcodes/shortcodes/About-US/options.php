<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'about_title'   => array(
        'label'   => esc_html__('About US Title', 'body-builder'),
        'desc'    => esc_html__('About Uu Page Section Title ', 'body-builder'),
        'type'    => 'text'
    ),
   
    'about_image'   => array(
        'label'   => esc_html__('Second Image Gallery', 'body-builder'),
        'desc'    => esc_html__('About Section Second Image ', 'body-builder'),
        'type'    => 'upload'
    ),
    
    'content_title'   => array(
        'label'   => esc_html__('About Us Content Title', 'body-builder'),
        'desc'    => esc_html__('Put Here About Us Content Title ', 'body-builder'),
        'type'    => 'text'
    ),
    'content_description'   => array(
        'label'   => esc_html__('About Us Content Description', 'body-builder'),
        'desc'    => esc_html__('Put Here About Us Content Description ', 'body-builder'),
        'type'    => 'wp-editor'
    ),
    'extra_body_class'   => array(
        'label'   => esc_html__('Extra Class', 'body-builder'),
        'type'    => 'text',
        'desc' => esc_html__('This options is for developer to put custom class', 'body-builder'),
    ),

);