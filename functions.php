<?php
/**
 * PropertyGuru functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PropertyGuru
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.4' );
}

if ( ! function_exists( 'propertyguru_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function propertyguru_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on PropertyGuru, use a find and replace
		 * to change 'propertyguru' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'propertyguru', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'academy-menu' => esc_html__( 'Academy Header', 'propertyguru' ),
                'primary-header' => esc_html__( 'Primary', 'propertyguru' ),
                'footer-menu' => esc_html__( 'Footer', 'propertyguru' ),
                'copyright-menu' => esc_html__( 'Copyright Menu', 'propertyguru' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'propertyguru_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_image_size( 'propertyguru-thumbnail', 400, 240 );
	}
endif;
add_action( 'after_setup_theme', 'propertyguru_setup' );


// theme options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme options', 
		'menu_title'	=> 'Theme options', 
		'menu_slug' 	=> 'theme-settings', 
		'capability'	=> 'edit_posts',
		'redirect'	=> false
	));
		acf_add_options_sub_page(array(
		'page_title'  => 'Login Options',
		'menu_title'  => 'Login Option',
		'parent_slug' => 'theme-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title'  => 'Dashboard Options',
		'menu_title'  => 'Dashboard Option',
		'parent_slug' => 'theme-settings',
	));
}
/*
Custom dashboard
--------------------------------------------------- */
require get_template_directory() . '/login/oangle-custom-dashboard.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function propertyguru_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'propertyguru_content_width', 640 );
}
add_action( 'after_setup_theme', 'propertyguru_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function propertyguru_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'propertyguru' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'propertyguru' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'propertyguru' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'propertyguru' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'propertyguru' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'propertyguru' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'propertyguru_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function propertyguru_scripts() {
	wp_enqueue_style( 'propertyguru-nunito-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'propertyguru-roboto-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'propertyguru-poppins-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'propertyguru-crossten-semibold-fonts', get_template_directory_uri() . '/assets/fonts/crossten_semibold.otf', array(), _S_VERSION );


	// only News
	if ( is_page_template( 'template/news.php' ) ) {
		wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/vendor/owl-carousel/css/owl.carousel.min.css', array(), _S_VERSION );
		wp_enqueue_style( 'propertyguru-select2', get_template_directory_uri() . '/vendor/select2/css/select2.min.css', array(), _S_VERSION );
	}

	wp_enqueue_style( 'propertyguru-general', get_stylesheet_uri(), array(), date("h:i:s"));
	wp_enqueue_style( 'propertyguru-style', get_template_directory_uri() . '/assets/css/style.css', array(),date("h:i:s") );
	wp_enqueue_style( 'propertyguru-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), date("h:i:s") );
    if ( is_page_template( 'template/HomePage.php' ) ) {
		wp_enqueue_style( 'propertyguru-ernest', get_template_directory_uri() . '/assets/css/style-ernest.css', array(), date("h:i:s") );	
	}
    wp_enqueue_style( 'propertyguru-py', get_template_directory_uri() . '/assets/css/style-py.css', array(), date("h:i:s") );
	wp_enqueue_style( 'slicktheme-style', get_template_directory_uri() . '/vendor/slick-1.8.1/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/vendor/slick-1.8.1/slick/slick.css', array(), _S_VERSION );
	
	wp_style_add_data( 'propertyguru-style', 'rtl', 'replace' );

	// only newsletter
	wp_enqueue_script('jquery');

	if( is_single() ) {
		wp_enqueue_script( 'propertyguru-autosize', get_template_directory_uri() . '/vendor/autosize.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'propertyguru-clipboard', get_template_directory_uri() . '/vendor/clipboard.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'propertyguru-js.cookie', get_template_directory_uri() . '/vendor/js.cookie.min.js', array(), _S_VERSION, true );
	}
	
	if ( is_page_template( 'template/news.php' ) ) {
		wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'propertyguru-select2', get_template_directory_uri() . '/vendor/select2/js/select2.full.min.js', array(), _S_VERSION, true );
	}
	
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/vendor/slick-1.8.1/slick/slick.min.js', array('jquery'), date('h:i:s'), true );
	wp_enqueue_script( 'propertyguru', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), date('h:i:s'), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if ( is_page_template( 'template/template-upsell.php') ) {
		wp_enqueue_style( 'upsell-style', get_template_directory_uri() . '/assets/css/style-upsell.css', array(), date('h:i:s') );
	}
	if ( is_page_template( 'template/template-elitebday.php' ) ) {
		wp_enqueue_style( 'elitebday-style', get_template_directory_uri() . '/assets/css/style-elitebday.css', array(), _S_VERSION );
	}
	if ( is_page_template( array('template/template-upgrade-new.php', 'template/template-upgrade-aug2022.php', 'template/template-upgrade.php','template/market-insights.php')) ) {
		wp_enqueue_style( 'upgrade-style', get_template_directory_uri() . '/assets/css/style-upgrade-new.css', array(),  date('h:i:s') );
	}
	if ( is_page_template( array('template/template-bdaytreat.php', 'template/bday-treat.php') ) ) {
		wp_enqueue_style( 'bdaytreat-style', get_template_directory_uri() . '/assets/css/style-bdaytreat.css', array(), _S_VERSION );
	}
	if ( is_page_template( 'template/template-homeloan.php' ) ) {
		wp_enqueue_style( 'homeloan-style', get_template_directory_uri() . '/assets/css/style-homeloan.css', array(), _S_VERSION );
	}
	if ( is_page_template( array('template/template-renewal.php', 'template/template-renewal-new.php', 'template/template-renewal-aug2022.php' ) )) {
		wp_enqueue_style( 'renewal-style', get_template_directory_uri() . '/assets/css/style-renewal.css', array(),  date('h:i:s') );
	}
	if ( is_page_template( 'template/weeklyfeature.php' ) ) {
		wp_enqueue_style( 'weeklyfeature-style', get_template_directory_uri() . '/assets/css/style-weeklyfeature.css', array(), _S_VERSION );
	}
	if ( is_page_template( 'template/template-marketinsights.php' ) ) {
		wp_enqueue_style( 'marketinsights-style', get_template_directory_uri() . '/assets/css/style-marketinsights.css', array(), _S_VERSION );
	}
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/179f3dfc3b.js', array(), _S_VERSION, true );
		/* style for the wix->own template fixes */
	wp_enqueue_style( 'oadian-style', get_template_directory_uri() . '/assets/css/style-dian.css', array(), date('h:i:s'));

	wp_localize_script( 'propertyguru', 'propertyguru',
		array( 
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'reaction-nonce' ),
			'labels' => array(
				'thumbs-up' => 'You have already liked',
				'like' => 'You have already liked'
			)
		)
	);
	wp_enqueue_style( 'oaheader-style', get_template_directory_uri() . '/assets/css/oa_header.css', array(), date('h:i:s') );
}
add_action( 'wp_enqueue_scripts', 'propertyguru_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/customizer/header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-helpers.php';
require get_template_directory() . '/inc/addons/primary-category/primary-category.php';

/**
 * Widget additions.
 */
require get_template_directory() . '/inc/widgets/search.php';
require get_template_directory() . '/inc/widgets/popular-tags.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( ! function_exists( 'propertyguru_header_logo' )) {
	function propertyguru_header_logo() {
		$header_logo = get_theme_mod( 'header_logo' );
		?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <?php
			if( $header_logo ) {
				printf('<img src="%s" />', $header_logo);
			} else {
				?>
    <span class="logo-text"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
    <span class="logo-slogan"><?php echo esc_html( get_bloginfo( 'description' ) );?></span>
    <?php
			}
			?>
</a>
<?php
	}
}

if( ! function_exists( 'propertyguru_breadcrumbs' )) {
	function propertyguru_breadcrumbs() {
		global $post;

		$breadcrumbs = array(
			array(
				'title' => '<i class="pg-icon-home"></i>',
				'url' => home_url(),
				'home' => true
			)
		);
		$breadcrumbs[] = array(
				'title' => 'Agent News',
				'url' => home_url('agentnews')
		);
		if( is_single() ) {
			$categories = get_the_terms( $post->ID, 'category' );

			if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
				foreach( $categories as $cat ) {
					$breadcrumbs[] = array(
						'title' => $cat->name,
						'url' => get_term_link($cat, $cat->taxonomy)
					);
				}

				$breadcrumbs[] = array(
					'title' => $post->post_title,
					'url' => get_permalink($post->ID),
					'active' => true
				);
			}
		}

		$breadcrumbs = apply_filters( 'propertyguru_propertyguru_breadcrumbs', $breadcrumbs );

		if( ! empty($breadcrumbs) ) {
			echo '<ol class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">';

			$index = 1;
			foreach( $breadcrumbs as $breadcrumb ) {
				if( isset($breadcrumb['home']) ) {
					printf(
						'<li><a href="%s">%s</a></li>',
						esc_url($breadcrumb['url']),
						$breadcrumb['title']
					);
				}elseif( isset($breadcrumb['active']) ) {
					printf(
						'<li class="%s">%s</li>',
						'active',
						$breadcrumb['title']
					);
				}else {
					printf(
						'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="%s"><span itemprop="name">%s</span></a>
						<meta itemprop="position" content="%d" /></li>',
						esc_url($breadcrumb['url']),
						$breadcrumb['title'],
						$index
					);

					$index++;
				}
			}
			echo '</ol>';
		}
	}
}


