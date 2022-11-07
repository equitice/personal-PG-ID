<?php
/* Template Name: Premium Features */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;

?>
    <main class="site-main" id="post-<?php the_ID(); ?>">
		<?php 
			$select_type_title = get_field('select_type_title');
            $image_title_banner = get_field('image_title_banner');
            $text_title_banner = get_field('text_title_banner');
            $text_title_banner_mb = get_field('text_title_banner_mobile');
		?>
		
    <section class="content1">
        <div class="content1_container" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/06/premiumFeaturesLandingBanner.png')" alt="" <?php if($select_type_title=="text"){echo 'text_banner';}?>>
            <h1 class="topBanner_textDescription">
					<div class="premiumfeature_container_pc">
														<?php
														if($select_type_title == "text"){ 
															echo $text_title_banner;
														}
														?>
													</div>
													<div class="premiumfeature_container_mb">
														<?php
															if($select_type_title == "text"){ 
															echo $text_title_banner_mb;
														}
														?>
													</div>
			</h1>
        </div>
    </section>


    <section class="content2">
        <div class="content2_container">
            <div class="content2_text">Untuk terus selaras dengan pengubahan di pasar properti dan kebutuhan bisnis Anda, kami menawarkan
                <span class="content2_linebreak1"> serangkaian fitur premium yang akan membantu Anda untuk mengoptimalkan jangkauan Anda akan</span>
                <span class="content2_linebreak2"> target pasar dan memperoleh keunggulan tambahan. Fitur premium ini tersedia secara terpisah (ala-</span>
                carte), di waktu kapanpun dalam periode berlangganan Anda dengan Rumah.com.</div>
        </div>
    </section>


    <section class="content3">
        <div class="content3_container container">
                <div class="content3_container_left">
                    <h3>Produk Spesialis</h3>
                    <p class="content3_text1">
                    Salah satu fitur premium paling populer di kalangan agen,<span class="content3_linebreak1">Produk Spesialis memposisikan Anda secara efektif sebagai</span> go-to-agent, di antara pemilik dan pencari properti, pada hasil
                    <span class="content3_linebreak2"> pencarian.</span>
                    <span class="content3_linebreak6">Manfaat dari Produk Spesialis:</span>
                    </p>
                    <ul class="content3_text2">
                            <li>Profil yang di ekspos - profil dan detail kontak Anda akan
                                <span class="content3_linebreak3">ditampilkan secara jelas pada halaman detail proyek dan /</span> atau pencarian yang relevan, untuk menarik perhatian calon
                                <span class="content3_linebreak4"> pembeli dan penjual. Slot yang tersedia sangat terbatas,</span> Produk Spesialis tersedia untuk dibeli menurut jenis
                                <span class="content3_linebreak5"> properti, Bahasa, dan area.</span>
                            </li>        
                    </ul>
                </div>

                <div class="content3_container_right">
                    <div class="content3_container_right_slick">
                        <div class="content3_slick_item"><img class="content3_slickItem1" src="<?php echo home_url();?>/wp-content/uploads/2022/06/04specialistagent.png" alt=""></div>
                        <div class="content3_slick_item"><img class="content3_slickItem1" src="<?php echo home_url();?>/wp-content/uploads/2022/06/11-spesialis_pf.png" alt=""></div>
                    </div>   
                </div>
            </div>      
       
    </section>

    <section class="content4">
        <div class="content4_container">
            <div class="content4_container_left">
                <img class="content4_img" src="<?php echo home_url();?>/wp-content/uploads/2022/06/NEW-Screenshots-Illustration_v2-IDLocalisedv2_pf.png" alt="">
            </div>
            <div class="content4_container_right">
                <h3>
                    Exclusive Listing
                </h3>
                <p>Exclusive Listing adalah pilihan terbaik bagi agen yang ingin mengamankan
                    <span class="content4_linebreak1">eksposur yang pasti untuk mengarahkan calon pembeli ke listing yang Anda</span>miliki.
                </p>
                <p>Selain memiliki label  <b>EXCLUSIVE</b>, listing Anda akan memiliki peringkat teratas
                    <span class="content4_linebreak3"> dalam hasil pencarian selama sebulan! Listing juga akan memiliki tampilan</span> 
                    yang berbeda sehingga dapat lebih menarik calon pembeli potensial. 
                </p>
                <p>Terbatas untuk 6 slot per area, properti, dan tipe listing, Exclusive Listing
                    <span class="content4_linebreak2"> menjadikan listing Anda sebagai pusat perhatian para pencari properti.

                    </p>

            </div>
        </div>
        <div class="content4_container_is_mb">
            <div class="content4_container_left">
                <img class="content4_img" src="<?php echo home_url();?>/wp-content/uploads/2022/06/NEW-Screenshots-Illustration_v2-IDLocalisedv2_pf.png" alt="">
            </div>
            <div class="content4_container_right">
                <h3>
                    Exclusive Listing
                </h3>
                <p>Exclusive Listing adalah pilihan terbaik bagi agen yang ingin mengamankan
                    <span class="content4_linebreak1">eksposur yang pasti untuk mengarahkan calon pembeli ke listing yang Anda</span>miliki.
                </p>
                <p>Terbatas untuk 6 slot per area, properti, dan tipe listing, Exclusive Listing
                    <span class="content4_linebreak2"> menjadikan listing Anda sebagai pusat perhatian para pencari properti.

                    </p>
                <p>Selain memiliki label  <b>EXCLUSIVE</b>, listing Anda akan memiliki peringkat teratas
                    <span class="content4_linebreak3"> dalam hasil pencarian selama sebulan! Listing juga akan memiliki tampilan</span> 
                    yang berbeda sehingga dapat lebih menarik calon pembeli potensial. 
                </p>
            </div>
        </div>
    </section>
    <section class="content5">
        <div class="content5_container">
            <h3>
            Pertanyaan yang sering ditanyakan
            </h3>
            <p class="content5_text">
            Apakah saya perlu Paket Berlangganan Rumah.com untuk membeli fitur premium ini ?<span class="content5_linebreak">
            Ya, agen perlu membeli Paket Berlangganan Rumah.com terlebih dahulu.</span>
            </p>
        </div>

    </section>
    <section class="content6">
        <div class="content6_container" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/06/premiumFeaturesLastBanner.png')" alt="">
            <p>Butuh rekomendasi Fitur<span class="content6_linebreak">Premium yang sesuai atau</span> ada pertanyaan lainnya ?
</p>
            <a href="<?php echo home_url(promotions);?>" class="content6_button">Hubungi Kami Sekarang</a>
        </div>
    </section>





    </main><!-- #main -->
<?php get_footer();?><?php
