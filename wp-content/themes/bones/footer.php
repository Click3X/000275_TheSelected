        </div> <!-- END CONTAINER -->

		<footer class="footer" role="contentinfo">

			<div id="inner-footer" class="wrap cf">

                <?php
                    // PRINT BLOG DESCRIPTION
                    echo '<h2 class="description">';
                        bloginfo('description');
                    echo '</h2>';

                    // GET ADDRESS FROM CONTACT-US PAGE OUTSIDE OF LOOP
                    global $wp_query;
                    $postid = 13;
                    echo get_post_meta($postid, 'address', true);
                    wp_reset_query();
                ?>

			</div>

		</footer>		

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

        <?php
            // CONDITIONALLY LOAD OUTLINE SCRIPT
            $server = $_SERVER['REMOTE_ADDR'];
            // IF SERVER IS LOCAL, ADD OUTLINE BUTTON
            if($server == '127.0.0.1') {
                echo "<script>
                    jQuery('head').append('<style>#outline {position:fixed;z-index:1000;bottom:50px;right:50px;} .outlines {outline:1px solid rgba(255, 0, 0, 0.3);}</style>');
                    jQuery('body').append('<input id=\"outline\" type=\"button\">');

                    jQuery('#outline').click(function() {
                        jQuery('*').toggleClass('outlines');
                   });
                </script>";
            }
        ?>

	</body>

</html> <!-- end of site. what a ride! -->
