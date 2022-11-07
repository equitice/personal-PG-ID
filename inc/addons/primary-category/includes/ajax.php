<?php
class BHWPC_Ajax{
	public function __construct() {
		add_action( 'wp_ajax_nopriv_bhwpc_load', array( $this, 'bhwpc_ajax_load') );
		add_action( 'wp_ajax_bhwpc_load', array( $this, 'bhwpc_ajax_load') );
	}

	public function bhwpc_ajax_load(){
		if ( ! wp_verify_nonce( $_REQUEST['security'], 'bh_wpc-load' ) ) {
		     die( 'Security check' ); 
		} else {
			$option = $_REQUEST['option'];
			$post = absint($_REQUEST['post']);
			$select = $_REQUEST['select'];

			if(is_array($option) && !empty($option) && $post){
				
				$json['complete'] = true;
				
				ob_start();
				$post = get_post($post);
				BHWPC_Meta_Box::show_select($post, $option, $select);
				$json['field'] = ob_get_clean();
			}
		}
		echo wp_json_encode($json);
		wp_die();
	}
}
new BHWPC_Ajax();