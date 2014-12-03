<?php get_header(); 
/*

Template Name: Contact Us

*/
?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">

			<?php 
				// GET MARQUEE ( SAME AS HOME PAGE )
				include('php/marquee/marquee.php');
			?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



			<?php endwhile;?>

			<?php endif; ?>

		</div>

	</div>

</div>

<?php get_footer(); ?>
