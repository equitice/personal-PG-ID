<?php
/*
Plugin Name: Oangle Custom Dashboard
Plugin URL: https://oangle.com/
Description: A little plugin to modify default dashboard contents
Version: 2.0
Author: Oangle
Author URI: https://oangle.com
Contributors: Yi Qi, Hafiz, Dian
*/

/**
 * Hide default welcome dashboard message and and create a custom one
 *
 * @access      public
 * @since       1.0
 * @return      void
*/
function rc_my_welcome_panel() {
?>
<script type="text/javascript">
/* Hide default welcome message */
jQuery(document).ready(function($) {
    $('div.welcome-panel-content').hide();
    $('textarea#variable_description1').froalaEditor();
});
</script>
<style type="text/css">
.welcome-panel-left {
    float: left;
    width: 204px;
    padding: 10px 15px 10px 10px;
    box-sizing: border-box;
}

.welcome-panel-left img {
    width: 150px !important;
}

.welcome-panel-right {
    float: left;
    margin-top: 15px;
    width: calc(100% - 204px);
}

.welcome-panel .welcome-panel-close {
    display: none;
}

a.oanglelinks {
    color: #ffa16c;
}

a.oanglelinks:hover {
    color: #e87b24;
}

#welcome-panel.hidden {
    display: block;
}
</style>
<div class="custom-welcome-panel-content">
    <div class="welcome-panel-left"><img src="<?php echo wp_get_attachment_image(get_field("logo", "option"),'full'); ?>"></div>
    <div class="welcome-panel-right">
        <h2><?php _e( 'Welcome to the Web Admin Dashboard!' ); ?></h2>
        <p class="about-description">
            <?php _e( 'From the Admin Panel (at the left sidebar), you can access everything you may need in order to update and maintain the content of your website.' ); ?>
        </p>
    </div>
    <div class="welcome-panel-column-container">
        <div class="welcome-panel-column">
            <h4><?php _e( "Let's Get Started" ); ?></h4>
            <?php printf( '<a href="%s" class="welcome-icon welcome-view-site">' . __( 'View your site' ) . '</a>', home_url( '/' ) ); ?>
            <?php if( have_rows('list_started','option') ): ?>
            <?php while( have_rows('list_started','option') ): the_row();
                  $title = get_sub_field('title');
                  $link = get_sub_field('link');
                  ?>
            <p class="hide-if-no-customize">
                <?php printf( __( 'or, <a href="%s">'.$title.'</a>' ), admin_url( $link ) ); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="welcome-panel-column">
            <h4><?php _e( 'Next Steps' ); ?></h4>
            <ul>
                <?php if ( 'page' == get_option( 'show_on_front' ) && ! get_option( 'page_for_posts' ) ) : ?>
                <?php if( have_rows('next_steps','option') ): ?>
                <?php while( have_rows('next_steps','option') ): the_row();
                  $icon = get_sub_field('icon');
                  $title = get_sub_field('title');
                  $link = get_sub_field('link');
                  ?>
                <li><?php printf( '<a href="%s" class="welcome-icon '.$icon.'">' . __( $title ) . '</a>', admin_url( $link ) ); ?>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php elseif ( 'page' == get_option( 'show_on_front' ) ) : ?>
                <?php if( have_rows('next_steps','option') ): ?>
                <?php while( have_rows('next_steps','option') ): the_row();
                  $icon = get_sub_field('icon');
                  $title = get_sub_field('title');
                  $link = get_sub_field('link');
                  ?>
                <li><?php printf( '<a href="%s" class="welcome-icon '.$icon.'">' . __( $title ) . '</a>', admin_url( $link ) ); ?>
                </li>
                <?php endwhile; ?>
                <?php endif; else :endif; ?>
            </ul>
        </div>
        <div class="welcome-panel-column welcome-panel-last">
            <h4><?php _e( 'More Actions' ); ?></h4>
            <ul>
                <?php if( have_rows('more_actions','option') ): ?>
                <?php while( have_rows('more_actions','option') ): the_row();
                  $icon = get_sub_field('icon');
                  $title = get_sub_field('title');
                  $link = get_sub_field('link');
                  ?>
                <li><?php printf( '<a href="%s" class="welcome-icon '.$icon.'">' . __( $title ) . '</a>', admin_url( $link ) ); ?>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>

</div>

<?php
}

add_action( 'welcome_panel', 'rc_my_welcome_panel' );

/**
 * remove unwanted dashboard widgets for relevant users
 **
**/