add_filter('the_content', function($content) {
	global $post, $wp_query;

	$content = trim(str_replace('<p></p>', '', $content));

	if( ! empty($content) && is_single() ) {
		if( ! has_shortcode( $post->post_content, 'related') ) {
			$pre_content = explode('</p>', $content);
			$total_p = count($pre_content);
	
			$half_total_p = $total_p / 2;
	
			$first_p = array_slice($pre_content, 0, $half_total_p);
			$last_p = array_slice($pre_content, $half_total_p);
	
			$content = implode("\n", $first_p);
			$content .= do_shortcode('[related]');
			$content .= implode("\n", $last_p);
		}

		if( preg_match_all('/<blockquote class="wp-block-quote has-text-align-center">(.*)<\/blockquote>/', $content, $blockquotes) ) {
			foreach( $blockquotes[0] as $blockquote_k => $blockquotes_val) {
				$content = str_replace($blockquotes_val, '<blockquote class="wp-block-quote has-text-align-center"><div class="wp-block-quote-content">'.$blockquotes[1][$blockquote_k].'</div></blockquote>', $content);

			}
			// echo '<pre>'; print_r($blockquotes); echo '</pre>';
		}
	}
	
	return $content;
}, 99, 1);

add_shortcode('related', function() {
	ob_start();
	get_template_part( 'template-parts/shortcode', 'related' );
	return ob_get_clean();
}, 99, 1);

