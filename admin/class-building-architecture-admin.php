<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/m7mdAlmujtaba/
 * @since      1.0.0
 *
 * @package    Building_Architecture
 * @subpackage Building_Architecture/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Building_Architecture
 * @subpackage Building_Architecture/admin
 * @author     Mohammed Almujtaba <m7md.almujtaba@gmail.com>
 */
class Building_Architecture_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Building_Architecture_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Building_Architecture_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
		
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/building-architecture-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Building_Architecture_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Building_Architecture_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( 'architecture-script', 'https://code.jquery.com/jquery-3.6.1.min.js', array( 'jquery' ), '3.6.1', true );
		wp_enqueue_script('bootstrap1', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.2.0');

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/building-architecture-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function building_architecture_page()
	{
		add_menu_page(
			'Building Architecture',
			'Building Architecture',
			'manage_options',
			'building_architecture',
			array($this, 'building_architecture_page_html'),
			'dashicons-building',
			21
		);
		add_submenu_page(
			'building_architecture',
			'New Project',
			'Add New Project',
			'manage_options',
			'building_architecture_projects',
			array($this, 'building_architecture_add_page_html'),
		);
		add_submenu_page(
			'building_architecture',
			'Options',
			'Options',
			'manage_options',
			'building_architecture_options',
			array($this, 'building_architecture_options_page_html'),
		);
	}

	function building_architecture_page_html()
	{
		include(plugin_dir_path(__FILE__) . 'partials/building-architecture-admin-display.php');
	}
	
	function building_architecture_options_page_html()
	{
		include(plugin_dir_path(__FILE__) . 'partials/building-architecture-options-display.php');
	}

	function building_architecture_add_page_html()
	{
		include(plugin_dir_path(__FILE__) . 'partials/building-architecture-add-display.php');
	}

}
