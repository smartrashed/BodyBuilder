<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'gallery_image'   => array(
        'label'   => __('Image Gallery', 'body-builder'),
        'desc'    => __('Home Page One About Section Gallery Image ', 'body-builder'),
        'type'    => 'upload'
    ),
    'gallery_image_title'   => array(
        'label'   => __('Gallery Image Over Title', 'body-builder'),
        'desc'    => __('Home Page One About Section Gallery Image Title', 'body-builder'),
        'type'    => 'text'
    ),
    'gallery_image_link'   => array(
        'label'   => __('Gallery Image Link', 'body-builder'),
        'desc'    => __('Gallery Images will go to Gallery Pages ', 'body-builder'),
        'type'    => 'text'
    ),
    'video_image'   => array(
        'label'   => __('Video Image', 'body-builder'),
        'desc'    => __('Home Page One About Section Video Image ', 'body-builder'),
        'type'    => 'upload'  
    ),
    'video_popup_icon'   => array(
        'label'   => __('Third Image Over Icon', 'body-builder'),
        'desc'    => __('Home Page One About Section Third Image Icon', 'body-builder'),
        'type'    => 'icon-v2',
        'preview_size' => 'medium',
        'attr'  => array( 'class' => 'gvideo-icon'), 
    ),
    'video_popup_link'   => array(
        'label'   => __('Video Popup Link', 'body-builder'),
        'desc'    => __('Video Popup Link add here', 'body-builder'),
        'type'    => 'text'
    ),
    'popup_image'   => array(
        'label'   => __('Popup Image', 'body-builder'),
        'desc'    => __('Home Page One About Section Popup Image ', 'body-builder'),
        'type'    => 'upload'
    ),
);