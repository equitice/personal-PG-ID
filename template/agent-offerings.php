<?php
/* Template Name: Homepage | Agent Offerings SG */
get_header();
?>
<main id="primary" class="site-main agentofferings">
    <?php if (get_field('banner_image_desktop')) {
        $desktop_banner = get_field('banner_image_desktop'); ?>
    <style>
    .pg-hero-sec {
		background-image: url(<?php echo $desktop_banner; ?>);
		background-position:right;/*change to left, right or center*/
    }
		.img_mb{display:none;}
		.img_dt{display:block;}
    </style>
    <?php }?>
    <?php if (get_field('banner_image_mobile')) {
        $mobile_banner = get_field('banner_image_mobile'); ?>
    <style>
		 @media only screen and (max-width: 1280px) {
			.pg-hero-sec {
				background-position:right -80px top;
			 }
		}
    @media only screen and (max-width: 768px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
			background-position:center; /*change to top, bottom or center*/
        }
		.pg-hero-sec .pg-hero-text{justify-content: start;padding-top:50px;}
    }
		 @media only screen and (max-width: 767px) {
			 .img_dt{display:none;}
			 .img_mb{display:block;padding-bottom:20px;}
			 .home-firstsec.pg-section{padding-top:0; padding-bottom:0;}
       .home-last-item{padding-bottom:30px;}
		}
		    @media only screen and (max-width: 575px) {
        .pg-hero-sec {
			background-position:top; /*change to top, bottom or center*/
      background-image:url(https://www.agentofferings.propertyguru.com.sg/wp-content/uploads/2022/10/homepage_header-scaled-mobile.jpg);
        }
		      .pg-hero-sec .pg-hero-text{justify-content: start;padding-top:30px;padding-left:30px;padding-right:50px;}

    }
    @media only screen and (max-width: 405px) {
      .pg-hero-sec .pg-hero-text{padding-right:30px;}
    }
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('banner_title');
        ?>
        <section class="pg-hero-sec">
            <div class="container">
                <div class="row">
                    <?php if($text_title_banner){ ?><div class="col-md-6 col-lg-7 pg-hero-text" style="">
						<?php echo $text_title_banner; ?>
					</div>
					<?php } ?>

                </div>
            </div>
        </section>
        <section class="home-firstsec pg-section">
            <div class="container">
				<div class="row mb-md-4" style="background-color:#F3F4F6">
					<div class="col-md-6 p-0 img_dt">
                <div class="partner360_img">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/homepage_p360-min.jpg"
                        alt="partner360">
                </div>
			</div>
					<div class="col-md-6">
                <div class="right_sec text_sec">
					<h2 class="pg-h2" style="color: #2C2C2C;margin-bottom:15px;">
                        A More Rewarding Partner<br> Experience, Like No Other
                    </h2>
					 <div class="partner360_img img_mb">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/homepage_p360-min.jpg"
                        alt="partner360">
                </div>
                    <p class="section-content pg-paragraph">
                        It's all about <strong>bringing you the good stuff,</strong> because
                        you are a <strong>valued Agent Partner</strong> with us!
                    </p>
                    <br>
                    <p class="section-content pg-paragraph">
                        As your partner, this means giving you 360° of empowerment and support
                        in every aspect of your career. This starts with our commitment to
                        improving for you everyday, striving to deliver greater value and
                        opportunities each step of the way, to rewarding and celebrating you.
                    </p>
                    <br>
                    <a href="<?php echo home_url('partner360'); ?>" target="_blank" class="sticky-category-readmore">Partner360</a>
                </div>
						</div>

					</div>
				<div class="row mb-md-4 flex-column-reverse flex-md-row" style="background-color:#F3F4F6;">
                	<div class="col-md-6">
						<div class="text_sec">
								<h2 class="pg-h2" style="color:#2C2C2C;margin-bottom:15px;">
                    Catering Your Needs,<br>at All Stages of Your Real Estate Career
                	</h2>

						<div class="partner360_img img_mb">
						<img src="<?php echo home_url('/wp-content/uploads/2022/09/catering-your-needs.jpg'); ?>">
						</div>

                <p class="section-content pg-paragraph">
                    As an agent, you need effective property marketing solutions with
                    features that <strong>yield quality results</strong>.
                </p>
                <br>
                <p class="section-content pg-paragraph">
                    Our Agent Packages are packed full with them to get you the exposure
                    to <strong>more than 5.5 million property seekers monthly</strong>. You will also have
                    the flexibility of adding more features to your package when required,
                    to meet your greater needs.
                </p>
                <br>

                <a href="<?php echo home_url('upsell'); ?>" class="sticky-category-readmore" target="_blank">Agent Packages</a>
						</div>
					</div>

					<div class="col-md-6 pg-img p-0 img_dt">
						<div class="partner360_img">
						<img src="<?php echo home_url('/wp-content/uploads/2022/09/catering-your-needs.jpg'); ?>">
						</div>
            		</div>
				</div>
				<div class="row" style="background-color:#F3F4F6">
            <div class="col-md-6 p-0 img_dt">
				 <div class="partner360_img">
					<img src="<?php echo home_url('/wp-content/uploads/2022/10/homepage-thumbnail3.jpg'); ?>">
				</div>
			</div>
            <div class="col-md-6 home-last-item">
				<div class="text_sec">

                <h2 class="subheader pg-h2 " style="color: #2C2C2C;margin-bottom:15px;">
                    Staying Updated in this Dynamic Real Estate Industry
                </h2>
                <div class="partner360_img img_mb">
					<img src="<?php echo home_url('/wp-content/uploads/2022/10/homepage-thumbnail3.jpg'); ?>">
				</div>
                <p class="section-content pg-paragraph">
                    Surf through a library of content to get the latest
                    scoops and insights on the market, learn from industry
                    success stories, find out about the latest feature launches
                    on PropertyGuru, and more!
                </p>
                <br>
                <a href="https://www.agentofferings.propertyguru.com.sg/agentnews/"
                    class="sticky-category-readmore">Agent News</a>

				</div>
            </div>

				</div>
				</div>

        </section>
		<section class="flex-column last-section pg-cta pg-cta-faq">
            <h2 class="pg-h2">
                Check Out Our Current Offers
            </h2>
            <p class="pg-paragraph">
                 Whether you are our existing agent partner or new to
                PropertyGuru, check out our latest offers and savings
                for you.<br><br>
				<a href="<?php echo home_url('promotions'); ?>" class="white-button"
                target="_blank">Promotions</a>
            </p>
        </section>


</main><!-- #main -->
<?php get_footer();?>
