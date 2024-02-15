<?php
/**
 * Plugin Name: FlipDown Countdown Timer
 * Version: 1.0.0
 * Plugin URI: https://github.com/dailystory/FlipDownPlugin
 * Description: Insert a FlipDown countdown timer into your WordPress pages or posts.
 * Author: DailyStory
 * Author URI: https://www.dailystory.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Prevent direct file access
defined('ABSPATH') or exit;

class FlipDownPlugin {
    private static $instance = null;

    // Constructor: Initializes the plugin
    private function __construct() {
        // Define constants
        $this->define_constants();

        // Include necessary files
        require_once FLIPDOWN_PLUGIN_PATH . '/includes/class-flipdown-shortcodes.php';

        // Initialize the plugin
        add_action('init', [$this, 'init'], 10);

        // Handle uninstallation
        if (is_admin()) {
            register_uninstall_hook(__FILE__, [$this, 'uninstall']);
        }
    }

    // Define plugin constants
    private function define_constants() {
        define('FLIPDOWN_SHORTCODE_PATH', untrailingslashit(plugins_url('', __FILE__)));
        define('FLIPDOWN_PLUGIN_PATH', untrailingslashit(dirname(__FILE__)));
        define('FLIPDOWN_PLUGIN_SLUG', basename(dirname(__FILE__)));
        define('FLIPDOWN_PLUGIN_VERSION', '0.0.1');
    }

    // Singleton instance
    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Initialize the plugin
    public function init() {
        new FlipDownShortCodes();
    }

    // Handle plugin uninstallation
    private function uninstall() {
        // Cleanup actions (if necessary)
    }
}

// Initialize the plugin
FlipDownPlugin::get_instance();
?>
