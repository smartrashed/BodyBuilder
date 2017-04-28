<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'trainers_personal_info' => array(
        'type' => 'box',
        'title' => __('Trainer Personal Information', 'body-builder'),
        'options' => array(
                'trainer_designation' => array(
                    'type' => 'text',
                    'label' => __('Designation', 'body-builder')
                ),
            	'trainer_exprience' => array(
                    'type' => 'text',
                    'label' => __('Exprience', 'body-builder')
                ),
                
                'trainer_mobile' => array(
                    'type' => 'text',
                    'label' => __('Mobile', 'body-builder')
                ),
                'trainer_email' => array(
                    'type' => 'text',
                    'label' => __('Email', 'body-builder')
                ),
           
            ),
         ),
        'trainers_social_info' => array(
        'type' => 'box',
        'title' => __('Trainer Social Information', 'body-builder'),
        'options' => array(
                'trainer_facebook' => array(
                    'type' => 'text',
                    'label' => __('Facebook', 'body-builder')
                ),
                 'trainer_twitter' => array(
                    'type' => 'text',
                    'label' => __('Twitter', 'body-builder')
                ),
                'trainer_linkedin' => array(
                    'type' => 'text',
                    'label' => __('Linked In', 'body-builder')
                ),
                 'trainer_behance' => array(
                    'type' => 'text',
                    'label' => __('Behance', 'body-builder')
                ),
                 'trainer_dribble' => array(
                    'type' => 'text',
                    'label' => __('Dribble', 'body-builder')
                ),
            ),
        ),
'trainers_course_info' => array(
        'type' => 'box',
        'title' => __('Trainer Course Information', 'body-builder'),
        'options' => array(
            'course_title' => array(
                'type' => 'text',
                'label' => __('Course Title', 'body-builder'),
                'help' => __('Personal Training', 'body-builder')
            ),
            'course_description' => array(
                'type' => 'wp-editor',
                'label' => __('Course Description', 'body-builder'),
                'help' => __('Description Goes here', 'body-builder')
            ),
            'course_duration' => array(
                'type' => 'text',
                'label' => __('Course Duration', 'body-builder'),
                'help' => __('Example:6 Months', 'body-builder')
            ),
             'course_fee' => array(
                'type' => 'text',
                'label' => __('Course Fee', 'body-builder'),
                'help' => __('$99.00', 'body-builder')
            ),
            'trainer_Contact' => array(
                'type' => 'text',
                'label' => __('Contact Link', 'body-builder'),
                'help' => __('http://example.com', 'body-builder')
            ),
             
        ),
    ),

);