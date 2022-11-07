<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class BHWPC_Helpers {
	static function get_primary( $post_id, $taxonomy = 'category' ) {
		$post_id = absint($post_id);

		if( ! empty($post_id) ) {
			$get_primary_id = (int) get_post_meta($post_id, 'bhwpc_primary_category', true);
			$term = get_term_by( 'id', $get_primary_id, $taxonomy );

			if( ! is_wp_error( $term ) && ! empty($term->name) ) {
				return apply_filters( 'bhwpc_get_primary_category_link',
					sprintf('<a href="%1$s" class="bhwpc-primary-category-link" title="%2$s">%2$s</a>', get_term_link($term, $taxonomy), $term->name ),
					$term
				);
			}
		}
	}

	static function write_log ( $log )  {
        if ( is_array( $log ) || is_object( $log ) ) {
            file_put_contents(BHWPC_DIR . 'debug.log', print_r( $log, true ).PHP_EOL , FILE_APPEND | LOCK_EX);
        } else {
            file_put_contents(BHWPC_DIR . 'debug.log', $log.PHP_EOL , FILE_APPEND | LOCK_EX);
        }
    }

	/**
	 * @param array      $array
	 * @param int|string $position
	 * @param mixed      $insert
	 */
	static function array_insert($array, $position, $insertArray, $append = true)
	{
		if( is_numeric($position) ) {

		}else {
			$positionKey = array_search($position, array_keys($array));

			if( ! empty($positionKey) && is_array($insertArray) ) {
				$positionKey = empty($append) ? $positionKey : $positionKey + 1;

				$array = array_slice($array, 0, $positionKey) + $insertArray + array_slice($array, $positionKey);

			}
		}

		return $array;
	}
}