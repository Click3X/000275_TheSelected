<?php
/*
 Template Name: Our Services
*/
?>

<?php get_header(); 
	
$label_str = get_field('label-strategy');
$label_com = get_field('label-commerce');
$label_cre = get_field('label-creativity');
$bottom_text = get_field('bottom_text');
$heart_text = get_field('heart_text');

// TEXT
$black1 = get_field('brand_universal');
$black2 = get_field('brand_strategy');
$black3 = get_field('consumer_strategy');
$black4 = get_field('business_strategy');
$black5 = get_field('product_innovation');
$black6 = get_field('trade_engagement');
$black7 = get_field('sales_channel');
// NEW LISTINGS
$black8 = get_field('brand_diagnostics');
$black9 = get_field('brand_management');

// GOLDEN
$gold1 = get_field('key_influencer');
$gold2 = get_field('experimental_premium');
$gold3 = get_field('digital_creative');
$gold4 = get_field('advertising_creative');
$gold5 = get_field('partnerships_media');
$gold6 = get_field('360_brand');

?>

			<div id="content" style="overflow-x: hidden">
				<div id="inner-content" class="wrap cf">
					<div id="main" class="m-all cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<section class="entry-content cf" itemprop="articleBody">
								<?php the_content();?>
								<div class="short-divider"></div>

								<!-- WHOLE WRAPPER -->
								<div class="circle-wrapper">
									<!-- CIRCLE WRAPPER -->
									<img id="circle" class="circle" src="<?php echo get_template_directory_uri(); ?>/library/images/circle.png">

									<!-- HEART WRAPPER -->
									<div class="heart-container">
										<div class="cubeWrapper">
											<div class="rotator">
											    <div class="cube">
										        	<img src="<?php echo get_template_directory_uri(); ?>/library/images/heart.png">
										        </div>
										    </div>
										</div>
									</div>

									<!-- TEXT LAYER -->
									<div class="heart-text"><?php echo $heart_text; ?></div>
									<!-- <img class="lines" src="<?php echo get_template_directory_uri(); ?>/library/images/lines.png"> -->
									<img class="lines" src="img/our-services/lines-new.png">
									<div class="circle-labels label-str"><div></div> = <?php echo $label_str; ?></div>
									<div class="circle-labels label-com"><div style="background:#5d5e61"></div> = <?php echo $label_com; ?></div>
									<div class="circle-labels label-cre"><div style="background:#daa250"></div> = <?php echo $label_cre; ?></div>

									<!-- BLACK & GREY & GOLDEN TEXT -->
									<div id="black1" class="float-text js-hide black1"><?php echo $black1; ?></div>
									<div id="black2" class="float-text js-hide black2"><?php echo $black2; ?></div>
									<div id="black3" class="float-text js-hide black3"><?php echo $black3; ?></div>
									<div id="black4" class="float-text js-hide black4"><?php echo $black4; ?></div>
									<div id="black8" class="float-text js-hide black8"><?php echo $black8; ?></div>
									<!-- grey -->
									<div id="black9" class="float-text js-hide black9"><?php echo $black9; ?></div>
									<div id="black5" class="float-text js-hide black5"><?php echo $black5; ?></div>
									<div id="black6" class="float-text js-hide black6"><?php echo $black6; ?></div>
									<div id="black7" class="float-text js-hide black7"><?php echo $black7; ?></div>
									<!-- golden -->
									<div id="gold1" class="float-text js-hide gold1"><?php echo $gold1; ?></div>
									<div id="gold2" class="float-text js-hide gold2"><?php echo $gold2; ?></div>
									<div id="gold3" class="float-text js-hide gold3"><?php echo $gold3; ?></div>
									<div id="gold4" class="float-text js-hide gold4"><?php echo $gold4; ?></div>
									<div id="gold5" class="float-text js-hide gold5"><?php echo $gold5; ?></div>
									<div id="gold6" class="float-text js-hide gold6"><?php echo $gold6; ?></div>

								</div>

								<p class="bottom-text"><?php echo $bottom_text; ?></p>
								
							</section>
						</article>

						<?php endwhile; else : ?>
						<?php endif; ?>

					</div>
				</div>
			</div>

<?php get_footer(); ?>