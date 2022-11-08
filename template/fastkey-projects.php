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
            <p class="pg-paragraph">
				 <p>
                    Menghubungkan Anda ke lebih dari 500 proyek pengembang dari luar negeri, Proyek Fastkey adalah kunci untuk <span
                    class="bold">membuka peluang pendapatan baru untuk seluruh Mitra Agen</span> melalui AgentNet.
                    <br>
                    <br>
                    Sebagai pintu gerbang terkemuka di Asia Tenggara, Anda <b>memiliki lebih dari 500 proyek para pengembang properti</b> di ujung jari Anda – siap untuk Anda presentasikan ke pelanggan Anda untuk membantu mereka <b>menemukan proyek impian berikutnya</b>, baik di dalam maupun di luar batas negara sehingga Anda dapat menjadi ahli properti di depan mata pelanggan Anda.
                    <br>
                    <br>
                    Lebih lanjut, Anda juga dapat menikmati <b>akses langsung ke komisi dan penawaran dari berbagai pengembang properti</b>, sehingga Anda dapat menelusuri dan memilih proyek pengembang properti yang ingin Anda presentasikan.
                    <br>
                    <br>
                    Proyek Fastkey adalah sebuah fitur gratis yang tersedia secara ekslusif untuk Mitra Agen Rumah.com melalui <a class="pg-link" href="https://agentnet.rumah.com/">AgentNet</a>.

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
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Image_01.png">
            </div>
            <div class="red-white-block flex-column col-sm-7 col-md-8" style="margin-left:0;">
                <h3 class="pg-h3 mb-0">
                    Akses Langsung ke Komisi dan Penawaran Berbagai Pengembang Properti
                </h3>
				<br>
                <p class="red-white-container-text pg-paragraph">
                    Buka diri Anda ke peluang pasar luar negeri dan tambahan pemasukan dengan akses langsung ke komisi dan penawaran dari berbagai pengembang properti.
                </p>
            </div>
        </div>

        <div class="flex-row red-white-container" style="width:initial;padding-left:20px!important;border:initial;">
            <div class="col-sm-5 col-md-4">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Image_02.png">
            </div>
            <div class="red-white-block flex-column col-sm-7 col-md-8" style="margin-left:0;">
                <h3 class="pg-h3 mb-0">
                   Fitur Sempurna Anda untuk Menemukan Proyek Impian Berikutnya dari Pelanggan Anda
                </h3>
				<br>
                <p class="red-white-container-text pg-paragraph">
                   Bersiaplah untuk mengakses rangkaian informasi proyek yang komprehensif dan gunakan mereka sebagai alat jualan yang selalu siap untuk menawarkan berbagai proyek ke pelanggan Anda, dan jadilah ahli pasar properti terpercaya.

Melalui Proyek Fastkey, Anda dapat mengakses ke:
					</p>
					<ul class="pg-paragraph re-ul" style="padding-left:initial;max-width:initial;">
                        <li>
                            Komisi yang tersedia
                        </li>
                        <li>
                            Gambaran proyek dan harga
                        </li>
                        <li>
                            Lokasi pengembang, floor plans dan unit  
                        </li>
						<li>
                            Kontak pengembang properti dan kantor agen
                        </li>
                        <li>
                            Brosur elektronik
                        </li>
                    </ul>
            </div>
        </div>

        <div class="flex-row red-white-container" style="width:initial;padding-left:20px!important;border:initial;">
            <div class="col-sm-5 col-md-4">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Image_03.png" >
            </div>
            <div class="red-white-block flex-column col-sm-7 col-md-8" style="margin-left:0;">
                <h3 class="pg-h3 mb-0">
                    Buka Diri Anda ke Berbagai Peluang & Pemasukan, Dalam dan Luar Indonesia
                </h3>
				<br>
                <p class="red-white-container-text pg-paragraph">
                    Jelajahi lebh dari 500 proyek pengembang properti di luar negeri. Jangan biarkan Anda melewatkan kesempatan yang sangat menarik dan proyek pengembang yang menjanjikan di dalam dan luar Indonesia!
                </p>
            </div>
        </div>
		</div>
    </section>

    <section class="padding ml-0 custom-slider" style="align-items: center; background-color: #FAFAFA;">
		<div class="row text-center">
			<div class="col-12">
				<h2 class="pg-h2" >
            		Proyek FastKey di AgentNet Anda
        		</h2>
			</div>


        <div class="col-lg-8 offset-lg-2">
			<div class="oacarousel">

            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Carousel_01.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    Akses Menjual 500++ properti luar negeri d <span class="red-link">‘FastKey Projects’</span> melalui AgentNet.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Carousel_02.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    Jelajahi lebih<span class="red-link">dari 500 proyek</span> dari satu tempat.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Carousel_03.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    Klik proyek dan dapatkan<span class="red-link"> akses instan ke segudang informasi</span>, tepat diujung jari Anda.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Carousel_04.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    Kilk <span class="red-link">‘Quick Links’</span> untuk informasi pengembangan yang lebih komprehensif.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Carousel_05.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    <span class="red-link">Temukan fasilitas</span> di sekitar properti.
                </div>
            </div>
            <div class="single">
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/FastKey_Carousel_06.gif">
                <div class="text_below pg-h3" style="text-align: center;">
                    <span class="red-link">Hubungi pengembang</span> dan mulailah berjualan hari ini.
                </div>
            </div>
        </div><br><br>
			<a href="https://agentnet.propertyguru.com.sg/fastkey" target="_blank" class="red-button">
            Mulai Menjelajah Proyek Luar Negeri
        </a>
			</div>

			</div>
    </section>
