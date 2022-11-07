<?php
global $post;

$post_navigations = propertyguru_get_post_navigation();

if( ! empty($post_navigations) ) {
    $post_navigation = array();
    $post_navigation_label = '';

    if( isset($post_navigations['previous']) && empty($post_navigations['next']) ) {
        $post_navigation = $post_navigations['previous'];
        $post_navigation_label = esc_html__( 'Read Previous', 'propertyguru' );
    }
    
    if( ! empty($post_navigations['next']) ) {
        $post_navigation = $post_navigations['next'];
        $post_navigation_label = esc_html__( get_field('title_text_read_text','option'), 'propertyguru' );
        $post_id = $post_navigation->ID;
        
    }

    $next_navigation_thumbnail = get_the_post_thumbnail( $post_navigation->ID, 'full', array( 'class' => 'alignleft' ) );

    if( ! empty($post_navigation) ) {
        ?>
        <div class="post-navigation-wrapper<?php echo empty($next_navigation_thumbnail) ? ' post-navigation-no-thumbnail': '';?>">
            <h4><?php echo esc_attr($post_navigation_label);?></h4>

            <div class="post-navigation-box">
                <?php if( ! empty($post_navigations['previous']) ) { ?>
                <div class="post-navigation-link">
                    <a href="<?php echo esc_url( get_permalink($post_navigations['previous']->ID) );?>" title="<?php echo esc_attr( $post_navigations['previous']->post_title );?>" class="post-prev-link"><i class="icon-left-arrow"></i></a>
                </div>
                <?php }?>

                <div class="post-navigation-info">
                    <h3><a href="<?php echo esc_url( get_permalink($post_navigation->ID) );?>" title="<?php echo esc_attr( $post_navigation->post_title );?>"><?php echo esc_attr($post_navigation->post_title);?></a></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt($post_navigation->ID), 28);?></p>
                </div>

                <div class="post-navigation-thumbnail">
                    <?php if( ! empty($next_navigation_thumbnail) ) { ?>
                        <a href="<?php echo esc_url( get_permalink($post_navigation->ID) );?>" title="<?php echo esc_attr( $post_navigation->post_title );?>"><?php echo $next_navigation_thumbnail;?></a>
                    <?php }?>
                    
                    <?php if( ! empty($post_navigations['next']) ) { ?>
                        <a href="<?php echo esc_url( get_permalink($post_navigation->ID) );?>" title="<?php echo esc_attr( $post_navigation->post_title );?>" class="post-next-link"><i class="icon-right-arrow"></i></a>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php
    }
}?>