function example_remove_dashboard_widgets() {
	// Globalize the metaboxes array, this holds all the widgets for wp-admin
 	global $wp_meta_boxes;

	// Remove the incomming links widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);

	// Remove right now
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

	// Remove WooCommerce Recent Reviews
	remove_meta_box( 'woocommerce_dashboard_recent_reviews', 'dashboard', 'normal');
}

// Hoook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );

//Remove the wordpress logo and its subsequent links
function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
//end remove the wordpress logo and its subsequent links

/**
**Replace Login Logo
**/
function my_login_logo() {
    $logo_login = get_field('logo_login','option');
 ?>
<style type="text/css">
body.login div#login h1 a {
    background-image: url('<?php echo $logo_login; ?>') !important;
    padding-bottom: 30px;
    background-size: contain !important;
    width: auto !important;
    height: 200px !important
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Change Wordpress footer
function remove_footer_admin () {
	echo "";
}

add_filter('admin_footer_text', 'remove_footer_admin');

/* REMOVE ADMIN MENUS */
function remove_menus(){
  remove_menu_page( 'link-manager.php' );                   //Links
  //remove_menu_page( 'edit.php' ); // Posts
//   remove_menu_page( 'edit.php?post_type=acf-field-group' ); // ACF
  remove_menu_page( 'tools.php' );
  //remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

/*Remove Customise Submenu*/
function remove_customize() {
    $customize_url_arr = array();
    $customize_url_arr[] = 'customize.php'; // 3.x
    $customize_url = add_query_arg( 'return', urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ), 'customize.php' );
    $customize_url_arr[] = $customize_url; // 4.0 & 4.1
    if ( current_theme_supports( 'custom-header' ) && current_user_can( 'customize') ) {
        $customize_url_arr[] = add_query_arg( 'autofocus[control]', 'header_image', $customize_url ); // 4.1
        $customize_url_arr[] = 'custom-header'; // 4.0
    }
    if ( current_theme_supports( 'custom-background' ) && current_user_can( 'customize') ) {
        $customize_url_arr[] = add_query_arg( 'autofocus[control]', 'background_image', $customize_url ); // 4.1
        $customize_url_arr[] = 'custom-background'; // 4.0
    }
    foreach ( $customize_url_arr as $customize_url ) {
        remove_submenu_page( 'themes.php', $customize_url );
    }
}
add_action( 'admin_menu', 'remove_customize', 999 );

    // Comment this function out to remove/hide the oangle logo from login 
	add_action('login_footer', 'footer_right');
	if (!function_exists('footer_right')) {
		function footer_right() {
			$logoRight = get_template_directory_uri() . '/login/oangle_logo.png';
			// <p>Developed by <a href='oangle.com'><img src='".$logoRight." ' alt=''></a></p>
			echo "<div class='designby'>
			<p>Developed by <a href='https://oangle.com'><img src='$logoRight' alt=''></a></p>
		</div>";
		}
	}


add_action('login_header', 'add_css_header');
function add_css_header() {
	$color = get_field("login_button_color","option");
	echo "
	<style type='text/css' media='screen'>
	.login #login .button-primary {
		background:   $color  !important;
		border-color:    $color  !important;
		box-shadow: 0 0 0 transparent !important;
	}
	</style>";
	}
add_action('login_footer', 'add_js');
	function add_js(){
		echo "<script type='text/javascript'>
            var elLogin = document.getElementById('user_login');
            var elPass = document.getElementById('user_pass');
            if( elPass ) {
                elPass.placeholder = 'Password';
            }
            if( elLogin ) {
                elLogin.placeholder = 'Username/Email';
            }

            var img = document.createElement('IMG');
            document.getElementById('login').getElementsByTagName('a')[0].innerHTML = '';
            document.getElementById('login').getElementsByTagName('a')[0].appendChild(img);
        </script>";
	}

/*
Change logo URL
--------------------------------------------------- */
function my_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/*
Reset logo title
--------------------------------------------------- */
function my_login_logo_url_title() {
	return 'Welcome Food Asia Holdings Website';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );

/*
  Link custom-login-stylesheet to login pages
--------------------------------------------------- */
function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/login/custom-login-styles.css?t='.time().'" />';
}
add_action('login_head', 'my_custom_login');

/**Change Flamingo Name**/
add_filter('gettext',  'oa_change_flamingo_to_crm');
add_filter('ngettext',  'oa_change_flamingo_to_crm');
 
function oa_change_flamingo_to_crm($translated) {
     $translated = str_ireplace('Flamingo',  'CRM',  $translated);
     return $translated;
}