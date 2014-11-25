<?php
/*
 Template Name: Our Services
*/
?>

<?php get_header(); 
	
$label_str = get_field('label-strategy');
$label_com = get_field('label-commerce');
$label_cre = get_field('label-creativity');

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
									<img class="lines" src="<?php echo get_template_directory_uri(); ?>/library/images/lines.png">
									<div class="circle-labels label-str"><div></div> = <?php echo $label_str; ?></div>
									<div class="circle-labels label-com"><div></div> = <?php echo $label_com; ?></div>
									<div class="circle-labels label-cre"><div style="background:#daa250"></div> = <?php echo $label_cre; ?></div>
								</div>

								
								
							</section>


						</article>

						<?php endwhile; else : ?>

						<?php endif; ?>

					</div>


				</div>

			</div>


<?php get_footer(); ?>
