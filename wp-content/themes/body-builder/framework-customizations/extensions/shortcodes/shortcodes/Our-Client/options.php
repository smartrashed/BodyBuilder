<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'partner_logos'   => array(
        'label'   => esc_html__('Partner Logos', 'body-builder'),
        'desc'    => esc_html__('About Us Page Partener Logos(Please Upload Multiple Logos)', 'body-builder'),
        'type'    => 'multi-upload'
    ),
   'extra_body_class'   => array(
        'label'   => esc_html__('Extra Class', 'body-builder'),
        'type'    => 'text',
        'desc' => esc_html__('This options is for developer to put custom class', 'body-builder'),
    ),
   

);