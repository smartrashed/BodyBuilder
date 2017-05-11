<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'banner_title'   => array(
        'label'   => esc_html__('Banner Title', 'body-builder'),
        'type'    => 'text'
    ),
    'banner_sub_title'   => array(
        'label'   => esc_html__('Banner Sub Title', 'body-builder'),
        'type'    => 'text'
    ),
     
 
 'banner_left_info' => array(
        'type' => 'tab',
        'title' => esc_html__('Banner Left Content', 'body-builder'),
        'options' => array(
        		'banner_left_image' => array(
                    'type' => 'upload',
                    'label' => esc_html__('Image', 'body-builder')
                ),
                'schedule_title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Title', 'body-builder')
                ),
                'fullday_office' => array(
                    'type' => 'text',
                    'label' => esc_html__('Full Day Office Time', 'body-builder'),
                    'desc' => esc_html__('Put Office Time Here', 'body-builder'),
                    'help' => esc_html__('Sunday-Wednesday: : 06:30 - 10:00', 'body-builder')
                ),
                'half_day_office' => array(
                    'type' => 'text',
                    'label' => esc_html__('Half Day Office Time', 'body-builder'),
                    'desc' => esc_html__('Put Half Day Office Time Here', 'body-builder'),
                    'help' => esc_html__('Friday: : 06:30 - 10:00', 'body-builder')
                ),
                'close_day_office' => array(
                    'type' => 'text',
                    'label' => esc_html__('Off Day ', 'body-builder'),
					'desc' => esc_html__('Put Half Day Office Time Here', 'body-builder'),
					'help' => esc_html__('Closed', 'body-builder')
                ),
            ),
         ),
  'banner_right_info' => array(
        'type' => 'tab',
        'title' => esc_html__('Banner Right Content', 'body-builder'),
        'options' => array(
        		'banner_right_image' => array(
                    'type' => 'upload',
                    'label' => esc_html__('Image', 'body-builder')
                ),
                'right_title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Right Side title', 'body-builder')
                ),
                
            	'right_side_link' => array(
                    'type' => 'text',
                    'label' => esc_html__('Title Link', 'body-builder')
                ),
                'sub_title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Sub Title', 'body-builder')
                ),
                
                'sub_title_link' => array(
                    'type' => 'text',
                    'label' => esc_html__('Sub Title Link', 'body-builder')
                ),
           
            ),
         ),
);