<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Twitter_Sidebar
 * @subpackage Rs_Twitter_Sidebar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rs_Twitter_Sidebar
 * @subpackage Rs_Twitter_Sidebar/includes
 * @author     Rohit Singhal <rohitsinghal.rs@gmail.com>
 */
class Rs_Twitter_Sidebar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rs-twitter-sidebar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
