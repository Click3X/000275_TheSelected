<?php 
/*

Template Name: Who we do

*/

get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php 
							// GET DATA
							$text_mods = get_field('text_modules');

						?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf article-holder' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content cf">
								<?php the_content(); ?>
							</section> <?php // end article header ?>

							<?php
								if($text_mods) {
									echo '<div class="checker-holder clearfix">';
									foreach ($text_mods as $key => $text_mod) { 
										echo '<div class="entry-content checkered clearfix">';
											echo '<div class="child">'.$text_mod['text_module'].'</div>';
										echo '</div>';
									}
									echo '</div>';
								}
							?>

						</article>

						<?php endwhile;?>

						<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
