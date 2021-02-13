<?php
/** @noinspection PhpUnused */

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://booskills.com/rao
 * @since             1.0.0
 * @package           Skeleton
 *
 * @wordpress-plugin
 * Plugin Name:       Skeleton
 * Plugin URI:        https://boospot.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Requires PHP:      7.0
 * Requires at least: 5.0
 * Tested up to:      5.3
 * Version:           1.0.0
 * Author:            Rao
 * Author URI:        https://booskills.com/rao
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       skeleton
 * Domain Path:       /languages
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
define( 'SKELETON_VERSION', '1.0.0' );

define( 'SKELETON_PLUGIN_NAME', 'skeleton' );

/**
 * Plugin base name.
 * used to locate plugin resources primarily code files
 * Start at version 1.0.0
 */
/** @noinspection PhpUnused */
define( 'SKELETON_PLUGIN_BASE_NAME', basename( __FILE__ ) );



/**
 * Plugin base dir path.
 * used to locate plugin resources primarily code files
 * Start at version 1.0.0
 */
/** @noinspection PhpUnused */
define( 'SKELETON_DIR_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin url to access its resources through browser
 * used to access assets images/css/js files
 * Start at version 1.0.0
 */
/** @noinspection PhpUnused */
define( 'SKELETON_URL_PATH', plugin_dir_url( __FILE__ ) );

/**
 * Composer Auto Loader
 */
require 'vendor/autoload.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-skeleton-activator.php
 */
function skeleton_activate() {
	Skeleton\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-skeleton-deactivator.php
 */
function skeleton_deactivate() {
	Skeleton\Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'skeleton_activate' );
register_deactivation_hook( __FILE__, 'skeleton_deactivate' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_skeleton() {

	$plugin = new Skeleton\Init();
	$plugin->run();

}

run_skeleton();