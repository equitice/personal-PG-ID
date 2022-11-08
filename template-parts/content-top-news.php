<?php
$post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
<article class="abc">
    <a href="<?php echo esc_url( get_permalink($post->ID) );?>"><?php echo wp_get_attachment_image( $post_thumbnail_id, 'full');?></a>
    <h3><a href="<?php echo esc_url( get_permalink($post->ID) );?>"><?php echo esc_attr($post->post_title);?></a></h3>
</article>