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

							<section class="entry-content cf">
								<?php the_content(); ?>
							</section> <?php // end article header ?>

							<section class="entry-content cf" itemprop="articleBody">
								
								<?php 
									// NO THUMB - USE NEW INDIVIDUAL FIELDS
									// the_post_thumbnail('full');
									$header_image_box = get_field('header_image_box');

									echo '<ul class="header-image-box cf">';
									foreach ($header_image_box as $key => $header_image) {
										// helper($header_image);
										$header_title = $header_image['header_text'];
										// $img_url = $header_image['header_image']['url'];
										$img_url = $header_image['header_image']['sizes']['home-header-image'];
										// $maxW = $header_image['header_image']['width'].'px';
										// $maxH = $header_image['header_image']['height'].'px';
										$maxW = $header_image['header_image']['sizes']['home-header-image-width'].'px';
										$maxH = $header_image['header_image']['sizes']['home-header-image-height'].'px';

										echo '<li class="header-image cf">';
											echo '<h3 class="header-title">'.$header_title.'</h3>';
											echo '<div class="header-image-holder" style="max-width:'.$maxW.'; max-height:'.$maxH.';">';
												echo '<img src="'.$img_url.'" class="">';
											echo '</div>';
										echo '</li>';
									}
									echo '</ul>';
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
