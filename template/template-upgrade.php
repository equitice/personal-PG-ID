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
		section.terms-section.pg-section .container .row .col-12 ul {
    list-style-type: revert;
			padding-left: 0px;
}
		
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
				<p class="text-center pg-paragraph">Apakah Anda memerlukan <b>lebih banyak Listing Slots Ad Kredit</b> untuk memaksimalkan eksposur listing Anda? Anda dapt segera melakukannya dengan Upgrade Paket Berlangganan Anda!
					<br>
                <p class=" text-center pg-paragraph">
					Ketika Anda upgrade Paket Berlangganan, masa berlangganan Anda akan diperpanjang hingga 12 bulan dengan harga proprata.

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

						<h2 class="text-center pg-h2">Pilih Paket Berlangganan Sesuai Kebutuhan Anda</h2>
                <h3 class="sub-heading text-center text-initial pg-h3" style="margin-bottom: 40px; color:#2c2c2c;">Berlaku mulai 09 Februari 2022</h3>
						<h2 class="pg-h2"><img style="" src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/essentials-icon.png"> Paket Berlangganan</h2>
                <?php echo do_shortcode('[table id=86]'); ?>
                
					</div>
				</div>

            </div>
            <div class="container powerup">
                <div class="row">
						<div class="col-12">

							<h2 class="pg-h2"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/powerups-icon.png"> Fitur Ekstra</h2>
						</div>
 						<div class="col-12 powerup-text">
							<p class="pg-paragraph">Wawasan Pasar oleh Rumah.com</p>
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
                <?php echo do_shortcode('[table id=85 /]'); ?>
				
		        </div>
				<div class="col-12 text-center">
               
					<a href="<?php echo home_url();?>/tanyasales/" class="red-button" style="margin-top:40px;margin-bottom:20px;">Pelajari Selengkapnya</a>
					<p>Belum yakin paket mana yang sesuai?
						<br>
					Tinggalkan kontek Anda di <a class="red-link" href="#">laman ini</a> untuk dapat kami hubungi.</p>
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

    <!-- end .saving -->

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
                             Bagaimana nilai prorata dihitung?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                             <p class="pg-paragraph">Nilai prorata yang dihitung berdasarkan
								
						(1)jumlah bulan yang telah Anda gunakan untuk paket Anda saat ini dan
						(2)harga Paket Berlangganan yang telah Anda pilih. Untuk detail lebih lanjut, silakan
							hubungi Sales Rumah.com Anda
							</p>

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
                            <p class="pg-paragraph">Paket berlangganan yang telah atau dalam proses upgrade tidak dapat di refund / dibatalkan.</p>
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
