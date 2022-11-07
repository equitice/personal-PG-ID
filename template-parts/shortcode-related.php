<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish'
);

$tags = get_the_tags();
if( $tags ) {
    $tag_query = array();
    foreach( $tags as $tag ) {
        $tag_query[] = $tag->slug;
    }

    $args['tax_query'][] = array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => $tag_query,
        'operator' => 'IN'
    );
}

$category = get_the_category();
if( $category ) {
    $cat_query = array();
    foreach( $category as $c ) {
        $cat_query[] = $c->slug;
    }

    $args['tax_query'][] = array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => $cat_query,
        'operator' => 'IN'
    );
}

if( ! empty($args['tax_query']) && count($args['tax_query']) > 1 ) {
    $args['tax_query']['relation '] = 'AND';
}

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {

?>
<div class="post-related">
    <h4>RELATED</h4>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        printf('<a href="%s">%s</a>', esc_url(get_permalink($post->ID)), $post->post_title);
    endwhile;?>
</div>
<?php }?>