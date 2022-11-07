<?php
/* Template Name: Renewal | Agent Offerings SG */
get_header();
?>
<main id="primary" class="site-main renewal v2">

	<?php if (get_field('banner_image_desktop')) {
        $desktop_banner = get_field('banner_image_desktop'); ?>
    <style>
    .pg-hero-sec {
		background-image: url(<?php echo $desktop_banner; ?>);
		background-position:center;
    }
		img {
			border-style: none;
		}
		h2 img{width:5%;}
    </style>
    <?php }?>
    <?php if (get_field('banner_image_mobile')) {
        $mobile_banner = get_field('banner_image_mobile'); ?>
    <style>
    @media only screen and (max-width: 767px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
			background-position: top;
        }
		.pg-hero-sec .pg-hero-text{padding-top:0px;justify-content:flex-end;padding-bottom:30px;}
		.pg-hero-sec h1{color:#fff!important; text-align: center!important; padding-top: 40px;}
		.center-on-mb,.saving .description{text-align:center;}
    }
		@media only screen and (max-width: 575px) {
			.pg-hero-sec .pg-hero-text h1{text-align:left!important;max-width:345px;}
			h2 img{width:27px;}
		}
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('banner_title');
        ?>
		<!-- CSS only -->


		<section class="pg-hero-sec pg-hero-sec-form pg-h1-has-shadow">
            <div class="container">
                <div class="row">
                    <?php if($text_title_banner){ ?><div class="col-md-7 offset-md-5 pg-hero-text" style="">
						<?php echo $text_title_banner; ?>
					</div>
					<?php } ?>

                </div>
            </div>
        </section>

    <section class="featured-sec" style="padding-bottom:0px;">

		<!-- 	Breadcrumbs	 -->

		<div class="breadcrumbs container">

		<ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList"><li><a href="<?php echo site_url(); ?>"><i class="pg-icon-home"></i></a>
			<meta itemprop="position" content="1"></li><li>Agent Packages</li><li class="active">Renewal</li>


		</ol>

		</div>
		<!-- end breadcrumbs-->

        <div class="container">
			<div class='row'>
				<div class="col-12 pg-intro">
            <div class="content">
                <p class=" text-center pg-paragraph">Thank you for choosing us as your valued partner for another year. As you renew your account with us, continue to be supported 360° from data powerups by PropertyGuru DataSense, value-add services like upskilling courses to one-stop mortgage broker service, and more!
					<br>
					<br>
					<p class="text-center pg-paragraph">
						Regardless of which stage of your career you are at, there is a package that suits your needs.
						<br>
						Interest-free installment plans are also available for you.
					</p>

            </div>
			</div>

			</div>
        </div>
    </section>
    <!-- end .featured-sec -->

	<section class="choose-package pg-section">
            <div class="container" style="margin-bottom: 20px;">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center pg-h2">Choose a Package that Meets Your Needs</h2>
                <h3 class="sub-heading text-center text-initial pg-h3" style="margin-bottom: 40px">All prices listed are inclusive of 7% GST.</h3>
						<h2 class="pg-h2"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/essentials-icon.png"> Essentials</h2>
                <?php echo do_shortcode('[table id=86]'); ?>
                <div class="d-flex flex-row justify-content-center">
                    <p class="pg-paragraph" style="padding:20px"><strong>What are Prime Credits?</strong> With <a href="<?php echo site_url(); ?>/primecredits" class="red-link" target="_blank"><strong>Prime Credits</strong></a>, you can Book, Reserve and Extend <a href="<?php echo home_url(); ?>/featuredagent/" target="_blank" class="red-link"><strong>Featured Agent</strong></a> slots.</p>
                </div>
					</div>
				</div>

            </div>
            <div class="container powerup" style="margin-bottom: 20px;">
                <div class="row">
						<div class="col-12">

							<h2 class="pg-h2"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/powerups-icon.png"> Powerups</h2>
						</div>
 						<div class="col-12 powerup-text">
							<p class="pg-paragraph">Market Insights powered by <strong>PropertyGuru DataSense</strong> | <a href="<?php echo site_url(); ?>/marketinsights" target="_blank" class="red-link" style="text-decoration: underline !important">Learn more</a></p>
						</div>
					<div class="col-12">
						<?php echo do_shortcode('[table id=83 /]'); ?>
					</div>



                <div class="d-flex flex-row justify-content-center" style="padding-top:10px">
                    <p class="pg-caption non-real-time">Non real-time: Data updates approx. 6 weeks and above</p>
                    <p class="pg-caption real-time">Real-time: Data updates approx. within 7 days</p>
                </div>
            </div>
				</div>

            <div class="container value-add" style="margin-bottom: 0px">
				<div class="row">
					<div class="col-12">
						<h2 class="pg-h2"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/value-add-icon.png"> Value-Add</h2>
					</div>


                <div class="col-12 valueadd-text">
					<p class="pg-paragraph"><strong>PropertyGuru Partner360</strong> | <a href="<?php echo site_url(); ?>/partner360" target="_blank" class="red-link" style="text-decoration: underline !important">Learn more</a></p>
				</div>

                </div>
				<div class="col-12">
                <?php echo do_shortcode('[table id=85 /]'); ?>
		        </div>
                	<div class="col-12 text-center">
               
					<a href="<?php echo home_url();?>/accountmanagers/" class="red-button" style="margin-top:40px;margin-bottom:20px;">Get a Recommendation</a>
					<p>Lorem ipsum line 1<br>
					Lorem ipsum line 2</p>
		        </div>
				</div>

        </section>

    <!-- end .choose-package -->
<section class="pink_cta" style="background-color:#FFC8C4;background-image:url('https://propertyguidst.wpengine.com/wp-content/uploads/2022/11/upsell_cta_min.png');background-position:right;background-repeat:no-repeat;padding-top:0px;padding-bottom:0px;">
        <div class="container pg-section" style="margin-bottom:0px;">
			<div class="row" >
				<div class="col-md-6 saving-enjoy-section">

            <h2 class="heading heading--sec pg-h2">Dapatkan akses hingga 3 juta pencari properti setiap bulan!</h2>
            <div class="content">
                <div class="description" style="margin-top:20px">
                    <p class="pg-paragraph text-sm-left">Hubungi disini untuk memperbarui akun Anda hari ini</p>					
                </div>
				</div>

			</div>
	
            </div>
        </div>
    </section>
		<!-- FAQ Start -->
	<section class="faq-accord pg-section" style="background-color: #f2f2f2;">
        <div class="container">
			<div class="row">
				<div class="col-md-4">
                <h2 class="pg-h2">Frequently Asked Questions</h2>
                <p class="" > <a
                        href="http://help.propertyguru.com.sg/en/articles/6584039-renewal-terms-and-conditions" target="_blank" class="red-link" style="font-family:'Poppins',sans-serif; font-weight: 500">T&Cs apply</a></p>
					</div>
				<div class="accordion-wrapper offset-md-1 col-md-7 offset-lg-2 col-lg-6">
            <div class="accordion" id="homeloanaccord" style="max-width: fit-content">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             When can I renew my account?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                             <p class="pg-paragraph">Renewal of account is available during your renewal period i.e. 1 month before your account expiry month and in the month of your account expiry month. For example, if your account expires on 10 Oct 2021, then you can renew your account between 1 Sep 2021 to 31 Oct 2021.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             When would my login to AgentNet expires?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph">For example: If your account expires on 10 Oct 2021, then you need to renew and activate account by 10 Oct 2021. You will not have access to AgentNet and your listings from 11 Oct 2021 00:00hrs onwards. Your active listings will not be displayed on PropertyGuru.com.sg / CommercialGuru.com.sg as well.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="margin-bottom: auto;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                     How is a loyalty tenure calculated?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph">A loyalty tenure is calculated from your first paid subscription, up to to-date, if you have continuously renewed your account.
					<br>For example: Agent’s loyalty start date is 01 Dec 2017. Agent has continuously renewed their subscription over the years and subscription is still active as of 30 Nov 2021. The loyalty tenure is 4 years.
								<a href="http://help.propertyguru.com.sg/en/articles/3541792-loyalty-tenure-and-loyalty-start-date" class="red-link" target="_blank"><strong>Learn more</strong></a>

                        </div>
                    </div>
                </div>
            </div>
			</div>
			</div>

        </div>
    </section>
	<!-- FAQ End -->
<!-- T&C Start -->
	<section class="terms-section pg-section" style="background-color: #484848;">
  <div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="">
						Terms and Conditions
					</h2>
					<ul>
						<li>Test 1</li>
						<li>Test 2</li>
						<li>Test 3</li>
					</ul>
				</div>
	  </div>
		</div>
	</section>
<!-- T&C End -->

</main><!-- #main -->
<?php get_footer();?>
