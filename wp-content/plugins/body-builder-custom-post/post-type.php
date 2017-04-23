<?php
/**
 * Plugin Name: Body Builder Custom Post
 * Plugin URI: https://themeforest.net/user/codexcoder
 * Description: This plugin is for Event Hub registration and custom post type
 * Author: CodexCoder
 * Author URI: http://codexcoder.com/
 * Version: 1.0.0
 * Text Domain: body-builder
 */

/*******************************************************************/
// Trainer post type
/*******************************************************************/

if ( !class_exists('Body_Builder_Trainer_Post_Type') ):

    class Body_Builder_Trainer_Post_Type {
        public static $post_type = 'body_trainer';
        public static $menu_position = 5; 
        public static $theme_text_domain = 'body-builder';
        public static function register() {

            // titles
            $labels = array(
                    'name'                 => esc_html__('Trainers',                  'body-builder'),
                    'singular_name'        => esc_html__('Trainers',                  'body-builder'),
                    'add_new'              => esc_html__('Add New',                  'body-builder'),
                    'add_new_item'         => esc_html__('Add New Trainer',          'body-builder'),
                    'edit_item'            => esc_html__('Edit Trainer',             'body-builder'),
                    'new_item'             => esc_html__('New Trainer',              'body-builder'),
                    'view_item'            => esc_html__('View Trainer',             'body-builder'),
                    'search_items'         => esc_html__('Search Trainer',           'body-builder'),
                    'not_found'            => esc_html__('No Trainer found',         'body-builder'),
                    'not_found_in_trash'   => esc_html__('No Trainer found in trash','body-builder'), 
                    'parent_item_colon'     => '',
                    'menu_name'            => esc_html__('Trainer', 'body-builder')
            );

            // options
            $args = array(
                    'labels'                => $labels,
                    'public'                => true,
                    'publicly_queryable'    => true,
                    'show_ui'               => true,
                    'show_in_menu'          => true, 
                    'query_var'             => true,
                    'rewrite'               => array( 'slug' => self::$post_type ),
                    'capability_type'       => 'post',
                    'has_archive'           => true, 
                    'hierarchical'          => false,
                    'menu_position'         => self::$menu_position,
                    'menu_icon'             => 'dashicons-groups',
                    'supports'              => array( 'title', 'editor', 'thumbnail' )
            );

            $args = apply_filters( 'presscore_post_type_' . self::$post_type . '_args', $args );

            register_post_type( self::$post_type, $args );
            flush_rewrite_rules();
            /* post type end */		
        }	
    }

endif;

/*******************************************************************/
// Priceing Table post type
/*******************************************************************/

/*if ( !class_exists('Event_Hub_Price_Table_Post_Type') ):

    class Event_Hub_Price_Table_Post_Type {
        public static $post_type = 'eh_price_table';
        public static $menu_position = 6; 
        public static $theme_text_domain = 'body-builder';
        public static function register() {

            // titles
            $labels = array(
                    'name'                 => esc_html__('Pricing Table',                  'body-builder'),
                    'singular_name'        => esc_html__('Pricing Table',                  'body-builder'),
                    'add_new'              => esc_html__('Add New',                        'body-builder'),
                    'add_new_item'         => esc_html__('Add New Pricing Table',          'body-builder'),
                    'edit_item'            => esc_html__('Edit Pricing Table',             'body-builder'),
                    'new_item'             => esc_html__('New Pricing Table',              'body-builder'),
                    'view_item'            => esc_html__('View Pricing Table',             'body-builder'),
                    'search_items'         => esc_html__('Search Pricing Table',           'body-builder'),
                    'not_found'            => esc_html__('No Pricing Table found',         'body-builder'),
                    'not_found_in_trash'   => esc_html__('No Pricing Table found in trash','body-builder'), 
                    'parent_item_colon'     => '',
                    'menu_name'            => esc_html__('Pricing Table', 'event-term-custom-post')
            );

            // options
            $args = array(
                    'labels'                => $labels,
                    'public'                => true,
                    'publicly_queryable'    => true,
                    'show_ui'               => true,
                    'show_in_menu'          => true, 
                    'query_var'             => true,
                    'rewrite'               => array( 'slug' => self::$post_type ),
                    'capability_type'       => 'post',
                    'has_archive'           => true, 
                    'hierarchical'          => false,
                    'menu_position'         => self::$menu_position,
                    'menu_icon'             => 'dashicons-networking',
                    'supports'              => array( 'title')
            );

            $args = apply_filters( 'presscore_post_type_' . self::$post_type . '_args', $args );

            register_post_type( self::$post_type, $args );
            flush_rewrite_rules();
            /* post type end */     
      //  }   
    //}
/*
endif;
*/

/*******************************************************************/
// Testmonial post type
/*******************************************************************/

/*if ( !class_exists('Event_Hub_testmonial_Post_Type') ):

    class Event_Hub_testmonial_Post_Type {
        public static $post_type = 'eh_testmonial';
        public static $menu_position = 7; 
        public static $theme_text_domain = 'body-builder';
        public static function register() {

            // titles
            $labels = array(
                    'name'                 => esc_html__('Testmonial',             'body-builder'),
                    'singular_name'        => esc_html__('Testmonial',             'body-builder'),
                    'add_new'              => esc_html__('Add New',                'body-builder'),
                    'add_new_item'         => esc_html__('Add New Testmonial',     'body-builder'),
                    'edit_item'            => esc_html__('Edit Testmonial',        'body-builder'),
                    'new_item'             => esc_html__('New Testmonial',         'body-builder'),
                    'view_item'            => esc_html__('View Testmonial',        'body-builder'),
                    'search_items'         => esc_html__('Search Testmonial',      'body-builder'),
                    'not_found'            => esc_html__('No Testmonial found',    'body-builder'),
                    'not_found_in_trash'   => esc_html__('No Testmonial found in trash','body-builder'), 
                    'parent_item_colon'     => '',
                    'menu_name'            => esc_html__('Testmonial', 'event-term-custom-post')
            );

            // options
            $args = array(
                    'labels'                => $labels,
                    'public'                => true,
                    'publicly_queryable'    => true,
                    'show_ui'               => true,
                    'show_in_menu'          => true, 
                    'query_var'             => true,
                    'rewrite'               => array( 'slug' => self::$post_type ),
                    'capability_type'       => 'post',
                    'has_archive'           => true, 
                    'hierarchical'          => false,
                    'menu_position'         => self::$menu_position,
                    'menu_icon'             => 'dashicons-format-quote',
                    'supports'              => array( 'title','editor')
            );

            $args = apply_filters( 'presscore_post_type_' . self::$post_type . '_args', $args );

            register_post_type( self::$post_type, $args );
            flush_rewrite_rules();
            /* post type end */     
     //   }   
  //  }
/*
endif;*/

/////////////////////////
// Register post types //
/////////////////////////

if ( ! function_exists( 'body_builder_register_post_types' ) ) :
    function body_builder_register_post_types() {
        Body_Builder_Trainer_Post_Type::register();
       // Event_Hub_Price_Table_Post_Type::register();
       // Event_Hub_testmonial_Post_Type::register();
    }
endif;

add_action( 'init', 'body_builder_register_post_types', 10 );