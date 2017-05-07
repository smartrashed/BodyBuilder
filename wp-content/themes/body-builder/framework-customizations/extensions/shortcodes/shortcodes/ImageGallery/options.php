<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'section_title'   => array(
        'label'   => __('Section title', 'body-builder'),
        'desc'    => __('Image Gallery Section Title ', 'body-builder'),
        'type'    => 'text'
    ),
    'image_gallery' => array(
    'type'  => 'multi-upload',
    'label' => __('Image Gallery', 'body-builder'),
    'desc'  => __('Add Images to show ', 'body-builder'),
    /**
     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
     * If set to `false`, the option will allow to upload any file from the media library.
     */
    'images_only' => true,
), 
    'overlay_icon'   => array(
        'label'   => __('Overlay Icon', 'body-builder'),
        'desc'    => __('Image Gallery Overlay Icon', 'body-builder'),
        'type'    => 'icon-v2'
    ),
    
);