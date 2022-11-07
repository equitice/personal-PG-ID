<?php
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'BHWPC_DIR', plugin_dir_path( __FILE__ ) );

if ( is_admin() && ( defined( 'DOING_AJAX' ) && DOING_AJAX) ) {
	require_once BHWPC_DIR . 'includes/ajax.php';
}

define( 'BHWPC_URL', plugin_dir_url( __FILE__ ) );

add_action( 'init', function() {
	require_once BHWPC_DIR . 'includes/init.php';
	require_once BHWPC_DIR . 'includes/helpers.php';

	if( is_admin() ){
		require_once BHWPC_DIR . 'includes/meta-box.php';
	}
}, 11 );
