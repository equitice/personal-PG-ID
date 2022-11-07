<?php
    /* Template Name: Contact Us Old */
    get_header();

    $slider_items = get_field('slider_items', $post->ID);
    $category_items = get_field('category_items', $post->ID);

    $parent_id = $post->ID;
    
    ?>
    <div class="page_nav2 black_header_bar">
		
        <div class="container">
            <ul>
                <li><a href="academy#daftar">Daftar Training Mantap Iklan</a></li>
                <li><a href="academy#sumber">Sumber</a></li>
                <li><a href="#repost">Kontak</a></li>
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
        <div class="container1 <?php if($select_type_title == "text"){echo 'text_banner';}?>" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/06/contactUs_backgroundImg.png')" alt="">
            <div class="contactUs_title">
         
					<div class="contactUs_container_pc">
						<?php
						if($select_type_title == "text"){ 
							echo $text_title_banner;
						}
						?>
					</div>
					<div class="contactUs_container_mb">
						<?php
						if($select_type_title == "text"){ 
							echo $text_title_banner_mb;
						}
						?>
					</div>
				            
            </div>
            <div class="contactUs_redBox"style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/06/getintouch.png')" alt="">
                <p>
                    Permintaan training online dapat
                    <span class="redBox_linebreak1">ditujukan kepada Account Executive Anda</span>di <a href="/tanyasales/">TanyaSales</a> atau Layanan Pelanggan
                    <span class="redBox_linebreak2">di
                        <a href="tel:021-806-81-008"> 021 806 81 008</a></span> / 
                        <a href ="mailto:customerservice@rumah.com.">customerservice@rumah.com.</a>
                </p>
            </div>
            
        </div>
        </main><!-- #main -->
    <?php get_footer();?><?php
