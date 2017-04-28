<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'class_info' => array(
        'type' => 'box',
        'title' => __('Class Information', 'body-builder'),
        'options' => array(
                'class_start_time' => array(
                    'type' => 'text',
                    'label' => __('Class Start Time', 'body-builder')
                ),
            	'class_end_time' => array(
                    'type' => 'text',
                    'label' => __('Class End Time', 'body-builder')
                ),
                'options' => array(
                        'type'  => 'multi-select',
                       // 'value' => array( 'choice-1', 'choice-3' ),
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'label' => __('Trainer Name', 'body-builder'),
                        'desc'  => __('Please Input Trainer First in Trainer Area', 'body-builder'),
                        
                        /**
                         * Set population method
                         * Are available: 'posts', 'taxonomy', 'users', 'array'
                         */
                        'population' => 'posts',
                        /**
                         * Set post types, taxonomies, user roles to search for
                         *
                         * 'population' => 'posts'
                         * 'source' => 'page',
                         *
                         * 'population' => 'taxonomy'
                         * 'source' => 'category',
                         *
                         * 'population' => 'users'
                         * 'source' => array( 'editor', 'subscriber', 'author' ),
                         *
                         * 'population' => 'array'
                         * 'source' => '' // will populate with 'choices' array
                         */
                        'source' => array('body-trainer'),
                        /**
                         * Set the number of posts/users/taxonomies that multi-select will be prepopulated
                         * Or set the value to false in order to disable this functionality.
                         */
                        'prepopulate' => 10,
                        /**
                         * An array with the available choices
                         * Used only when 'population' => 'array'
                         */
                        'choices' => array(
                            'choice-1' => __('Rashed', 'body-builder'),
                        ),
                        /**
                         * Set maximum items number that can be selected
                         */
                        'limit' => 100,
                    ),
             
                'class_duration' => array(
                    'type' => 'text',
                    'label' => __('Course Durtion', 'body-builder')
                ),
           
            ),
         ),

);