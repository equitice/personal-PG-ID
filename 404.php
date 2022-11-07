<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PropertyGuru
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<section class="error-404 not-found">
				<div class="not-found-main">
					<h1 class="page-title"><?php esc_html_e( 'Uh oh...Sorry!', 'propertyguru' ); ?></h1>
					<p class="not-found-subheading">We’re experiencing server issues. Don’t worry! Our engineers are working on a fix.</p>

					<span class="error-title">404 Page not found</span>
					<a href="<?php echo esc_url( home_url() );?>" class="btn-link">Home</a>

					<div class="not-found-desc">
						<p>Still not working? Try clearing your cache and cookies.<br />(<a href="#">Learn how</a>)</p>
						<p>Need help? <a href="#">Contact Customer Care.</a></p>
					</div>
				</div><!-- .page-header -->

				<div class="error-404-img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/icon404.png" />
				</div>


			</section><!-- .error-404 -->
		</div>
	</main><!-- #main -->

<?php
get_footer();
