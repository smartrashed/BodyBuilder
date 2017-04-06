<?php
/**
 * Theme Initialization
 *
 * @package body-builder
 * 
 */

class Body_builder_Includes {
	private static $rel_path = null;

	private static $include_isolated_callable;

	private static $initialized = false;

	public static function init()
	{
		if (self::$initialized) {
			return;
		} else {
			self::$initialized = true;
		}

		/**
		 * Include a file isolated, to not have access to current context variables
		 */
		self::$include_isolated_callable = create_function('$path', 'include $path;');

		/**
		 * Both frontend and backend
		 */
		{		
			self::include_child_first('/custom-header.php'); 
			self::include_child_first('/theme-setup.php');					
			self::include_child_first('/template-tags.php'); 
			self::include_child_first('/extras.php'); 
			self::include_child_first('/customizer.php'); 
			self::include_child_first('/jetpack.php'); 
			


			//self::include_child_first('/wp-bootstrap-navwalker.php');
			//self::include_child_first('/tgm-plugin-activation/tgm-plugin-setup.php');			
			self::include_all_child_first('/shortcodes');
			self::include_all_child_first('/tgm-plugin-activation');
			self::include_all_child_first('/includes');
			self::include_all_child_first('/widgets');
			self::include_all_child_first('/vc-extend');
			add_action('init', array(__CLASS__, '_menu_action_init'));
                        
                     /*   if (function_exists('cs_get_option')):
                            self::include_child_first('/codestar-widget-config.php');
                            add_action('widgets_init', array(__CLASS__, '_action_widgets_init'));
                        endif; */                       
		}

		/**
		 * Only frontend
		 */
		if (!is_admin()) {
			add_action('wp_enqueue_scripts', array(__CLASS__, '_action_enqueue_scripts'),
				20 // Include later to be able to make wp_dequeue_style|script()
			);
		}

		/**
		 * Only Admin
		 */
		if (is_admin()) {
			add_action('admin_enqueue_scripts', array(__CLASS__, '_action_admin_enqueue_scripts'),
				20 // Include later to be able to make wp_dequeue_style|script()
			);
		}
	}

	private static function get_rel_path($append = '')
	{
		if (self::$rel_path === null) {
			$framework_url = get_template_directory() . '/inc';
			self::$rel_path = '/'. basename($framework_url);
		}

		return self::$rel_path . $append;
	}

	private static function include_all_child_first($dir_rel_path){
		$paths = array();

		if (is_child_theme()) {
			$paths[] = self::get_child_path($dir_rel_path);
		}

		$paths[] = self::get_parent_path($dir_rel_path);

		foreach ($paths as $path) {
			if ($files = glob($path .'/*.php')) {
				foreach ($files as $file) {
					self::include_isolated($file);
				}
			}
		}
	}

	/**
	 * @param string $dirname 'foo-bar'
	 * @return string 'Foo_Bar'
	 */
	private static function dirname_to_classname($dirname) {
		$class_name = explode('-', $dirname);
		$class_name = array_map('ucfirst', $class_name);
		$class_name = implode('_', $class_name);

		return $class_name;
	}

	public static function get_parent_path($rel_path){
		return get_template_directory() . self::get_rel_path($rel_path);
	}

	public static function get_child_path($rel_path){
		if (!is_child_theme()) {
			return null;
		}

		return get_stylesheet_directory() . self::get_rel_path($rel_path);
	}

	public static function include_isolated($path){
		call_user_func(self::$include_isolated_callable, $path);
	}

	public static function include_child_first($rel_path){
		if (is_child_theme()) {
			$path = self::get_child_path($rel_path);

			if (file_exists($path)) {
				self::include_isolated($path);
			}
		}

		{
			$path = self::get_parent_path($rel_path);

			if (file_exists($path)) {
				self::include_isolated($path);
			}
		}
	}

	/**
	 * @internal
	 */
	public static function _action_enqueue_scripts(){
		self::include_child_first('/static.php');
	}

	/**
	 * @internal
	 */
	public static function _action_admin_enqueue_scripts(){
		self::include_child_first('/static-admin.php');
	}

	/**
	 * @internal
	 */
	public static function _menu_action_init(){
		self::include_child_first('/wp-bootstrap-navwalker.php');
	}
	/**
	 * @internal
	 */
	public static function _action_widgets_init(){
		{
			$paths = array();

			if (is_child_theme()) {
				$paths[] = self::get_child_path('/widgets');
			}

			$paths[] = self::get_parent_path('/widgets');
		}

		$included_widgets = array();

		foreach ($paths as $path) {
			$dirs = glob($path .'/*', GLOB_ONLYDIR);

			if (!$dirs) {
				continue;
			}

			foreach ($dirs as $dir) {
				$dirname = basename($dir);

				if (isset($included_widgets[$dirname])) {
					// this happens when a widget in child theme wants to overwrite the widget from parent theme
					continue;
				} else {
					$included_widgets[$dirname] = true;
				}

				self::include_isolated($dir .'/class-widget-'. $dirname .'.php');

				register_widget('Widget_'. self::dirname_to_classname($dirname));
			}
		}
	}
}

Body_builder_Includes::init();

