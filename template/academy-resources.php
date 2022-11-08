<?php
/* Template Name: Academy Resources | Agent Offerings SG */
get_header();

$slider_items = get_field('slider_items', $post->ID);
$category_items = get_field('category_items', $post->ID);

$parent_id = $post->ID;
$cate = $_GET['cate']??'all';
?>
<main id="primary" class="site-main academyresources">
	<?php if (get_field('banner_image_desktop')) {
        $desktop_banner = get_field('banner_image_desktop'); ?>
    <style>
    .pg-hero-sec {
		background-image: url(<?php echo $desktop_banner; ?>);
    }
	/*ADD HERE THE NECESSARY CSS CLASSES*/
		.nav-tabs{border-bottom:unset;gap:10px;/*display: grid;*/grid-template-rows: repeat(2, auto);grid-auto-flow: column;}
		.nav-tabs::after {
  content: "";
  flex: auto;
}
		.nav-tabs .nav-link,.nav-tabs a.nav-links:hover{border-radius:7px;background:#f3f4f6;padding:10px;color:#2c2c2c;}
		.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover{border-color:#fff;}
/* 		.nav-fill .nav-item:last-child {flex: initial;} */
		.videos-filters{padding-top:40px;padding-bottom:80px;}

		.videos-listing .other_videos{margin-bottom:12px;}
		.other_videos:hover{cursor:pointer;}
		.other_videos img,.video-recent img{width:100%;}
		.nav-tabs .nav-link.active{background:#2c2c2c;color:#fff;}
		.pg-video-date{color:#999;}
		.video-main h2{margin-top:20px;}
		.video-main .pg-video-date{margin-bottom:20px;}
		.video-text{margin-bottom:20px;}
		.video-recent-section{margin-top:40px;}
		.pg-reco{font-size:16px;}
		.wp-image-8554{display:none;}
		@media only screen and (max-width: 1390px) {
		.pg-hero-sec {
            	background-position:right -250px top;
        	}
	}
		@media only screen and (max-width: 1350px) {
		.pg-hero-sec {
            	background-position:right -250px top;
        	}
			@media only screen and (max-width: 1250px) {
		.pg-hero-sec {
            	background-position:right -400px top;
        	}
	}
	}
		@media only screen and (max-width: 991px) {
		.pg-hero-sec {
            	background-position:right -500px top;
        	}
	}
		@media only screen and (max-width: 885px) {
		.pg-hero-sec {
            	background-position:right -580px top;
        	}
	}
	@media only screen and (max-width: 776px) {
		.pg-hero-sec {
            	background-position:right -600px top;
        	}
	}
		 @media only screen and (min-width: 767px) {
			.other_videos h3{font-size:16px;line-height:20px;}
			 .videos-listing{max-height:700px;overflow-y:scroll;}
		}
    </style>
    <?php }?>
    <?php if (get_field('banner_image_mobile')) {
        $mobile_banner = get_field('banner_image_mobile'); ?>
    <style>
    @media only screen and (max-width: 767px) {
        .pg-hero-sec {
            background-image: url(<?php echo $mobile_banner; ?>);
						background-position:left; /*change to left, right or center*/
        }
				.pg-hero-sec .pg-hero-text{justify-content: start;
    padding-top: 20px;
    padding-left: 30px;
    padding-right: 30px;}
 			 .wp-image-8554{display:block;}
 			 .wp-image-7714{display:none;}
    }
		@media only screen and (max-width: 767px) {
			.other_videos h3{margin-top:10px;}
			.video-recent{margin-bottom:20px;}
		}
		@media only screen and (max-width: 575px) {
			.nav-tabs{grid-template-rows: repeat(3, auto);}
		}
    </style>
    <?php }?>
		 <?php
            $text_title_banner = get_field('banner_title');
        ?>
        <section class="pg-hero-sec pg-h1-has-shadow">
            <div class="container">
                <div class="row">
                    <?php if($text_title_banner){ ?><div class="col-md-6 col-lg-5 pg-hero-text" style=""><?php /*change to add offset if want to align text to the right. eg col-lg-5 (means text is 5 unites), will need offset-lg-7 (offset to the right by 7 units)*/ ?>
						<?php echo $text_title_banner; ?>
					</div>
					<?php } ?>
                </div>
            </div>
        </section>

  <!-- 	Breadcrumbs	 -->
	<section style="background-color: #f2f2f2; margin-top:0px;padding-bottom:80px">
	<div class="breadcrumbs container">
		<ol class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList"><li><a href="<?php echo site_url(); ?>"><i class="pg-icon-home"></i></a>
			<meta itemprop="position" content="1"></li><li><a href="<?php echo home_url('partner360'); ?>">Partner360</a></li><li class="active">PropertyGuru Academy</li>
		</ol>
	</div>


    
 <div class="container">
        <div class="row">
					<div class="col-12" style="text-align:center">
            <p class="pg-paragraph">As part of PropertyGuru Partner360’s commitment in empowering our agent partners to become the best property professionals, Partner360 Academy is PropertyGuru’s continuous education institution that empowers our agent partners for tech-enabled growth in your real estate career.
            </p>
			<br>
            <p class="pg-paragraph">
                Whether you’re a early-stage or seasoned agent, at Partner360 Academy, we’ve compiled a wide variety of learning plans and resources covering from AgentNet basics to online marketing and lead generation to continuously equip you with market-relevant skills to succeed in real estate and ensure you get the most out of your partnership with PropertyGuru.
            </p>


					</div>
        </div>
				</div>
    </section>

    <section class="videos-section pg-section">
			<div class="container">
				<div class="row" >
					<div class="col-12" style="text-align:center">
						<h2 class="pg-h2 mb-3">Get Started with On-Demand Bite-Sized Learning 24/7</h2>
						<p class="pg-paragraph">We've put together a comprehensive collection of bite-sized learning videos, covering everything from AgentNet basics to online marketing, lead generation and personal branding, so you can learn them at your own time and pace!</p>
						<br>
						<p class="pg-paragraph">You can listen in the car, while you're working out or when you have a few minutes between home viewings - it doesn't matter, as long as you make the commitment to learn and get the most out of what PropertyGuru has to offer!</p>
					</div>
				</div>
				<div class="row videos-filters">
					<div class="col-md-8 videos-filters-tabs">
						<?php
						/* 'orderby=count&order=DESC&hide_empty=0'*/
						$args = array(
							'hide_empty' => 0,
							  'orderby'  => 'id',
							  'order'    => 'DESC'
						  );
						$terms = get_terms( 'vidcat', $args );
							  $count = count($terms);
							  if ( $count > 0 ){ ?>
 							<ul class="nav nav-tabs nav-fill">
                          		<li class="nav-item">
                            		<a class="nav-link pg-caption <?php echo $cate === 'all' ? 'active': ''; ?>" href="#" data-slug="all">All</a>
                          		</li>
								<?php foreach ( $terms as $term ) { ?>
								<li class="nav-item">
									<a class="nav-link pg-caption <?php echo $cate === $term->slug ? 'active': ''; ?>" href="#" data-slug="<?php echo $term->slug; ?>">

										   <?php echo esc_html( $term->name ); ?>

									</a>
								  </li>
								<?php } ?>

						</ul>
						<?php } ?>


					</div>
					<div class="col-md-4 pt-4 pt-md-0 videos-filters-search">
						<input id="videos-filters-search-text" type="text" placeholder="Search for a video...">
						<button type="submit">
    					<img id="videos-filters-search-button" src="<?php echo home_url(); ?>/wp-content/uploads/2022/10/Search_icon.png" />
						</button>

					</div>
				</div>
				<div class="video-main-wrapper">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  $args = array(
                      'post_type'=>'videos',
                      'posts_per_page' => -1,
                      'paged' => $paged,
                  );
//                   if ($cate  != 'all') {
//                     $args['tax_query'] = array(
//                       array(
//                         'taxonomy' => 'vidcat',
//                         'field'    => 'slug',
//                         'terms'    => array( $cate ),
//                     ),
//                   );
//                   }

$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) :
				$vid_count=0; ?>
				<div class="row video-main">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $article_img = get_the_post_thumbnail_url();
	if(!$article_img){
		$article_img= site_url() . '/wp-content/uploads/2022/09/placeholder-video-1.jpg';
	}
	if($vid_count==0){ ?>
			<div class="col-md-8 featured_video_wrapper">
				<?php if(get_field('video_file')){ ?>


				<video class="featured_video" controls poster='<?php echo $article_img; ?>' controlsList="nodownload" data-video="<?php the_ID(); ?>">
  					<source src="<?php the_field('video_file'); ?>" type="video/mp4">
					Your browser does not support the video tag.
				</video>
				<div class="option_action">
					<div class="like-meta">
						<?php
							$thumbs_up_class = '';
							if( isset($_COOKIE['like-up']) ) {
								$count_thumbs_up = json_decode($_COOKIE['like-up'], true);
								if( ! empty($count_thumbs_up) && in_array($post->ID, $count_thumbs_up) ) {
									$thumbs_up_class = 'active';
								}
							}?>
							<a href="#" data-type="like-up" class="like_up <?php echo $thumbs_up_class?>" data-id="<?php echo absint($post->ID);?>"><i class="icon-thumbs-o-up"></i></a>

							<?php
							$thumbs_up = (int) get_post_meta($post->ID, '_post_like-up', true);?>
							<div class="social-count">
								<?php echo $thumbs_up;?>
							</div>
					</div>

					<div class="share-meta">
						<?php
							// }?>
							<a href="#" class ="share-link" data-type="share" data-id="<?php echo absint($post->ID);?>">
								<span data-clipboard-target="#permalink-primary-video" data-social="share-link-video" class="clipboard-share-video"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/link.png"></span>
								<input type="text" id="permalink-primary-video" data-id="<?php echo $post->ID;?>" value="<?php echo esc_url( get_permalink($post->ID) );?>">
							</a>
					</div>

				</div>
				<?php } ?>
				<div class="row">
					<div class="col-12">
						<h2 class="pg-h2"><?php the_title(); ?></h2>
						<p class="pg-paragraph pg-video-date pg-caption"><?php the_date(); ?></p>
					</div>
					<!--<div class="col-md-2">Share buttons</div>-->
				</div>
				<div class="video-text pg-paragraph"><?php echo get_the_content(get_the_ID()); ?></div>
				<?php if( have_rows('recommended_help_articles') ): ?>
					<h2 class="pg-h2 pg-reco" style="color:#63656A">Recommended Help Articles</h2>
					<div class="video-recommended">
					<ul class="pg-ul">
    <?php while( have_rows('recommended_help_articles') ): the_row();
    $no_display = get_sub_field('disable_link');

if(!$no_display){

      $link = get_sub_field('article_link');
      $link_target = $link['target'] ? $link['target'] : '_self';

    ?>
		<?php if($link){ ?><li class="pg-paragraph"><a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo $link_target; ?>"><?php echo esc_attr( $link['title'] ); ?></a></li><?php } ?>


    <?php } endwhile;?></ul>
				</div><?php endif; ?>




				</div><div class="col-md-4 videos-listing">
	<?php
							}
					if($vid_count > -1) { ?>
			<div class="row other_videos" data-id="<?php echo get_the_ID(); ?>">
				<div class="col-md-6">
					<?php if($article_img){ ?><img src="<?php echo $article_img; ?>" class="image" alt="Article Image"><?php } ?>
				</div>
				<div class="col-md-6">
					<h3 class="pg-h3"><?php the_title(); ?></h3>
					<p class="pg-paragraph pg-video-date pg-caption"><?php echo get_the_date(); ?></p>
				</div>
			</div>

	<?php }
 				$vid_count++; ?>
			<?php endwhile; ?></div></div>
				 <?php $total_pages = $loop->max_num_pages;

                      if ($total_pages > 1){

                          $current_page = max(1, get_query_var('paged'));
                          $html = paginate_links(array(
                              'base' => get_pagenum_link(1) . '%_%',
                              'format' => '/page/%#%',
                              'current' => $current_page,
                              'total' => $total_pages,
                              'prev_text'    => __('Prev'),
                              'next_text'    => __('Next'),
                          ));
                          //mimics the default for paginate_links()
                          $pretext = 'Prev';
                          $posttext = 'Next';

                          //assuming this set of links goes at bottom of page
                          $pre_deco = '<a class="prev inactive page-numbers" href="#">'. $pretext .'</a>';
                          $post_deco = '<a class="next inactive page-numbers" href="#">'. $posttext .'</a>';

                           //key variable
                          $this_paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

                          //add decorative non-link to first page
                          if ( 1 === $this_paged) {
                            $html = $pre_deco . $html;
                          }
                          //add decorative non-link to last page
                          if ( $total_pages ==  $this_paged   ) {
                            $html = $html . $post_deco;
                          }
                          echo '<div class="row d-block pagination"><nav aria-label="Article pagination"><ul class="pagination justify-content-center">';
                          echo $html;
                          echo ' </ul></nav></div>';
                      }

                  wp_reset_postdata();
                  ?>

<?php endif; ?>
				</div>
				<?php  $args = array(
                      'post_type'=>'videos',
                      'posts_per_page' => 3,
					  'post__in' => array(8378,8418,8438)
                  );


$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) :
		?>
				<div class="video-recent-section"><h2 class="pg-h2 mb-3" style="color:#63656A">Recent Videos</h2><div class="row videos-recent">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php $article_img = get_the_post_thumbnail_url();
					if(!$article_img){
						$article_img= site_url() . '/wp-content/uploads/2022/09/placeholder-video-1.jpg';
					}
					?>
							<div class="col-md-4 video-recent other_videos" data-id="<?php echo get_the_ID(); ?>">
								<?php if($article_img){ ?><img src="<?php echo $article_img; ?>" class="image" alt="Article Image"><?php } ?>
								<h3 class="pg-h3" style="margin-top:10px;"><?php the_title(); ?></h3>
								<p class="pg-paragraph pg-video-date pg-caption"><?php echo get_the_date(); ?></p>
							</div>
				<?php endwhile;
					wp_reset_postdata();
                  ?>
		</div>
					</div>
<?php endif; ?>

			</div>
		</section>
		<section class="flex-column last-section pg-cta">
					<h2 class="pg-h2">
							Have more questions? Check out our <a href="https://help.propertyguru.com.sg/en/" target="_blank">Help Centre</a>.
					</h2>

			</section>
</main><!-- #main -->
<?php get_footer();?>
