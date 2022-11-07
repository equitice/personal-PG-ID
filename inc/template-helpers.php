<?php

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Propertyguru_Helpers' ) ) {

	class Propertyguru_Helpers {
		/**
		 * Instance of this class.
		 *
		 * @since   1.0.0
		 * @access  public
		 * @var     Propertyguru_Helpers
		 */
		public static $instance;

		/**
		 * Provides access to a single instance of a module using the singleton pattern.
		 *
		 * @since   1.0.0
		 * @return  object
		 */
		public static function get_instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Define the core functionality of the plugin.
		 *
		 * @since   1.0.0
		 */
		public function __construct() {

		}

		static function get_dropdown_taxonomies() {
			$terms = get_terms( array(
				'taxonomy' => 'category',
				'hide_empty' => false,
			) );

			if( ! empty($terms) ) {
				return self::_get_dropdown_taxonomies( $terms );
			}
		}

		static function get_posts_years_array() {
			global $wpdb;

			$years = $wpdb->get_results(
				$wpdb->prepare(
					"SELECT YEAR(post_date) FROM {$wpdb->posts} WHERE post_status = %s GROUP BY YEAR(post_date) DESC",
					'publish'
				),
				ARRAY_N
			);

			if ( is_array( $years ) && count( $years ) > 0 ) {
				foreach ( $years as $year ) {
					$selected = '';
					if( isset($_GET['y']) && $_GET['y'] == $year[0] ) {
						$selected = ' selected';
					}

					printf(
						'<option value="%1$s"%2$s>%1$s</option>',
						$year[0],
						$selected
					);
				}
			}
		}

		static function pagination( $nav_query = false ) {

			global $wp_query, $wp_rewrite;


			// Don't print empty markup if there's only one page.
			if ( $nav_query->max_num_pages < 2 ) {
				return;
			}

			$paged = isset($wp_query->query['paged']) ? $wp_query->query['paged'] : 1;
	
			// Prepare variables
			$query        = $nav_query ? $nav_query : $wp_query;
			$max          = $query->max_num_pages;
			$current_page = $paged;
			$big          = 999999;
	
			?>
			<div class="page-navigation clearfix" role="navigation">
				<nav class="page-nav">
					<?php
					$paginates = paginate_links(
						array(
							'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format'    => '?paged=%#%',
							'current'   => $current_page,
							'total'     => $max,
							'type'      => 'plain',
							'prev_text' => '←',
							'next_text' => '→'
						)
					);

					if( preg_match_all('/<(a|span)[^>]*class="page-numbers[^>]*>(.*)<\/(a|span)>/', $paginates, $output_array) ) {
						$paginates = '<li>' . implode("</li>\n<li>", $output_array[0]) . '</li>' ."\n";
					}
					
					printf('<ul class="page-numbers">%s</ul>', $paginates);
					?>
				</nav><!-- .page-nav -->
			</div><!-- .page-navigation -->
			<?php
		}

		private static function _get_dropdown_taxonomies( $terms, $parent = 0, $char = '' ) {
			foreach( $terms as $term_key => $term ) {
				if( $term->parent == $parent ) {
					unset($terms[$term_key]);

					$selected = '';
					if( isset($_GET['c']) && $_GET['c'] == $term->term_id ) {
						$selected = ' selected';
					}

					printf(
						'<option value="%s"%s>%s %s</option>',
						$term->term_id,
						$selected,
						$char,
						$term->name
					);


					self::_get_dropdown_taxonomies( $terms, $term->term_id, $char . '---' );
				}
			}
		}
		
    }
}