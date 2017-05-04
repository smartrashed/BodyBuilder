<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'contact_us'   => array(
        'label'   => __('Contact Us', 'body-builder'),
        'desc'    => __('Contact Us Title', 'body-builder'),
        'type'    => 'text'
    ),
   'address_info' => array(
        'type' => 'box',
        'title' => __('Address', 'body-builder'),
        'options' => array(
                'address_title' => array(
                    'type' => 'text',
                    'label' => __('Address Title', 'body-builder')
                ),
            	'address_description' => array(
                    'type' => 'text',
                    'label' => __('Address Description', 'body-builder')
                ),
                
                'address_icon' => array(
                    'type' => 'icon-v2',
                    'label' => __('Address Icon', 'body-builder')
                ),          
            ),
         ),
   'contact_info' => array(
        'type' => 'box',
        'title' => __('Contact Info', 'body-builder'),
        'options' => array(
                'contact_title' => array(
                    'type' => 'text',
                    'label' => __('Conatct Title', 'body-builder')
                ),
            	'contact_description' => array(
                    'type' => 'text',
                    'label' => __('Contact Description', 'body-builder')
                ),
                
                'contact_icon' => array(
                    'type' => 'icon-v2',
                    'label' => __('Conatc Icon', 'body-builder')
                ),          
            ),
         ),
   'email_info' => array(
        'type' => 'box',
        'title' => __('Email Info', 'body-builder'),
        'options' => array(
                'email_title' => array(
                    'type' => 'text',
                    'label' => __('Email Title', 'body-builder')
                ),
            	'email_description' => array(
                    'type' => 'text',
                    'label' => __('Email Description', 'body-builder')
                ),
                
                'email_icon' => array(
                    'type' => 'icon-v2',
                    'label' => __('Email Icon', 'body-builder')
                ),          
            ),
         ),

   'contact_form'   => array(
        'label'   => __('Contact Us', 'body-builder'),
        'desc'    => __('Contact Us Title', 'body-builder'),
        'type'    => 'wp-editor'
    ),
    'map_info' => array(
        'type' => 'box',
        'title' => __('Map Info', 'body-builder'),
        'options' => array(
                'latitude' => array(
                    'type' => 'text',
                    'label' => __('Put Latitude', 'body-builder')
                ),
                'longitude' => array(
                    'type' => 'text',
                    'label' => __('Put Longitude', 'body-builder')
                ),
                
                'map_icon' => array(
                    'type' => 'icon-v2',
                    'label' => __('Map Icon', 'body-builder')
                ),          
            ),
         ),

);