<?php
function alt_load_popular_tags_widget() {
    register_widget( 'AltPopularTagWidget' );
}
add_action( 'widgets_init', 'alt_load_popular_tags_widget' );


class AltPopularTagWidget extends WP_Widget {
    function __construct() {
        parent::__construct(

            // Base ID of your widget
            'alt_popular_tags', 

            // Widget name will appear in UI
            __('ALT - Popular Tags', 'wpb_widget_domain'), 

            // Widget description
            array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
        );
    }

    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        
        $tags = get_tags();
        $_args = array(
            'smallest'                  => 10, 
            'largest'                   => 22,
            'unit'                      => 'px', 
            'number'                    => 10,  

            'separator'                 => " ",
            'orderby'                   => 'count', 
            'order'                     => 'DESC',
            'show_count'                => false,
            'echo'                      => false
        ); 
         
        $tag_string = wp_tag_cloud( $_args );
        
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<div class="tagcloud">';

        echo $tag_string;

        echo '</div>';
        ?>

        <?php
        echo $args['after_widget'];
    }
            
    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'wpb_widget_domain' );
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php 
    }
        
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

// Class wpb_widget ends here
} 