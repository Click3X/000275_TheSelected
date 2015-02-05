<?php 
// CASE STUDY SINGLE PAGE
get_header(); 
// INIT ARRAY VAR TO COLLECT DATA FROM case-study.php
$case_vars = array();
?>

			<div id="content">
				<div id="inner-content" class="wrap cf">
					<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<?php
							// GET PAGE DATA
							include('php/data/case-study.php');

							// GET PAGE TEMPLATE
							include('php/template/case-study.php');
						?>

						<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</div>
			</div>

<?php get_footer(); ?>
