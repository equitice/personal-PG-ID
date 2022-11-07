<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PropertyGuru
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php echo BHWPC_Helpers::get_primary( get_the_ID() );?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php echo propertyguru_posted_by('<a href="%1$s" rel="bookmark">%2$s</a>');?>
				<span class="entry-meta-dot">•</span>
				<?php propertyguru_posted_on('<a href="%1$s" rel="bookmark">%2$s</a>');?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<div class="header-content">
		<?php propertyguru_post_thumbnail(); ?>
		<p class="single-description"><?php echo get_field('news_description');?></p>
		<img class="summary-edition" src="<?php echo get_field('summary_edition');?>" alt="">
	</div>

	<div class="entry-content">
		<?php
		$news_description = get_field('news_description');
		if( $news_description ) {
			printf('<p class="single-description">%s</p>', $news_description);
		}

		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'propertyguru' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'propertyguru' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer entry-content">
		<?php propertyguru_entry_footer($post->ID, 'Tags:', '', '#%s'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
