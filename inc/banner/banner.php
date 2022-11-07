<?php
function create_banner_post_type() {
    $labels = array(
        'name'                  => _x( 'Banners', 'Post type general name', 'Banner' ),
        'singular_name'         => _x( 'Banner', 'Post type singular name', 'Banner' ),
        'menu_name'             => _x( 'Banners', 'Admin Menu text', 'Banner' ),
        'name_admin_bar'        => _x( 'Banner', 'Add New on Toolbar', 'Banner' ),
        'add_new'               => __( 'Add New', 'Banner' ),
        'add_new_item'          => __( 'Add New Banner', 'Banner' ),
        'new_item'              => __( 'New Banner', 'Banner' ),
        'edit_item'             => __( 'Edit Banner', 'Banner' ),
        'view_item'             => __( 'View Banner', 'Banner' ),
        'all_items'             => __( 'All Banners', 'Banner' ),
        'search_items'          => __( 'Search Banners', 'Banner' ),
        'parent_item_colon'     => __( 'Parent Banners:', 'Banner' ),
        'not_found'             => __( 'No Banners found.', 'Banner' ),
        'not_found_in_trash'    => __( 'No Banners found in Trash.', 'Banner' ),
        'featured_image'        => _x( 'Banner Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Banner' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Banner' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Banner' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Banner' ),
        'archives'              => _x( 'Banner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Banner' ),
        'insert_into_item'      => _x( 'Insert into Banner', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Banner' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Banner', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Banner' ),
        'filter_items_list'     => _x( 'Filter Banners list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Banner' ),
        'items_list_navigation' => _x( 'Banners list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Banner' ),
        'items_list'            => _x( 'Banners list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Banner custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'top-banner' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'top-banner', $args );
}
add_action( 'init', 'create_banner_post_type' );

function gr_banner_scripts() {
    wp_enqueue_style( 'gr-banner-css', get_template_directory_uri() . '/inc/banner/banner.css', array(), date("h:i:s")  );
    wp_enqueue_script( 'gr-banner-js', get_template_directory_uri() . '/inc/banner/banner.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'gr_banner_scripts' );

add_shortcode('gr_banner', 'gr_banner');

function gr_banner() {
        $page_ID = get_the_ID();
        $args = array(
            'post_type' => 'top-banner',
            'posts_per_page' => -1,
            'orderby' => 'ID',
            'post_status' => 'publish',
            'meta_query'		=> array(
                'relation'		=> 'AND',
                array(
                    'key' => 'select_pages',
                    'value' => $page_ID,
                    'compare' => 'LIKE'
                    )
                )
            );
            $query = new WP_Query($args);
            global $wp_query; $wp_query->in_the_loop = true;
            while ($query->have_posts()) : $query->the_post(); 
                $postID =$query->post->ID;
                $fields = get_fields('post_'.$postID);
                 $today = get_current_timestamp();
                if($fields['top_banner_type'] === 'template1'):
                    $banner_content = $fields['banner_has_image'];
                    $date_start = strtotime(get_post_meta($postID, 'banner_has_image_schedule_date_start', true));
                    $date_end = strtotime(get_post_meta($postID, 'banner_has_image_schedule_date_end', true));
// 					echo $date_start + ' : ' + $date_end;
                    if($date_start <= $today && $today <= $date_end):
                        ?>
                            <div class="top-banner" id="template1" style = "background-color: <?php echo $banner_content['background_color'];?>">
                                <div class="container">
                                    <div class="content">
                                        <div class="wr-img">
                                            <img src="<?php echo esc_url( $banner_content['image'] ); ?>" alt="">
                                        </div>                                        
                                        <div class="card-text"><?php echo $banner_content['content'];?></div>
                                        <?php
                                        if($banner_content['cta_hideshow'] === 'show'){
                                            ?>
                                            <a class="cta" href ="<?php echo $banner_content['cta_url_link'];?>" data-type = "cta-banner" data-postID = "<?php echo $postID;?>" style="border-radius:10px" data-btn-bgColor = <?php echo $banner_content['cta_background_color'];?> data-btn-textColor = <?php echo $banner_content['cta_text_color'];?> data-btnHover-bgColor = <?php echo $banner_content['cta_hover_bgcolor'];?> data-btnHover-textColor = <?php echo $banner_content['cta_hover_text_color'];?>><?php echo $banner_content['cta_text'];?></a><?php
                                        }?>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endif;
                elseif($fields['top_banner_type'] === 'template2'):
                    $banner_content = $fields['banner_text'];
                    $date_start = strtotime(get_post_meta($postID, 'banner_text_schedule_date_start', true));
                    $date_end = strtotime(get_post_meta($postID, 'banner_text_schedule_date_end', true));
                    if($date_start <= $today && $today <= $date_end):
                    ?>
                        <div class="top-banner" id="template2" style = "background-color: <?php echo $banner_content['background_color'];?>">
                            <div class="container">
                                <div class="content">
                                    <div class="card-text"><?php echo $banner_content['content'];?></div>
                                    <?php
                                    if($banner_content['cta_hideshow'] === 'show'){
                                        ?><a class="cta" href ="<?php echo $banner_content['cta_url_link'];?>" data-type = "cta-banner" data-postID = "<?php echo $postID;?>" style="border-radius:10px" data-btn-bgColor = <?php echo $banner_content['cta_background_color'];?> data-btn-textColor = <?php echo $banner_content['cta_text_color'];?> data-btnHover-bgColor = <?php echo $banner_content['cta_hover_bgcolor'];?> data-btnHover-textColor = <?php echo $banner_content['cta_hover_text_color'];?>><?php echo $banner_content['cta_text'];?></a><?php
                                    }?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                elseif($fields['top_banner_type'] === 'template3'):
                    $banner_content = $fields['banner_countdown'];
                    $date_start = strtotime(get_post_meta($postID, 'banner_countdown_schedule_date_start', true));
                    $date_end = strtotime(get_post_meta($postID, 'banner_countdown_schedule_date_end', true));
                    if($date_start <= $today && $today <= $date_end):
                        ?>
                        <div class="top-banner" id="template3" style = "background-color: <?php echo $banner_content['background_color'];?>">
							<div class="container">
								<div class="content">
									<div class="card-text"><?php echo $banner_content['content'];?></div>
									<div id="countdown" data-date = "<?php echo $banner_content['countdown_date'];?>">	
										<p class="countdown__label"><?php echo $banner_content['countdown_label'];?></p>					
										<ul id = "countdown-list" style="color: <?php echo $banner_content['countdown_labels_text_color'];?>" data-shapeBgColor-countdown = "<?php echo $banner_content['countdown_shape_background_color'];?>" data-numberText-Color = <?php echo $banner_content['countdown_numbers_text_color'];?>>
											<li></span><span id="days" style ="<?php echo $banner_content['countdown_numbers_text_color'];?>"></span>Hari</li>
											<li><span class="dots-mark">:</span><span id="hours" style ="<?php echo $banner_content['countdown_numbers_text_color'];?>"></span>Jam</li>
											<li><span class="dots-mark">:</span><span id="minutes" style ="<?php echo $banner_content['countdown_numbers_text_color'];?>"></span>Menit</li>
											<?php if($banner_content['countdow_hideshow_seconds'] === 'show'){
												?>								
												<li><span class="dots-mark">:</span><span id="seconds" style ="<?php echo $banner_content['countdown_numbers_text_color'];?>"></span>Detik</li><?php
											}?>
										</ul>
									</div>
									<?php
									if($banner_content['cta_hideshow'] === 'show'){
										?><a class="cta" href ="<?php echo $banner_content['cta_url_link'];?>"  data-type = "cta-banner" style="border-radius:3px" data-postID = "<?php echo $postID;?>" data-btn-bgColor = <?php echo $banner_content['cta_background_color'];?> data-btn-textColor = <?php echo $banner_content['cta_text_color'];?> data-btnHover-bgColor = <?php echo $banner_content['cta_hover_bgcolor'];?> data-btnHover-textColor = <?php echo $banner_content['cta_hover_text_color'];?>><?php echo $banner_content['cta_text'];?></a><?php
									}?>
								</div>
							</div>
						</div>
                        <?php
                    endif;
                elseif($fields['top_banner_type'] === 'template4'):
                        $banner_content = $fields['banner_background'];

                        $banner_tablet = $banner_content['tablet_background_image'];
                        if ($banner_tablet) { ?>
                        <style>
                            @media only screen and (max-width: 900px) {
                                .top-banner#template4>img.desktop, .top-banner#template4>img.mobile {
                                    display: none;
                                }
                                .top-banner#template4>img.tablet {
                                    display: block;
                                }
                            }
                        </style>
                        <?php }
                        $banner_mobile = $banner_content['mobile_background_image'];
                        if ($banner_mobile) { ?>
                        <style>
                            @media only screen and (max-width: 480px) {
                                .top-banner#template4>img.desktop, .top-banner#template4>img.tablet {
                                    display: none;
                                }
                                .top-banner#template4>img.mobile {
                                    display: block;
                                }
                            }
                        </style>
                            <?php }
                        $date_start = strtotime(get_post_meta($postID, 'banner_background_schedule_date_start', true));
                        $date_end = strtotime(get_post_meta($postID, 'banner_background_schedule_date_end', true));
                        if($date_start <= $today && $today <= $date_end):
                        ?>
                            <div class="top-banner" id="template4">
                                <img class="desktop" src="<?php echo $banner_content['background_image']; ?>">
                                <?php if ($banner_tablet) { ?>
                                <img class="tablet" src="<?php echo $banner_tablet; ?>">
                                <?php } ?>
                                <?php if ($banner_mobile) { ?>
                                <img class="mobile" src="<?php echo $banner_mobile; ?>">
                                <?php } ?>
                                    <div class="outer">
                                        <div class="container">
                                            <div class="content">
                                                <?php
                                                if($banner_content['cta_hideshow'] === 'show'){
                                                ?>
                                                <div class="cta" href="<?php echo $banner_content['cta_url_link'];?>" data-type = "cta-banner" style="border-radius:10px" data-postID = "<?php echo $postID;?>"  data-btn-bgColor="<?php echo $banner_content['cta_background_color'];?>" data-btn-textColor="<?php echo $banner_content['cta_text_color'];?>" data-btnHover-bgColor="<?php echo $banner_content['cta_hover_bgcolor'];?>" data-btnHover-textColor="<?php echo $banner_content['cta_hover_text_color'];?>"><?php echo $banner_content['cta_text'];?></div>
                                                <?php
                                                }?>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        <?php
                        endif;
                endif; 
                
                ?><style>
                .top-banner .cta{
                    color: <?php echo $banner_content['cta_text_color'];?>;
                    background-color: <?php echo $banner_content['cta_background_color'];?>;
                }
                .top-banner .cta:hover{
                    color: <?php echo $banner_content['cta_hover_text_color'];?>;
                    background-color: <?php echo $banner_content['cta_hover_bgcolor'];?>;
                }

            </style><?php
        endwhile; wp_reset_postdata(); 
}
?>