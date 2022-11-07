<?php
function alt_load_search_widget() {
    register_widget( 'AltSearchWidget' );
}
add_action( 'widgets_init', 'alt_load_search_widget' );


class AltSearchWidget extends WP_Widget {
    function __construct() {
        parent::__construct(

            // Base ID of your widget
            'alt_search_widget', 

            // Widget name will appear in UI
            __('ALT - Search', 'wpb_widget_domain'), 

            // Widget description
            array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
        );
    }

    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget']; ?>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() );?>">
            <label>
                <input type="search" class="search-field" placeholder="<?php the_field('placeholder_search_widget','option');?>" value="" name="k" />
                <span class="icon-search"></span>
            </label>
            
            <input type="submit" class="search-submit" value="<?php the_field('title_search_widget','option');?>" />
        </form>
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