<?php
if (!defined('FW')) die('Forbidden');


$options = array(
	'post_limit'   => array(
        'label'   => esc_html__('Price Table  Show Limit', 'body-builder'),
        'type'    => 'text',
        'value' => 1
    ),
   'extra_body_class'   => array(
        'label'   => esc_html__('Extra Class', 'body-builder'),
        'type'    => 'text',
        'desc' => esc_html__('This options is for developer to put custom class', 'body-builder'),
    ),
    
    
);