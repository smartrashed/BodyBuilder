<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'price_info' => array(
        'type' => 'box',
        'title' => __('Price Table Information', 'body-builder'),
        'options' => array(
                'price' => array(
                    'type' => 'text',
                    'label' => __('Price', 'body-builder'),
                    'desc'=>'Add Training Fee',
                    'help'=>'Example: $99.00'
                ),
            	'membership' => array(
                    'type' => 'text',
                    'label' => __('Is Membership ?', 'body-builder'),
                    'desc'=>'Add MEmbership for trained if available!',
                    'help'=>'Example: Include Membership'
                ),
                
                'days_access' => array(
                    'type' => 'text',
                    'label' => __('Days Access', 'body-builder'),
                    'desc'=>'Please Add;How many days access for gym?',
                    'help'=>'Example: 3 Days in a Week Gym Access'
                ),
                'training_days' => array(
                    'type' => 'text',
                    'label' => __('Personal Training Days', 'body-builder'),
                    'desc'=>'Hoe many days access for personal training?',
                    'help'=>'Example: Unlimited Personal Training'
                ),
               'access_instuments' => array(
                        'type' => 'text',
                        'label' => __('Access Instruments', 'body-builder'),
                        'desc'=>'Which Instruments are available to use?',
                        'help'=>'Example: Access All Insruments'
                ),
               'fitness_book' => array(
                        'type' => 'text',
                        'label' => __('Fitness Books', 'body-builder'),
                        'desc'=>'Is fitness books are available ?',
                    'help'=>'Example: Free Fitness Books'
                ),
               'fitness_tutorials' => array(
                        'type' => 'text',
                        'label' => __('Fitness tutorials', 'body-builder'),
                        'desc'=>'Is fitness tutorials are available?',
                    'help'=>'Example: Fitness Tutorials'
                ),
               'attend_compitions' => array(
                        'type' => 'text',
                        'label' => __('Attend Compitions', 'body-builder'),
                        'desc'=>'Is any compitions are availble of this package?',
                    'help'=>'Example: Pass for Yearly Competition'
                ),
            ),
         ),

);