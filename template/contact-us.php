<?php
/* Template Name: Contact Us */
get_header();

?>
<main id="primary" class="site-main contact-us">
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
		@media only screen and (max-width: 1310px) {
		.pg-hero-sec {
            	background-position:right -500px top;
        	}
	}
		@media only screen and (max-width: 1020px) {
		.pg-hero-sec {
            	background-position:right -600px top;
        	}
	}

    @media only screen and (max-width: 767px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
			   	background-position:right 0px top;
        }
		.pg-hero-sec h1 {color:#fff!important;}
		.pg-hero-sec .pg-hero-text{padding-top:300px;}
    }
			@media only screen and (max-width: 600px) {
		.pg-hero-sec {
            	background-position:right 0px top;
        	}
			.pg-hero-sec h1 {color:#2c2c2c!important;text-align:left!important;padding-left:30px;}
	}
		@media only screen and (max-width: 595px) {
		.pg-hero-sec {
            	background-position:right 0px top;
        	}
	}
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('banner_title');
        ?>
        <section class="pg-hero-sec pg-h1-has-shadow">
            <div class="container">
                <div class="row">
                    <?php if($text_title_banner){ ?><div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5 pg-hero-text" style="">
						<?php echo $text_title_banner; ?>
					</div>
					<?php } ?>

                </div>
            </div>
        </section>


<!-- 	Breadcrumbs	 -->
		<div class="breadcrumbs container">

		<ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList"><li><a href="<?php echo site_url(); ?>"><i class="pg-icon-home"></i></a>
			<meta itemprop="position" content="1"></li><li >Contact Us</li><li class="active">Customer Care</li>

		</ol>

		</div>

    <div class="content_sec">
        <div class="container">
			<div class="row">
				<div class="col-md-6">
					 <p class="pg-h3" style="padding-bottom:20px;">Send us a message by completing the form below and we'll get back to you within 2-3 working days.</p>
				</div>
			</div>
			<div class="row form_map">
				<div class="col-md-6 contact_form">

                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                </div>
                <div class="col-md-6 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7633981684817!2d103.89208661744382!3d1.3175917000000084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19d3f9756d5b%3A0x9ba7e78434d96fac!2sPaya%20Lebar%20Quarter%20-%20PLQ%202!5e0!3m2!1sen!2ssg!4v1649913554103!5m2!1sen!2ssg"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="contact_info">
                        <div class="single_info" id="location">
                            <div class="info_img">
                                <img style="width:15px;"
                                    src="<?php echo home_url('/wp-content/uploads/2022/09/location.png'); ?>">
                            </div>
                            <p class="pg-paragraph">
                                <strong>PropertyGuru</strong>
                                <br />
                                Paya Lebar Quarter, 1 Paya Lebar Link,
                                <br />
                                #12-01/04, Singapore 408533
                            </p>
                        </div>
                        <div class="single_info" id="email">
                            <div class="info_img">
                                <img
                                    src="<?php echo home_url('/wp-content/uploads/2022/09/email.png'); ?>">
                            </div>
                            <p><a href="<?php echo site_url('mailto:custcare@propertyguru.com.sg')?>" class="masked-link">custcare@propertyguru.com.sg</a></p>
                        </div>
                        <div class="single_info" id="phone">
                            <div class="info_img">
                                <img style="width:17px;"
                                    src="<?php echo home_url('/wp-content/uploads/2022/09/telephone.png'); ?>">
                            </div>
                            <p>+65 6238 5971</p>
                        </div>
<!--                         <div class="single_info" id="youtube">
                            <div class="info_img">
                                <img
                                    src="<?php echo home_url('/wp-content/uploads/2022/04/pgsg_academyrevamp_2_0-49.webp'); ?>">
                            </div>
                            <p><a href="https://www.youtube.com/channel/UCvrH2UtXdRxL9YhHKRQtPeA">PropertyGuru
                                    Academy</a></p>
                        </div> -->
                    </div>
                </div>
            </div>
					</div>

			</div>

        <section class="flex-column last-section pg-cta pg-cta-faq">
            <h2 class="pg-h2">
                Need additional support?
            </h2>
            <p class="pg-paragraph">
				Read our <a href="https://help.propertyguru.com.sg/en/">Help Articles</a> to get instant answers to the most common questions.
            </p>

        </section>
</main>
<?php get_footer();?>
