<?php
/**
 * Holds all of the blocks functions.
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
 * Runs the blocks.
 *
 * This class defines all code necessary to run the blocks of the plugin.
 *
 * @since      1.0.0
 * @package    Starter_Block_Plugin
 * @subpackage Starter_Block_Plugin/public
 */
class Starter_Block_Plugin_Blocks {

	/**
	 * Version of the plugin.
	 *
	 * @since 1.0.0
	 * @var string $version Description.
	 */
	private $version;

	/**
	 * Builds the Starter_Block_Plugin_Blocks object.
	 *
	 * @since 1.0.0
	 *
	 * @param string $version Version of the plugin.
	 */
	public function __construct( $version ) {
		$this->version = $version;
	}

	public function starter_block_plugin_blocks_init() {
		register_block_type( __DIR__ . '/build/starter-block/' );
	}

	public function space_rocket_blocks_categories( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug' => 'starter-block-plugins-blocks',
					'title' => __( 'Starter Block Plugin Blocks', 'starter-block-plugin' ),
					'icon'  => 'wordpress',
				),
			)
		);
	}

}
