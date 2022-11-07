<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class BHWPC_Init{
	public function __construct() {
		add_action( 'init', array($this, 'bhwpc_plugin_load_textdomain') );
		add_action( 'admin_enqueue_scripts', array($this, 'bhwpc_scripts_method') );
		add_filter( 'post_type_link', array($this, 'post_type_link'), 10, 2 );
		add_filter( 'post_link', array($this, 'post_link'), 10, 3 );


		add_filter('woocommerce_get_product_terms', array($this, 'woocommerce_get_product_terms'), 10, 3);
		add_filter('get_sample_permalink', array($this, 'get_sample_permalink'), 10, 3 );


		add_filter( 'woocommerce_get_breadcrumb', array($this, 'woocommerce_get_breadcrumb'), 10, 1);


	}
	public function woocommerce_get_breadcrumb($crumbs){
		global $post;

		$array = array('post', 'product');

		$current_selected = get_post_meta( $post->ID, 'bhwpc_primary_category', true );

		if(in_array($post->post_type, $array) && is_numeric($current_selected) && $current_selected > 0){
			end($crumbs);
			$last_key = key($crumbs);

			$new_crumbs = array($crumbs[0]);
			$last_crumbs = array($crumbs[$last_key]);

	        $post_categories = get_object_taxonomies($post, 'objects');
	        if($post_categories){
	            foreach ($post_categories as $key => $tax) {
	                if($tax->hierarchical){
	                	$current = $this->showCategories($current_selected, $tax->name, 'term_id');

	                	$terms = get_the_terms( $post->ID, $tax->name);

	              		$list_terms = $this->test_key($current_selected, $tax->name);

						usort($list_terms, array($this, 'sortByOrders') );

						foreach ($list_terms as $key => $term) {
							$new_crumbs[] = array($term->name, get_term_link( $term, $tax->name ));
						}
	                }
	            }
	        }
	        $new_crumbs = array_merge($new_crumbs, $last_crumbs);
	        return $new_crumbs;
		}

		return $crumbs;
	}

	public function sortByOrders($a, $b) {
	    return $a->term_id - $b->term_id;
	}

	public function showCategories($term_id, $taxname, $field = null)
	{
		$term = get_term_by('id', $term_id, $taxname);
        if ($term->parent != 0)
        {
        	return $this->showCategories($term->parent, $taxname, $field);
        }else{
        	if($field){
        		return $term->$field;
        	}else{
        		return $term->slug;
        	}
        	
        }
	}

	public function test_key($term_id, $taxname, $str = array())
	{
		$term = get_term_by('id', $term_id, $taxname);
		
		$str[] = $term;
		if($term->parent == 0){
			return $str;
		}else{
			return $this->test_key($term->parent, $taxname, $str);
		}

	}

	public function post_link($permalink, $post, $leavename){
		$permalinks = get_option('permalink_structure');

		if ( preg_match("/%category%/", $permalinks, $out) ) {
			$current_selected = get_post_meta( $post->ID, 'bhwpc_primary_category', true );
			if($current_selected > 0){
				$current = $this->showCategories($current_selected, 'category');
				$permalinks = str_replace('%postname%', $post->post_name, $permalinks);
				$permalink = home_url(str_replace('%category%', $current, $permalinks));
			}
		}

		return $permalink;
		
	}

	public function get_sample_permalink($link, $post_id = null, $name = null) {
		global $post, $wp_rewrite;

		$current_selected = get_post_meta( $post_id, 'bhwpc_primary_category', true );
		if($current_selected > 0){
	        $post_categories = get_object_taxonomies($post, 'objects');
	        if($post_categories){
	            foreach ($post_categories as $key => $tax) {
	                if($tax->hierarchical){
	                    $current = $this->showCategories($current_selected, $tax->name);
				        if ( in_array($post->post_type, get_post_types( array('_builtin' => false) ) ) ){
				        	$post_link = $wp_rewrite->get_extra_permastruct($post->post_type);
				        	$post_link = str_replace('%'.$post->post_type.'%', '%pagename%', $post_link);
				        	$link[0] = home_url(str_replace('%'.$tax->name.'%', $current, $post_link));
						}else{
							$permalink = get_option('permalink_structure');
							$link[0] = home_url(str_replace('%'.$tax->name.'%', $current, $permalink));
						}
						
	         
	                }
	            }
	        }
		}

		return $link;
	}

	public function post_type_link($link, $post = 0){
		global $wp_rewrite;

		$current_selected = get_post_meta( $post->ID, 'bhwpc_primary_category', true );
		if($current_selected > 0){
	        $post_categories = get_object_taxonomies($post, 'objects');
	        if($post_categories){
	            foreach ($post_categories as $key => $tax) {
	                if($tax->hierarchical){
	                	$post_link = $wp_rewrite->get_extra_permastruct($post->post_type);
	                    $current = $this->showCategories($current_selected, $tax->name);
	                    $post_link = str_replace('%'.$post->post_type.'%', $post->post_name, $post_link);
	                    $link = home_url(str_replace('%'.$tax->name.'%', $current, $post_link));
	            	
	                }
	            }

	        }
		}

	    return $link;
	}
    public function woocommerce_get_product_terms($terms, $post_id, $taxonomy){
        $current_selected = get_post_meta( $post_id, 'bhwpc_primary_category', true );
        if($current_selected > 0){
	        $custom_terms = get_term_by('id', $current_selected, $taxonomy);
	 
	        if($terms && $custom_terms){
	            foreach ($terms as $key => $term) {
	                if($term->term_id == $current_selected){
	                    unset($terms[$key]);
	                }
	            }
	            $terms = array_merge(array($custom_terms), $terms);

	        }
        }

        return $terms;
    }

	public function bhwpc_plugin_load_textdomain(){
		$locale = apply_filters( 'plugin_locale', get_locale(), 'wp-knowledgebase' );
		// Load textdomain
		load_textdomain( 'wp-primary-category', WP_LANG_DIR . '/wp-knowledgebase/wp-knowledgebase-' . $locale . '.mo' );
		load_plugin_textdomain( 'wp-primary-category', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

	}



	public function bhwpc_scripts_method($hooks){
		if( $hooks == 'post.php' || $hooks == 'post-new.php' ){
			wp_enqueue_script( 'admin-bhwpc', BHWPC_URL . 'js/admin.js', null, null, true );
			wp_localize_script( 'admin-bhwpc', 'bhwpc', array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'security' => wp_create_nonce('bh_wpc-load')
			));
		}
	}
}
new BHWPC_Init();