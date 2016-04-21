<?php
/**
 *	The template for displaying Header.
 *
 *	@package ThemeIsle
 */
?>
<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link href="css/custom-editor-style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic,400italic,700italic|Oswald:300,400|Lobster' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel=”stylesheet” type=”text/css” href="style.css">
		<title><?php wp_title('|', true, 'right'); ?></title> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="cf">
			<div class="header-top">
				<div class="wrap cf">
				<div class="header-inner">
					<div class="header-top-contact">
						<span>
							<?php

							if ( get_theme_mod( 'empowermt_header_title',__('Contact Us Now: ','empowermt') ) ) {
    							echo get_theme_mod( 'empowermt_header_title',__('Contact Us Now: ','empowermt') );
    						}

							?>
						</span>
						<?php
    						if ( get_theme_mod( 'empowermt_header_subtitle',__('+0-123-456-789','empowermt') ) ) { ?>
                                <a href="tel: <?php echo get_theme_mod( 'empowermt_header_subtitle',__('+0-123-456-789','empowermt') ); ?>" title="<?php echo get_theme_mod( 'empowermt_header_subtitle',__('+0-123-456-789','empowermt') ); ?>"><?php echo get_theme_mod( 'empowermt_header_subtitle',__('+0-123-456-789','empowermt') ); ?></a>
    						<?php }
    					?>
					</div><!--/.header-top-contact-->
					<div class="header-top-socials">
					
						<?php  
						if ( get_theme_mod( 'empowermt_header_youtube','#' ) != '') { ?>
							<a href="<?php echo get_theme_mod( 'empowermt_header_youtube' ); ?>" title="YouTube" target="_blank">
								<i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
							</a>
						<?php }
						
							 
						?>

						<?php
						if ( get_theme_mod( 'empowermt_header_facebook',"#" ) != "" ) { ?>
							<a href="<?php echo get_theme_mod( 'empowermt_header_facebook' ); ?>" title="Facebook" target="_blank">
								<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
							</a>
						<?php }  
						if ( get_theme_mod( 'empowermt_header_instagram',"#" ) != '' ) { ?>
							<a href="<?php echo get_theme_mod( 'empowermt_header_instagram' ); ?>" title="Google+" target="_blank">
								<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
							</a>
						<?php } 
						if ( get_theme_mod( 'empowermt_header_twitter',"#" ) != false) { ?>
							<a href="<?php echo get_theme_mod( 'empowermt_header_twitter' ); ?>" title="Twitter" target="_blank">
								<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
							</a>
						<?php }  
						?>
						<span class="donate-button"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
						 DONATE</span>
						 <span class="donate-button"><i class="fa fa-paper-plane" aria-hidden="true"></i>
						 Request a Workshop</span>
 					</div>
					</div><!--/.header-top-socials-->
				</div><!--/.wrap ,cf-->
			</div><!--/.header-top-->
			<div class="header-shadow">
				<div class="wrap cf">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php wp_title('|', true, 'right'); ?>" class="logo">
						<?php
						if ( get_theme_mod( 'empowermt_header_logo' ) ) { ?>
							<img src="<?php echo get_theme_mod( 'empowermt_header_logo' ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php wp_title('|', true, 'right'); ?>" />
						<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php wp_title('|', true, 'right'); ?>" />
						<?php }
						?>
					</a><!--/.logo-->
					<div class="openresponsivemenu">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
							<path d="M0 12h22v4h-22v-4zM0 6h22v4h-22v-4zM0 18h22v4h-22v-4zM0 24h22v4h-22v-4zM24 18l4 6 4-6h-8zM32 16l-4-6-4 6h8z" fill="#000000" />
						</svg>
					</div><!--/.openresponsivemenu-->
					<nav>
						<?php
							wp_nav_menu(
								array(
									'theme_location'	=> 'top-menu',
								)
							);
						?>
					</nav><!--/nav-->
				</div><!--/.wrap .cf-->
			</div><!--/.header-shadow-->
		</header><!--/header-->