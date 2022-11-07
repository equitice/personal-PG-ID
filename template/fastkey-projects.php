<?php
/* Template Name: FastKey Projects | Agent Offerings SG */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;

?>
<main id="primary" class="site-main fastkey">
	<?php if (get_field('banner_image_desktop')) {
        $desktop_banner = get_field('banner_image_desktop'); ?>
    <style>
    .pg-hero-sec {
		background-image: url(<?php echo $desktop_banner; ?>);
    }
    </style>
    <?php }?>
    <?php if (get_field('banner_image_mobile')) {
        $mobile_banner = get_field('banner_image_mobile'); ?>
    <style>
    @media only screen and (max-width: 767px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
			background-position:bottom;
        }
		}
		    @media only screen and (max-width: 575px) {
        .pg-hero-sec {
		    background-image: url(<?php echo $mobile_banner; ?>);
			background-position:top;
        }
				.pg-hero-sec .pg-hero-text{padding-top:300px;}
				.fastkey .red-white-container{flex-direction:column!important;}
				.red-white-block {padding-top:20px;}
    }
		 @media only screen and (min-width: 576px) {
			.red-white-block{padding-left:30px;padding-right:30px;}

		}
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('banner_title');
        ?>
        <section class="pg-hero-sec pg-h1-has-shadow">
            <div class="container">
                <div class="row">
                    <?php if($text_title_banner){ ?><div class="col-md-8 col-lg-6 pg-hero-text" style="">
						<?php echo $text_title_banner; ?>
					</div>
					<?php } ?>
                </div>
            </div>
        </section>

  <!-- 	Breadcrumbs	 -->
	<div class="breadcrumbs container">
		<ol class="breadcrumbs"  itemscope="" itemtype="https://schema.org/BreadcrumbList"><li><a href="<?php echo site_url(); ?>"><i class="pg-icon-home"></i></a>
			<meta itemprop="position" content="1"></li><li> <a  href="<?php echo home_url('partner360'); ?>">Partner360</a></li><li class="active">FastKey Projects</li>
		</ol>
	</div><section class="fastkey-section-1 container pg-intro">
        <div style="text-align:center;">
            <p class="pg-paragraph">Connecting you to more than 500 regional developments, FastKey Projects is the key that <span
                    class="bold">unlocks a new revenue stream</span> for all Agent Partners via <a
                    href="https://agentnet.propertyguru.com.sg/ex_login?w=1&redirect=/ex_home" target="_blank"
                    class="red-link">AgentNet</a>.
            </p>
			<br>
            <p class="pg-paragraph">
                As Southeast Asia’s leading gateway, you have <span class="bold">more than 500 regional development
                    projects</span> at your fingertips – ready for presentation to your clients to help them <span
                    class="bold">find their next dream project</span>; both inside and outside our borders so you can
                become a market expert in the eyes of your clients.
            </p>
			<br>
			<br>
            <p class="pg-paragraph">
                What’s more, you also enjoy <span class="bold">direct access to developers’ commissions and
                    offers</span>, so you can browse and select the developments you want to represent.
            </p>
			<br>
            <p class="pg-paragraph">
                FastKey Projects is a complimentary feature exclusively available to PropertyGuru Agent Partners via <a
                    href="https://agentnet.propertyguru.com.sg/ex_login?w=1&redirect=/ex_home" target="_blank"
                    class="red-link">AgentNet</a>.
            </p>
        </div>
    </section>

    <section class="light-red-background pg-section" style="background-color:#F3F4F6;">

        <div class="fast-track">
            <h2 class="pg-h2" style="text-align:center" ;>
                Your Fast Track to Unlocking Local and Overseas<br>
				Market Income
            </h2>
        </div>