add_filter('comment_form_defaults', function($fields) {
	if( preg_match('/<p[^>]*>(.*)<\/p>/', $fields['comment_field'], $output_array) ) {
		$fields['comment_field'] = sprintf(
			'<div class="comment-form-comment"><div class="comment-form-comment-avatar"><img src="%savatar.jpg" /></div><div class="comment-form-comment-textarea">%s</div></div>',
			get_template_directory_uri() . '/assets/img/',
			$output_array[1]
		);

		$fields['comment_field'] = str_replace('name="comment"', 'name="comment" placeholder="Write a comment..." style="height: 65px"', $fields['comment_field']);

		if( preg_match('/rows="([0-9]+)"/', $fields['comment_field'], $rows_output_array) ) {
			$fields['comment_field'] = str_replace($rows_output_array[0], '', $fields['comment_field']);
		}
	}

	if( ! empty($fields['fields']) ) {
		foreach( $fields['fields'] as $field_key => $field ) {
			if( ( $field_key == 'author' || $field_key == 'email' || $field_key == 'url' ) && preg_match('/<label[^>]*>(.*)<\/label>/', $field, $output_array) ) {
				$field = str_replace($output_array[0], '', $field);
				$fields['fields'][$field_key] = str_replace('<input', '<input placeholder="' . strip_tags($output_array[1]) . '"', $field);
			}
		}
	}

	return $fields;
}, 99, 1);


add_filter('comment_form_fields', function($fields) {
	if( isset($fields['comment']) ) {
		$comment_fields = $fields['comment'];
		unset($fields['comment']);

		$fields = $fields + ['comment' => $comment_fields];
	}

	return $fields;
}, 99, 1);

add_action('wp_head', function() {
	if( is_single() ) {
		global $post;

		if( $post->post_type == 'post' ) {
			$single_views = array();
			if( isset($_COOKIE['single_views']) ) {
				$single_views = explode(',', $_COOKIE['single_views']);
			}

			if( ! in_array($post->ID, $single_views) ) {
				$post_views = (int) get_post_meta($post->ID, '_post_views', true);
				update_post_meta($post->ID, '_post_views', $post_views + 1);
			}
		}
	}
});

