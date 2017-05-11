<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'contact_us'   => array(
        'label'   => esc_html__('Contact Us', 'body-builder'),
        'desc'    => esc_html__('Contact Us Title', 'body-builder'),
        'type'    => 'text'
    ),
   'address_info' => array(
        'type' => 'box',
        'title' => esc_html__('Address', 'body-builder'),
        'options' => array(
                'address_title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Address Title', 'body-builder')
                ),
            	'address_description' => array(
                    'type' => 'text',
                    'label' => esc_html__('Address Description', 'body-builder')
                ),
                
                'address_icon' => array(
                    'type' => 'icon-v2',
                    'label' => esc_html__('Address Icon', 'body-builder')
                ),          
            ),
         ),
   'contact_info' => array(
        'type' => 'box',
        'title' => esc_html__('Contact Info', 'body-builder'),
        'options' => array(
                'contact_title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Conatct Title', 'body-builder')
                ),
            	'contact_description' => array(
                    'type' => 'text',
                    'label' => esc_html__('Contact Description', 'body-builder')
                ),
                
                'contact_icon' => array(
                    'type' => 'icon-v2',
                    'label' => esc_html__('Conatc Icon', 'body-builder')
                ),          
            ),
         ),
   'email_info' => array(
        'type' => 'box',
        'title' => esc_html__('Email Info', 'body-builder'),
        'options' => array(
                'email_title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Email Title', 'body-builder')
                ),
            	'email_description' => array(
                    'type' => 'text',
                    'label' => esc_html__('Email Description', 'body-builder')
                ),
                
                'email_icon' => array(
                    'type' => 'icon-v2',
                    'label' => esc_html__('Email Icon', 'body-builder')
                ),          
            ),
         ),

   'contact_form'   => array(
        'label'   => esc_html__('Contact Us', 'body-builder'),
        'desc'    => esc_html__('Contact Us Title', 'body-builder'),
        'type'    => 'wp-editor'
    ),
    'map_info' => array(
        'type' => 'box',
        'title' => esc_html__('Map Info', 'body-builder'),
        'options' => array(
                'latitude' => array(
                    'type' => 'text',
                    'label' => esc_html__('Put Latitude', 'body-builder')
                ),
                'longitude' => array(
                    'type' => 'text',
                    'label' => esc_html__('Put Longitude', 'body-builder')
                ),
                
                'map_icon' => array(
                    'type' => 'icon-v2',
                    'label' => esc_html__('Map Icon', 'body-builder')
                ),          
            ),
         ),

);