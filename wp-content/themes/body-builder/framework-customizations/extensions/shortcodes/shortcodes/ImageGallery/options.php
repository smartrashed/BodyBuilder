<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'section_title'   => array(
        'label'   => esc_html__('Section title', 'body-builder'),
        'desc'    => esc_html__('Image Gallery Section Title ', 'body-builder'),
        'type'    => 'text'
    ),
    'image_gallery' => array(
    'type'  => 'multi-upload',
    'label' => esc_html__('Image Gallery', 'body-builder'),
    'desc'  => esc_html__('Add Images to show ', 'body-builder'),
    /**
     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
     * If set to `false`, the option will allow to upload any file from the media library.
     */
    'images_only' => true,
), 
    'overlay_icon'   => array(
        'label'   => esc_html__('Overlay Icon', 'body-builder'),
        'desc'    => esc_html__('Image Gallery Overlay Icon', 'body-builder'),
        'type'    => 'icon-v2'
    ),
    
);