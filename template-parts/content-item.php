<?php
global $category, $item_excerpt;

$post_thumbnail_id = get_post_thumbnail_id( $post );
$hide_excerpt = isset($category['hide_excerpt']) ? $category['hide_excerpt'] : false;
$permalink = get_permalink($post->ID);
$target = '';
$isFile = get_field('file', $post->ID);
if( $isFile ) {
    $permalink = get_field('upload_file', $post->ID);
    $target = ' target="_blank"';
}

$item_excerpt = empty($item_excerpt) ? 28 : $item_excerpt;
?>
<article class="post-item">
    <?php echo wp_get_attachment_image( $post_thumbnail_id, 'propertyguru-thumbnail');?>

    <div class="post-item-info">
        <h3><a href="<?php echo esc_url( $permalink );?>"<?php echo $target;?>><?php echo esc_attr($post->post_title);?></a></h3>
        <?php if( empty($hide_excerpt) ) {
            printf('<p>%s</p>', wp_trim_words(get_the_excerpt(), $item_excerpt));
        }?>
        <a href="<?php echo esc_url( $permalink );?>"<?php echo $target;?>><?php the_field('title_text_read_more','option');?></a>
    </div>
</article>