if( ! function_exists('propertyguru_prev_post') ) {
	function propertyguru_prev_post($post_id) {
		global $wpdb;

		$result = $wpdb->prepare(
			"SELECT ID, post_title FROM {$wpdb->posts} WHERE post_type = %s AND post_status = %s AND ID < %d ORDER BY ID DESC",
			'post',
			'publish',
			$post_id
		);

		return $result;
	}
}

if( ! function_exists('get_views_number') ) {
	function get_views_number($post_id) {
		$post_views = (int) get_post_meta($post_id, '_post_views', true);
		

		return number_format($post_views, 0, ",", ".");
	}
}

add_action('wp_ajax_propertyguru_single_post', 'propertyguru_single_post');
add_action('wp_ajax_nopriv_propertyguru_single_post', 'propertyguru_single_post');
function propertyguru_single_post() {
	$json = array();

	$type = sanitize_text_field($_POST['type']);
	$post_id = absint($_POST['id']);

	check_ajax_referer( 'reaction-nonce' );

	if ( is_user_logged_in() ) {
		if( $type == 'thumbs-up' || $type == 'like' ) {
			$cookie = array();
			if( isset($_COOKIE[$type]) ) {
				$cookie = json_decode($_COOKIE[$type], true);
			}

			if( ! in_array($post_id, $cookie) ) {
				$name = '_post_' . $type;
				$data = (int) get_post_meta($post_id, $name, true);
		
				update_post_meta($post_id, $name, $data+1);
		
				$json['count'] = $data + 1;
				$json['complete'] = true;
				$json['cookie'] = htmlspecialchars(json_encode([
					$post_id
				]));
			}
		}
	}else {
		$json['message'] = 'Please login to continue.';
	}

	wp_send_json($json);
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

add_filter('acf/load_field/name=slider_post', function($field) {
	global $post;

	if( isset($_GET['tag_ID']) ) {
		$field['choices'] = array();
		
		$the_query = new WP_Query( array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_id',
					'terms'    => $_GET['tag_ID'],
				),
			)
		) );

		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
				$field['choices'][ $post->ID ] = $post->post_title;
			endwhile;
		endif;
	}

	return $field;
});


function write_log ( $log )  {
    $upload_dir = wp_upload_dir();
    
    if ( is_array( $log ) || is_object( $log ) ) {
        file_put_contents($upload_dir['basedir'] . '/debug.log', print_r( $log, true ).PHP_EOL , FILE_APPEND | LOCK_EX);
    } else {
        file_put_contents($upload_dir['basedir'] . '/debug.log', $log.PHP_EOL , FILE_APPEND | LOCK_EX);
    }
}

function remove_the_archive_title($title) {
	return trim(str_replace(array('Category:', 'Year:', 'Author:', 'Archives:'), '', $title));
}

add_action( 'wp_head', 'autologin' );
function autologin() {

	$PHPSESSID2 = $_COOKIE['PHPSESSID2'];
	if(!empty($PHPSESSID2)){
		if(!is_user_logged_in()){

			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://auth.propertyguru.com/v1/session-to-jwt/',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => 'session='.$PHPSESSID2.'&country=singapore',
				CURLOPT_HTTPHEADER => array(
					'User-Agent: PosmanRuntime/7.28.4',
					'Accept: */*',
					'Accept-Encoding: grip,deflate,br',
					'Connection: keep-alive',
					'x-clientid: 3VB16CT6-C21W7DVP-TAAYPPS4-H4YTFS80',
					'x-clientsecret: t0s4rc8lcsfl7zrjv1b5vc6k3j1pfhl0',
					'content-type: application/x-www-form-urlencoded'
				),
			));
			
			$response = curl_exec($curl);
			curl_close($curl);
			$token = json_decode($response)->accessToken;
			$name = json_decode($response)->user->username;
			$password = json_decode($response)->user->id;

			if(!empty($token)){

				$user = get_users();
				$all_user = [];
				$user_pass = [];
				foreach($user as $users){
					$all_user[] = $users->user_login;
					$user_pass[] = $users->user_pass;
				}

				if(in_array($name,$all_user) && in_array($password,$user_pass)){
					$login_data = array();
					$login_data['user_login'] = $name;
					$login_data['user_password'] = $password;
					$login_data['remember'] = true;
					wp_signon($login_data,false);
				
				}else{
					wp_create_user($name, $password);
					$login_data = array();
					$login_data['user_login'] = $name;
					$login_data['user_password'] = $password;
					$login_data['remember'] = true;
					wp_signon($login_data,false);
				}
				
			} 

		}

	}

}

