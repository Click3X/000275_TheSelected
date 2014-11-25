<?php
/*
 Template Name: Our Services
*/
?>

<?php get_header(); ?>

			<div id="content" style="overflow-x: hidden">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


							<section class="entry-content cf" itemprop="articleBody">
								<?php the_content(); ?>

								<div class="short-divider"></div>
								<div class="circle-wrapper">
									<img class="circle" src="<?php echo get_template_directory_uri(); ?>/library/images/circle.png">
									<div class="heart-container">
									<div class="cubeWrapper">
										<div class="rotator">
										        <div class="cube">
										          <img src="<?php echo get_template_directory_uri(); ?>/library/images/heart.png">
										          
										        </div>
										    </div>
										</div>
									</div>
								</div>

								
								
							</section>


						</article>

						<?php endwhile; else : ?>

						<?php endif; ?>

					</div>


				</div>

			</div>


<?php get_footer(); ?>
