<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PropertyGuru
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" id="monile_view_port">
    <?php checked_device();?>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php
	get_template_part( 'template-parts/signin', 'auto');
	?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php $page_id = get_queried_object_id();?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'propertyguru' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="container">
                <div class="site-branding">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_field('logo_image_for_header', 'option'); ?>">
                    </a>
                </div><!-- .site-branding -->
                <nav id="site-navigation" class="main-navigation eml_test">
                    <button class="menu-close"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/ic-close.png" alt=""></button>
                    <?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'menu_id'        => 'primary-menu',
					)
				);
				?>

                </nav><!-- #site-navigation -->
                <div class="wrap-cta">
                    <a href="https://agentnet.propertyguru.com.sg" class="button-link">AgentNet</a>
                    <button class="menu-toggle">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-icon.png" alt=""> -->
                        <span class="menu-toggle_container">
                            <span class="x1"></span>
                            <span class="x2"></span>
                            <span class="x3"></span>
                        </span>
                    </button>
                </div>
            </div>
        </header><!-- #masthead -->

        <?php
		if(
        is_page('fastkeyprojects')
        ||is_page('homeloanreferral')
        ||is_page('rewards')
        ||is_page('academy')  
		||is_page('elite-birthday-treat')
		||is_page('anniversary-benefits')
        ||is_page('partner360')
		||is_page('elite')
			||is_page('prestige')||is_page('birthdaytreat-solitaire')||is_page('birthdaytreat-titanium')||is_page('birthdaytreat-platinum')
			||is_page('milestone')
			||is_page('birthdaytreat')
    ){ ?>
        <div class="pg-page_nav">
            <div class="container">
                <ul>
                    <li<?php if(is_page('homeloanreferral')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('homeloanreferral'); ?>">PropertyGuru Finance</a></li>
                    <li<?php if(is_page('fastkeyprojects')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('fastkeyprojects'); ?>">PropertyGuru FastKey</a></li>
                    <li<?php if(is_page('academy')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('academy'); ?>">Partner360 Academy</a></li>
                    <li<?php if(is_page('rewards')||is_page('elite-birthday-treat')||is_page('anniversary-benefits')||is_page('elite')||is_page('milestone')||is_page('birthdaytreat')||is_page('prestige')||is_page('birthdaytreat-solitaire')||is_page('birthdaytreat-titanium')||is_page('birthdaytreat-platinum')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('rewards'); ?>">Partner360 Rewards</a></li>
				</ul>
            </div>
        </div>
        <?php }
		
	if(
    	
        is_page('marketinsights')
		||is_page('featuredagent')
		||is_page('turbo')
		||is_page('boost')
		||is_page('spotlight')
		||is_page('weeklyfeaturedlisting')
		||is_page('promotions')
    ){ ?>
        <div class="pg-page_nav">
            <div class="container">
                <ul>
                    <li<?php if(is_page('marketinsights')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('marketinsights'); ?>">Market Insights</a></li>
                    <li<?php if(is_page('featuredagent')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('featuredagent'); ?>">Featured Agents</a></li>
                    <li<?php if(is_page('turbo')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('turbo'); ?>">Turbo</a></li>
                    <li<?php if(is_page('boost')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('boost'); ?>">Boost</a></li>
					<li<?php if(is_page('spotlight')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('spotlight'); ?>">Spotlight</a></li>
					<li<?php if(is_page('weeklyfeaturedlisting')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('weeklyfeaturedlisting'); ?>">Weekly Featured Listings</a></li>
					<li<?php if(is_page('promotions')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('promotions'); ?>">Promotions</a></li>
				</ul>
            </div>
        </div>
        <?php }
		if(
    	is_page_template('template/news.php')
        ||is_single()
			||is_category( )
    ){ ?>
        <div class="pg-page_nav">
            <div class="container">
                <ul>
                    <li<?php if(is_category( 'industry-tips-insights' )){ ?> class="active"<?php } ?>><a href="<?php echo site_url(); ?>/agentnews/category/insights-and-tips/">Insights & Tips</a></li>
					<li<?php if(is_category( 'industry-news' )){ ?> class="active"<?php } ?>><a href="<?php echo site_url(); ?>/agentnews/category/industry-news/">Industry News</a></li>
					<li<?php if(is_category( 'product-updates' )){ ?> class="active"<?php } ?>><a href="<?php echo site_url(); ?>/agentnews/category/product-updates/">Product Updates</a></li>
					<li<?php if(is_category( 'agent-interviews' )){ ?> class="active"<?php } ?>><a href="<?php echo site_url(); ?>/agentnews/category/agent-interviews/">Agent Interviews</a></li>
				</ul>
            </div>
        </div>
        <?php }
		if(
    	is_page('accountmanagers')
        ||is_page('customer-care')
			||is_page('contactus')
    ){ ?>
        <div class="pg-page_nav">
            <div class="container">
                <ul>
                    <li<?php if(is_page('accountmanagers')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('accountmanagers'); ?>">Account Managers</a></li>
                    <li><a href="https://help.propertyguru.com.sg/en/">Help Centre</a></li>
                    <li<?php if(is_page('contact-us')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('contactus'); ?>">Customer Care</a></li>
				</ul>
            </div>
        </div>
        <?php }
if(
    	is_page('upsell')
		||is_page('renewal')
		||is_page('upgrade')
    ){ ?>
        <div class="pg-page_nav">
            <div class="container">
                <ul>
                    <li<?php if(is_page('upsell')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('upsell'); ?>">Subscribe</a></li>
                    <li<?php if(is_page('renewal')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('renewal'); ?>">Renewal</a></li>
					<li<?php if(is_page('upgrade')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('upgrade'); ?>">Upgrade</a></li>
				</ul>
            </div>
        </div>
        <?php }
        if(is_page('academy-partnertraining')
        ||is_page('academy-resources')
        ||is_page('academy-meetourtrainers')
        ||is_page('academy-contactus')){ ?>
            <div class="pg-page_nav">
                <div class="container">
                    <ul>
						<li<?php if(is_page('academy-partnertraining')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('academy-partnertraining'); ?>">Partner Training</a></li>
                 	   <li<?php if(is_page('academy-resources')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('academy-resources'); ?>">Resources</a></li>
                  	 	 <li<?php if(is_page('academy-meetourtrainers')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('academy-meetourtrainers'); ?>">Meet Our Trainer</a></li>
                    	<li<?php if(is_page('academy-contactus')){ ?> class="active"<?php } ?>><a href="<?php echo home_url('academy-contactus'); ?>">Contact Us</a></li>
					</ul>
                </div>
            </div>
        <?php  }

	?>



        <?php echo do_shortcode("[gr_banner]");?>