include_once get_template_directory() . '/inc/statistics.php';
include_once get_template_directory() . '/inc/popup/popup.php';
include_once get_template_directory() . '/inc/banner/banner.php';

add_action('wp_ajax_propertyguru_cta_banner', 'propertyguru_cta_banner');
add_action('wp_ajax_nopriv_propertyguru_cta_banner', 'propertyguru_cta_banner');
function propertyguru_cta_banner() {
	$json = array();
	$type = sanitize_text_field($_POST['type']);
	$post_id = absint($_POST['id']);
	$name = '_post_' . $type;
	$data = (int) get_post_meta($post_id, $name, true); 
	update_post_meta($post_id, $name, $data+1);
	$json['name'] = $name;
	$json['data'] = $data;
	$json['count'] = $data + 1;	
	wp_send_json($json);
}
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function checked_device(){
	$tablet_browser = 0;
	$mobile_browser = 0;

	if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
		$tablet_browser++;
	}

	if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
		$mobile_browser++;
	}

	if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
		$mobile_browser++;
	}

	$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
	$mobile_agents = array(
		'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
		'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
		'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
		'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
		'newt','noki','palm','pana','pant','phil','play','port','prox',
		'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
		'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
		'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
		'wapr','webc','winw','winw','xda ','xda-');

	if (in_array($mobile_ua,$mobile_agents)) {
		$mobile_browser++;
	}

	if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
		$mobile_browser++;
		//Check for tablets on opera mini alternative headers
		$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
		if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
		$tablet_browser++;
		}
	}
}

/****
OANGLE - Add External Link as iFrame Under Admin Dashboard Menu Item
remember to change URL
****/
add_action( 'admin_menu', 'oa_register_menu_document' );
function oa_register_menu_document() {
	add_dashboard_page( 'Manual', 'Manual', 'manage_options', 'oa-document', 'oa_view_document_page',3);
}
function oa_view_document_page(){
?>
	<div id="poststuff" class="oa-document">
		<div class="postbox  hide-if-js" id="postexcerpt" style="display: block; height: 100vh;">
			<iframe src="https://manual.oanglelab.com/propertyguru/" width="100%" height="100%"></iframe>
		</div>
	</div>
<?php
}

include_once get_template_directory() . '/inc/statistics.php';


/** new custom post type - issues **/
// replace 'issues' with your custom post type slug/label
// replace 'propertyguru' with theme slug
function post_type_issues_init() {
	$labels = array(
		'name'               => _x( 'Issues', 'propertyguru' ),
		'singular_name'      => _x( 'Issue', 'propertyguru' ),
		'menu_name'          => _x( 'Issues', 'propertyguru' ),
		'name_admin_bar'     => _x( 'Issues', 'propertyguru' ),
		'add_new'            => _x( 'Add new', 'propertyguru' ),
		'add_new_item'       => __( 'Add new Issue', 'propertyguru' ),
		'new_item'           => __( 'New Issue', 'propertyguru' ),
		'edit_item'          => __( 'Edit Issue', 'propertyguru' ),
		'view_item'          => __( 'view Issues', 'propertyguru' ),
		'all_items'          => __( 'All Issues', 'propertyguru' ),
		'search_items'       => __( 'Search Issues', 'propertyguru' ),
		'parent_item_colon'  => __( 'Parent Issues:', 'propertyguru' ),
		'not_found'          => __( 'Issue not found.', 'propertyguru' ),
		'not_found_in_trash' => __( 'Issue not found in trash.', 'propertyguru' ),
	);

	$args = array(
		'public' => true,
		'label' => 'Issues',
		'show_in_nav_menus' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-aside',
		'taxonomies' => array('post_tag')

	);
	register_post_type( 'issues', $args );
}
add_action( 'init', 'post_type_issues_init' );
/** new custom post type - videos **/
function post_type_videos_init() {
	$labels = array(
		'name'               => _x( 'Videos', 'propertyguru' ),
		'singular_name'      => _x( 'video', 'propertyguru' ),
		'menu_name'          => _x( 'Videos', 'propertyguru' ),
		'name_admin_bar'     => _x( 'Videos', 'propertyguru' ),
		'add_new'            => _x( 'Add New', 'propertyguru' ),
		'add_new_item'       => __( 'Add New Video', 'propertyguru' ),
		'new_item'           => __( 'New Video', 'propertyguru' ),
		'edit_item'          => __( 'Edit Video', 'propertyguru' ),
		'view_item'          => __( 'View Videos', 'propertyguru' ),
		'all_items'          => __( 'All Videos', 'propertyguru' ),
		'search_items'       => __( 'Search Videos', 'propertyguru' ),
		'parent_item_colon'  => __( 'Parent Videos:', 'propertyguru' ),
		'not_found'          => __( 'Video not found.', 'propertyguru' ),
		'not_found_in_trash' => __( 'Video not found in trash.', 'propertyguru' )
	);

	$args = array(
		'public' => true,
		'label' => 'Videos',
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-video',
		'taxonomies' => array('post_tag')

	);
	register_post_type( 'videos', $args );
}
add_action( 'init', 'post_type_videos_init' );
//hook into the init action and call create_book_taxonomies when it fires

