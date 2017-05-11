<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'gallery_image'   => array(
        'label'   => esc_html__('Image Gallery', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Gallery Image ', 'body-builder'),
        'type'    => 'upload'
    ),
    'gallery_image_title'   => array(
        'label'   => esc_html__('Gallery Image Over Title', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Gallery Image Title', 'body-builder'),
        'type'    => 'text'
    ),
    'gallery_image_link'   => array(
        'label'   => esc_html__('Gallery Image Link', 'body-builder'),
        'desc'    => esc_html__('Gallery Images will go to Gallery Pages ', 'body-builder'),
        'type'    => 'text'
    ),
    'video_image'   => array(
        'label'   => esc_html__('Video Image', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Video Image ', 'body-builder'),
        'type'    => 'upload'  
    ),
    'video_popup_icon'   => array(
        'label'   => esc_html__('Third Image Over Icon', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Third Image Icon', 'body-builder'),
        'type'    => 'icon-v2',
        'preview_size' => 'medium',
        'attr'  => array( 'class' => 'gvideo-icon'), 
    ),
    'video_popup_link'   => array(
        'label'   => esc_html__('Video Popup Link', 'body-builder'),
        'desc'    => esc_html__('Video Popup Link add here', 'body-builder'),
        'type'    => 'text'
    ),
    'popup_image'   => array(
        'label'   => esc_html__('Popup Image', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Popup Image ', 'body-builder'),
        'type'    => 'upload'
    ),
);