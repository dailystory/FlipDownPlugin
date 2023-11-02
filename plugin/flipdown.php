<?php
/*
Plugin Name: FlipDown Countdown Timer
Plugin URI: https://docs.dailystory.com/article/8omibw2171-integrations-wordpress
Description: Insert a FlipDown countdown timer in WordPress pages or posts
Version: 0.0.5
Author: DailyStory
Author URI: https://www.dailystory.com/integrations/wordpress/
License: GPL v2 or later
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Do not allow direct access

class FlipDownPlugin {
	private static $instance = null;

	private function __construct() {

		// ──────────────────────────────────────────────
		// Define constants used to access required files
		// ──────────────────────────────────────────────
		if ( !defined('FLIPDOWN_SHORTCODE_PATH') )
			define('FLIPDOWN_SHORTCODE_PATH', untrailingslashit(plugins_url('', __FILE__ )));

		if ( !defined('FLIPDOWN_PLUGIN_PATH') )
			define('FLIPDOWN_PLUGIN_PATH', untrailingslashit(dirname( __FILE__ )));

		if ( !defined('FLIPDOWN_PLUGIN_SLUG') )
			define('FLIPDOWN_PLUGIN_SLUG', basename(dirname(__FILE__)));	

		if ( !defined('FLIPDOWN_PLUGIN_VERSION') )
			define('FLIPDOWN_PLUGIN_VERSION', '0.0.1');

		// ──────────────────────────────────────────────
		// Load required files
		// ──────────────────────────────────────────────
		require_once(FLIPDOWN_PLUGIN_PATH . '/includes/class-flipdown-shortcodes.php');

		// Load this after other WordPress plugins with a priority of 10
		// this performs the initialization of the plug in
		add_action( 'init', array($this,'flipdown_init'), 10 );

		if ( is_admin() ) {

			// handle uninstall requests
			register_uninstall_hook(__FILE__, array($this,'flipdown_uninstall'));

		}

	}

	// ──────────────────────────────────────────────
	// Used to create an instance of this class
	// ──────────────────────────────────────────────
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	// ──────────────────────────────────────────────
	// Initialize the plug in, this is called once all
	// the plugs in are loaded
	// ──────────────────────────────────────────────
	public static function flipdown_init () {
		// Initialize shortcodes
		$shortcodes = new FlipDownShortCodes();
	}

	private function flipdown_uninstall () {
		// not currently used
	}
}
FlipDownPlugin::get_instance();	// create an instance
?>