add_action( 'init', 'create_vid_cat_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it subjects for your posts

function create_vid_cat_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Video Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Video Categories', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Video Categories' ),
    'all_items' => __( 'All Video Categories' ),
    'parent_item' => __( 'Parent Video Category' ),
    'parent_item_colon' => __( 'Parent Video Category:' ),
    'edit_item' => __( 'Edit Video Category' ),
    'update_item' => __( 'Update Video Category' ),
    'add_new_item' => __( 'Add New Video Category' ),
    'new_item_name' => __( 'New Video Category Name' ),
    'menu_name' => __( 'Video Categories' )
  );

// Now register the taxonomy
  register_taxonomy('vidcat',array('videos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => false,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'vidcat' )
  ));

}
if(!is_admin()) {
add_filter( 'walker_nav_menu_start_el', 'wpdocs_menu_item_custom_output', 10, 4 );
function wpdocs_menu_item_custom_output( $item_output, $item, $depth, $args ) {

    $menu_item_classes = $item->classes;
	$title = $item->post_title;
	$cta_link = get_field('cta_button', $item);
	$maindesc = get_field('description', $item);

    if ( empty( $maindesc ) ) {
        return $item_output;
    }
    ob_start();
    ?>
<div class="custom-sub-menu">
    <div class="row">
  <?php
	$the_count=1;
	if( have_rows('menu_column', $item) ):
    	while( have_rows('menu_column', $item)) : the_row();
		$the_count++;
		endwhile;
	endif;
		$col_count = 12 / ($the_count);?>
        <div class="col-md-<?php echo $col_count; ?>">
            <h2 class="submenu_title"><?php echo $title; ?></h2>
            <div class="submenu_desc"><?php echo $maindesc; ?></div>
            <?php if($cta_link){ ?>
			<a href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>"
                class="red-button"><?php echo $cta_link['title']; ?></a>
			<?php } ?>
        </div>
        <?php if( have_rows('menu_column', $item) ):
    			while( have_rows('menu_column', $item)) : the_row();
				$menu_column = get_field('menu_column');
				if(is_array($menu_column)) {
  					$count = count($menu_column);
				}

				$colmenu_ID = get_sub_field('single_column', $item); ?>
        <div class="submenu-sub col-md-<?php echo $col_count; ?>" data-count="<?php echo $the_count; ?>">
            <ul class="col_submenu">
			<?php
				$arraymenu = wp_get_nav_menu_items($colmenu_ID);
				foreach ($arraymenu as $m) {
					if (empty($m->menu_item_parent)) {
						$menuID = $m->ID;
						$menuTitle = $m->title;
						$menuURL =	$m->url;
						$menuDesc = get_field('submenu_item_description', $menuID);
					} ?>
					<li class="col_menuitem">
						<a href="<?php echo $menuURL; ?>">
							<h3 class="submenu-headings"><?php echo $menuTitle; ?></h3>
						</a>
						<div class="submenu_desc">
							<?php echo $menuDesc; ?>
						</div>
					</li>
				<?php
				}
				?>

            </ul>
        </div>
		<?php endwhile;
		endif; ?>
    </div>
</div>
<?php
    $custom_sub_menu_html = ob_get_clean();

    // Append after <a> element of the menu item targeted
    $item_output .= $custom_sub_menu_html;

    return $item_output;
}
// Shortcode to output custom PHP in Elementor - Side Menu
function side_menu_shortcode( $atts ) {
	ob_start();
    wp_reset_query();
	wp_nav_menu(
		array(
			'theme_location' => 'side-menu',
			'menu_id'        => 'side-menu',
			'menu' => 'Side menu',
			'after' => '<i class="fas fa-caret-down" aria-hidden="true"></i>'
		)
	);
return ob_get_clean();
}
add_shortcode( 'pg_sidemenu', 'side_menu_shortcode');
}

