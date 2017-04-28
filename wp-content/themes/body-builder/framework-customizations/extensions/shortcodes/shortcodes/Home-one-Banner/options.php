<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'banner_title'   => array(
        'label'   => __('Banner Title', 'body-builder'),
        'desc'    => __('Home Page One Banner Title', 'body-builder'),
        'type'    => 'text'
    ),
    'banner_sub_title'   => array(
        'label'   => __('Banner Sub Title', 'body-builder'),
        'desc'    => __('Home Page One Banner Sub Title', 'body-builder'),
        'type'    => 'text'
    ),
     
 
 'banner_left_info' => array(
        'type' => 'tab',
        'title' => __('Office Schedule', 'body-builder'),
        'options' => array(
        		'banner_left_image' => array(
                    'type' => 'upload',
                    'label' => __('Image', 'body-builder')
                ),
                'schedule_title' => array(
                    'type' => 'text',
                    'label' => __('Title', 'body-builder')
                ),
                'fullday_office' => array(
                    'type' => 'text',
                    'label' => __('Full Day Office Time', 'body-builder'),
                    'desc' => __('Put Office Time Here', 'body-builder'),
                    'help' => __('Sunday-Wednesday: : 06:30 - 10:00', 'body-builder')
                ),
                'half_day_office' => array(
                    'type' => 'text',
                    'label' => __('Half Day Office Time', 'body-builder'),
                    'desc' => __('Put Half Day Office Time Here', 'body-builder'),
                    'help' => __('Friday: : 06:30 - 10:00', 'body-builder')
                ),
                'close_day_office' => array(
                    'type' => 'text',
                    'label' => __('Off Day ', 'body-builder'),
					'desc' => __('Put Half Day Office Time Here', 'body-builder'),
					'help' => __('Closed', 'body-builder')
                ),
            ),
         ),
  'banner_right_info' => array(
        'type' => 'tab',
        'title' => __('Banner Right Side Information', 'body-builder'),
        'options' => array(
        		'banner_right_image' => array(
                    'type' => 'upload',
                    'label' => __('Image', 'body-builder')
                ),
                'right_title' => array(
                    'type' => 'text',
                    'label' => __('Right Side title', 'body-builder')
                ),
                
            	'right_side_link' => array(
                    'type' => 'text',
                    'label' => __('Link', 'body-builder')
                ),
           
            ),
         ),
);