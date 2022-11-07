<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PropertyGuru
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="single-post-content">
			<div class="container">
				<?php propertyguru_breadcrumbs();
				while ( have_posts() ) :
					the_post();
					
					get_template_part( 'template-parts/single-content', get_post_type() );
					get_template_part( 'template-parts/single-content', 'tags' );
					get_template_part( 'template-parts/single-content', 'meta' );
					// If comments are open or we have at least one comment, load up the comment template.
					$comments_args = array(
						// change the must log in text and link url
						'must_log_in'=> '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), 'YOUR_CUSTOM_LOGIN_PAGE_URL' ) . '</p>'
				);
				if(is_user_logged_in()){
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				}else{ 
					get_template_part( 'template-parts/comment', 'notlogin');
				}
				endwhile; // End of the loop.
				?>
			</div>
		</div>

		<?php
		$categories = get_the_category();

		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'post__not_in' => array($post->ID),
			'orderby'        => 'rand'
		);

		if( ! empty($categories) ) {
			$args_cat = array();
			foreach( $categories as $_cat ) {
				$args_cat[] = $_cat->slug;
			}

			$args['tax_query'] = array(
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => $args_cat,
					'operator' => 'IN'
				)
			);
		}

		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) {
		?>
		<div class="single-recommended">
			<div class="container">
				<div class="single-recommended-heading">
					<h3><?php the_field('text_recommended_single','option');?></h3>
					<a href=""><?php the_field('text_see_all_single','option');?></a>
				</div>

				<div class="single-recommended-content post-grid-items">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post();
						get_template_part( 'template-parts/content', 'item' );
					endwhile; ?>
				</div>
			</div>
		</div>
		<?php
			wp_reset_postdata();
		}?>
		<div class="guidelines">
			<div class="container">
				<div class="content"><?php echo get_field('guide','option');?></div>
				<div class="cta-agree"><button>Agree</button></div>
				<button class="cta-close"><img src="<?php echo get_template_directory_uri().'/assets/img/close.png'?>" alt=""></button>
			</div>
		</div>

	</main><!-- #main -->
	<script>
		function getCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		}
		getCookie('single_views');

	</script>
	

<?php
get_footer();
