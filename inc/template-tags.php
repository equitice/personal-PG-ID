<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package PropertyGuru
 */

if ( ! function_exists( 'propertyguru_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function propertyguru_posted_on($custom_echo = null) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		if( ! empty($custom_echo) ) {
			$posted_on = sprintf($custom_echo, esc_url( get_permalink() ), $time_string);
		}else {
			$posted_on = sprintf(
				/* translators: %s: post date. */
				esc_html_x( 'Posted on %s', 'post date', 'propertyguru' ),
				'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
			);
		}

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'propertyguru_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function propertyguru_posted_by($custom_echo = null) {

		if( ! empty($custom_echo) ) {
			$byline = sprintf(
				$custom_echo,
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_html( get_the_author() )
			);
		}else {
			$byline = sprintf(
				/* translators: %s: post author. */
				esc_html_x( 'by %s', 'post author', 'propertyguru' ),
				'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
			);
		}

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'propertyguru_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function propertyguru_entry_footer($post_id, $label = null, $separator = null, $before_text = '%s') {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'propertyguru' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				//printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'propertyguru' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$taxonomy = 'post_tag';
			$terms = get_the_terms($post_id, $taxonomy);
			if ( $terms ) {
				$links = array();
 
				foreach ( $terms as $term ) {
					$link = get_term_link( $term, $taxonomy );
					if ( is_wp_error( $link ) ) {
						return $link;
					}

					$links[] = sprintf(
						'<a href="%s" rel="tag">%s</a>%s',
						esc_url( $link ),
						sprintf($before_text, esc_attr($term->name)),
						$separator
					);
				}

				$term_links = apply_filters( "term_links-{$taxonomy}", $links );
			 
				/* translators: 1: list of tags. */
				printf(
					'<div class="tags-links-wrapper"><span class="tags-links-label">%s</span><div class="tags-links">%s</div></div>',
					empty($label) ? esc_html__( 'Tagged', 'propertyguru' ) : esc_attr($label),
					implode( $separator, $term_links )
				); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'propertyguru' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'propertyguru' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'propertyguru_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function propertyguru_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

if ( ! function_exists( 'propertyguru_get_post_navigation' ) ) :
	function propertyguru_get_post_navigation() {
		$previous = get_previous_post();
		$next = get_next_post();

		$data = array();
		if( ! empty($previous) ) {
			$data['previous'] = $previous;
		}

		if( ! empty($next) ) {
			$data['next'] = $next;
		}

		return $data;
	}
endif;