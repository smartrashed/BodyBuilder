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

   array(
    'type'  => 'html',
    'label' => __('Put Shortcode Here', 'body-builder'),
    'desc'  => __('Description', 'body-builder'),
    'help'  => __('Help tip', 'body-builder'),
    'html'  => '[contact-form-7 id="356" title="Contact Us"]',
)

);