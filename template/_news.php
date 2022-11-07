<?php
/* Template Name: News */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;
?>
	<main id="primary" class="site-main">
        <div class="container">
            <?php if( ! empty($slider_items) ) { ?>
            <div id="main-slider" class="main-slider owl-carousel">
                <?php foreach( $slider_items as $slider ) { ?>
                <div class="main-slide-item">
                    <img src="<?php echo esc_url($slider['background']);?>" />

                    <div class="main-slide-box">
                        <div class="main-slide-content">
                            <?php echo BHWPC_Helpers::get_primary( $slider['post']->ID );?>
                            <h2><a href="<?php echo esc_url( get_permalink($slider['post']->ID) );?>"><?php echo esc_attr($slider['post']->post_title);?></a></h2>
                            <p><?php echo wp_trim_words(get_the_excerpt($slider['post']->ID), 20);?></p>
                            <a href="<?php echo esc_url( get_permalink($slider['post']->ID) );?>" class="btn-link">Read more</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php }?>


            <form action="<?php echo esc_url( get_permalink($parent_id) ); ?>" method="GET" class="news-search-filters">
                <div class="news-search-col">
                    <label>Categories</label>
                    <select name="cat" class="form-select2">
                        <option value="all">All</option>
                        <?php echo Propertyguru_Helpers::get_dropdown_taxonomies();?>
                    </select>
                </div>

                <?php 
                echo '<pre>';
                print_r(Propertyguru_Helpers::get_posts_years_array());
                echo '</pre>';?>

                <div class="news-search-col">
                    <label>Years</label>
                    <select name="year" class="form-select2">
                        <option value="all">All</option>
                    </select>
                </div>

                <div class="news-search-col">
                    <label>Search</label>

                    <div class="news-search-input">
                        <input type="text" name="search" placeholder="Search News here…" />
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
                'meta_query' => array(
                    array(
                        'key'     => 'top_news',
                        'value'   => 1,
                        'compare' => '=',
                    ),
                ),
            );
    
            $the_query = new WP_Query( $args );
    
            if ( $the_query->have_posts() ) {
                
                $topnews_label = get_field('topnews_label', $parent_id);
                $topnews_description = get_field('topnews_description', $parent_id);
                ?>
            <div class="sticky-category-items">
                <div class="sticky-category-heading">
                    <h3><?php echo $topnews_label;?></h3>
                </div>

                <?php
                if( ! empty($topnews_description) ) {
                    printf('<p class="sticky-category-description">%s</p>', $topnews_description);
                }?>

                <div class="sticky-category-listing post-grid-top">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                    $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
                    <article class="">
                        <a href="<?php echo esc_url( get_permalink($post->ID) );?>"><?php echo wp_get_attachment_image( $post_thumbnail_id, 'full');?></a>
                        <h3><a href="<?php echo esc_url( get_permalink($post->ID) );?>"><?php echo esc_attr($post->post_title);?></a></h3>
                    </article>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php }?>
            
            <?php if( ! empty($category_items) ) {
                foreach( $category_items as $category ) {
                    
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3
                    );
            
                    $the_query = new WP_Query( $args );
            
                    if ( $the_query->have_posts() ) { ?>
                    <div class="sticky-category-items <?php echo esc_attr($category['category']->slug);?>">
                        <div class="sticky-category-heading">
                            <h3><?php echo esc_attr($category['category']->name);?></h3>

                            <?php if( ! empty($category['show_readmore']) ) {
                                $custom_text_readmore = $category['custom_text_readmore'];

                                if( empty($custom_text_readmore ) ) {
                                    $custom_text_readmore = 'See all ' . $category['category']->name;
                                }
                                
                                ?>
                                <a href="#" class="sticky-category-readmore"><?php echo esc_attr($custom_text_readmore);?></a>
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
                    </div>
                    <?php }
                }
            }?>


        </div>
    </main><!-- #main -->
<?php get_footer();?>