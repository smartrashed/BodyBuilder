<?php if (!defined( 'FW' )) die('Forbidden');


$options= array(
        'testimonial' => array(
        'type' => 'box',
        'title' => __('Testimonial Information', 'body-builder'),
        'options' => array(
                'designation' => array(
                    'type' => 'text',
                    'label' => __('Designation', 'body-builder'),
                    'desc'=>'Add Designation',
                    'help'=>'Example: Trainer'
                ),
            	
         ),

    ),

);