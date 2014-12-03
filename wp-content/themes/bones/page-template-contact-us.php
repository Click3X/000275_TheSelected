<?php get_header(); 
/*

Template Name: Contact Us

*/
?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="marquee cf shadow">
			    <div class="marquee-holder cf">
			        
			        <div class="logo-holder">
			            <div class="logo marquee-logo"></div>
			        </div>

			        <h2 class="marq-2"><span style="font-family: minion-pro,serif;">the</span></h2>

			        <h1>SELECTED</h1>
			        <hr>

			        <h2 class="white-headline">STAND OUT &amp; GET SELECTED</h2>

			        <div class="contact-content cf">
			        	<?php the_content(); ?>
			        </div>

			    </div> <!-- END MARQUEE-HOLDER -->
			</div><!-- END MARQUEE -->

			<?php endwhile;?>

			<?php endif; ?>

		</div>

	</div>

</div>

<?php get_footer(); ?>
