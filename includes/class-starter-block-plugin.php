<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://jacobmartella.com
 * @since      1.0.0
 *
 * @package    Starter_Block_Plugin
 * @subpackage Starter_Block_Plugin/includes
 */

namespace Starter_Block_Plugin;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Starter_Block_Plugin
 * @subpackage Starter_Block_Plugin/includes
 */
class Starter_Block_Plugin {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    Starter_Block_Plugin_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Builds the main object for the plugin.
	 *
	 * @since  1.0.0
	 */
	public function __construct() {

		$this->plugin_slug = 'starter-block-plugin';
		$this->version     = '0.0.1';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_setup_hooks();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Loads all of the files we're depending on to run the plugin.
	 *
	 * @since  1.0.0
	 */
	private function load_dependencies() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-starter-block-plugin-i18n.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-starter-block-plugin-setup.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-starter-block-plugin-admin.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-starter-plugin-public.php';

		require_once plugin_dir_path( __FILE__ ) . 'class-starter-block-plugin-loader.php';
		$this->loader = new Starter_Block_Plugin_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the JM_Client_Manager_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {
		$plugin_i18n = new Starter_Block_Plugin_i18n();
		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
	}

	/**
	 * Runs all of the setup functions for the plugin.
	 *
	 * @since 1.0.0
	 */
	private function define_setup_hooks() {
		$plugin_setup = new Starter_Block_Plugin_Setup( $this->get_plugin_name(), $this->get_version() );
	}

	/**
	 * Runs all of the admin hooks for the plugin.
	 *
	 * @since 1.0.0
	 */
	private function define_admin_hooks() {
		$admin = new Starter_Block_Plugin_Admin( $this->get_version() );
		$this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_scripts' );
	}

	/**
	 * Runs all of the public hooks for the plugin.
	 *
	 * @since 1.0.0
	 */
	private function define_public_hooks() {
		$public = new Starter_Block_Plugin_Public( $this->get_version() );
	}

	/**
	 * Runs the plugin set up.
	 *
	 * @since 1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * Gets the current version of the plugin.
	 *
	 * @since  1.0.0
	 * @return string    The version of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Starter_Block_Plugin_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}
}