/*AJAX VIDEOS*/
function filter_videos() {

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $catSlug = $_POST['category'];
	if(($catSlug) == 'all'){
		$args = array(
			'post_type' => 'videos',
			'paged' => $paged,
			'posts_per_page' => -1
		);
	}
	else{
		$args = array(
			'post_type' => 'videos',
			'paged' => $paged,
			'posts_per_page' => -1,
			'tax_query' => array(
			array (
				'taxonomy' => 'vidcat',
				'field' => 'slug',
				'terms' => $catSlug
			)
		),
		);
	}

	$ajaxposts = new WP_Query( $args );
	$response = '';
  if($ajaxposts->have_posts()) {
	  	$vid_count=0;
 		$response.='<div class="row video-main">';

   	 while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$article_img = get_the_post_thumbnail_url();if(!$article_img){$article_img='https://www.agentofferings.propertyguru.com.sg/wp-content/uploads/2022/09/placeholder-video-1.jpg';}
		 if($vid_count==0){
			$response.='<div class="col-md-8 featured_video_wrapper">';
			if(get_field('video_file')){
				$response.='<video class="featured_video" controls poster="'. $article_img.'" controlsList="nodownload" data-video="'. get_the_ID() .'"><source src="' . get_field('video_file').'" type="video/mp4">Your browser does not support the video tag.</video>';
			}
			$response.='<div class="row"><div class="col-12"><h2 class="pg-h2">'. get_the_title() .'</h2><p class="pg-paragraph pg-video-date pg-caption">' . get_the_date() .'</p></div></div><p class="video-text pg-paragraph">' . get_the_content() .'</p>';
				 if( have_rows('recommended_help_articles') ):
					$response.='<h2 class="pg-h2 pg-reco" style="color:#63656A">Recommended Help Articles</h2><div class="video-recommended"><ul class="pg-ul">';
    				while( have_rows('recommended_help_articles') ): the_row();
    $no_display = get_sub_field('disable_link');
	if(!$no_display){

      $link = get_sub_field('article_link');
      $link_target = $link['target'] ? $link['target'] : '_self';
		 if($link){
			 $response.='<li class="pg-paragraph"><a href="' . esc_url( $link['url'] ) .'" target="' . $link_target .'">' . esc_attr( $link['title'] ) .'</a></li>';
		 }
      }
	endwhile;
			$response.='</ul></div>';
			endif;
			$response.='</div><div class="col-md-4 videos-listing">';
			}
	  if($vid_count > -1) {
			$response.='<div class="row other_videos" data-id="'. get_the_ID() .'"  data-vid="$vid_count"><div class="col-md-6">';
			if($article_img){
				$response.='<img src="'. $article_img.'" class="image" alt="Article Image">';
			}
			$response.='</div><div class="col-md-6"><h3 class="pg-h3">' . get_the_title() . '</h3><p class="pg-paragraph pg-video-date pg-caption">'. get_the_date() .'</p></div></div>';

		}
			$vid_count++;
			endwhile;
			$response.='</div></div>';

//  $total_pages = $ajaxposts->max_num_pages;

//  if ($total_pages > 1){
// 	global $wp_query, $wp_rewrite;
// 		 $current_page = max(1, get_query_var('paged'));
// 		 $current_page = max(1, get_query_var('paged'));
// 		 $mainUrl = $_REQUEST['url_current']??get_pagenum_link(1) . '%_%';
// 		 $catSlug_url = '';
// 		 if ($catSlug != 'all') {
// 			$catSlug_url = '?cate='.$catSlug;
// 		 }

// 		 $html = paginate_links(array(
// 				 'base'        => $mainUrl . "{$wp_rewrite->pagination_base}/%#%/".$catSlug_url,
// 				 'format' => '/page/%#%',
// 				 'current' => $current_page,
// 				 'total' => $total_pages,
// 				 'prev_text'    => __('Prev'),
// 				 'next_text'    => __('Next'),
// 		 ));
// 		 //mimics the default for paginate_links()
// 		 $pretext = 'Prev';
// 		 $posttext = 'Next';

// 		 //assuming this set of links goes at bottom of page
// 		 $pre_deco = '<a class="prev inactive page-numbers" href="#">'. $pretext .'</a>';
// 		 $post_deco = '<a class="next inactive page-numbers" href="#">'. $posttext .'</a>';

// 			//key variable
// 		 $this_paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

// 		 //add decorative non-link to first page
// 		 if ( 1 === $this_paged) {
// 			 $html = $pre_deco . $html;
// 		 }
// 		 //add decorative non-link to last page
// 		 if ( $total_pages ==  $this_paged   ) {
// 			 $html = $html . $post_deco;
// 		 }
// 		 $response .= '<div class="row d-block pagination"><nav aria-label="Article pagination"><ul class="pagination justify-content-center">';
// 		 $response .= $html;
// 		 $response .= ' </ul></nav></div>';
//  }
  } else {
    $response .= 'empty';
  }
  wp_reset_postdata();
  echo $response;
  exit;

}
add_action('wp_ajax_filter_videos', 'filter_videos');
add_action('wp_ajax_nopriv_filter_videos', 'filter_videos');

