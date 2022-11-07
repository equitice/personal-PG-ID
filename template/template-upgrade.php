<?php
/* Template Name: Upgrade | Agent Offerings SG */
get_header();
?>
<main id="primary" class="site-main upgrade v2">
    <?php if (get_field('banner_image_desktop')) {
        $desktop_banner = get_field('banner_image_desktop'); ?>
    <style>
    .pg-hero-sec {
		background-image: url(<?php echo $desktop_banner; ?>);
		background-size: unset;
		background-position:left -225px top;
    }
		.pg-hero-sec h1{color:#fff;}
    img {
      border-style: none;
    }
    h2 img{width:5%;}
	@media only screen and (max-width: 1539px) {
		.pg-hero-sec {
			background-position: left -365px top;
		}
	}
	@media only screen and (max-width: 1089px) {
		.pg-hero-sec {
			background-position: left -600px top;
        }
	}
  @media only screen and (min-width: 1829px) {
		.pg-hero-sec {
			background-position: left -165px top;
		}
	}
    </style>
    <?php }?>
    <?php if (get_field('banner_image_mobile')) {
        $mobile_banner = get_field('banner_image_mobile'); ?>
    <style>

    @media only screen and (max-width: 767px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
			      background-position:left -225px;
            background-size:cover;
        }
		.pg-hero-sec .pg-hero-text{justify-content:flex-end;padding-bottom:20px;}
    .saving-enjoy-section h2,.saving .description{text-align:center;}
    }
@media only screen and (max-width: 640px) {
    .pg-hero-sec{
      background-position:left -140px;
    }
  }
  @media only screen and (max-width: 575px) {
      .pg-hero-sec{
        background-position:left -100px;
      }
      h2 img{width:27px;}
    }
    @media only screen and (max-width: 480px) {
        .pg-hero-sec{
          background-position:left -50px;
        }
      }
      @media only screen and (max-width: 420px) {
          .pg-hero-sec{
            background-position:top;
          }
        }
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('banner_title');
        ?>

		<section class="pg-hero-sec pg-hero-sec-form pg-h1-has-shadow">
            <div class="container">
                <div class="row">
                    <?php if($text_title_banner){ ?><div class="col-md-7 pg-hero-text" style="">
						<?php echo $text_title_banner; ?>
					</div>
					<?php } ?>

                </div>
            </div>
        </section>



    <!-- end .first-sec -->

    <section class="second-sec" style="padding-top:10px;padding-bottom:0px;">


		<div class="breadcrumbs container">

		<ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList"><li><a href="<?php echo site_url(); ?>"><i class="pg-icon-home"></i></a>
						<meta itemprop="position" content="1"></li><li>Agent Packages</li><li class="active">Upgrade</li>

		</ol>

		</div>



        <div class="container" style="position:relative;">

			<div class="row">
				<div class="col-12 pg-intro">
            <div class="content">
                <p class="text-center pg-paragraph">Are you looking to have access to real-time property insights and tap into PropertyGuru’s proprietary consumer data? You can do so right away by upgrading your
					Agent Package. Not only will you benefit from these added features, you will also enjoy savings!
				<br>
					<br>
                <p class=" text-center pg-paragraph">
					When you upgrade your Agent Package, your current subscription is extended by 12 months at a prorated price. Plus, you get to apply the

					loyalty discount you've accumulated over the years on the subscription price (before GST).
					<br>
					Interest-free installment plans are also available for you.
				</p>
            </div>
			</div>

			</div>
        </div>
    </section>
    <!-- end .second-sec -->

    <section class="choose-package pg-section">
            <div class="container" style="margin-bottom: 20px;">
				<div class="row">
					<div class="col-12">

						<h2 class="text-center pg-h2">Choose a Package that Meets Your Needs</h2>
                <h3 class="sub-heading text-center text-initial pg-h3" style="margin-bottom: 40px; color:#2c2c2c;">All prices listed are inclusive of 7% GST.</h3>
						<h2 class="pg-h2"><img style="" src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/essentials-icon.png"> Essentials</h2>
                <?php echo do_shortcode('[table id=86]'); ?>
                <div class="d-flex flex-row justify-content-center">
                    <p class="pg-paragraph" style="padding-top:20px;"><strong>What are Prime Credits?</strong> With <a href="<?php echo home_url(); ?>/primecredits" class="red-link" target="_blank"><strong>Prime Credits</strong></a>, you can Book, Reserve and Extend <a href="<?php echo home_url(); ?>/featuredagent/" target="_blank" class="red-link"><strong>Featured Agent</strong></a> slots.</p>
                </div>
					</div>
				</div>

            </div>
            <div class="container powerup">
                <div class="row">
						<div class="col-12">

							<h2 class="pg-h2"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/powerups-icon.png"> Powerups</h2>
						</div>
 						<div class="col-12 powerup-text">
							<p class="pg-paragraph">Market Insights powered by <strong>PropertyGuru DataSense</strong> | <a href="<?php echo home_url(); ?>/marketinsights" target="_blank" class="red-link" style="text-decoration: underline !important">Learn more</a></p>
						</div>
					<div class="col-12">
						<?php echo do_shortcode('[table id=83 /]'); ?>
					</div>



                <div class="d-flex flex-row" style="padding-top:10px;justify-content:center;">
                    <p class="pg-caption non-real-time">Non real-time: Data updates approx. 6 weeks and above</p>
                    <p class="pg-caption real-time">Real-time: Data updates approx. within 7 days</p>
                </div>
            </div>
		</div>
            <div class="container value-add" style="margin-bottom:0px;">
				<div class="row">
					<div class="col-12">
						<h2 class="pg-h2"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/value-add-icon.png"> Value-Add</h2>
					</div>

				</div>
                <div class="col-12 valueadd-text">
                    <p class="pg-paragraph"><strong>PropertyGuru Partner360</strong> | <a href="<?php echo home_url(); ?>/partner360" target="_blank" class="red-link" style="text-decoration: underline !important">Learn more</a></p>
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

    <!-- end .saving -->

	<!-- FAQ Start -->
	<section class="faq-accord pg-section" style="background-color: #f2f2f2;">
        <div class="container">
			<div class="row">
				<div class="col-md-4">
                <h2 class="pg-h2">Frequently Asked Questions</h2>
                <p class="" > <a
                        href="http://help.propertyguru.com.sg/en/articles/6583951-upgrade-terms-and-conditions" target="_blank" class="red-link" style="font-family:'Poppins',sans-serif; font-weight: 500">T&Cs apply</a></p>
					</div>
				<div class="accordion-wrapper offset-md-1 col-md-7 offset-lg-2 col-lg-6">
            <div class="accordion" id="homeloanaccord" style="max-width: fit-content">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Can I pay by credit card installments?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                             <p class="pg-paragraph">Payment by credit card installment is available for UOB & OCBC Credit Cards, for purchases of $500 and more. You can select either a 6 or 12 months interest-free plan.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How is the prorated price calculated?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph">The prorated amount is calculated based on (1) the number of weeks you have used for your current package and (2) the list price of the Agent Package you have selected. Your loyalty discount will be applied on the list price, should you be eligible. For more details, kindly contact your <span>Account Manager</span> .</p>
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