<!-- FAQ Start -->
	<section class="faq-accord" style="background-color: #f2f2f2;padding-top: 80px;padding-bottom:80px;">
        <div class="container">
			<div class="row">
				<div class="col-md-4">
                <h2 class="pg-h2">Pertanyaan yang sering ditanyakan</h2>
                <p class="" style="font-family:'Poppins',sans-serif; font-weight: 500">Temukan informasi lebih lanjut melalui <a
                        href="https://bantuan.rumah.com/id/" target="_blank" class="red-link" style="font-family:'Poppins',sans-serif; font-weight: 500">Artikel Bantuan</a></p>
					<br />
				<p class="" style="font-family:'Poppins',sans-serif; font-weight: 500">	<a href="https://bantuan.rumah.com/id/articles/4205930-tentang-proyek-fastkey" class="red-link" target="_blank">Tentang Proyek Fastkey</a><br />
					<a href="https://bantuan.rumah.com/id/articles/4205993-cara-menggunakan-menu-proyek-fastkey" class="red-link" target="_blank"> Bagaimana Menavigasikan Proyek Fastkey</a></p>
					</div>
				<div class="accordion-wrapper offset-md-1 col-md-7 offset-lg-2 col-lg-6">
            <div class="accordion" id="homeloanaccord" style="max-width: fit-content">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apa saja tipe proyek pengembangan yang di listing di Proyek Fastkey?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                             <p class="pg-paragraph">Proyek Fastkey mencakup proyek properti sebelum peluncuran hingga siap untuk ditempati, baik rumah tapak maupun komersial.</p>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apakah saya dapat mengakses Proyek Fastkey?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph" style="padding-top:20px">Ya! Selama Anda adalah pelanggan agen aktif, Anda dapat mengakses Proyek Fastkey di AgentNet</p>
								 
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="margin-bottom: auto;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Apakah saya perlu membayar untuk dapat mengakses Proyek Fastkey?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-parent="#homeloanaccord">
                        <div class="accordion-body">
                            <p class="pg-paragraph" style="padding-top:20px">Tidak. Proyek Fastkey gratis untuk seluruh pelanggan agen aktif Rumah.com
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
	<section class="flex-column last-section pg-cta pg-cta-faq">
		<h2 class="pg-h2">
			Untuk pertanyaan lainnya, dapat melihat di Pusat Bantuan. Atau, hubungi Customer Service kami di <a href="mailto:customersevice@rumah.com" target="_self"><strong>customersevice@rumah.com</strong></a>
		</h2>
	</section>
	<section class="poweredby container">
		<div class="row">
			<div class="col-12">
				<p class="pg-paragraph text-center" style="padding:20px;">
					Dipersembahkan oleh PropertyGuru FastKey
				</p>
			</div>
		</div>
	</section>

</main><!-- #main -->
<?php get_footer();?>
