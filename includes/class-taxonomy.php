<?php

namespace SkeletonGutenbergBlocks;
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// if class already defined, bail out
if ( class_exists( 'SkeletonGutenbergBlocks\Taxonomy' ) ) {
	return;
}


/**
 * This class will create meta boxes for Taxonomies
 *
 * @package    SkeletonGutenbergBlocks
 * @subpackage SkeletonGutenbergBlocks/includes
 * @author     Rao <raoabid491@gmail.com>
 */
class Taxonomy {



	/**
	 * Initialize the class and set its properties.
	 *
	 *
	 * @since    1.0.0
	 */
	public function __construct() {



	}


}