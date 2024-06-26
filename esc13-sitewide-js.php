<?php

/**
 * The plugin bootstrap file
 *
 * @link              /
 * @since             1.0.0
 * @package           Esc13_Sitewide_Js
 *
 * @wordpress-plugin
 * Plugin Name:       ESC13 Site-Wide Javascript
 * Plugin URI:        https://github.com/Region13/esc13-sitewide-js
 * Description:       Include in-line html partials on every page. Used to include trackers like facebook pixel, pardot or google tag manager.
 * Version:           1.0.0
 * Author:            ESC Region 13
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       esc13-sitewide-js
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ESC13_SITEWIDE_JS_VERSION', '1.0.0' );

/*
 * Add html partial to the head of the page.
 */
function run_esc13_sitewide_js() {
    $includes = file_get_contents(__DIR__ . '/includes.html');
    echo "<!-- Added by esc13-sitewide-js plugin !-->\n" . $includes . "\n<!-- End esc13-sitewide-js block !-->\n";
}
add_action( 'wp_head', 'run_esc13_sitewide_js' );

// Optionally add code to just below the body open tag. Uncomment to enable.
// /*
//  * Adds ability to fully implement gtm in wordpress across the whole network.
//  */
// function esc13_sitewide_add_custom_body_open_code() {
//     echo '<!-- Google Tag Manager (noscript esc13_sitewide plug-in) -->
// <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ7NX24"
// height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
// <!-- End Google Tag Manager (noscript) -->';
// }
// // Add code after opening body tag.
// add_action( 'wp_body_open', 'esc13_sitewide_add_custom_body_open_code' );
