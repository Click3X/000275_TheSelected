<?php get_header(); 
/*

Template Name: Home Template

*/
?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">
								<?php the_content(); ?>
							</header> <?php // end article header ?>

							<section class="entry-content cf" itemprop="articleBody">
								
								<?php 
									// the_content(); 
									the_post_thumbnail('full');
								?>

							</section> <?php // end article section ?>

							<footer class="article-footer cf">

								<?php
									$addText = get_field('additional_text');
									if($addText) {
										echo $addText;
									}
								?>

							</footer>

						</article>

						<?php endwhile;?>

						<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
