<?php
function create_popup_post_type() {
    $labels = array(
        'name'                  => _x( 'Popups', 'Post type general name', 'popup' ),
        'singular_name'         => _x( 'Popup', 'Post type singular name', 'popup' ),
        'menu_name'             => _x( 'Popups', 'Admin Menu text', 'popup' ),
        'name_admin_bar'        => _x( 'Popup', 'Add New on Toolbar', 'popup' ),
        'add_new'               => __( 'Add New', 'popup' ),
        'add_new_item'          => __( 'Add New Popup', 'popup' ),
        'new_item'              => __( 'New Popup', 'popup' ),
        'edit_item'             => __( 'Edit Popup', 'popup' ),
        'view_item'             => __( 'View Popup', 'popup' ),
        'all_items'             => __( 'All Popups', 'popup' ),
        'search_items'          => __( 'Search Popups', 'popup' ),
        'parent_item_colon'     => __( 'Parent Popups:', 'popup' ),
        'not_found'             => __( 'No Popups found.', 'popup' ),
        'not_found_in_trash'    => __( 'No Popups found in Trash.', 'popup' ),
        'featured_image'        => _x( 'Popup Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'popup' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'popup' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'popup' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'popup' ),
        'archives'              => _x( 'Popup archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'popup' ),
        'insert_into_item'      => _x( 'Insert into Popup', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'popup' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Popup', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'popup' ),
        'filter_items_list'     => _x( 'Filter Popups list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'popup' ),
        'items_list_navigation' => _x( 'Popups list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'popup' ),
        'items_list'            => _x( 'Popups list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Popup custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'md-popup' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'md-popup', $args );
}
add_action( 'init', 'create_popup_post_type' );

function gr_popup_scripts() {
    wp_enqueue_style( 'gr-popup-css', get_template_directory_uri() . '/inc/popup/css/popup.css', array(), '' );
    wp_enqueue_script( 'gr-popup-js', get_template_directory_uri() . '/inc/popup/js/popup.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'gr_popup_scripts' );

add_shortcode('gr_popup', 'gr_popup');

function gr_popup() {
        $page_ID = get_the_ID();
        $args = array(
            'post_type' => 'md-popup',
            'posts_per_page' => -1,
            'order' => 'DESC',
            'orderby' => 'date',
            'post_status' => 'publish',
            'meta_query'		=> array(
                array(
                    'key' => 'select_pages',
                    'value' => $page_ID,
                    'compare' => 'LIKE'
                    )
                )
            );
            $query = new WP_Query($args);

            global $wp_query; $wp_query->in_the_loop = true;
            ?><div class="wrapper-popup-banner"><?php 
            while ($query->have_posts()) : $query->the_post(); 
                $postID =$query->post->ID;
                $fields = get_fields('post_'.$postID);
                $select_pages = $fields['select_page'];
                    $today = get_current_timestamp();
                    if($fields['pb_popup_type'] === 'popup_main_banner'):

                            if($fields['popup_main_banner'] === 'content_type'):
                                $popup_content = $fields['pb_content_type'];
                                $popup_author = $popup_content['author'];
                                $popup_btn = $popup_content['cta_button'];
                                $date_start = strtotime(get_post_meta($postID, 'pb_content_type_start_time', true));
                                $date_end = strtotime(get_post_meta($postID, 'pb_content_type_end_time', true));

                                $class_cookie ="";
                                if($popup_content['type_cookie'] === "default"){
                                    $class_cookie = "cookie-default";
                                }else{
                                    $class_cookie = "cookie-expires";
                                }
                                if($date_start <= $today && $today <= $date_end):
                                    ?>
                                    <div class="wrapper-gr-popup">
                                        <div id="gr-popup" class="popup-wrap <?php echo $class_cookie;?>" style="display:none" data-timeCookie = "<?php echo $popup_content['time_cookie'];?>"">
                                            <div class="popup-overlay"></div>
                                            <div class="popup-content">
                                                <div class="popup-container" style="background-color: <?php echo $popup_content['background_color']; ?>; color: <?php echo $popup_content['text_color']; ?>;">
                                                    <main class="popup-main">
                                                    <?php $color_button_close = $popup_content['color_button_close']; ?>
                                                    <div class="popup-close"><span style = "background-color: <?php echo $color_button_close;?>"></span><span style = "background-color: <?php echo $color_button_close;?>"></span></div>
                                                        <?php
                                                            $author_show = $popup_author['hideshow'];
                                                            if($author_show === "true"):
                                                                $users = $popup_author['user'];
                                                                $author_id = $users['ID'];
                                                                $first_name = $users['user_firstname'];
                                                                $author_avatar = get_field('user_avatar', 'user_'. $author_id );
                                                                $author_from = get_field('user_from', 'user_'. $author_id );
                                                                ?>
                                                                    <div class="popup-head">
                                                                        <div class="popup-head__row">
                                                                            <?php if(!empty($author_avatar)):?>
                                                                                <div class="popup-head__avatar">
                                                                                    <img src="<?php echo $author_avatar; ?>" alt="">
                                                                                </div>
                                                                            <?php endif;?>
                                                                            <div class="popup-head__detail">
                                                                                <div class="popup-head__detail-top"><?php echo $first_name;?> <?php if(!empty($author_from)) :?><span>from</span> <span><?php echo $author_from; ?></span><?php endif;?></div>
                                                                                <div class="popup-head__status"><?php echo $popup_author['status']; ?></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php 
                                                            endif;
                                                        ?>
                                                        <div class="popup-main__main">
                                                            <div class="popup-main__content">
                                                                <?php echo $popup_content['content']; ?>
                                                            </div>
                                                            <div class="popup-main__btn">
                                                                <a class="cta" data-type ="popup-icon-cta" data-postID = "<?php echo $postID;?>" style="background-color: <?php echo $popup_btn['background']; ?>; color: <?php echo $popup_btn['color']; ?>" href="<?php echo $popup_btn['link_and_text']['url']; ?>"><?php echo $popup_btn['link_and_text']['title']; ?></a>
                                                            </div>
                                                            <div class="popup-main__signature"><?php echo $popup_content['signature_text']; ?></div>
                                                        </div>
                                                    </main>
                                                    <?php
                                                    $like = $popup_content['like_button_hideshow'] ?? false;
                                                    if((bool)$like):
                                                    ?>
                                                    <footer class="popup-footer">
                                                        <div class="popup-footer__row">
                                                            <div class="popup-footer__like-meta">
                                                                <a class="popup-footer__icon popup-footer__icon-like" href="" data-type ="popup-icon-like" data-id = "<?php echo $postID;?>">
                                                                    <img src="<?php echo get_template_directory_uri() . '/inc/popup/images/like.png'; ?>" alt="Like">
                                                                </a>
                                                                <?php $like = (int) get_post_meta($postID, '_post_popup-icon-like', true);
                                                                if( ! empty($like)){?>
                                                                <div class="social-count">
                                                                    <?php echo $like;?>
                                                                </div>
                                                                <?php }?>
                                                            </div>
                                                            <div class="popup-footer__dislike-meta">
                                                                <a class="popup-footer__icon popup-footer__icon-dislike" href="" data-type ="popup-icon-dislike" data-id = "<?php echo $postID;?>">
                                                                    <img src="<?php echo get_template_directory_uri() . '/inc/popup/images/dislike.png'; ?>" alt="Dislike">
                                                                </a>
                                                                <?php $dislike = (int) get_post_meta($postID, '_post_popup-icon-dislike', true);
                                                                if( ! empty($dislike) ) { ?>
                                                                <div class="social-count">
                                                                    <?php echo $dislike;?>
                                                                </div>
                                                                <?php }?>
                                                            </div>
                                                            <div class="popup-footer__love-meta">
                                                                <?php if(!empty($popup_content['reaction_icon'])):?>
                                                                <a class="popup-footer__icon popup-footer__icon-love" href="" data-type ="popup-icon-love" data-id = "<?php echo $postID;?>">
                                                                    <img src="<?php echo $popup_content['reaction_icon'];?>" alt="Love">
                                                                </a>
                                                                <?php endif;?>
                                                                <?php $love = (int) get_post_meta($postID, '_post_popup-icon-love', true);
                                                                if( ! empty($love) ) { ?>
                                                                <div class="social-count">
                                                                    <?php echo $love;?>
                                                                </div>
                                                                <?php }?>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endif;
                            elseif($fields['popup_main_banner'] === 'image_type'):
                                $popup_content = $fields['image_type'];
                                $date_start = strtotime(get_post_meta($postID, 'image_type_start_time', true));
                                $date_end = strtotime(get_post_meta($postID, 'image_type_end_time', true));                       

                                
                                $class_cookie ="";
                                if($popup_content['type_cookie'] === "default"){
                                    $class_cookie = "cookie-default";
                                }else{
                                    $class_cookie = "cookie-expires";
                                }
                                if($date_start <= $today && $today <= $date_end){
                                ?>
                                <div class="wrapper-gr-popup">
                                    <div id="gr-popup" class="popup-wrap popup-type-image <?php echo $class_cookie;?>" style="display:none" data-timeCookie = "<?php echo $popup_content['time_cookie'];?>">
                                        <div class="popup-overlay"></div>
                                        <div class="popup-content">
                                            <div class="popup-container" style="background-color: <?php echo $popup_content['background_color']; ?>; color: <?php echo $popup_content['text_color']; ?>;">
                                                <main class="popup-main">
                                                    <?php $color_button_close = $popup_content['color_button_close']; ?>
                                                    <div class="popup-close"><span style = "background-color: <?php echo $color_button_close;?>"></span><span style = "background-color: <?php echo $color_button_close;?>"></span></div>
                                                    <div class="popup-image">
                                                        <a href="<?php echo $popup_content['image_link']['url']; ?>" title="<?php echo $popup_content['image_link']['title']; ?>">
                                                            <img class="popup-image__desktop" src="<?php echo $popup_content['image']['url']; ?>" alt="<?php echo $popup_content['image']['alt']; ?>">
                                                            <?php if(!empty($popup_content['image_mobile'])){
                                                                ?><img class="popup-image__mobile" src="<?php echo $popup_content['image_mobile']['url']; ?>" alt="<?php echo $popup_content['image']['alt']; ?>"><?php
                                                            }
                                                            ?>
                                                        </a>
                                                    </div>
                                                    <?php
                                                    $popup_btn = $popup_content['button'];
                                                    $popup_btn_show = $popup_btn['onoff'] ?? false;
                                                    if((bool)$popup_btn_show):
                                                    ?>
                                                    <div class="popup-btn popup-main__btn">
                                                        <p><?php echo $popup_content['text']; ?></p>
                                                        <a class="cta" data-type ="popup-icon-cta" data-postID = "<?php echo $postID;?>" href="<?php echo $popup_btn['url']; ?>"><?php echo $popup_btn['text']; ?></a>
                                                    </div>
                                                    <?php endif; ?>
                                                </main>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .popup-btn a {
                                            background-color: <?php echo $popup_btn['background_color']; ?>;
                                            color: <?php echo $popup_btn['text_color']; ?>
                                        }
                                        .popup-btn a:hover {
                                            background-color: <?php echo $popup_btn['background_hover_color']; ?>;
                                            color: <?php echo $popup_btn['text_hover_color']; ?>
                                        }
                                    </style>
                                </div>
                                <?php
                                }
                            endif;
                    elseif($fields['pb_popup_type'] === 'side_type'):                        
                            $side_type = $fields['side_type'];
                            $date_start = strtotime(get_post_meta($postID, 'side_type_start_time', true));
                            $date_end = strtotime(get_post_meta($postID, 'side_type_end_time', true));
                            $toggle_btn = $side_type['button'];
                            $toggle_textContent = $side_type['content'];
                            $toggle_cta = $side_type['cta_button'];
                            if($date_start <= $today && $today <= $date_end){
                                ?>
                                <div class="wrapper-gr-popup">
                                    <div id="gr-popup__sidebar" class="popup-wrap popup-type-side">
                                        <div class="popup-content">
                                            <div class="popup-toggle">
                                                <div class="popup-toggle__content" style="color: <?php echo $toggle_btn['color']; ?>">
                                                    <p class="popup-toggle__label" style="background-color: <?php echo $toggle_btn['background']; ?>"><?php echo $toggle_btn['text_content']; ?><img src="<?php echo get_template_directory_uri(); ?>/inc/popup/images/down-arrow.png" alt=""></p>
                                                    <div class="popup-toogle__inner" style="background-image:url('<?php echo $side_type['background_image'];?>')">
                                                        <div class="popup-toogle__desc" style="color:<?php echo $toggle_textContent['color'];?>"><?php echo $toggle_textContent['text_content'];?></div>
                                                        <div class="popup-toogle__btn">
                                                            <a class="cta" data-type ="popup-sidebar-cta" data-postID = "<?php echo $postID;?>" href="<?php echo $toggle_cta['url']; ?>" style="background-color: <?php echo $toggle_cta['background'];?>; color: <?php echo $toggle_cta['color'];?>"><?php echo $toggle_cta['text_content']; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }

                    endif;
            $i ++;
            endwhile; wp_reset_postdata();      
            ?></div><?php
            
        
    // endif;
}

add_action( 'wp_footer', 'add_gr_popup' );

function add_gr_popup() {
    echo do_shortcode("[gr_popup]");
}

function get_current_timestamp(){
    $tz = wp_timezone_string();
    $timestamp = time();
    $dt = new DateTime("now", new DateTimeZone($tz));

    return strtotime($dt->format('Y-m-d H:i:s'));
}

function convert_timestamp( $str ) {
    $tz = wp_timezone_string();
    $timestamp = time();
    $dt = new DateTime($str, new DateTimeZone($tz));
    var_dump($dt);

    return strtotime($dt->format('Y-m-d H:i:s'));
}

