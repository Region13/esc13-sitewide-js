<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       /
 * @since      1.0.0
 *
 * @package    Esc13_Sitewide_Js
 * @subpackage Esc13_Sitewide_Js/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Esc13_Sitewide_Js
 * @subpackage Esc13_Sitewide_Js/includes
 * @author     ESC Region 13 <webmaster@esc13.net>
 */
class Esc13_Sitewide_Js_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'esc13-sitewide-js',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
