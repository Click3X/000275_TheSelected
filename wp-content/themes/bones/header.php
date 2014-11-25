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

                
            // ECHO LOGO STYLES
            // GET LOGOS FROM 'CLIENT INFORMATION' OPTINO FIELD IN ADMIN
            $svgLogo = get_field('logo-svg', 'options');
            $pngLogo = get_field('logo-png', 'options');
            
            echo '<style>';

            echo '
                .logo-holder {
                    width: 17%;
                    height:auto;
                    position:absolute;

                    top:0;
                    bottom:0;
                    right: 0;
                    left:0;

                    margin: auto;
                    margin-top: -7%;
                    margin-right: 22%;

                    -webkit-transform: rotate(10deg);
                    transform: rotate(10deg);
                }
                .logo {
                    background-repeat:no-repeat;
                    background-size:cover;
                    width:100%;
                    height:auto;
                    padding-bottom:100%;
                    min-width: 87px;
                    min-height: 80px;
                }';

            if($pngLogo) { 
                $pngLogo = $pngLogo['url'];
                echo "\n";
                echo '.logo {
                          background-position: 50% 50%;';
                    echo 'background-image:url("'.$pngLogo.'");';
                echo '}';
                echo "\n";
            }


            if($svgLogo) { 
                $svgLogo = $svgLogo['url']; 
                echo "\n";
                echo '.svg .logo {';
                    echo 'background-image:url("'.$svgLogo.'");';
                echo '}';
                echo "\n";
            }

            echo '</style>';

            // SOCIAL LINKS STYLES
            $social_links = get_field('social_links', 'options');
            if($social_links) {
                echo '<style>';
                // helper($social_links);
                foreach ($social_links as $key => $social_link) {
                    $class=cleanString($social_link['name']);

                    $imageSvg = $social_link['image_svg']['url'];
                    $imagePng = $social_link['image_png']['url'];

                    echo '.social-'.$class.' a {
                        display:block;
                        width:50%;
                        background-image:url("'.$imagePng.'");
                        background-repeat:no-repeat;
                        background-size:contain;
                        background-position:50% 50%;
                    }';
                    
                    echo '.svg .social-'.$class.' a {
                        background-image:url("'.$imageSvg.'");
                    }';
                }
                echo '</style>';
            }


        ?>

	</head>

	<body <?php body_class("fixed-header"); ?>>

		<div id="container" class="tk-brandon-grotesque">

            <?php
                // IF IS HOME PAGE, GET MARQUEE TEXT
                if( is_page(44) ) {
                    $post_id =4;
                    $post_object = get_post( $post_id );

                    echo '<div class="marquee cf">';
                        echo '<div class="marquee-holder cf">';
                            // LOGO - STAMP CODE
                            echo '<div class="logo-holder"><div class="logo marquee-logo"></div></div>';
                            // CONTENT FROM MARQUEE PAGE
                            echo $post_object->post_content;
                        echo '</div>';
                    echo '</div>';
                }

            ?>

			<header id="site-header" class="header" role="banner">

				<div id="inner-header" class="wrap cf">
                    <div id="nav-logo" class="nav-logo"></div>

					<nav id="main-menu-nav" role="navigation" class="main-menu-nav">
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
                    
                    <!-- MOBILE MENU BUTTON -->
                    <div id="mobile-menu-button" class="menu-icon">
                        <span></span>
                    </div>

				</div>

			</header>
