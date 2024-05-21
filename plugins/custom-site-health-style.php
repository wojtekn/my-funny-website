<?php
/**
 * Plugin Name: Custom Site Health Style
 * Description: Changes the background color of the Site Health Status block to red and the text color to white.
 * Version: 1.0
 * Author: Your Name
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

// Enqueue custom styles for Site Health Status block.
function custom_site_health_styles() {
	// Check if we are in the Site Health Status page.
	$screen = get_current_screen();

	if ( $screen->id === 'dashboard' ) {
		echo '
        <style>
            #dashboard_site_health {
                background-color: red !important;
                color: white !important;
            }
            #dashboard_site_health h2,
            #dashboard_site_health a {
                color: white !important;
            }
        </style>';
	}
}
add_action('admin_head', 'custom_site_health_styles');
