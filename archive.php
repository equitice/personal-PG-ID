<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PropertyGuru
 */

 global $wp_query;

 $object = $wp_query->queried_object;


get_header();
?>

	<main id="primary" class="site-main">
			<?php if (get_field('slider_banner','category_' . get_queried_object()->term_id)) {
        $desktop_banner = get_field('slider_banner','category_' . get_queried_object()->term_id); ?>
    <style>
    .pg-hero-sec {
		background-image: url(<?php echo $desktop_banner; ?>);
		background-position:left;/*change to left, right or center*/
    }
		/*lyla codes under this line*/
		.archive.category-88 .pg-hero-text{
color:#2c2c2c;
padding-right: 160px;
        }
		.archive.category-8 .pg-hero-text{
color:#fff;
		}
		.archive.category-3 .pg-hero-text{
color:#fff;
}
		.pg-hero-sec{
background-position:center;
        }
	@media only screen and (max-width: 768px) {
        .archive.category-3 .pg-hero-text{
padding-top:350px;
		}
    @media only screen and (max-width: 768px) {
        .archive.category-88 .pg-hero-text{
color:#fff;
		}
    @media only screen and (max-width: 768px) {
        .archive.category-81 .pg-hero-sec{
background-position:center;
		}
    @media only screen and (max-width: 575px) {
    .archive.category-88 .pg-hero-text{
      padding-right:30px;
        }
      }
		.archive.category-8 .pg-hero-text{
color:#fff;
}
    </style>
    <?php }?>
    <?php if (get_field('slider_banner_mobile','category_' . get_queried_object()->term_id)) {
        $mobile_banner = get_field('slider_banner_mobile','category_' . get_queried_object()->term_id); ?>
    <style>
    @media only screen and (max-width: 768px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
			background-position:bottom; /*change to top, bottom or center*/
        }
		.pg-hero-sec .pg-hero-text{justify-content: start;padding-top:50px;}
    }
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('cat_description','category_' . get_queried_object()->term_id);
        ?>
        <section class="pg-hero-sec pg-h1-has-shadow">
            <div class="container">
                <div class="row">
					<div class="col-md-8 col-lg-7 pg-hero-text">

					<h1 class="pg-h1"><?php echo remove_the_archive_title(get_the_archive_title());?></h1>
				<p class="pg-paragraph">
					<?php echo get_the_archive_description(); ?>
				</p>
<!-- 				<a href="#" class="btn-link white-btn">Learn More</a>	 -->
			</div>

					</div>
            </div>
        </section>

		<div class="container">
			<ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList">
				<li>
					<a href="<?php echo esc_url( home_url() );?>"><i class="pg-icon-home"></i></a>
				</li><li>
					<a href="<?php echo esc_url( home_url() );?>/agentnews/">Agent News</a>
				</li>
				<li class="active"><?php echo remove_the_archive_title(get_the_archive_title());?></li>
			</ol>
		</div>
			<?php
			/*if ( is_category() ) {
				$terms = get_terms( array(
					'taxonomy' => 'category',
					'hide_empty' => true,
				) );

				if($terms) { */?>
<!-- 				<div class="archive-browser-category">
					<h3><?php the_field('news_by_category_archive','option');?></h3>
					<ul> -->
						<?php /*foreach( $terms as $term ) {
							printf(
								'<li class="%s"><a href="%s">%s</a></li>',
								($term->term_id ==  $object->term_id) ? 'active' : '',
								get_term_link($term),
								$term->name
							);
						} */ ?>
<!-- 					</ul>
				</div> -->
				<?php /* } */
			/*} */?>
<!-- 		</div> -->

			<div class="container pg-intro">
				<div class="archive-container row">
					<div class="archive-left col-9">
					<?php
					$layout = 'list';
					if ( have_posts() ) : ?>
						<div class="sticky-category-listing post-<?php echo $layout;?>-items">
							<?php
							$GLOBALS['item_excerpt'] = ($layout == 'list') ? 45 : 10;
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								//get_template_part( 'template-parts/content', get_post_type() );
								get_template_part( 'template-parts/content', 'item' );

							endwhile;?>
						</div>
						<?php

						echo Propertyguru_Helpers::pagination($GLOBALS['wp_query']);


						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;?>
					</div><!-- .archive-left -->

					<div class="archive-sidebar col-3">
						<?php dynamic_sidebar('blog-sidebar');?>
					</div>
				</div><!-- .archive-container -->
		</div>
	</main><!-- #main -->

<?php get_footer();
