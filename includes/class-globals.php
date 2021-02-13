<?php /** @noinspection PhpUnused */

/** @noinspection CheckEmptyScriptTag */

namespace Skeleton;
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// if class already defined, bail out
if ( class_exists( 'Skeleton\Globals' ) ) {
	return;
}

/**
 * Class Globals
 * Defining Global Utility Functions
 */
class Globals {

	/**
	 * The Plugin Options
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var
	 */
	protected static $options = array();
	protected static $prefix = 'skeleton_';
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private static $plugin_name;
	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private static $version;

	/**
	 * Globals constructor.
	 *
	 * @param $plugin_name
	 * @param $version
	 */
	public function __construct( $plugin_name, $version ) {

		self::$plugin_name = $plugin_name;
		self::$version     = $version;


	} // __construct()

	/** @noinspection PhpUnused */
	/**
	 * @param $option_id
	 *
	 * @param $option_key
	 *
	 * @return bool|mixed
	 */
	public static function get_options_value( $option_id, $option_key ) {

		$options_array = self::get_options( $option_id );

		if ( empty( $option_key ) ) {
			$get_options_value = ! empty( $options_array ) ? $options_array : self::get_default_options( $option_id );
		} else {
			$get_options_value = isset( $options_array[ $option_key ] ) ? $options_array[ $option_key ] : self::get_default_options( $option_key );
		}

		return $get_options_value;
	}

	/**
	 * @param $option_id
	 *
	 * @return mixed
	 */
	public static function get_options( $option_id ) {

		self::set_options( $option_id );

		return self::$options[ $option_id ];

	}

	/**
	 * Sets the private var $options
	 *
	 * @param $option_id
	 */
	protected static function set_options( $option_id ) {

		// Only set options if not already set
		if ( ! isset( self::$options[ $option_id ] ) ) {
			self::$options[ $option_id ] = get_option( $option_id );
		}

	}

	/**
	 * @param $key
	 *
	 * @return bool|mixed
	 */
	public static function get_default_options( $key ) {

		$default_options = self::get_default_options_array();

		return isset( $default_options[ $key ] ) ? $default_options[ $key ] : false;
	}

	/**
	 * Plugin Default Options
	 *
	 * @return array
	 */
	public static function get_default_options_array() {

		$default_options = array();

		$default_options = apply_filters( 'skeleton_admin_settings_default', $default_options );

		return $default_options;
	}


	/** @noinspection PhpUnused */
	public static function get_meta_prefix() {
		return apply_filters( 'skeleton_global_meta_prefix', static::$prefix );
	}


} // class
