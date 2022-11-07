<?php
/* Template Name: News */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;

?>
<style>
	.owl-item:nth-of-type(4) .main-slide-content .news_slider_cat_link, .owl-item:nth-of-type(4) .main-slide-content .news_slider_title,
	.owl-item:nth-of-type(4) .main-slide-content .news_slider_title a, .owl-item:nth-of-type(4) .main-slide-content .news_slider_title a:visited,
	.owl-item:nth-of-type(4) .main-slide-content .news_slider_title a:hover, .owl-item:nth-of-type(4) .main-slide-content .news_slider_desc,
	.owl-item:nth-of-type(5) .main-slide-content .news_slider_cat_link, .owl-item:nth-of-type(5) .main-slide-content .news_slider_title,
	.owl-item:nth-of-type(5) .main-slide-content .news_slider_title a, .owl-item:nth-of-type(5) .main-slide-content .news_slider_title a:visited,
	.owl-item:nth-of-type(5) .main-slide-content .news_slider_title a:hover, .owl-item:nth-of-type(5) .main-slide-content .news_slider_desc {
		color: #FFFFFF !important;
	}
	 @media only screen and (max-width: 767px) {
		 body.page-template-news #main-slider .main-slide-item#news-article-6513 .main-slide-box  p.news_slider_desc{color:#0E2638;}
	}
	@media only screen and (max-width: 575px) {
		.pg-h1, .pg-hero-sec h1, .pg-hero-sec h1 span, .pg-h1 > a{font-size:24px;line-height:32px;}
	}
	ol.breadcrumbs{margin-bottom:0;}
</style>
	<main id="primary" class="site-main static">

		<!-- 	Hero Banner	 -->
		  <?php
            $args = array(
                'hide_empty' => false,
                'meta_query' => array(
                    array(
                    'key'       => 'slider_post',
                    'value'   => array(''),
                    'compare' => 'NOT IN'
                    )
                ),
                'taxonomy'  => 'category',
            );

            $banner_terms = get_terms( $args );
            if( ! empty($banner_terms) ) { ?>
            <div id="main-slider" class="main-slider owl-carousel">
                <?php foreach( $banner_terms as $banner_term ) {
                    $background = get_field('slider_banner', 'category_' . $banner_term->term_id);
                    $background_sp = get_field('slider_banner_mobile', 'category_' . $banner_term->term_id);

                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => $banner_term->slug,
                            )
                        ),
                        'posts_per_page' => 1
                    );

                    $query = new WP_Query( $args );

                    if( $query->have_posts() ) {
                        while( $query->have_posts() ) {
                            $query->the_post();
				 //	$background = get_field('main_banner_image',$post->ID);
                 //   $background_sp = get_field('main_banner_image_mobile',$post->ID);
				?>
                    <div class="main-slide-item" id="news-article-<?php echo $post->ID; ?>">

                        <img class="thumb-pc" src="<?php echo esc_url($background);?>" />
                        <?php if(!empty($background_sp)){
                            ?><img class="thumb-mb" src="<?php echo esc_url($background_sp);?>" /><?php
                        }else{
                            ?><img class="thumb-mb" src="<?php echo esc_url($background);?>" /><?php
                        }?>
                        <div class="main-slide-box">
                            <div class="main-slide-content">
                                <a class="pg-h3 news_slider_cat_link" href="<?php echo get_category_link($banner_term);?>"><?php echo $banner_term->name;?></a>
                                <h1 class="pg-h1 news_slider_title"><a href="<?php echo esc_url( get_permalink($post->ID) );?>"><?php echo esc_attr($post->post_title);?></a></h1>
                                <p class="pg-paragraph news_slider_desc"><?php
							   $sentence = preg_split( '/(\.|!|\?)\s/', get_the_excerpt($post->ID), 2, PREG_SPLIT_DELIM_CAPTURE );
    							echo $sentence['0'] . $sentence['1'];
								 ?>
								</p>
                                <a href="<?php echo esc_url( get_permalink($post->ID) );?>" class="white-button"><?php the_field('title_text_read_more','option');?></a>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }
                    wp_reset_postdata();
                }?>
            </div>
            <?php }?>

