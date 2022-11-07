<?php
/* Template Name: Resources */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;

?>
    <main class="site-main" id="post-<?php the_ID(); ?>">
        <div class="page_nav black_header_bar show-pc">
            <div class="container_subNavBar">
                <ul>
                    <li><a href="#academy">Rumah.com Academy</a></li>
                    <li><a href="#informasi">Informasi Kinerja Listing</a></li>
                    <li><a href="#pusat">Pusat Bantuan</a></li>
					<li><a href="#accountexec">Account Executive Anda</a></li></ul>
            </div>
        </div>
		<?php 
            $select_type_title = get_field('select_type_title');
            $image_title_banner = get_field('image_title_banner');
            $text_title_banner = get_field('text_title_banner');
            $text_title_banner_mb = get_field('text_title_banner_mobile');
            
        ?>
    <section class="landing-banner">
        <div class="landing-banner-container <?php if($select_type_title == "text"){echo 'text_banner';}?>">
            <p class="header-big has-text-align-center">
                <div class="resources_container_pc">

                        <?php
                        if($select_type_title == "text"){ 
                            echo $text_title_banner;
                        }
                        ?>
                    </div>
                    <div class="resources_container_mb">
                        <?php
                        if($select_type_title == "text"){ 
                            echo $text_title_banner_mb;
                        }
                        ?>
                    </div>
            </p>
        </div>
    </section>
    <section class="bg-light-blue pendukung_1">
        <p>
            Komitmen Rumah.com adalah untuk mendukung Anda sukses. Melalui serangkaian materi Pendukung, artikel, pelatihan, dan acara networking, seminar, dan penawaran bermitra, Anda akan tetap terjaga dengan trend terbaru industri dan mengambil keuntungan dari alat dan kesempatan yang akan mendukung kemajuan bisnis Anda.
        </p>
    </section>

    <section class="padding-mb">
        <div class="content-item-wrapper d-flex" id="academy">
            <div class="col-img">
                <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/Academy-resources.jpg">
            </div>
            <div class="col-text">
                <h2>Rumah.com Academy</h2>
                <span class="sub-head-muted">
                    Ingin menjadi Agen yang menguasai dunia digital?
                </span>
                <p>
                    Rumah.com Academy adalah situs yang disediakan oleh Rumah.com untuk memudahkan agen melakukan pendaftaran training secara online. Training ini sendiri bisa diikuti oleh agen yang sudah mempunyai akun AgentNet di Rumah.com
                </p>
                <div class="pg-btn"><a href="https://agentofferings.rumah.com/academy/">Hubungi Kami</a></div>
            </div>
        </div>

        <div class="content-item-wrapper d-flex" id="informasi">
            <div class="col-img">
                <img src="<?php echo home_url();?>//wp-content/uploads/2022/06/54066275_L_B2B-Sales-Playbook_.jpg">
            </div>
            <div class="col-text">
                <h2>Informasi Kinerja Listing</h2>
                <span class="sub-head-muted">
                    Listing mana yang perlu di tingkatkan? atau yang harus saya repost?
                </span>
                <p>
                    Jika Anda memiliki pertanyaan tentang listing Rumah.com sebelumnya, saat ini Anda akan mendapat jawabannya melalui fitur Informasi Kinerja Listing.<br>
                    Fitur ini, Anda akan dapat melihat angka pada Impresi, Dilihat, Melihat Nomor Telepon dan Pesan untuk membuat keputusan yang lebih baik untuk penggunaan Fitur Premium. Jika Anda merasa sudah cukup dengan jumlah pengunjung pada listing Anda, maka Anda dapat menyimpan Ad Kredit untuk listing yang membutuhkan lebih banyak!
                </p>
                <div class="pg-btn"><a href="https://bantuan.rumah.com/id/articles/2613521-informasi-kinerja-listing-anda">Coba Sekarang</a></div>
            </div>
        </div>

        <div class="content-item-wrapper d-flex" id="pusat">
            <div class="col-img">
                <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/HelpCenter.jpg">
            </div>
            <div class="col-text">
                <h2>Pusat Bantuan</h2>
                <span class="sub-head-muted">
                    Apakah Anda masih memiliki pertanyaan terkait cara memanfaatkan akun Rumah.com Anda?
                </span>
                <p>
                    Dengan tujuan memberikan pelayanan yang terbaik kepada Anda, melalui laman Bantuan Rumah.com kami telah menyediakan artikel yang dapat memberikan solusi atas permasalahan teknis atau pertanyaan anda seputar Rumah.com secara detil.
                </p>
                <div class="pg-btn"><a href="https://bantuan.rumah.com/id/">Kunjungi Sekarang</a></div>
            </div>
        </div>

        <div class="content-item-wrapper d-flex" id="accountexec">
            <div class="col-img">
                <img src="<?php echo home_url();?>/wp-content/uploads/2022/06/80163146_L.jpg">
            </div>
            <div class="col-text">
                <h2>Account Executive Anda</h2>
                <p>
                    Apakah Anda memiliki pertanyaan tentang Paket Berlangganan dan Fitur Premium kami? <i>Account Executive</i> kami siap membantu dan menjawab seluruh pertanyaan Anda.
                </p>
                <div class="pg-btn"><a href="https://www.agentofferings.rumah.com/tanyasales">Hubungi Kami</a></div>
            </div>
        </div>


    </section>

    </main><!-- #main -->
<?php get_footer();?><?php
