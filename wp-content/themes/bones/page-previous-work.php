<?php get_header(); 

$args = array(
	'post_type'=>'case_study'
);

$query = new WP_Query($args); 

?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">

						<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'cf case-study-link' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<a href="<?php echo get_the_permalink();?>" class="cf">								
								<?php 
									// LOGO IMAGE
									$logo = get_field('logo');
									if($logo) {
										echo '<img src="'.$logo['sizes']['case-study-logo'].'" class="case-study-logo">';
									}
									echo '<div class="overlay-holder cf">';
										// FEATURED IMAGE
										the_post_thumbnail('case-study-mobile');
										// OVERLAY 
										echo '<div class="case-overlay cf">';
											echo '<h3>View Case Study</h3>';
										echo '</div>';
									echo '</div>';
								?>
								</a>
							</div>

						<?php endwhile;?>

						<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
