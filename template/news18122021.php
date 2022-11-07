<?php
/* Template Name: News */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;

?>
	<main id="primary" class="site-main">
        <div class="container">
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
                    $_post = get_post(get_field('slider_post', 'category_' . $banner_term->term_id));?>
                <div class="main-slide-item">
                    <img class="thumb-pc" src="<?php echo esc_url($background);?>" />
                    <?php if(!empty($background_sp)){
                        ?><img class="thumb-mb" src="<?php echo esc_url($background_sp);?>" /><?php
                    }else{
                        ?><img class="thumb-mb" src="<?php echo esc_url($background);?>" /><?php
                    }?>
                    <div class="main-slide-box">
                        <div class="main-slide-content">
                            <a href="<?php echo get_category_link($banner_term);?>" class="bhwpc-primary-category-link"><?php echo $banner_term->name;?></a>
                            <h2><a href="<?php echo esc_url( get_permalink($_post->ID) );?>"><?php echo esc_attr($_post->post_title);?></a></h2>
                            <p><?php echo wp_trim_words(get_the_excerpt($_post->ID), 20);?></p>
                            <a href="<?php echo esc_url( get_permalink($_post->ID) );?>" class="btn-link"><?php the_field('title_text_read_more','option');?></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php }?>


            <form action="<?php echo esc_url( get_permalink($parent_id) ); ?>" method="GET" class="news-search-filters">
                <div class="news-search-col">
                    <label><?php the_field('title_text_category','option');?></label>
                    <select name="c" class="form-select2">
                        <option value="all"><?php the_field('placeholder_text_category','option');?></option>
                        <?php Propertyguru_Helpers::get_dropdown_taxonomies();?>
                    </select>
                </div>

                <div class="news-search-col">
                    <label><?php the_field('title_text_years','option');?></label>
                    <select name="y" class="form-select2">
                        <option value="all"><?php the_field('placeholder_text_years','option');?></option>
                        <?php Propertyguru_Helpers::get_posts_years_array();?>
                    </select>
                </div>

                <div class="news-search-col">
                    <label><?php the_field('title_text_search','option');?></label>

                    <div class="news-search-input">
                        <input type="text" name="k" placeholder="<?php the_field('placeholder_text_search','option');?>" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" />
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/search.svg" />
                    </div>
                </div>
            </form>

            <?php
            $topnews_limit = get_field('topnews_limit', $parent_id);
            $topnews_limit = empty($topnews_limit) ? 4 : $topnews_limit;
                            
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
                $topnews_label = get_field('topnews_label', $parent_id);
                $topnews_description = get_field('topnews_description', $parent_id);
                
                ?>
            <div class="sticky-category-items">
                <div class="sticky-category-heading">
                    <h3><?php echo esc_attr($topnews_label);?></h3>
                </div>

                <?php
                if( ! empty($topnews_description) ) {
                    printf('<p class="sticky-category-description">%s</p>', strip_tags($topnews_description));
                }?>

                <div class="sticky-category-listing post-grid-top">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                    $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
                    <article class="abc">
                        <a href="<?php echo esc_url( get_permalink($post->ID) );?>"><?php echo wp_get_attachment_image( $post_thumbnail_id, 'full');?></a>
                        <h3><a href="<?php echo esc_url( get_permalink($post->ID) );?>"><?php echo esc_attr($post->post_title);?></a></h3>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php }
            wp_reset_postdata();?>

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
                                <h3><?php echo esc_attr($category['category']->name);?></h3>   
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
                            <p class="sticky-category-description"><?php echo esc_attr($category['category']->description);?></p>
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