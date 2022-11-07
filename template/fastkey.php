<?php
/* Template Name: FastKey */
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
        <section class="landing-banner red-hero">
            <div class="container text_banner<?php if($select_type_title=="text"){echo 'text_banner';}?>">
                <div class="container_custom_banner desktop_none_left">
													<div class="fastkey_container_pc">
														<?php
														if($select_type_title == "text"){ 
															echo $text_title_banner;
														}
														?>
													</div>
													<div class="fastkey_container_mb">
														<?php
															if($select_type_title == "text"){ 
															echo $text_title_banner_mb;
														}
														?>
													</div>
                    </div>
                    <div class="container_custom_banner desktop_none_right">
                    <img class="headBannerImage" src="<?php echo home_url();?>/wp-content/uploads/2022/06/kv-LP.png">
                </div>
            </div>
        </section>
        
        <section class="fastkey-section-1 container">
            <div class="text-wrapper">
                <p>
                    Menghubungkan Anda ke lebih dari 500 proyek pengembang dari luar negeri, Proyek Fastkey adalah kunci untuk <b>membuka peluang pendapatan baru untuk seluruh Mitra Agen</b> melalui AgentNet.
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
        <section class="light-red-background">
                <div class="flex-row red-white-container">
                <div class="img-left">
                    <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/Artboard-56.png">
                </div>
                <div class="flex-column">
                <span class="red-white-container-heading">
                    Akses Langsung ke Komisi dan Penawaran Berbagai Pengembang Properti
                </span>
                    <span class="red-white-container-text">
                    Buka diri Anda ke peluang pasar luar negeri dan tambahan pemasukan dengan akses langsung ke komisi dan penawaran dari berbagai pengembang properti.
                </span>
                </div>
            </div>

            <div class="flex-row red-white-container">
                <div class="img-left">
                    <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/Artboard-57.png">
                </div>
                <div class="flex-column">
                <span class="red-white-container-heading">
                    Fitur Sempurna Anda untuk Menemukan Proyek Impian Berikutnya dari Pelanggan Anda
                </span>
                <span class="red-white-container-text">
                    Bersiaplah untuk mengakses rangkaian informasi proyek yang komprehensif dan gunakan mereka sebagai alat jualan yang selalu siap untuk menawarkan berbagai proyek ke pelanggan Anda, dan jadilah ahli pasar properti terpercaya.
                    <br><br>
                    Melalui Proyek Fastkey, Anda dapat mengakses ke:
                </span>
                    <div class="red-white-container-text list-sec">
                        <ul>
                            <li>
                                Komisi yang tersedia
                            </li>
                            <li>
                                Gambaran proyek dan harga
                            </li>
                            <li>
                                Lokasi pengembang, <i>floor plans</i> dan unit
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Kontak pengembang properti dan kantor agen
                            </li>
                            <li>
                                Brosur elektronik
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex-row red-white-container">
                <div class="img-left">
                    <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/kv5-rumah.png">
                </div>
                <div class="flex-column">
                <span class="red-white-container-heading">
                    Buka Diri Anda ke Berbagai Peluang & Pemasukan, Dalam dan Luar Indonesia
                </span>
                    <span class="red-white-container-text">
                    Jelajahi lebh dari 500 proyek pengembang properti di luar negeri. Jangan biarkan Anda melewatkan kesempatan yang sangat menarik dan proyek pengembang yang menjanjikan di dalam dan luar Indonesia!
                </span>
                </div>
            </div>
        </section>
        <section class="flex-column ml-0 custom-slider">

            <span class="section-header has-text-align-center">
                Proyek FastKey di AgentNet Anda
            </span>

           <div class="container">
               <div class="oacarousel">

                   <div class="repeated">
                       <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/e5523b_6acaa0fb23224029a8951361c3348c20_mv2.gif">
                      <div class="text_below">
                           Akses Menjual 500++ properti luar negeri di <span class="dark-red-text">‘Proyek FastKey’</span> melalui AgentNet.
                       </div>
                   </div>

                   <div class="repeated">
                       <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/e5523b_649d4f551f9b40fcb7040d72e243a2a3_mv2.gif">
                      <div class="text_below">
                           Jelajahi lebih <span class="dark-red-text">dari 500 proyek</span> dari satu tempat.

                       </div>
                   </div>

                   <div class="repeated">
                       <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/e5523b_a7a2957f0b50438780d815d51415c843_mv2.gif">
                      <div class="text_below">
                           Klik proyek dan dapatkan <span class="dark-red-text">akses instan ke segudang informasi</span>, tepat diujung jari Anda.
                       </div>
                   </div>

                   <div class="repeated">
                       <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/e5523b_a8c5b4f4338f434faf9cc9443fe5aa3a_mv2.gif">
                      <div class="text_below">
                           Klik <span class="dark-red-text">‘Quick Links’</span> untuk informasi pengembangan yang lebih komprehensif.
                       </div>
                   </div>

                   <div class="repeated">
                       <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/e5523b_3fb7f4cf2ba24dce9a4bace1738cf6ca_mv2.gif">
                      <div class="text_below">
                           <span class="dark-red-text">Temukan fasilitas</span> di sekitar properti.
                       </div>
                   </div>

                   <div class="repeated">
                       <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/e5523b_3e279635aea34a059059b453adc0f9ae_mv2.gif">
                      <div class="text_below">
                           <span class="dark-red-text">Hubungi pengembang</span> dan mulailah berjualan hari ini.
                       </div>
                   </div>
               </div>
           </div>
            <a href="https://agentnet.rumah.com/ex_login?redirect=/fastkey" target="_blank" class="pg-btn2">Mulai Menjelajah Proyek Luar Negeri</a>
        </section>

        <section class="flex-column ml-0 faq">
            <span class="section-header has-text-align-center">
                Pertanyaan yang sering ditanyakan
            </span>
            <div class="accordion-faq">

                <div class="accordion-item">
                    <div class="accordion">
                        Apa saja tipe proyek pengembangan yang di listing di Proyek Fastkey?
                        <span class="accordion-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"></svg></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                            Proyek Fastkey mencakup proyek properti sebelum peluncuran hingga siap untuk ditempati, baik rumah tapak maupun komersial.
                        </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion">
                        Apakah saya dapat mengakses Proyek Fastkey?
                        <span class="accordion-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"></svg></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                            Ya! Selama Anda adalah pelanggan agen aktif, Anda dapat mengakses Proyek Fastkey di AgentNet
                        </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion">
                        Apakah saya perlu membayar untuk dapat mengakses Proyek Fastkey?
                        <span class="accordion-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"></svg></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                            Tidak. Proyek Fastkey gratis untuk seluruh pelanggan agen aktif Rumah.com
                        </p>
                    </div>
                </div>



            </div>

            <div class="more-info has-text-align-center">
             <span>
                Temukan informasi lebih lanjut melalui Artikel Bantuan:
            </span>
                <ul>
                    <li>
                        <a href="http://bantuan.rumah.com/id/articles/4205930-tentang-proyek-fastkey" target="_blank" class="dark-red-text">Tentang Proyek Fastkey</a>
                    </li>
                    <li>
                        <a href="http://bantuan.rumah.com/id/articles/4205993-cara-menggunakan-menu-proyek-fastkey" target="_blank" class="dark-red-text">Bagaimana Menavigasikan Proyek Fastkey</a>
                    </li>
                </ul>
                <hr>
                <span>
                    Untuk pertanyaan lainnya, dapat melihat di <a href="http://bantuan.rumah.com/id/" class="dark-red-text">Pusat Bantuan</a>.
            </span>
                Atau, hubungi Customer Service kami di <a href="mailto:customersevice@rumah.com" target="_self" class="dark-red-text">customersevice@rumah.com</a>.
            </span>
            </div>

        </section>

        <section class="flex-row padding-powered-by ml-0" style="justify-content: center; background-color: #B61D22;">
            <div>
            <span class="text-white">
                Dipersembahkan oleh
            </span>
            </div>
            <div>
                <img width="150px" src="<?php echo home_url();?>/wp-content/uploads/2022/06/property-guru-fastkey-logo-white.png">
            </div>
        </section>
        <div class="show-mb">

        </div>

        <div class="show-pc">

        </div>


    </main><!-- #main -->
<?php get_footer();?><?php
