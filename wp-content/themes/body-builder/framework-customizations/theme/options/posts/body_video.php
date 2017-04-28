<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'gallery_info' => array(
        'type' => 'box',
        'title' => __('Video Gallery Information', 'body-builder'),
        'options' => array(

               'video_thumbnail' => array(
                        'type' => 'icon-v2',
                        'label' => __('Thumbnail', 'body-builder'),
                        'desc'=>'Add Your Image Over Icon',
                ),
               'videos' => array(
                'type'  => 'oembed',
                'value' => 'https://vimeo.com/113078377',
                'label' => __('Video Link', 'body-builder'),
                'desc'  => __('Put Your Video Link Here', 'body-builder'),
                'help'  => __('Please link your video here', 'body-builder'),
                'preview' => array(
                    'width'  => 300, // optional, if you want to set the fixed width to iframe
                    'height' => 300, // optional, if you want to set the fixed height to iframe
                    /**
                     * if is set to false it will force to fit the dimensions,
                     * because some widgets return iframe with aspect ratio and ignore applied dimensions
                     */
                    'keep_ratio' => true
                    )
                )       
            ),
         ),
);