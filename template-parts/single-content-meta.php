<?php
global $wp_query;
$post = $wp_query->queried_object;
?>
<div class="single-sharing-meta">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink($post->ID) );?>" target="_blank"><i class="icon-facebook"></i></a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_permalink($post->ID) );?>&title=<?php echo esc_attr( $post->post_title );?>" target="_blank"><i class="icon-linkedin"></i></a>
    <a href="http://twitter.com/share?text=<?php echo esc_attr( $post->post_title );?>&url=<?php echo esc_url( get_permalink($post->ID) );?>" target="_blank"><i class="icon-twitter"></i></a>
    <span data-clipboard-target="#permalink-primary" class="clipboard-share"><i class="icon-link"></i></span>

    <input type="text" id="permalink-primary" value="<?php echo esc_url( get_permalink($post->ID) );?>">
</div>

<div class="single-extra-meta">
    <div class="single-extra-meta-left">
        <span><?php echo get_views_number($post->ID);?> Views</span>
        <span><?php echo number_format(get_comments_number($post->ID), 0, ",", ".");?> Comments</span>
    </div>

    <div class="single-extra-meta-right">
        <div class="thumbs-up-meta">
            <?php
            $thumbs_up_class = '';
            if( isset($_COOKIE['thumbs-up']) ) {
                $count_thumbs_up = json_decode($_COOKIE['thumbs-up'], true);

                if( ! empty($count_thumbs_up) && in_array($post->ID, $count_thumbs_up) ) {
                    $thumbs_up_class = ' class="active"';
                }
            }?>
            <a href="#" data-type="thumbs-up" data-id="<?php echo absint($post->ID);?>"<?php echo $thumbs_up_class;?>><i class="icon-thumbs-o-up"></i></a>

            <?php
            $thumbs_up = (int) get_post_meta($post->ID, '_post_thumbs-up', true);
            if( ! empty($thumbs_up) ) { ?>
            <div class="social-count">
                <?php echo $thumbs_up;?>
            </div>
            <?php }?>
        </div>

        <div class="like-meta">
            <?php
            $liked_class = '';
            if( isset($_COOKIE['like']) ) {
                $count_liked = json_decode($_COOKIE['like'], true);

                if( ! empty($count_liked) && in_array($post->ID, $count_liked) ) {
                    $liked_class = ' class="active"';
                }
            }?>
            <a href="#" data-type="like" data-id="<?php echo absint($post->ID);?>"<?php echo $liked_class;?>><i class="icon-like"></i></a>

            <?php
            $like = (int) get_post_meta($post->ID, '_post_like', true);
            if( ! empty($like) ) { ?>
            <div class="social-count">
                <?php echo $like;?>
            </div>
            <?php }?>
        </div>
    </div>
</div>