<!-- 	Breadcrumbs	 -->
		<div class="breadcrumbs container">

		<ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList"><li><a href="<?php echo site_url(); ?>"><i class="pg-icon-home"></i></a>
						<meta itemprop="position" content="1"></li><li class="active">Agent News</li>

		</ol>

		</div><div class="container">
			  <form action="<?php echo esc_url( get_permalink($parent_id) ); ?>" method="GET" class="news-search-filters">
                <div class="news-search-col">
                    <label class="pg-paragraph"><?php the_field('title_text_category','option');?></label>
                    <select name="c" class="form-select2">
                        <option value="all"><?php the_field('placeholder_text_category','option');?></option>
                        <?php Propertyguru_Helpers::get_dropdown_taxonomies();?>
                    </select>
                </div>

                <div class="news-search-col">
                    <label class="pg-paragraph"><?php the_field('title_text_years','option');?></label>
                    <select name="y" class="form-select2">
                        <option value="all"><?php the_field('placeholder_text_years','option');?></option>
                        <?php Propertyguru_Helpers::get_posts_years_array();?>
                    </select>
                </div>

                <div class="news-search-col">
                    <label class="pg-paragraph"><?php the_field('title_text_search','option');?></label>

                    <div class="news-search-input">
                        <input type="text" name="k" placeholder="<?php the_field('placeholder_text_search','option');?>" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" />
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/search.svg" />
                    </div>
                </div>
            </form>

            <?php
            $topnews_limit = get_field('topnews_limit', $parent_id);
            $topnews_limit = empty($topnews_limit) ? 4 : $topnews_limit;
            $topnews_modes = get_field('topnews_modes', $parent_id);

            $topnews_label = get_field('topnews_label', $parent_id);
            $topnews_description = get_field('topnews_description', $parent_id);

            ?>
            <div class="sticky-category-items">
                <div class="sticky-category-heading">
                    <h2 class="pg-h2"><?php echo esc_attr($topnews_label);?></h2>
                </div>

                <?php
                if( ! empty($topnews_description) ) {
                    printf('<p class="sticky-category-description pg-paragraph">%s</p>', strip_tags($topnews_description));
                }?>

                <div class="sticky-category-listing post-grid-top">
                    <?php
                    if( $topnews_modes == 'manually' ) {
                        $topnews_posts = get_field('topnews_posts', $parent_id);

                        if( ! empty($topnews_posts) ) {
                            foreach( $topnews_posts as $topnews_post ) {
                                $post = $topnews_post['item'];
                                include get_template_directory() . '/template-parts/content-top-news.php';
                            }
                        }
                    }else {
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => $topnews_limit,
                            'meta_key' => '_post_views',
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC',
                            'category__not_in' => array(4)
                        );

                        $the_query = new WP_Query( $args );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                include get_template_directory() . '/template-parts/content-top-news.php';
                            endwhile;
                        }

                        wp_reset_postdata();
                    } ?>
                </div>
            </div>
            <?php
            if( isset($_GET['c']) && $_GET['c'] != 'all' || isset($_GET['y']) && $_GET['y'] != 'all' || isset($_GET['k']) ) {
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => get_option('posts_per_page')
                );

                if( isset($_GET['c']) && $_GET['c'] != 'all' ) {
                    $args['tax_query'] = [
                        [
                            'taxonomy' => 'category',
                            'field'    => 'term_id',
                            'terms'    => absint($_GET['c'])
                        ]
                    ];
                }

                if( isset($_GET['y']) && $_GET['y'] != 'all' ) {
                    $args['date_query'] = [
                        [
                            'year'  => absint($_GET['y']),
                        ]
                    ];
                }

                if( isset($_GET['k']) ) {
                    $args['s'] = sanitize_text_field($_GET['k']);
                }

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {  ?>
                    <div class="sticky-category-wrapper">
                        <div class="sticky-category-listing post-grid-items">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                                get_template_part( 'template-parts/content', 'item' );
                            endwhile; ?>
                        </div>
                        <?php echo Propertyguru_Helpers::pagination($the_query);?>
                    </div>
                    <?php
                }

                wp_reset_postdata();

            }else {
                if( ! empty($category_items) ) {
                    foreach( $category_items as $category ) {

                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms'    => $category['category']->slug,
                                ),
                            ),
                        );

                        $the_query = new WP_Query( $args );

                        if ( $the_query->have_posts() ) { ?>
                        <div class="sticky-category-items <?php echo esc_attr($category['category']->slug);?>">
                            <div class="sticky-category-heading">
                                <h2 class="pg-h2"><?php echo esc_attr($category['category']->name);?></h3>
                                <?php if( ! empty($category['show_readmore']) ) {
                                    $custom_text_readmore = $category['custom_text_readmore'];

                                    if( empty($custom_text_readmore ) ) {
                                        $custom_text_readmore = get_field('text_see_all_single','option').' '. $category['category']->name;
                                    }

                                    ?>
                                    <a href="<?php echo esc_url( get_term_link($category['category']) );?>" class="sticky-category-readmore"><?php echo esc_attr(str_replace('See all',get_field('text_see_all_single','option'),$custom_text_readmore));?></a>
                                <?php }?>
                            </div>

                            <?php if( ! empty($category['category']->description) ) { ?>
                            <p class="sticky-category-description pg-paragraph"><?php echo esc_attr($category['category']->description);?></p>
                            <?php }?>

                            <div class="sticky-category-listing post-grid-items">
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                                    get_template_part( 'template-parts/content', 'item' );
                                endwhile; ?>
                            </div>
                            <?php if( ! empty($category['show_readmore']) ) {
                                $custom_text_readmore = $category['custom_text_readmore'];

                                if( empty($custom_text_readmore ) ) {
                                    $custom_text_readmore = get_field('text_see_all_single','option').' '. $category['category']->name;
                                }

                                ?>
                                <a href="<?php echo esc_url( get_term_link($category['category']) );?>" class="sticky-category-readmore only-mb"><?php echo esc_attr(str_replace('See all',get_field('text_see_all_single','option'),$custom_text_readmore));?></a>
                            <?php }?>
                        </div>
                        <?php }
                        wp_reset_postdata();
                    }
                }
            }?>


        </div>
    </main><!-- #main -->
<?php get_footer();?>