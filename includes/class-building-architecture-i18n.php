<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/m7mdAlmujtaba/
 * @since      1.0.0
 *
 * @package    Building_Architecture
 * @subpackage Building_Architecture/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Building_Architecture
 * @subpackage Building_Architecture/includes
 * @author     Mohammed Almujtaba <m7md.almujtaba@gmail.com>
 */
class Building_Architecture_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'building-architecture',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
