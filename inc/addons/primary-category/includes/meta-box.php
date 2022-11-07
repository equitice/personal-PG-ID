<?php

class BHWPC_Meta_Box {
    
    public function __construct() {
        add_action( 'admin_init', array( $this, 'register_post_type_column' ) );
        add_action( 'add_meta_boxes', array( $this, 'bh_wpc_meta_box' ) );
        add_action( 'save_post', array( $this, 'pc_field_data' ) ); 
    }
    
    public function register_post_type_column() {
        $post_types = array('post', 'product');


        foreach( $post_types as $post_type ) {
            add_filter( "manage_{$post_type}_posts_columns", array($this,'add_columns'), 99, 1 );
            add_action( "manage_{$post_type}_posts_custom_column", array($this,'dipslay_columns'), 10, 2 );
        }
        // $post_types = get_post_types( [], 'objects' );

    }

    public function add_columns($columns) {
        $columns = BHWPC_Helpers::array_insert(
            $columns,
            'title',
            array('primary_category' => 'Primary Category')
        );

        BHWPC_Helpers::write_log($columns);

        return $columns;
    }

    public function dipslay_columns($column, $post_id) {
        echo BHWPC_Helpers::get_primary($post_id, 'category');
    }

    public function bh_wpc_meta_box() {
        
        // Retrieve all post types and add meta box to all post types, including custom post types
    	$post_types = get_post_types();
    
    	foreach ( $post_types as $post_type ) {
    
    		// Skip the "page" post type
    		if ( $post_type == 'page' ) {
    			continue;
    		}
    
    		add_meta_box (
    			'wp_primary_category',
    			__('Primary Category', 'wp-primary-category'),
    			array( $this, 'bh_wpc_meta_box_content' ),
    			$post_type,
    			'side',
    			'low'
    		);
    
    	}
    	
    }
    
    public function bh_wpc_meta_box_content() {
        
        global $post;

    	$primary_category = '';
    	$current_selected = get_post_meta( $post->ID, 'bhwpc_primary_category', true );
    

    	if ( $current_selected != '' ) {
    		$primary_category = $current_selected;
    	}

        self::show_select($post, '', $primary_category);
        
  
    }
    
    public function pc_field_data() {
        
        global $post;

    	if ( isset( $_POST[ 'bhwpc_primary_category' ] ) ) {
    
    		$primary_category = sanitize_text_field( $_POST[ 'bhwpc_primary_category' ] );
    		update_post_meta( $post->ID, 'bhwpc_primary_category', $primary_category );
    
    	}
        
    }

    public static function show_select($post, $options = null, $default = null){
        $post_categories = get_object_taxonomies($post, 'objects');
        if($post_categories){
            foreach ($post_categories as $key => $tax) {
                if($tax->hierarchical){
                    $tax_name = $tax->name;
                    $taxonomy = $tax;
                }
            }

            if(isset($tax_name)){
                $parent_dropdown_args = array(
                    'taxonomy'         => $tax_name,
                    'hide_empty'       => 0,
                    'name'             => 'bhwpc_primary_category',
                    'orderby'          => 'name',
                    'hierarchical'     => 1,
                    'id'               => 'bh_wpc_select',
                    'show_option_none' => '&mdash; ' . $taxonomy->labels->parent_item . ' &mdash;',
                );

                if($options){
                    $parent_dropdown_args = array_merge($parent_dropdown_args, array('include' => $options));
                }else{
                    $select_post_terms = wp_get_post_terms($post->ID, $tax_name);
                    $include_terms = array();
                    if($select_post_terms){
                        foreach ($select_post_terms as $key => $sterm) {
                            $include_terms[] = $sterm->term_id;
                        }
                        $parent_dropdown_args = array_merge($parent_dropdown_args, array('include' => $include_terms));
                    }
                }


                if($default){
                    $parent_dropdown_args = array_merge($parent_dropdown_args, array('selected' => $default));
                }

                wp_dropdown_categories( $parent_dropdown_args );
            }
        }
    }
    
}
new BHWPC_Meta_Box();