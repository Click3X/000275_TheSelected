<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>
        <!-- TYPE KIT LINKS -->
        <script type="text/javascript" src="//use.typekit.net/taa4ovr.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <!-- CHARLES IS COOL -->
		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

        <?php
            // GET COUNT OF MENU ITEMS 
            $my_menu = wp_get_nav_menu_object( 'Main' );
            // Echo count of items in menu
            $item_count = $my_menu->count;
            $nav_item_width = intval(100/$item_count);
            $item_class=$nav_item_width.'%';

            echo '<style>
                @media(min-width: 768px) {
                    #menu-main li {
                        float: left;
                        position: relative;
                        width: '.$item_class.';
                        text-align: center;
                        font-weight:500;
                    }
                }
                </style>';
        ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container" class="tk-brandon-grotesque">

            <?php
                // IF IS HOME PAGE, GET MARQUEE TEXT
                if( is_page(44) ) {
                    $post_id =4;
                    $post_object = get_post( $post_id );

                    echo '<div class="marquee cf">';
                        echo $post_object->post_content;
                    echo '</div>';
                }

            ?>

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<nav role="navigation">
                        
						<?php wp_nav_menu(
                            array(
            					'container' => false,                           // remove nav container
            					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
            					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
            					'menu_class' => 'nav top-nav cf',               // adding custom nav class
            					'theme_location' => 'main-nav',                 // where it's located in the theme
            					'before' => '',                                 // before the menu
                    			'after' => '',                                  // after the menu
                    			'link_before' => '',                            // before each link
                    			'link_after' => '',                             // after each link
                    			'depth' => 0,                                   // limit the depth of the nav
            					'fallback_cb' => ''                             // fallback function (if there is one)
						    )
                        ); ?>

					</nav>

				</div>

			</header>
