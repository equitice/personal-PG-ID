<?php
/*
   Plugin Name: ACF Nav Menu Field
   Plugin URI: https://wordpress.org/plugins/acf-nav-menu/
   description: This plugin creates the Nav Menu option into the ACF field type through that we can choose and use the menu to display.
   Version: 1.0
   Author: Galaxy Weblinks
   Author URI: https://www.galaxyweblinks.com/
   License: GPL2
   Text Domain: acf-nav-menu	
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Define variable for plugin path */
if(!defined('ACNMF')){
  define('ACNMF', plugin_dir_url(__FILE__));
}

/* Custom CSS in the backend */
add_action( 'admin_head', 'acnmf_wordpress_admin_style' );
if(!function_exists('acnmf_wordpress_admin_style')){
	function acnmf_wordpress_admin_style() { 
		global $pagenow;
		if( !class_exists('acf') && is_admin() && $pagenow == 'plugins.php' ) {
			echo '<style>
			#message.updated {
				display: none;
			}
			</style>';
		}
	}
}

/* Check ACF class */
if( !class_exists('acf') )
{
	/* Admin notice message */
	add_action( 'admin_notices', 'acnmf_notice_missing_acf' );
	function acnmf_notice_missing_acf()
	{
		global $pagenow;
		if ( is_admin() && $pagenow == 'plugins.php' ) {
			_e( '<div class="notice notice-error is-dismissible"><p>ACF Nav Menu Field plugin needs "Advanced Custom Fields or Advanced Custom Fields PRO" to run. Please download and activate it</p></div>', 'acf-nav-menu' );
			$acnmf_plugins = array(
				'advanced-custom-nav-menu-field/advanced-custom-nav-menu-field.php'
			);
			require_once(ABSPATH . 'wp-admin/includes/plugin.php');
			deactivate_plugins($acnmf_plugins);			
		}		
	}
}
else{
class ACNMF_Field_Plugin {

	/* Adds register hooks for the Nav Menu Field */
	public function __construct() {
		add_action( 'acf/include_field_types', array( $this, 'acnmf_register_field_for_nav_menu' ) );
	}
	/* Loads up the Nav Menu Field for ACF */
	public function acnmf_register_field_for_nav_menu() {
		include_once 'includes/field/nav-menu.php';
	}
}
new ACNMF_Field_Plugin();
}

/* Enqueue CSS */
function acnmf_enqueue_style() {
 	wp_enqueue_style( 'acnmf-backend', ACNMF.'includes/assets/css/acnmf-backend.css');
}
add_action( 'admin_enqueue_scripts', 'acnmf_enqueue_style' );