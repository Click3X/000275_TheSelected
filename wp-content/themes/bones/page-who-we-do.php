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
										$copy = $text_mod['text_module'];
										$img = $text_mod['image'];
										$url = $img['url'];

										// helper($img);

										$maxW = $img['width'].'px';
                            			$maxH = $img['height'].'px';

										echo '<div class="check-img">
											<img src="'.$url.'" class="checker-image" style="max-width:'.$maxH.'; max-height:'.$maxH.';">
										</div>';
										echo '<div class="entry-content checkered clearfix">';
											echo '<div class="child">'.$copy.'</div>';
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
