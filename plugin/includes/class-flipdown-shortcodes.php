<?php
/**
 * Manages all shortcodes for the FlipDown plugin, including [flipdown].
 */
class FlipDownShortCodes {

    /**
     * Constructor: Registers the [flipdown] shortcode.
     */
    public function __construct() {
		add_action('wp_enqueue_scripts', [$this, 'register_flipdown_assets']);
        add_shortcode('flipdown', [$this, 'flipdown_shortcode_handler']);
    }

    /**
     * Handles the [flipdown] shortcode, generating HTML for a countdown timer.
     * 
     * @param array $atts Shortcode attributes.
     * @return string HTML content for the shortcode.
     */
    public function flipdown_shortcode_handler($atts) {
        // Normalize attribute keys to lowercase and extract values
        $atts = shortcode_atts([
            'date' => '', // Default date is empty
            'theme' => 'dark' // Default theme is 'dark'
        ], array_change_key_case((array)$atts, CASE_LOWER));

        $flipdown_date = esc_html($atts['date']);
        $flipdown_theme = esc_html($atts['theme']);

		// Return the HTML for the FlipDown timer
        return "<div id='flipdown' class='flipdown' data-date='{$flipdown_date}' data-theme='{$flipdown_theme}' style='display:inline-block'></div>";
    }

    /**
     * Registers FlipDown scripts and styles for use in WordPress.
     */
    public function register_flipdown_assets() {
        $script_path_flipdown = plugins_url('../assets/js/flipdown.min.js', __FILE__);
        $script_path_loader = plugins_url('../assets/js/flipdown-for-wordpress.js', __FILE__);
        $style_path = plugins_url('../assets/css/flipdown.min.css', __FILE__);

        // Register and enqueue FlipDown script
        wp_enqueue_script('flipdown', $script_path_flipdown, [], FLIPDOWN_PLUGIN_VERSION, true);
        wp_enqueue_script('flipdown_loader', $script_path_loader, ['flipdown'], FLIPDOWN_PLUGIN_VERSION, true);

        // Enqueue FlipDown styles
        wp_enqueue_style('flipdown', $style_path, [], FLIPDOWN_PLUGIN_VERSION, 'all');
    }
}
?>