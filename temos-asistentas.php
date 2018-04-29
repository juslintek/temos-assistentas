<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://linasjusys.com
 * @since             1.0.0
 * @package           Temos_Asistentas
 *
 * @wordpress-plugin
 * Plugin Name:       Temos asistentas
 * Plugin URI:        http://www.hostinger.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Linas Jusys
 * Author URI:        http://linasjusys.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       temos-asistentas
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( PLUGIN_VERSION, '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-temos-asistentas-activator.php
 */
function activate_temos_asistentas() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-temos-asistentas-activator.php';
	Temos_Asistentas_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-temos-asistentas-deactivator.php
 */
function deactivate_temos_asistentas() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-temos-asistentas-deactivator.php';
	Temos_Asistentas_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_temos_asistentas' );
register_deactivation_hook( __FILE__, 'deactivate_temos_asistentas' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-temos-asistentas.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_temos_asistentas() {

	$plugin = new Temos_Asistentas();
	$plugin->run();

}
run_temos_asistentas();
