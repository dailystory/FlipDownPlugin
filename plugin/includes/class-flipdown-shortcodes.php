<?php
// ──────────────────────────────────────────────
// This class manages all the shortcodes, such as [flipdown]
// ──────────────────────────────────────────────
class FlipDownShortCodes {
	
    function __construct () {
		// Add the [flipdown] shortcode
		add_shortcode('flipdown', array( 'FlipdownShortCodes', 'dailystory_flipdown_shortcode' ));
	}

	// ──────────────────────────────────────────────
	// Routine for [flipdown date="2023-09-20T12:00:00-0500"] shortcode, this shortcode returns
	// the HTML for a <div> inline within a WordPress page / post where the shortcode
	// was inserted
	// ──────────────────────────────────────────────
	public static function dailystory_flipdown_shortcode($atts, $content=null) {
    	// normalize attribute keys, lowercase
    	$atts = array_change_key_case((array)$atts, CASE_LOWER);
 
    	// parse out the date property
    	$flipdown_date = shortcode_atts(['date' => '0',], $atts, $tag);
		$flipdown_date = esc_html__($flipdown_date['date'], '');

		// parse out the theme property
    	$flipdown_theme = shortcode_atts(['theme' => '1',], $atts, $tag);
		$flipdown_theme = esc_html__($flipdown_theme['theme'], 'dark');

		// Add the script reference, pulled from DailyStory, but eventually will be served from a CDN
		wp_register_script('flipdown', 'https://cdn.jsdelivr.net/npm/flipdown@0.3.2/src/flipdown.min.js', null,FLIPDOWN_PLUGIN_VERSION, true);
		wp_enqueue_script('flipdown');

		// Add the script reference, pulled from DailyStory, but eventually will be served from a CDN
		wp_register_script('flipdown_loader', 'https://cdn.jsdelivr.net/gh/dailystory/FlipDownPlugin@main/script/flipdown-for-wordpress.js', null,FLIPDOWN_PLUGIN_VERSION, true);
		wp_enqueue_script('flipdown_loader');

		// enqueue css
		wp_enqueue_style('flipdown','https://cdn.jsdelivr.net/npm/flipdown@0.3.2/dist/flipdown.min.css', null, FLIPDOWN_PLUGIN_VERSION, 'all');

		return '<div id="flipdown" class="flipdown" data-date="' . $flipdown_date .'" data-theme="' . $flipdown_theme . '" style="display:inline-block"></div>';
	}    
}
?>