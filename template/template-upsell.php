<?php
/* Template Name: Upsell | Agent Offerings SG */
get_header();
?>
<main id="primary" class="site-main upsell v2">

	<?php if (get_field('banner_image_desktop')) {
        $desktop_banner = get_field('banner_image_desktop'); ?>
    <style>
    .pg-hero-sec {
		background-image: url(<?php echo $desktop_banner; ?>);
		background-position: right
    }
		.pg-hero-sec h1{color:#fff;}
		img {
  		border-style: none;
		}
		h2 img{width:5%;}
		
		section.terms-section.pg-section .container .row .col-12 ul {
    list-style-type: revert;
			padding-left: 0px;
}
		.pg-h2{
			font-family: 'Poppins', sans-serif;
    font-weight: bold;
    font-size: 30px;
    line-height: 30px;
		}
    </style>
    <?php }?>
    <?php if (get_field('banner_image_mobile')) {
        $mobile_banner = get_field('banner_image_mobile'); ?>
    <style>
    @media only screen and (max-width: 767px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
        }
		.pg-hero-sec .pg-hero-text{justify-content:flex-end;padding-bottom:25px;padding-left:30px;}
    }
		@media only screen and (max-width: 575px) {
			.pg-hero-sec .pg-hero-text{max-width:330px;}
			h2 img{width:27px;}
		}
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('banner_title');
        ?>


		<!-- Navigation -->


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

    <section class="featured-sec" style="padding-top:0px;padding-bottom:0px;">
		<div class="breadcrumbs container">

		<ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList" style="margin:0px"><li><a href="<?php echo site_url(); ?>"><i class="pg-icon-home"></i></a>
			<meta itemprop="position" content="1"></li><li>Paket Berlangganan</li><li class="active">Subscribe</li>

		</ol>

		</div>
        <div class="container">
			<div class="row">
				<div class="col">

            <div class="content">
                <p class=" text-center pg-paragraph pg-intro">Persiapkan kegiatan pemasaran properti Anda secara mudah dengan bermita dengan Rumah.com,
					<br>
				platform terkuma di Indonesia.Anda akan mendapatakan akses ke hingga 3 juta pancari properti setiap
		
				<br>
				bulan,mendapatkan leads berkualitas yang Anda butuhkan untuk bisnis Anda.</p>


            </div>
			</div>

			</div>
        </div>
    </section>
    <!-- end .featured-sec -->

    <section class="choose-package pg-section">
            <div class="container" style="margin-bottom: 32px;">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center pg-h2">Pilih Paket Berlangganan Sesuai Kebutuhan Anda</h2>
                <h3 class="sub-heading text-center text-initial pg-h3" style="color: #2c2c2c; margin-bottom: 20px;">Berlaku mulai 09 Februari 2022</h3>
					</div>
					
						<div class="col-12">

							<h2 class="pg-h2"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/essentials-icon.png"> Paket Berlangganan</h2>



                <?php echo do_shortcode('[table id=86]');?>
                
								</div>
					</div>
				</div>


            <div class="container powerup">
                <div class="row">
						<div class="col-12">

							<h2 class="pg-h2"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/powerups-icon.png"> Fitur Ekstra</h2>
						</div>
 						
					<div class="col-12">
						<?php echo do_shortcode('[table id=83 /]'); ?>
					</div>



                
            </div>
				</div>
            <div class="container value-add" style="margin-bottom:0px;">
				<div class="row">
					<div class="col-12">
						<h2 class="pg-h2"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/value-add-icon.png"> Nilai Tambah</h2>
					</div>

                

                </div>
				<div class="col-12">
                <?php echo do_shortcode('[table id=85/]');?>
		        </div>
					<div class="col-12 text-center">
               
					<a href="<?php echo home_url();?>/tanyasales/" class="red-button" style="margin-top:40px;margin-bottom:20px;">Pelajari Selengkapnya</a>
					<p>Belum yakin paket mana yang sesuai?
						<br>
					Tinggalkan kontak Anda di <a class="red-link" href="#">laman ini</a> untuk dapat kami hubungi.</p>
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
                    <p class="pg-paragraph text-sm-left">Hubungi 
						<a class="red-link" href="#">disini</a> 
						untuk memperbarui akun Anda hari ini</p>					
                </div>
				</div>

			</div>
	
            </div>
        </div>
    </section>




	<section class="faq-accord pg-section" style="background-color: #f2f2f2;">
        <div class="container">
			<div class="row">
				<div class="col-md-4">
                <h2 class="pg-h2">Pertanyaan yang sering ditanyakan</h2>
               

					</div>
				<div class="accordian-wrapper offset-md-1 col-md-7 offset-lg-2 col-lg-6">
            <div class="accordion" id="homeloanaccord" style="max-width: fit-content">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apakah Paket Berlangganan dapat saya batalkan dan mendapatkan refund?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph">Paket Berlangganan tidak dapat di refund ketika sudah diaktifkan</p>


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apakah Paket Berlangganan dapat dipindahkan ke orang lain?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph" style="padding-top:15px">Pemindahan kepemilikan akun tidak dapat dilakukan untuk paket apapun.</p>
                        </div>
                    </div>
                </div>
               
            </div>
			</div>
			</div>

        </div>
    </section>
<!-- T&C Start -->
	<section class="terms-section pg-section" style="background-color: #484848;">
  <div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="">
						Terms and Conditions
					</h2>
					<ul>
						<li>Seluruh fitur yang tergabung dengan paket agen berlaku selama 12 bulan, mulai dari tanggal aktivasi akun</li>
						<li>Setiap fitur yang tidak digunakan akan hangus setelah masa aktif akun Anda berakhir</li>
						<li>Paket agen yang dibeli tidak dapat dikembalikan (refund),tidak dapat ditransfer ke agen / permilik lain, dan tidak dapat ditukar dengan produk lain</li>
						<li>Syarat dan ketentuan standar lainnya berlaku</li>
					</ul>
				</div>
	  </div>
		</div>
	</section>
<!-- T&C End -->

</main><!-- #main -->
<?php get_footer();?>