<div class="container"><div class="flex-row red-white-container" style="width:initial;padding-left:20px!important;border:initial;margin-top:0;">
            <div class="col-sm-5 col-md-4">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/pgfastkey_thumbnail1_v2.jpg">
            </div>
            <div class="red-white-block flex-column col-sm-7 col-md-8" style="margin-left:0;">
                <h3 class="pg-h3 mb-0">
                    Direct Access to Developers’ Commissions and Offers
                </h3>
				<br>
                <p class="red-white-container-text pg-paragraph">
                    Open yourself to overseas market opportunities and additional income streams with direct access to
                    developers’ commissions and offers.
                </p>
            </div>
        </div>

        <div class="flex-row red-white-container" style="width:initial;padding-left:20px!important;border:initial;">
            <div class="col-sm-5 col-md-4">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/pgfastkey_thumbnail2_v2-scaled.jpg">
            </div>
            <div class="red-white-block flex-column col-sm-7 col-md-8" style="margin-left:0;">
                <h3 class="pg-h3 mb-0">
                    Your Perfect Tool to Finding Your Client’s Next Dream Project
                </h3>
				<br>
                <p class="red-white-container-text pg-paragraph">
                    Get ready access to a comprehensive suite of project information and use them as ready-made sales kits to pitch projects to your clients, and become their trusted market expert. Through FastKey Projects, you’ll have access to:
					</p>
					<ul class="pg-paragraph re-ul" style="padding-left:initial;max-width:initial;">
                        <li>
                            Available commission
                        </li>
                        <li>
                            Project description and price
                        </li>
                        <li>
                            Development site & stack, floor plans and units  
                        </li>
						<li>
                            Developer and agency contacts
                        </li>
                        <li>
                            E-brochures
                        </li>
                    </ul>
            </div>
        </div>

        <div class="flex-row red-white-container" style="width:initial;padding-left:20px!important;border:initial;">
            <div class="col-sm-5 col-md-4">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/pgfastkey_thumbnail3_v2.jpg" >
            </div>
            <div class="red-white-block flex-column col-sm-7 col-md-8" style="margin-left:0;">
                <h3 class="pg-h3 mb-0">
                    Open Yourself to Opportunities & Income, Within and Beyond Singapore
                </h3>
				<br>
                <p class="red-white-container-text pg-paragraph">
                    Discover over 500 developments around the region. Don’t let yourself miss out on the most exciting
                    and promising developments within and beyond Singapore!
                </p>
            </div>
        </div>
		</div>
    </section>

    <section class="padding ml-0 custom-slider" style="align-items: center; background-color: #FAFAFA;">
		<div class="row text-center">
			<div class="col-12">
				<h2 class="pg-h2" >
            		FastKey Projects on Your AgentNet
        		</h2>
			</div>


        <div class="col-lg-8 offset-lg-2">
			<div class="oacarousel">

            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/10/screen1.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    Access 500+ developments on <span class="red-link">‘FastKey Projects’</span> via AgentNet.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/10/screen2.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    <span class="red-link">Browse 500 developments</span> all in one place.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/10/screen3.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    Click into any development and get <span class="red-link"> instant access to a myriad of
                        information</span>, right at your fingertips.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/10/screen4.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    Check out <span class="red-link">‘Quick Links’</span> for more comprehensive
                    development information.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/10/screen5.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    <span class="red-link">Discover amenities</span> around the neighbourhood.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/10/screen6.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    <span class="red-link">Contact developer</span> and start selling today.
                </div>
            </div>
        </div><br><br>
			<a href="https://agentnet.propertyguru.com.sg/fastkey" target="_blank" class="red-button">
            Start Discovering Regional Developments
        </a>
			</div>

			</div>
    </section>
<!-- FAQ Start -->
	<section class="faq-accord" style="background-color: #f2f2f2;padding-top: 80px;padding-bottom:80px;">
        <div class="container">
			<div class="row">
				<div class="col-md-4">
                <h2 class="pg-h2">Frequently Asked Questions</h2>
                <p class="" style="font-family:'Poppins',sans-serif; font-weight: 500">Refer to full FAQ <a
                        href="https://help.propertyguru.com.sg/en/collections/2427584-all-about-fastkey-projects" target="_blank" class="red-link" style="font-family:'Poppins',sans-serif; font-weight: 500">here.</a></p>
					</div>
				<div class="accordion-wrapper offset-md-1 col-md-7 offset-lg-2 col-lg-6">
            <div class="accordion" id="homeloanaccord" style="max-width: fit-content">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is Fastkey Projects?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                             <p class="pg-paragraph">FastKey Projects is a marketplace feature on AgentNet that connects agent partners to more than 500 developer projects regionally.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How does FastKey Projects benefit agents like myself?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph" style="padding-top:20px">With FastKey Projects, agent partners can enjoy the following at no extra cost:</p>
								 <ul class="pg-ul" style="padding-top:20px">
                    <li class="pg-paragraph">Extensive marketplace to over 500 developer projects within the region, all ready for you to explore, pick and sell
</li>
                    <li class="pg-paragraph">Comprehensive suite of project information readily available to assist you in your sales pitch
</li>
                    <li class="pg-paragraph">Be empowered by this perfect sales too to help your clients find their next dream project
</li>
                    <li class="pg-paragraph">Direct access to developers’ offers and commissions to grow your income
</li>
                </ul>

                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="margin-bottom: auto;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What types of developments are listed on FastKey Projects?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph" style="padding-top:20px">FastKey Projects covers pre-launch to ready-to-move-in residential and commercial developments.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
			</div>
			</div>

        </div>
    </section>
	<!-- FAQ End -->
	<section class="poweredby container">
		<div class="row">
			<div class="col-12">
				<p class="pg-paragraph text-center" style="padding:20px;">
					Powered by PropertyGuru FastKey
				</p>
			</div>
		</div>
	</section>

</main><!-- #main -->
<?php get_footer();?>
