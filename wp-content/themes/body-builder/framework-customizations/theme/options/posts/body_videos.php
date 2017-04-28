<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'embeded' => array(
        'type' => 'box',
        'title' => __('Embeded Your Videos here', 'body-builder'),
        'options' => array(
            'type'  => 'oembed',
            'value' => 'https://vimeo.com/113078377',
            'label' => __('Label', 'body-builder'),
            'desc'  => __('Description', 'body-builder'),
            'help'  => __('Help tip', 'body-builder'),
            'preview' => array(
                'width'  => 300, // optional, if you want to set the fixed width to iframe
                'height' => 300, // optional, if you want to set the fixed height to iframe
                /**
                 * if is set to false it will force to fit the dimensions,
                 * because some widgets return iframe with aspect ratio and ignore applied dimensions
                 */
        'keep_ratio' => true
         ),
        ),
    );