<?php
/**
 * Holds all of the public side functions.
 *
 * PHP version 7.3
 *
 * @link       https://jacobmartella.com
 * @since      1.0.0
 *
 * @package    Starter_Block_Plugin
 * @subpackage Starter_Block_Plugin/public
 */

namespace Starter_Block_Plugin;

/**
 * Runs the public side.
 *
 * This class defines all code necessary to run on the public side of the plugin.
 *
 * @since      1.0.0
 * @package    Starter_Block_Plugin
 * @subpackage Starter_Block_Plugin/public
 */
class Starter_Block_Plugin_Public {

	/**
	 * Version of the plugin.
	 *
	 * @since 1.0.0
	 * @var string $version Description.
	 */
	private $version;

	/**
	 * Builds the Starter_Block_Plugin_Public object.
	 *
	 * @since 1.0.0
	 *
	 * @param string $version Version of the plugin.
	 */
	public function __construct( $version ) {
		$this->version = $version;
	}

}