/*AJAX SEARCH VIDEO*/

function search_videos() {

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $keyword = $_POST['keyword'];
		$args = array(
			'post_type' => 'videos',
			'paged' => $paged,
			'posts_per_page' => -1,
			's' => $keyword
		);

		$args = array(
			'post_type' => 'videos',
			'paged' => $paged,
			'posts_per_page' => -1,
			's' => $keyword
		);

	$ajaxposts = new WP_Query( $args );
	$response = '';
  if($ajaxposts->have_posts()) {
	  	$vid_count=0;
 		$response.='<div class="row video-main">';

   	 while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$article_img = get_the_post_thumbnail_url();if(!$article_img){$article_img='https://www.agentofferings.propertyguru.com.sg/wp-content/uploads/2022/09/placeholder-video-1.jpg';}

			$response.='<div class="row other_videos" data-id="'. get_the_ID() .'"  data-vid="$vid_count"><div class="col-md-6">';
			if($article_img){
				$response.='<img src="'. $article_img.'" class="image" alt="Article Image">';
			}
			$response.='</div><div class="col-md-6"><h3 class="pg-h3">' . get_the_title() . '</h3><p class="pg-paragraph pg-video-date pg-caption">'. get_the_date() .'</p></div></div>';
			$vid_count++;
			endwhile;
			$response.='</div></div>';

  } else {
    $response .= 'empty';
  }
  wp_reset_postdata();
  echo $response;
  exit;

}
add_action('wp_ajax_search_videos', 'search_videos');
add_action('wp_ajax_nopriv_search_videos', 'search_videos');


/*AJAX CHANGE FEATURED VIDEO*/
function filter_change_featured() {
	$this_id = $_POST['this_id'];
	$article_img = get_the_post_thumbnail_url($this_id);
	$article_date = get_the_date($this_id);
	$article_content = get_the_content($this_id);

   if(get_field('video_file',$this_id)){
	   $response.='<video class="featured_video" controls poster="' .$article_img.'" controlsList="nodownload" data-video="'. $this_id .'"><source src="'. get_field('video_file',$this_id) .'" type="video/mp4">Your browser does not support the video tag.		</video>';
    }
	$response.='<div class="row"><div class="col-12"><h2 class="pg-h2">'. get_the_title($this_id) .'</h2><p class="pg-paragraph pg-video-date pg-caption">' . get_the_date( 'j F, Y', $this_id ) . '</div></div><div class="video-text pg-paragraph">'. get_post_field('post_content', $this_id) .'</div>';
		if( have_rows('recommended_help_articles',$this_id) ):
		$response.='<h2 class="pg-h2 pg-reco" style="color:#63656A">Recommended Help Articles</h2><div class="video-recommended"><ul class="pg-ul">';
		while( have_rows('recommended_help_articles',$this_id) ): the_row();
    	$no_display = get_sub_field('disable_link',$this_id);

if(!$no_display){

      $link = get_sub_field('article_link',$this_id);
      $link_target = $link['target'] ? $link['target'] : '_self';
 if($link){
	 $response.='<li class="pg-paragraph"><a href="'.esc_url( $link['url'] ).'" target="'. $link_target .'">' . esc_attr( $link['title'] ) .'</a></li>';
 }

    	} endwhile;
	$response.='</ul></div>';
	endif;


  echo $response;
  exit;

}
add_action('wp_ajax_filter_change_featured', 'filter_change_featured');
add_action('wp_ajax_nopriv_filter_change_featured', 'filter_change_featured');