<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://linasjusys.com
 * @since      1.0.0
 *
 * @package    Temos_Asistentas
 * @subpackage Temos_Asistentas/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Temos_Asistentas
 * @subpackage Temos_Asistentas/includes
 * @author     Linas Jusys <linas.jusys@hostinger.com>
 */
class Temos_Asistentas_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'temos-asistentas',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
