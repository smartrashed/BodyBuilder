<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'about_title'   => array(
        'label'   => __('About US Title', 'body-builder'),
        'desc'    => __('About Uu Page Section Title ', 'body-builder'),
        'type'    => 'text'
    ),
   
    'about_image'   => array(
        'label'   => __('Second Image Gallery', 'body-builder'),
        'desc'    => __('Home Page One About Section Second Image ', 'body-builder'),
        'type'    => 'upload'
    ),
    
    'content_title'   => array(
        'label'   => __('About Us Content Title', 'body-builder'),
        'desc'    => __('Put Here About Us Content Title ', 'body-builder'),
        'type'    => 'text'
    ),
    'content_description'   => array(
        'label'   => __('About Us Content Description', 'body-builder'),
        'desc'    => __('Put Here About Us Content Description ', 'body-builder'),
        'type'    => 'wp-editor'
    )

);