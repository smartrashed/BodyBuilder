<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'gallery_image'   => array(
        'label'   => __('Second Image Gallery', 'body-builder'),
        'desc'    => __('Home Page One About Section Second Image ', 'body-builder'),
        'type'    => 'upload'
    ),
    'gallery_image_title'   => array(
        'label'   => __('Second Image Over Title', 'body-builder'),
        'desc'    => __('Home Page One About Section Second Image Over  Title', 'body-builder'),
        'type'    => 'text'
    ),
    'gallery_image_link'   => array(
        'label'   => __('Gallery Image Link', 'body-builder'),
        'desc'    => __('Gallery Images will go to Gallery Pages ', 'body-builder'),
        'type'    => 'text'
    ),
    'third_image'   => array(
        'label'   => __('Third Image', 'body-builder'),
        'desc'    => __('Home Page One About Section Third Image ', 'body-builder'),
        'type'    => 'upload'  
    ),
    'third_image_icon'   => array(
        'label'   => __('Third Image Over Icon', 'body-builder'),
        'desc'    => __('Home Page One About Section Third Image Icon', 'body-builder'),
        'type'    => 'icon-v2',
        'preview_size' => 'medium',
        'attr'  => array( 'class' => 'gvideo-icon'), 
    ),
    
    'fourth_image'   => array(
        'label'   => __('Fourth Image', 'body-builder'),
        'desc'    => __('Home Page One About Section Fourth Image ', 'body-builder'),
        'type'    => 'upload'
    ),
);