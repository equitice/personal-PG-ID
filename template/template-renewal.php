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
		section.terms-section.pg-section .container .row .col-12 ul {
    list-style-type: revert;
			padding-left: 0px;
}
		
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
                    <?php if($text_title_banner){ ?><div class="col-md-7 pg-hero-text" style="">
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
                <p class=" text-center pg-paragraph">Terimah kasih telah memilih Rumah.com sebagai mitra pamasaran properti Anda.Sebagai <br> platform terkemuka di Indonesia, kami tetap berkomitmen untuk memberikan Anda penawaran dan hasil terbaik untuk bisnis properti Anda.
					<p class="text-center pg-paragraph">
						Dengan memperbarui akun Anda, Anda akan mendapatkan:
				</p>
					
					

            </div>
					<div class="col-md-10" style="display:flex; justify-content:space-around; max-width: 100%; text-align: center; margin:auto;">
					<div class="col-md-6" style="max-width: 25%; background-color: #ffffff; padding: 15px;" >
                    <img src="https://propertyguidst.wpengine.com/wp-content/uploads/2022/11/Home_Icon_01.png">
                    <p>Lebih dari 3 juta pencari properti setiap bulannya</p>
                </div>
					<div class="col-md-6" style="max-width: 25%; background-color: #ffffff; padding: 15px;">
                    <img src="https://propertyguidst.wpengine.com/wp-content/uploads/2022/11/Home_Icon_02.png">
                    <p>Lebih dari 12,000 agen merasakan manfaat berikan di Rumah.com</p>
                </div>
					<div class="col-md-6" style="max-width: 25%; background-color: #ffffff; padding: 15px;">
                    <img src="https://propertyguidst.wpengine.com/wp-content/uploads/2022/11/Home_Icon_03.png">
                    <p>Total leads (tahun 2020-2021)</p>
                </div>
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
						<h2 class="text-center pg-h2">Pilih Paket Berlangganan Sesuai Kebutuhan Anda</h2>
                <h3 class="sub-heading text-center text-initial pg-h3" style="margin-bottom: 40px">Berlaku mulai 09 Februari 2022</h3>
						<h2 class="pg-h2"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/essentials-icon.png"> Paket Berlangganan</h2>
                <?php echo do_shortcode('[table id=86]'); ?>
               
					</div>
				</div>

            </div>
            <div class="container powerup" style="margin-bottom: 20px;">
                <div class="row">
						<div class="col-12">

							<h2 class="pg-h2"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/powerups-icon.png"> Fitur Ekstra</h2>
						</div>
 						<div class="col-12 powerup-text">
							<p class="pg-paragraph">Wawasan Pasar oleh Rumah.com</p>
						</div>
					<div class="col-12">
						<?php echo do_shortcode('[table id=83 /]'); ?>
					</div>



                
            </div>
				</div>

            <div class="container value-add" style="margin-bottom: 0px">
				<div class="row">
					<div class="col-12">
						<h2 class="pg-h2"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/value-add-icon.png"> Nilai Tambah</h2>
					</div>


                

                </div>
				<div class="col-12">
                <?php echo do_shortcode('[table id=85 /]'); ?>
		        </div>
                	<div class="col-12 text-center">
               
					<a href="<?php echo home_url();?>/tanyasales/" class="red-button" style="margin-top:40px;margin-bottom:20px;">Pelajari Selengkapnya</a>
					<p>Belum yakin paket mana yang sesuai?<br>
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
                    <p class="pg-paragraph text-sm-left">Hubungi <a class="red-link" href="#">disini</a> untuk memperbarui akun Anda hari ini</p>					
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
                <h2 class="pg-h2">Pertanyaan yang sering ditanyakan</h2>
               
					</div>
				<div class="accordion-wrapper offset-md-1 col-md-7 offset-lg-1 col-lg-6">
            <div class="accordion" id="homeloanaccord" style="max-width: fit-content">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button d-flex align-items-center" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Kapan saya dapat memperbaharui akun saya?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                             <p class="pg-paragraph">Memperbarui akun dapat dilakukan selama periode pembaruan Anda, yaitu 1 bulan sebelum masa aktif akun Anda berakhir dan pada bulan akun Anda berakhir. Misalnya, jika akun Anda berakhir pada 10 Oktober 2020, maka Anda dapat memperbarui akun antara 1 Sep 2020 hingga 31 Oktober 2020</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apakah akun yang sudah di upgrade dapat di refund?
						</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph">Paket Berlangganan yang telah ataupun dalam proses perpanjangan tidak dapat di refund atau dibatalkan.</p>
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
