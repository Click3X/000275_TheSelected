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
								<?php the_content(); 


								?>

								<div class="short-divider"></div>

								<!-- WHOLE WRAPPER -->
								<div class="circle-wrapper">

									<!-- CIRCLE WRAPPER -->
									<img class="circle" src="<?php echo get_template_directory_uri(); ?>/library/images/circle.png">

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
									<img class="lines" src="<?php echo get_template_directory_uri(); ?>/library/images/lines.png">
									<div class="circle-labels label-str"><div></div> = <?php echo $label_str; ?></div>
									<div class="circle-labels label-com"><div style="background:#5d5e61"></div> = <?php echo $label_com; ?></div>
									<div class="circle-labels label-cre"><div style="background:#daa250"></div> = <?php echo $label_cre; ?></div>

									<!-- BLACK & GREY & GOLDEN TEXT -->
									<div class="float-text black1"><?php echo $black1; ?></div>
									<div class="float-text black2"><?php echo $black2; ?></div>
									<div class="float-text black3"><?php echo $black3; ?></div>
									<div class="float-text black4"><?php echo $black4; ?></div>
									<!-- grey -->
									<div class="float-text black5"><?php echo $black5; ?></div>
									<div class="float-text black6"><?php echo $black6; ?></div>
									<div class="float-text black7"><?php echo $black7; ?></div>
									<!-- golden -->
									<div class="float-text gold1"><?php echo $gold1; ?></div>
									<div class="float-text gold2"><?php echo $gold2; ?></div>
									<div class="float-text gold3"><?php echo $gold3; ?></div>
									<div class="float-text gold4"><?php echo $gold4; ?></div>
									<div class="float-text gold5"><?php echo $gold5; ?></div>
									<div class="float-text gold6"><?php echo $gold6; ?></div>

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
