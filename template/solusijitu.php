<?php
/* Template Name: Solusijitu */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;

?>
    <div class="page_nav mb-none black_header_bar">
        <div class="container">
            <ul>
                <li><a href="#tambah">Tambah Listing Slots</a></li>
                <li><a href="#ad_kredit">Ad Kredit</a></li>
                <li><a href="#repost">Repost</a></li>
                <li><a href="#bantuan">Bantuan Upload Listing</a></li>
                <li><a href="#profil_agen">Profil Agen</a></li>
                <li><a href="#web_pribadi">Website Pribadi</a></li>
                <li><a href="#co_broke">Co-Broke</a></li>
            </ul>
        </div>
    </div>
    <main class="site-main" id="post-<?php the_ID(); ?>">
		<?php 
			
			$select_type_title = get_field('select_type_title');
            $image_title_banner = get_field('image_title_banner');
            $text_title_banner = get_field('text_title_banner');
            $text_title_banner_mb = get_field('text_title_banner_mobile');
		
		?>
        
        <div class="show-mb">
			<section class="landing-banner <?php if($select_type_title=="text"){echo 'text_banner';}?>">
                <div class="container_custom_banner mobile_none">
                    <?php
                    if($select_type_title == "text"){ 
                        echo $text_title_banner_mb;
                    }
                    ?>
                </div>
        </section>
            <section class="content bg-light-blue">
                <div class="content-item-wrapper d-flex">
                    <div class="col-text">
                        <h2>Tambah <i>Listing Slots</i></h2>
                        <span class="sub-head-muted">Berapa banyak jumlah listing yang Anda miliki ?</span>
                        <img src="https://propertygu1dev.wpengine.com/wp-content/uploads/2022/06/10-concurrent-listing.png"/>
                        <p>Setiap paket berlangganan Rumah.com memiliki batas listing yang dapat Anda lakukan dalam
                            periode waktu yang sama.
                            <br><br>
                            Apabila Anda memiliki kebutuhan yang lebih ataupun ingin memiliki fleksibilitas untuk
                            meningkatkan <i>Listing Slots</i> Tambahan <i>(Concurrent Listings)</i> kapan saja dengan fitur tambahan
                            ini. <a href="https://bantuan.rumah.com/id/articles/4190436-lebih-untung-dengan-listing-slots-dibandingkan-kuota-listing" target="_blank" class="dark-red-text">Pelajari lebih lanjut</a>
                        </p>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="content-item-wrapper">
                    <div class="col-full">
                        <h2>Ad Kredit</h2>
                        <span class="sub-head-muted">Bagaimana tingkat kompetitif lokasi atau proyek yang Anda kerjakan?</span>
                        <p>Dalam pasar yang kompetitif, memiliki listing yang menonjol untuk membantu Anda menarik
                            perhatian para pencari properti.
                            <br>
                            Syarat utamanya adalah membuat listing Anda terlihat dengan mudah, baik dengan berada di
                            atas halaman hasil pencarian atau ditampilkan secara berbeda.
                            <br><br>
                            Dengan Ad Kredit, Anda dapat melakukan hal tersebut, karena Ad Kredit poin kami dapat
                            dimanfaatkan untuk memposting, memposting ulang, atau Spotlight Sundul listing Anda.
                        </p>
                        <hr class="divider-grey">
                    </div>
                    <div class="col-full has-text-align-center">
                        <h2>Keuntungan Lebih dengan Spotlight Sundul</h2>
                        <p>Listing Anda kini dapat lebih terdepan di hasil pencarian untuk memikat ketertarikan<br>pencari
                            properti dan menghasilkan leads lebih dengan fitur luar biasa tersebut.
                        </p>
                    </div>
                    <div class="d-block">
                        <div class="col-img w-100">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/06-Weeky-Feature-Listing.png"/>
                        </div>
                        <div class="col-text pt-0">
                            <p>
                            <ul>
                                <li>
                                    <b>Posisi Lebih Depan Di Hasil Pencarian</b> - Jangan biarkan pencari properti tidak
                                    melihat listing Anda di halaman depan hasil pencarian! Dengan Spotlight Sundul,
                                    listing Anda akan selalu berada di atas listing biasa selama satu minggu dalam hasil
                                    pencarian
                                </li>
                                <li>
                                    <b>Personal Branding</b> - Tonjolkan diri dengan menampilkan foto profil Anda yang
                                    lebih besar di setiap listing yang menggunakan Spotlight Sundul. Raih kepercayaan
                                    dari pencari properti dengan menunjukkan profesionalitas Anda melalui uraian
                                    keunggulan lebih dari listing Anda di Berita Utama.
                                </li>
                                <li>
                                    <b>Selalu Unggul Dalam Persaingan</b> - Dengan fungsi Spotlight Otomatis, listing
                                    Anda dapat diperpanjang secara otomatis setiap 7 hari. Ini berarti listing Anda akan
                                    selalu berada di peringkat atas, memungkinkan Anda untuk selalu lebih depan dari
                                    pesaing Anda.
                                </li>
                            </ul>
                            
                            <div class="pg-btn"><a href="https://www.agentofferings.rumah.com/spotlight">Spotlight
                                    Sundul Sekarang</a></div>
                            <div class="pl-40">
                                <i>*Ketahui lebih lanjut keuntungan listing dengan Spotlight Sundul <a
                                            href="http://bantuan.rumah.com/id/articles/2799612-apa-itu-spotlight-listing"
                                            class="pg-link">di sini</a></i>
                            </div>
                        </div>
                    </div>
                    <hr class="divider-grey">
                    <div class="d-flex">
                        <div class="col-text">
                            <h2>Repost</h2>
                            <span class="sub-head-muted">
                                    Anda menginginkan posisi listing selalu aktif?
                                </span>
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/03-Repost-Your-listing.png"/>
                            <p>Perbaharui tanggal listing Anda dengan menggunakan fitur Repost. Listing Anda juga akan
                                berada diposisi depan pada hasil pencarian.<br>Ad Kredit yang digunakan akan tertera
                                saat Anda akan melakukan Repost listing.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content bg-light-blue">
                <div class="content-item-wrapper d-flex">
                    <div class="col-text">
                        <h2>Bantuan Upload Listing</h2>
                        <span class="sub-head-muted">
                                Apakah Anda memiliki banyak listing untuk di upload?
                            </span>
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/02-PLA-Icon.png"/>
                        <p>Bila Anda menggunakan paket Champion, maka layanan PLA (Personal Listing Assistant) dapat
                            membantu upload listing Anda ke portal kami menggunakan informasi yang Anda berikan. Listing
                            ini akan disimpan dalam Draft untuk Anda Review terlebih dahulu kemudian Anda aktifkan.
                        </p>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="content-item-wrapper d-flex">
                    <div class="col-text">
                        <h2>Profil Agen</h2>
                        <span class="sub-head-muted">
                            Apakah Anda ingin membangun kesan positif sebelum bertemu calon pembeli?
                            </span>
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/07-Agent-profile.png"/>
                        <p>
                            Membangun kesan positif di antara calon pembeli potensial menjadikan Anda berada di jalur
                            yang benar untuk membangun kredibilitas dan personal branding Anda.<br><br>Dengan profil
                            agen di Rumah.com, Anda dapat dengan mudah memberikan deskripsi singkat tentang diri Anda,
                            spesialisasi yang Anda miliki serta fokus wilayah bisnis properti Anda, agar pencari
                            properti dan pemilik properti dapat menilai Anda sebagai agen properti profesional.
                        </p>
                    </div>
                </div>
            </section>

            <section class="content bg-light-blue">
                <div class="content-item-wrapper d-flex">
                    <div class="col-text">
                        <h2>Website Pribadi</h2>
                        <span class="sub-head-muted">
                                Apakah Anda bermaksud mengembangkan website untuk diri Anda sendiri?
                            </span>
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/01-MyWeb.png"/>
                        <p>Sebagai agen profesional di era digital, penting untuk membangun website pribadi Anda
                            sehingga Anda memiliki "etalase" untuk dibagikan kepada calon pembeli potensial, dan
                            berkesempatan ditemukan di mesin pencari. Website pribadi adalah cara terbaik untuk
                            memamerkan profesionalisme Anda, membangun kredibilitas dan menampilkan listing
                            Anda!<br><br>Kami membuatnya mudah bagi Anda untuk melakukannya dengan Website pribadi agen.<br><br>Fitur
                            ini memungkinkan Anda untuk mengatur website pribadi Anda dengan mudah dengan memanfaatkan
                            dari list template yang tersedia. Anda akan memiliki opsi untuk mempersonalisasi alamat
                            situs web Anda juga.
                        </p>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="content-item-wrapper d-flex">
                    <div class="col-text">
                        <h2>Properti Impian (Co-Broke)</h2>
                        <span class="sub-head-muted">
                                Ingin menambah jumlah listing untuk memperbanyak closing?
                            </span>
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/05-Weekly-Featured-Listing-tablet.png"/>
                        <p>
                            Dengan Menu Properti Impian yang hanya tersedia untuk agen berbayar, memungkinkan anda untuk
                            melihat semua pertanyaan yang diposting oleh pengguna agentnet Rumah.com yang mencari
                            properti tertentu, atau agen yang mencari peluang bekerjasama (co-broke).
                        </p>
                    </div>
                </div>
            </section>

            <section class="content cta_banner">
                <div class="content-item-wrapper">
                    <h2><span class="pg-red">Solusi Jitu</span> Marketing<br> Agen Properti</h2>
					<div class="cta_mb_text">
						<p class="text_mb">Hubungi 021- 80681008 Untuk<span class="linebreak1">Demo Langsung di Kantor atau</span>Komunitas Anda</p>
					</div>
                    <div class="pg-btn"><a href="https://www.agentofferings.rumah.com/">Hubungi Kami</a></div>
                </div>
            </section>
        </div>
		
		
		
        <div class="show-pc">
			 <section class="landing-banner <?php if($select_type_title=="text"){echo 'text_banner';}?>">
			<div class="container_custom_banner 1 desktop_none">
                    <?php
                    if($select_type_title == "text"){ 
                        echo $text_title_banner;
                    }
                    ?>
                </div>
        </section>
            <section class="content bg-light-blue" id="tambah">
                <div class="content-item-wrapper d-flex">
                    <div class="col-img">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/10-concurrent-listing.png"/>
                    </div>
                    <div class="col-text">
                        <h2>Tambah <i>Listing Slots</i></h2>
                        <span class="sub-head-muted">Berapa banyak jumlah listing yang Anda miliki ?</span>
                        <p>Setiap paket berlangganan Rumah.com memiliki batas listing yang dapat Anda lakukan dalam
                            periode waktu yang sama.
                            <br><br>
                            Apabila Anda memiliki kebutuhan yang lebih ataupun ingin memiliki fleksibilitas untuk
                            meningkatkan <i>Listing Slots</i> Tambahan <i>(Concurrent Listings)</i> kapan saja dengan fitur tambahan
                            ini. <a href="https://bantuan.rumah.com/id/articles/4190436-lebih-untung-dengan-listing-slots-dibandingkan-kuota-listing" target="_blank" class="dark-red-text">Pelajari lebih lanjut</a>
                        </p>
                    </div>
                </div>
            </section>
		
            <section class="content" id="ad_kredit">
                <div class="content-item-wrapper">
                    <div class="col-full">
                        <h2>Ad Kredit</h2>
                        <span class="sub-head-muted">Bagaimana tingkat kompetitif lokasi atau proyek yang Anda kerjakan?</span>
                        <p>Dalam pasar yang kompetitif, memiliki listing yang menonjol untuk membantu Anda menarik
                            perhatian para pencari properti.
                            <br>
                            Syarat utamanya adalah membuat listing Anda terlihat dengan mudah, baik dengan berada di
                            atas halaman hasil pencarian atau ditampilkan secara berbeda.
                            <br><br>
                            Dengan Ad Kredit, Anda dapat melakukan hal tersebut, karena Ad Kredit poin kami dapat
                            dimanfaatkan untuk memposting, memposting ulang, atau Spotlight Sundul listing Anda.
                        </p>
                        <hr class="divider-grey">
                    </div>
                    <div class="col-full has-text-align-center">
                        <h2>Keuntungan Lebih dengan Spotlight Sundul</h2>
                        <p>Listing Anda kini dapat lebih terdepan di hasil pencarian untuk memikat ketertarikan<br>pencari
                            properti dan menghasilkan leads lebih dengan fitur luar biasa tersebut.
                        </p>
                    </div>
                    <div class="d-flex">
                        <div class="col-img">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/06-Weeky-Feature-Listing.png"/>
                        </div>
                        <div class="col-text pt-0">
                            <p>
                            <ul>
                                <li>
                                    <b>Posisi Lebih Depan Di Hasil Pencarian</b> - Jangan biarkan pencari properti tidak
                                    melihat listing Anda di halaman depan hasil pencarian! Dengan Spotlight Sundul,
                                    listing Anda akan selalu berada di atas listing biasa selama satu minggu dalam hasil
                                    pencarian
                                </li>
                                <li>
                                    <b>Personal Branding</b> - Tonjolkan diri dengan menampilkan foto profil Anda yang
                                    lebih besar di setiap listing yang menggunakan Spotlight Sundul. Raih kepercayaan
                                    dari pencari properti dengan menunjukkan profesionalitas Anda melalui uraian
                                    keunggulan lebih dari listing Anda di Berita Utama.
                                </li>
                                <li>
                                    <b>Selalu Unggul Dalam Persaingan</b> - Dengan fungsi Spotlight Otomatis, listing
                                    Anda dapat diperpanjang secara otomatis setiap 7 hari. Ini berarti listing Anda akan
                                    selalu berada di peringkat atas, memungkinkan Anda untuk selalu lebih depan dari
                                    pesaing Anda.
                                </li>
                            </ul>
                            
                            <div class="pg-btn"><a href="https://www.agentofferings.rumah.com/spotlight">Spotlight
                                    Sundul Sekarang</a></div>
                            <span class="pl-40">
                                <i>*Ketahui lebih lanjut keuntungan listing dengan Spotlight Sundul <a
                                            href="http://bantuan.rumah.com/id/articles/2799612-apa-itu-spotlight-listing"
                                            class="pg-link">di sini</a></i>
                            </span>
                        </div>
                    </div>
                    <hr class="divider-grey">
                    <div class="d-flex" id="repost">
                        <div class="col-text">
                            <h2>Repost</h2>
                            <span class="sub-head-muted">
                                Anda menginginkan posisi listing selalu aktif?
                            </span>
                            <p>Perbaharui tanggal listing Anda dengan menggunakan fitur Repost. Listing Anda juga akan
                                berada diposisi depan pada hasil pencarian.<br>Ad Kredit yang digunakan akan tertera
                                saat Anda akan melakukan Repost listing.
                            </p>
                        </div>
                        <div class="col-img">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/03-Repost-Your-listing.png"/>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content bg-light-blue" id="bantuan">
                <div class="content-item-wrapper d-flex">
                    <div class="col-img">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/02-PLA-Icon.png"/>
                    </div>
                    <div class="col-text">
                        <h2>Bantuan Upload Listing</h2>
                        <span class="sub-head-muted">
                                Apakah Anda memiliki banyak listing untuk di upload?
                            </span>
                        <p>Bila Anda menggunakan paket Champion, maka layanan PLA (Personal Listing Assistant) dapat
                            membantu upload listing Anda ke portal kami menggunakan informasi yang Anda berikan. Listing
                            ini akan disimpan dalam Draft untuk Anda Review terlebih dahulu kemudian Anda aktifkan.
                        </p>
                    </div>
                </div>
            </section>

            <section class="content" id="profil_agen">
                <div class="content-item-wrapper d-flex">
                    <div class="col-text">
                        <h2>Profil Agen</h2>
                        <span class="sub-head-muted">
                            Apakah Anda ingin membangun kesan positif sebelum bertemu calon pembeli?
                        </span>
                        <p>
                            Membangun kesan positif di antara calon pembeli potensial menjadikan Anda berada di jalur
                            yang benar untuk membangun kredibilitas dan personal branding Anda.<br><br>Dengan profil
                            agen di Rumah.com, Anda dapat dengan mudah memberikan deskripsi singkat tentang diri Anda,
                            spesialisasi yang Anda miliki serta fokus wilayah bisnis properti Anda, agar pencari
                            properti dan pemilik properti dapat menilai Anda sebagai agen properti profesional.
                        </p>
                    </div>
                    <div class="col-img">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/07-Agent-profile.png"/>
                    </div>
                </div>
            </section>

            <section class="content bg-light-blue" id="web_pribadi">
                <div class="content-item-wrapper d-flex">
                    <div class="col-img">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/01-MyWeb.png"/>
                    </div>
                    <div class="col-text">
                        <h2>Website Pribadi</h2>
                        <span class="sub-head-muted">
                            Apakah Anda bermaksud mengembangkan website untuk diri Anda sendiri?
                        </span>
                        <p>Sebagai agen profesional di era digital, penting untuk membangun website pribadi Anda
                            sehingga Anda memiliki "etalase" untuk dibagikan kepada calon pembeli potensial, dan
                            berkesempatan ditemukan di mesin pencari. Website pribadi adalah cara terbaik untuk
                            memamerkan profesionalisme Anda, membangun kredibilitas dan menampilkan listing
                            Anda!<br><br>Kami membuatnya mudah bagi Anda untuk melakukannya dengan Website pribadi agen.<br><br>Fitur
                            ini memungkinkan Anda untuk mengatur website pribadi Anda dengan mudah dengan memanfaatkan
                            dari list template yang tersedia. Anda akan memiliki opsi untuk mempersonalisasi alamat
                            situs web Anda juga.
                        </p>
                    </div>
                </div>
            </section>

            <section class="content" id="co_broke">
                <div class="content-item-wrapper d-flex">
                    <div class="col-text">
                        <h2>Properti Impian (Co-Broke)</h2>
                        <span class="sub-head-muted">
                                Ingin menambah jumlah listing untuk memperbanyak closing?
                        </span>
                        <p>
                            Dengan Menu Properti Impian yang hanya tersedia untuk agen berbayar, memungkinkan anda untuk
                            melihat semua pertanyaan yang diposting oleh pengguna agentnet Rumah.com yang mencari
                            properti tertentu, atau agen yang mencari peluang bekerjasama (co-broke).
                        </p>
                    </div>
                    <div class="col-img">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/05-Weekly-Featured-Listing-tablet.png"/>
                    </div>
                </div>
            </section>

            <section class="content cta_banner">
                <div class="content-item-wrapper">
                    <h2><span class="pg-red">Solusi Jitu</span> Marketing<br> Agen Properti</h2>
					
               
                    <div class="pg-btn"><a href="https://www.agentofferings.rumah.com/">Hubungi Kami</a></div>
                </div>
            </section>
        </div>


    </main><!-- #main -->
<?php get_footer(); ?><?php
