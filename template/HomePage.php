<?php
/* Template Name: Home */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;

?>
<main id="primary" class="site-main">
    <?php 
            $select_type_title = get_field('select_type_title');
            $image_title_banner = get_field('image_title_banner');
            $text_title_banner = get_field('text_title_banner');
            $text_title_banner_mb = get_field('text_title_banner_mobile');
            
        ?>
    <div class="container_1"
        style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/06/Homepage_Banner.png')" alt="">
        <div class="headBanner_text_description <?php if($select_type_title == "text"){echo 'text_banner';}?>">
            <h1>
                <div class="homePage_container_pc">
                    <?php
                    if($select_type_title == "text"){ 
                        echo $text_title_banner;
                    }
                    ?>
                </div>
                <div class="homePage_container_mb">
                    <?php
                    if($select_type_title == "text"){ 
                        echo $text_title_banner_mb;
                    }
                    ?>
                </div>
            </h1>
        </div>

    </div>


    <div class="container_2">
        <div class="container_2_text_description">
            <p>
                Leads bertambah, hasil lebih baik. Sebagai pemimpin pasar dan pemenang<span
                    class="linebreak2">penghargaan inovasi memungkinkan agen profesional dengan eksposur,</span><span
                    class="linebreak3">insight, dan solusi yang Anda cari untuk mencapai tujuan bisnis Anda.</span>
            </p>
        </div>
        <!-- <div class="container_2_3box">
            <div class="container_2_box1 boxforimg">
                <img class="box1_img1" src="<?php echo home_url('/wp-content/uploads/2022/11/Home_Icon_01-1.png');?>"
                    alt="">
                <span class="container_2_box1_span1 minitext"><b>Lebih dari 3 juta pencari</b></span>
                <span class="container_2_box1_span2 minitext"><b>properti</b> setiap bulannya</span>

            </div>
            <div class="container_2_box2 boxforimg">
                <img class="box2_img1" src="<?php echo home_url('/wp-content/uploads/2022/11/Home_Icon_02-1.png');?>"
                    alt="">
                <span class="container_2_box2_span1 minitext"><b>Lebih dari 12,000 agen</b></span>
                <span class="container_2_box2_span2 minitext">merasakan manfaat beriklan di Rumah.com</span>
            </div>
            <div class="container_2_box3 boxforimg">
                <img class="box3_img1" src="<?php echo home_url('/wp-content/uploads/2022/11/Home_Icon_03-1.png');?>"
                    alt="">
                <span class="container_2_box3_span1 minitext"><b>Total leads</b></span>
                <span class="container_2_box3_span2 minitext">(tahun 2020 - 2021)</span>
            </div>
        </div> -->
        <div class="boxforimgs my-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12 boxforimg mb-5 mb-md-0">
                        <div class="inner d-flex flex-column justify-content-center mx-auto">
                            <img class="box_img mx-auto"
                                src="<?php echo home_url('/wp-content/uploads/2022/11/Home_Icon_01-1.png');?>" alt="">
                            <span class="minitext text-center mt-3"><b>Lebih dari 3 juta pencari</b></span>
                            <span class="minitext text-center"><b>properti</b> setiap bulannya</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 boxforimg mb-5 mb-md-0">
                        <div class="inner d-flex flex-column justify-content-center mx-auto">
                            <img class="box_img mx-auto"
                                src="<?php echo home_url('/wp-content/uploads/2022/11/Home_Icon_02-1.png');?>" alt="">
                            <span class="minitext text-center mt-3"><b>Lebih dari 12,000 agen</b></span>
                            <span class="minitext text-center">merasakan manfaat beriklan di Rumah.com</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 boxforimg mb-5 mb-md-0">
                        <div class="inner d-flex flex-column justify-content-center mx-auto">
                            <img class="box_img mx-auto"
                                src="<?php echo home_url('/wp-content/uploads/2022/11/Home_Icon_03-1.png');?>" alt="">
                            <span class="minitext text-center mt-3"><b>Total leads</b></span>
                            <span class="minitext text-center"><b>(tahun 2020 - 2021)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container_3">
        <div class="container_3_slick">
            <div class="container_3_slick_item">
                <div class="ytVideo">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/D1Qp6o3kAM8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="container_3_slick_item">
                <img class="redQuote" src="<?php echo home_url();?>/wp-content/uploads/2022/06/open-quote.svg" alt="">
                <div class="quote_3_2">Dari Rumah.com, saya closing rumah 38M lho. Thanks
                    <span class="quote_3_2_linebreak1"> buat Rumah.com. Web nya luar biasa. <span
                            class="bold1">Transaksi besar</span></span><span class="bold2"> saya kebanyakan dari
                        Rumah.com.</span>
                    <span class="quote_3_2_linebreak2"> Saya baru pakai Featured Listing aja langsung dapat buyer</span>
                    Kertajaya harga 6,5M. Semoga responnya bagus terus yang
                    <span class="quote_3_2_linebreak3"> Rumah.com</span>
                </div>
                <div class="author_3_2">Megawati - Xavier Marks Betterland</div>
            </div>
            <div class="container_3_slick_item">
                <img class="redQuote" src="<?php echo home_url();?>/wp-content/uploads/2022/06/open-quote.svg" alt="">
                <div class="quote_3_3">Kalau di bulan ini (PSBB COVID-19) kita tidak punya
                    <span class="quote_3_3_linebreak1"> pilihan lagi selain lebih banyak promosi online. <span
                            class="bold3">Leads dari</span></span><span class="bold4"> Rumah.com bedanya adalah
                        orang-orang yang datang</span>
                    <span class="quote_3_3_linebreak2"><span class="bold5"> yang lebih serius</span>. Sekarang ini lebih
                        tersaring, jadi</span> leadsnya itu benar-benar yang butuh properti.
                </div>
                <div class="author_3_3">Lala - ERA Sky</div>
            </div>
            <div class="container_3_slick_item">
                <img class="redQuote" src="<?php echo home_url();?>/wp-content/uploads/2022/06/open-quote.svg" alt="">
                <div class="quote_3_4">Di saat PSBB berlangsung justru saya banyak
                    <span class="quote_3_4_linebreak1"> mendapatkan <span class="bold6">leads & survei lokasi serta
                            closing</span> sewa</span> karena<span class="bold7"> client meresponi Spotlight
                        Sundul.</span> Terimakasih
                    <span class="quote_3_4_linebreak2">Rumah.com</span>
                </div>
                <div class="author_3_4">Zarah Mangundap - Hartcourts Tomang</div>
            </div>
            <div class="container_3_slick_item">
                <img class="redQuote" src="<?php echo home_url();?>/wp-content/uploads/2022/06/open-quote.svg" alt="">
                <div class="quote_3_5">Rumah.com satu satu nya favorit saya dalam beriklan
                    <span class="quote_3_5_linebreak1">rumah. Karena <span class="bold8">setiap saya beriklan di
                            rumah.com, respon</span></span><span class="bold9"> nya sangat luar biasa.</span> saya ikut
                    beberapa portal berbayar
                    <span class="quote_3_5_linebreak2"> iklan perumahan, dan selama ini, Rumah.com masih</span> menjadi
                    favorit saya dalam beriklan. Bravo Rumah.com.
                </div>
                <div class="author_3_5">Ali Zaenal Abidin - US Pro</div>
            </div>
            <div class="container_3_slick_item">
                <img class="redQuote" src="<?php echo home_url();?>/wp-content/uploads/2022/06/open-quote.svg" alt="">
                <div class="quote_3_6">Rumah.com emang the best.<span class="bold10"> Yang 1,2M sudah jualan 2</span>
                    <span class="quote_3_6_linebreak1">unit :) (di masa COVID-19)</span>
                </div>
                <div class="author_3_6">Umi - Agen Independen</div>
            </div>
            <div class="container_3_slick_item">
                <img class="redQuote" src="<?php echo home_url();?>/wp-content/uploads/2022/06/open-quote.svg" alt="">
                <div class="quote_3_7">Hampir <span class="bold11">98% leads</span> saya berasal dari <span
                        class="bold12">iklan di rumah.com</span></div>
                <div class="author_3_7">Heri Wijaya - Agen Independen</div>
            </div>
        </div>
    </div>
    <!-- <div class="container_4">
        <div class="container_4_right"
            style="background-image: url('<?php //echo home_url();?>/wp-content/uploads/2022/06/HomepagePuzzlePiece.png')"
            alt="">
        </div>
        <div class="container_4_left">
            <h3>Fitur Paket Kami</h3>
            <span class="linebreak4_1">Sebagai agen, Anda membutuhkan solusi jitu marketing dengan fitur yang khusus
                untuk kebutuhan spesifik Anda.</span>
            <span class="linebreak4_2">Paket berlangganan kami dikemas semaksimal mungkin sehingga membantu Anda
                memperoleh eksposur lebih untuk mendorong kemajuan bisnis properti Anda.</span>
            <span class="linebreak4_3">Anda juga memiliki fleksibilitas untuk menambahkan fitur-fitur tambahan ke paket
                berlangganan Anda secara terpisah.</span>
            <div class=container_4_button>
                <a href="paketberlangganan" class="button4">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div> -->
    <section class="home-firstsec pg-section">
        <div class="container">
            <div class="row mb-md-4" style="background-color:#F3F4F6">
                <div class="col-md-6 p-0 img_dt">
                    <div class="partner360_img">
                        <img src="<?php echo home_url('/wp-content/uploads/2022/11/Home_Image_02.png'); ?>"
                            alt="partner360">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right_sec text_sec">
                        <h2 class="pg-h2" style="color: #2C2C2C;margin-bottom:15px;">
                            Fitur Paket Kami
                        </h2>
                        <p class="section-content pg-paragraph">
                            Sebagai agen, Anda membutuhkan solusi jitu marketing dengan fitur yang khusus
                            untuk kebutuhan spesifik Anda.
                        </p>
                        <br>
                        <p class="section-content pg-paragraph">
                            Paket berlangganan kami dikemas semaksimal mungkin sehingga membantu Anda
                            memperoleh eksposur lebih untuk mendorong kemajuan bisnis properti Anda.
                        </p>
                        <br>
                        <p class="section-content pg-paragraph">
                            Anda juga memiliki fleksibilitas untuk menambahkan fitur-fitur tambahan ke paket
                            berlangganan Anda secara terpisah.
                        </p>
                        <br>
                        <a href="<?php echo home_url('partner360'); ?>" target="_blank"
                            class="sticky-category-readmore">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="home-firstsec pg-section">
        <div class="container">
            <div class="row mb-md-4" style="background-color:#F3F4F6">
                <div class="col-12 text-center">
                    <div class="text_sec">
                        <h2 class="pg-h2" style="color: #2C2C2C;margin-bottom:15px;">
                            Fitur Premium untuk Kebutuhan Anda yang Lebih Besar
                        </h2>
                        <p class="section-content pg-paragraph">
                            Pastikan kebutuhan Anda terpenuhi di segala level pengalaman Anda sebagai agen properti,
                            dengan paket berlangganan dari Rumah.com
                        </p>
                    </div>
                    <div class="container_5-2 mx-auto">
                        <div class=container_5_slick>
                            <div class="container_5_slick_item">
                                <div class="d-flex flex-md-row flex-column">
                                    <div class="slick_left text-left">
                                        <div class="title1">Spotlight Sundul</div>
                                        <div class="description1">Sundul listing dengan tampilan berbeda, itu baru luar
                                            biasa. Cocok
                                            untuk agen yang memilih untuk memastikan listing mendapatkan eksposur dengan
                                            biaya
                                            ekonomis secara harian. Listing Anda akan selalu berada sebelum listing
                                            reguler.
                                        </div>
                                        <a href="spotlight" class="button5">Pelajari Lebih Lanjut</a>
                                    </div>
                                    <div class="slick_right">
                                        <img class="container_5_img1"
                                            src="<?php echo home_url('/wp-content/uploads/2022/06/05-Weekly-Featured-Listing-tablet.png');?>"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="container_5_slick_item">
                                <div class="d-flex flex-md-row flex-column">
                                    <div class="slick_left text-left">
                                        <div class="title2">Exclusive Listing</div>
                                        <div class="description2">Exclusive Listing adalah opsi tepat untuk agen yang
                                            ingin
                                            mengamankan eksposur untuk mendorong target leads yang lebih tinggi untuk
                                            listing
                                            mereka. Listing Anda akan selalu berada di halaman pertama selama 30 hari.
                                        </div>
                                        <a href="fiturpremium" class="button5">Pelajari Lebih Lanjut</a>
                                    </div>
                                    <div class="slick_right">
                                        <img class="container_5_img2"
                                            src="<?php echo home_url('/wp-content/uploads/2022/06/NEW-Screenshots-Illustration_v2-IDLocalisedv2_pf.png');?>"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="container_5_slick_item">
                                <div class="d-flex flex-md-row flex-column">
                                    <div class="slick_left text-left">
                                        <div class="title3">Produk Spesialis</div>
                                        <div class="description3">Foto profil Anda akan tampilan sebagai agen yang dapat
                                            dikontak
                                            untuk area atau bahasa tertentu, bagi pemilik ataupun pencari properti, di
                                            hasil
                                            pencarian</div>
                                        <a href="fiturpremium" class="button5">Pelajari Lebih Lanjut</a>
                                    </div>
                                    <div class="slick_right">
                                        <img class="container_5_img3"
                                            src="<?php echo home_url('/wp-content/uploads/2022/06/04specialistagent.png');?>"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <div class="container_6">
        <h3>
            Lihat Penawaran Terkini Kami
        </h3>
        <p>
            Baik agen aktif maupun baru di Rumah.com, mari lihat penawaran terkini kami dan penghematan untuk Anda.
        </p>
        <div class=container_6_button>
            <a href="promotions" class="button6">Promosi</a>
        </div>
    </div>
</main><!-- #main -->


<?php get_footer();?><?php